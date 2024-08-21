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
        $selectedCategory = $request->input('apparel');
        $designerCompanies = collect();

        if ($selectedCategory) {
            $designerCompanies = DB::table('designer_company')
                ->join('designer_company_apparel_category', 'designer_company.designer_ID', '=', 'designer_company_apparel_category.designer_ID')
                ->join('apparel_category', 'designer_company_apparel_category.apparel_category_ID', '=', 'apparel_category.apparel_category_ID')
                ->where('apparel_category.name', $selectedCategory)
                ->select('designer_company.*')
                ->distinct()
                ->get();
        }

        $categories = DB::table('apparel_category')->pluck('name', 'apparel_category_ID');
        return view('request.request-company-selection', compact('designerCompanies', 'categories', 'selectedCategory'));
    }

    public function requestApparelCustomization(Request $request)
    {
        $selectedCategory = $request->input('selected_category');
        $selectedCompany = $request->input('selected_company');


        Session::put('selected_category', $selectedCategory);
        Session::put('selected_company', $selectedCompany);

        return view('request.request-apparel-customization');
    }

    public function requestFinalization()
    {
        $selectedCategory = Session::get('selected_category');
        $selectedCompany = Session::get('selected_company');

        if ($selectedCompany) {
            $selectedCompany = DB::table('designer_company')->where('designer_ID', $selectedCompany)->first();
        }
        $countryCodes = DB::table('country_codes')->get();

        return view('request.request-finalization', compact('selectedCategory', 'selectedCompany', 'countryCodes'));
    }

    public function requestFinalizationPost(Request $request)
    {
        $selectedCategory = Session::get('selected_category');
        $selectedCompanyId = Session::get('selected_company');

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);

        $selectedCompany = null;
        if ($selectedCompanyId) {
            $selectedCompany = DB::table('designer_company')->where('designer_ID', $selectedCompanyId)->first();
        }

        $this->requestService->createOrder($selectedCategory, $selectedCompany, $request->all());

        return redirect()->route('home');
    }
}
