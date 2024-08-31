<?php

namespace App\Http\Controllers;

use App\Services\RequestService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    protected $requestService;

    public function __construct(RequestService $requestService)
    {
        $this->requestService = $requestService;
    }

    public function requestCompanySelection(Request $request)
    {
        $designerCompanies = DB::table('designer_company')
            ->join('designer_company_apparel_category', 'designer_company.designer_ID', '=', 'designer_company_apparel_category.designer_ID')
            ->join('apparel_category', 'designer_company_apparel_category.apparel_category_ID', '=', 'apparel_category.apparel_category_ID')
            ->select('designer_company.*', 'apparel_category.name as category_name')
            ->get();

        $categories = DB::table('apparel_category')->pluck('name', 'apparel_category_ID');

        return view('request.request-company-selection', compact('designerCompanies', 'categories'));
    }

    public function requestCompanySelectionPost(Request $request)
    {
        $request->validate([
            'selected_company' => 'required',
            'selected_category' => 'required',
        ]);

        $selectedCategory = DB::table('apparel_category')
            ->where('name', $request->input('selected_category'))
            ->first();

        $selectedCompany = DB::table('designer_company')
            ->where('designer_ID', $request->input('selected_company'))
            ->first();

        Session::put('selected_category', $selectedCategory);
        Session::put('selected_company', $selectedCompany);

        return redirect()->route('request-apparel-customization');
    }



    public function requestApparelCustomization()
    {
        return view('request.request-apparel-customization');
    }

    public function requestApparelCustomizationPost(Request $request)
    {
        return redirect()->route('request-finalization');
    }

    public function requestFinalization()
    {
        $selectedCategory = Session::get('selected_category');
        $selectedCompany = Session::get('selected_company');

        $countryCodes = DB::table('country_codes')->get();

        return view('request.request-finalization', compact('selectedCategory', 'selectedCompany', 'countryCodes'));
    }

    public function requestFinalizationPost(Request $request)
    {
        $selectedCategory = Session::get('selected_category');
        $selectedCompany = Session::get('selected_company');

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);

        $this->requestService->createOrder($selectedCategory, $selectedCompany, $request->all());

        return redirect()->route('home');
    }
}
