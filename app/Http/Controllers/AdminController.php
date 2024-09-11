<?php

namespace App\Http\Controllers;

use App\Models\DesignerCompany;
use App\Models\DesignerGallery;
use App\Models\Order;
use App\Models\OrderDesignsPending;
use App\Models\OrderPlacement;
use App\Services\OrderPendingService;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function catalog()
    {
        return view('designer.catalog');
    }

    public function profile()
    {
        $admin = session('admin');

        $designerCompany = DesignerCompany::where('admin_id', $admin->admin_ID)->first();
        $designerGallery = DesignerGallery::where('designer_id', $designerCompany->designer_ID)->get();
        return view('designer.profile', compact('admin', 'designerCompany', 'designerGallery'));
    }

    public function profilePost() {}
}
