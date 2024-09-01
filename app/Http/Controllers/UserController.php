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

            $apparelCategory = DB::table('apparel_category')->where('name', $selectedCategory)->first();
        }

        $categories = DB::table('apparel_category')->pluck('name', 'apparel_category_ID');
        return view('request.request-company-selection', compact('designerCompanies', 'categories', 'selectedCategory'));
    }

    public function requestCompanySelectionPost(Request $request)
    {
        $request->validate([
            'selected_company' => 'required',
            'selected_category' => 'required',
        ], [
            'selected_company.required' => 'You need to select a company before proceeding.',
            'selected_category.required' => 'You need to select a category before proceeding.',
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
        ], [
            'first_name.required' => 'You need to provide your first name.',
            'last_name.required' => 'You need to provide your last name.',
            'email.required' => 'You need to provide your email address.',
            'email.email' => 'You need to provide a valid email address.',
            'phone_number.required' => 'You need to provide your phone number.',
        ]);

        $this->requestService->createOrder($selectedCategory, $selectedCompany, $request->all());

        return redirect()->route('home');
    }
}
