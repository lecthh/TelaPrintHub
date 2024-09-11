<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\DesignerGallery;

class ProfileService
{
    public function updateProfile($request, $designerCompany)
    {
        $designerCompany->name = $request->name_hidden;
        $designerCompany->description = $request->about_hidden;
        $designerCompany->contact_details = $request->contact_details;
        $designerCompany->email = $request->email_hidden;
        $currentDate = now()->format('Y-m-d');

        $admin = Admin::where('admin_ID', $designerCompany->admin_ID)->first();
        if ($admin) {
            $admin->name = $request->name_hidden;
            $admin->email = $request->email_hidden;
            $admin->contact_information = $request->contact_details_hidden;
            $admin->save();
        }

        if ($request->hasFile('profile_pic')) {
            $logo = $request->file('profile_pic');
            $logoName = $currentDate . '-' . $designerCompany->name . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('logo'), $logoName);
            $designerCompany->logo = 'logo/' . $logoName;
        }

        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                if ($image->isValid()) {
                    $newImageName = $currentDate . '-' . $designerCompany->name . '.' . $image->getClientOriginalExtension();
                    $relativeImagePath = 'DesignerGallery/' . $newImageName;
                    $image->move(public_path('DesignerGallery'), $newImageName);

                    DesignerGallery::create([
                        'designer_ID' => $designerCompany->designer_ID,
                        'file_path' => $relativeImagePath,
                    ]);
                }
            }
        }
        $designerCompany->save();
    }
}
