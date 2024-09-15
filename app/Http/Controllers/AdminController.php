<?php

namespace App\Http\Controllers;

use App\Models\DesignerCompany;
use App\Models\DesignerGallery;
use App\Models\Order;
use App\Models\OrderDesignsPending;
use App\Models\OrderPlacement;
use App\Services\OrderPendingService;
use App\Services\ProfileService;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function catalog()
    {
        return view('designer.catalog');
    }

    public function productionCatalog()
    {
        return view('printer.catalog');
    }

    public function profile()
    {
        $admin = session('admin');

        $designerCompany = DesignerCompany::where('admin_id', $admin->admin_ID)->first();
        $designerGallery = DesignerGallery::where('designer_id', $designerCompany->designer_ID)->get();
        return view('designer.profile', compact('admin', 'designerCompany', 'designerGallery'));
    }

    public function profilePost(Request $request)
    {
        $admin = session('admin');

        $request->validate([
            'name_hidden' => 'nullable',
            'contact_details_hidden' => 'nullable',
            'email_hidden' => 'nullable|email',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,svg',
            'about_hidden' => 'nullable',
            'contact_details' => 'nullable',
            'images' => 'array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $designerCompany = DesignerCompany::where('admin_id', $admin->admin_ID)->first();
        $this->profileService->updateProfile($request, $designerCompany);
        return redirect()->route('profile');
    }
}
