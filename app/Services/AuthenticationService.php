<?php

namespace App\Services;

use App\Models\Admin;
use App\Services\MailService;
use App\Models\DesignerCompany;
use App\Models\DesignerCompanyApparelCategory;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Str;

class AuthenTicationService
{
    protected $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function registerDesignerCompany(array $data)
    {

        $fullPhoneNumber = $data['country_code'] . ' ' . $data['phone_number'];

        $admin = Admin::create([
            'admin_ID' => (string) Uuid::generate(4),
            'admin_type_ID' => 2,
            'name' => $data['company_name'],
            'email' => $data['email'],
            'password' => null,
            'contact_information' => $fullPhoneNumber,
        ]);

        $designerId = (string) Uuid::generate(4);
        DesignerCompany::create([
            'designer_ID' => $designerId,
            'admin_ID' => $admin->admin_ID,
            'name' => $data['company_name'],
            'logo' => $data['logo'] ?? null,
            'contact_details' => $fullPhoneNumber,
            'email' => $admin->email,
            'is_verified' => false,
        ]);

        if (!empty($data['apparel_categories'])) {
            foreach ($data['apparel_categories'] as $categoryId) {
                DesignerCompanyApparelCategory::create([
                    'designer_ID' => $designerId,
                    'apparel_category_ID' => $categoryId,
                ])->save();
            }
        }

        $this->mailService->sendVerificationEmail($admin);
    }

    public function registerPrinterCompany(array $data)
    {
        $fullPhoneNumber = $data['country_code'] . ' ' . $data['phone_number'];

        Admin::create([
            'admin_ID' => (string) Uuid::generate(4),
            'admin_type_ID' => 1,
            'name' => $data['company_name'],
            'email' => $data['email'],
            'password' => null,
            'contact_information' => $fullPhoneNumber,
        ]);
    }

    protected function sendVerificationEmail(Admin $admin)
    {
        $token = Str::random(60);

        $url = URL::temporarySignedRoute(
            'setpassword',
            now()->addMinutes(60),
            ['token' => $token, 'email' => $admin->email]
        );

        Mail::send('mail.verify', ['url' => $url], function ($message) use ($admin) {
            $message->to($admin->email);
            $message->subject('Set Your Password');
        });
    }
}
