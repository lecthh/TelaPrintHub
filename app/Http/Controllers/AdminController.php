<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDesignsPending;
use App\Models\OrderPlacement;
use App\Services\OrderPendingService;
use Illuminate\Http\Request;


class AdminController extends Controller
{



    public function catalog()
    {
        $admin = session('admin');
        return view('designer.catalog', compact('admin'));
    }
}
