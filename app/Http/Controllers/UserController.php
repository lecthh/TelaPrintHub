<?php

namespace App\Http\Controllers;

use App\Models\ApparelCategory;
use App\Models\DesignerCompany;
use App\Models\Cart;
use Illuminate\Support\Facades\Log;
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
            $apparelCategory = ApparelCategory::where('name', $selectedCategory)->first();

            if ($apparelCategory) {
                $designerCompanies = DesignerCompany::with('gallery')
                    ->whereHas('apparelCategories', function ($query) use ($apparelCategory) {
                        $query->where('designer_company_apparel_category.apparel_category_ID', $apparelCategory->apparel_category_ID);
                    })->get();
            }
        }
        $categories = ApparelCategory::pluck('name', 'apparel_category_ID');

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

        // Construct the price column name dynamically
        $categoryName = strtolower($selectedCategory->name);
        $priceColumn = $categoryName . '_price';

        // Handle special cases
        if ($categoryName === 't-shirt') {
            $priceColumn = 'tshirt_price';
        } elseif ($categoryName === 'polo shirt') {
            $priceColumn = 'poloshirt_price';
        }

        // Retrieve the price dynamically
        $price = $selectedCompany->$priceColumn;     

        // Log the selected category, selected company, and price
        Log::info('Selected Category:', ['category' => $selectedCategory]);
        Log::info('Selected Company:', ['company' => $selectedCompany]);
        Log::info('Price:', ['price' => $price]);

        Session::put('selected_category', $selectedCategory);
        Session::put('selected_company', $selectedCompany);
        Session::put('price', $price);

        return redirect()->route('request-apparel-customization');
    }



    public function requestApparelCustomization()
    {
        return view('request.request-apparel-customization');
    }

    public function requestApparelCustomizationPost(Request $request)
    {
        $request->validate([
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg',
            'description' => 'nullable|string',
        ]);

        $uploadedImages = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('temp'), $imageName);

                $imagePath = 'temp/' . $imageName;
                $uploadedImages[] = $imagePath;
            }

            $request->session()->put('uploaded_images', $uploadedImages);
        }

        $description = $request->input('description');
        $request->session()->put('description', $description);

        return redirect()->route('request-finalization');
    }



    public function requestFinalization()
    {
        $selectedCategory = Session::get('selected_category');
        $selectedCompany = Session::get('selected_company');
        $countryCodes = DB::table('country_codes')->get();
        $preferredCommunicationsType = DB::table('preferred_communication_type')->get();

        $uploadedImages = Session::get('uploaded_images', []);

        return view('request.request-finalization', compact('selectedCategory', 'selectedCompany', 'countryCodes', 'uploadedImages', 'preferredCommunicationsType'));
    }

    public function requestFinalizationPost(Request $request)
    {
        $selectedCategory = Session::get('selected_category');
        $selectedCompany = Session::get('selected_company');
        $description = Session::get('description');
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'uploadedImages' => 'required',
            'contact-method' => 'required',
        ], [
            'first_name.required' => 'You need to provide your first name.',
            'last_name.required' => 'You need to provide your last name.',
            'email.required' => 'You need to provide your email address.',
            'email.email' => 'You need to provide a valid email address.',
            'phone_number.required' => 'You need to provide your phone number.',
            'uploadedImages.required' => 'You need to upload at least one image.',
            'contact-method.required' => 'You need to select at least one preferred mode of Communication.',
        ]);
        $uploadedImages = json_decode($request->input('uploadedImages'), true);
        $newImagePaths = [];
    
        if ($uploadedImages) {
            foreach ($uploadedImages as $tempImagePath) {
                if (file_exists(public_path($tempImagePath))) {
                    $currentDate = date('Y-m-d');
                    $firstName = $request->input('first_name');
                    $lastName = $request->input('last_name');
                    $imageExtension = pathinfo($tempImagePath, PATHINFO_EXTENSION);
    
                    $sanitizedFirstName = preg_replace('/[^a-zA-Z0-9]/', '-', $firstName);
                    $sanitizedLastName = preg_replace('/[^a-zA-Z0-9]/', '-', $lastName);
    
                    $newImageName = $currentDate . '-' . $sanitizedFirstName . '-' . $sanitizedLastName . '-' . uniqid() . '.' . $imageExtension;
                    $newImagePath = public_path('orderdesigns') . '/' . $newImageName;
    
                    if (!file_exists(public_path('orderdesigns'))) {
                        mkdir(public_path('orderdesigns'), 0777, true);
                    }
    
                    rename(public_path($tempImagePath), $newImagePath);
    
                    $newImagePaths[] = 'orderdesigns/' . $newImageName;
    
                    if (file_exists(public_path($tempImagePath))) {
                        unlink(public_path($tempImagePath));
                    }
                }
            }
        }
    
        $this->requestService->createOrder($selectedCategory, $selectedCompany, $request->all(), $newImagePaths, $description);
    
        return redirect()->route('home');
    }
    
    public function saveToCart(Request $request)
    {
        // Ensure that the session data is in the correct format
        $uploadedImages = session('uploaded_images');
        $selectedCompany = session('selected_company');
        $selectedCategory = session('selected_category');
        $description = session('description');
        $price = session('price');
    
        // Extract relevant fields from the stdClass objects
        $selectedCompanyName = $selectedCompany ? $selectedCompany->name : null;
        $selectedCategoryName = $selectedCategory ? $selectedCategory->name : null;
    
        // Ensure that the request data is in the correct format
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $email = $request->input('email');
        $phoneNumber = $request->input('phone_number');
        $countryCode = $request->input('country_code');
        $orderType = $request->input('order_type');
        $estimatedQuantity = $request->input('estimated_quantity');
    
        // Retrieve the uploaded image from the session if available
        $uploadedImage = $uploadedImages ? $uploadedImages[0] : null; // Assuming the first image is the one to be saved
    
        // Create a new Cart instance
        $cart = new Cart();
        $cart->uploaded_image = $uploadedImage;
        $cart->selected_company = $selectedCompanyName;
        $cart->selected_category = $selectedCategoryName;
        $cart->first_name = $firstName;
        $cart->last_name = $lastName;
        $cart->email = $email;
        $cart->phone_number = $phoneNumber;
        $cart->country_code = $countryCode;
        $cart->description = $description;
        $cart->order_type = $orderType;
        $cart->price = $price;
    
        if ($orderType === 'bulk') {
            $cart->estimated_quantity = $estimatedQuantity;
        }
        else{
            $cart->estimated_quantity = 1;
        }

        $cart->total_price = $cart->price * $cart->estimated_quantity;
    
        Log::info('Order type: ' . $orderType);

        // Log the Cart data before saving
        Log::info('Cart data being inserted:', [
            'uploaded_image' => $cart->uploaded_image,
            'selected_company' => $cart->selected_company,
            'selected_category' => $cart->selected_category,
            'first_name' => $cart->first_name,
            'last_name' => $cart->last_name,
            'email' => $cart->email,
            'phone_number' => $cart->phone_number,
            'country_code' => $cart->country_code,
            'description' => $cart->description,
            'order_type' => $cart->order_type,
            'price' => $cart->price,
            'estimated_quantity' => $orderType === 'bulk' ? $cart->estimated_quantity : null,
            'total_price' => $cart->total_price,
        ]);
    
        // Save the Cart
        $cart->save();
    
        // Flash the session message
        Session::flash('cart-saved', 'Draft saved to cart.');
    
        return response()->json(['success' => true]);
    
        return redirect()->route('home');
    }

    public function viewCart()
    {
        $cartItems = Cart::all();
        return view('cart.index', compact('cartItems'));
    }
}
