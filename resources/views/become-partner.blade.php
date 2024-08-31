@extends('layout.layout')

@section('content')
<div class="bg-kWhite flex flex-col gap-y-6 px-8 py-10 font-dm-sans">
    <div class="flex gap-x-3 items-center">
        <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Business sign up</h1>
        <p class="text-kBlack text-base max-w-[1400]">We’re excited to expand our network of printing partners and collaborate with top-quality businesses like yours. By joining our network, you’ll gain access to a diverse range of print requests and opportunities to grow your business. Follow the simple steps below to get started!</p>
    </div>
    <form method="POST" action="{{ route('become-a-partner.post') }}" class="flex flex-col gap-y-6">
        @csrf
        <div class="bg-kLightGray p-3 flex flex-col rounded-md items-center gap-y-4">
            <h1 class="font-semibold text-lg">I am a...</h1>
            <div class="flex gap-x-4 w-full">
                <label for="designer" class="cursor-pointer flex-1">
                    <input type="radio" id="designer" name="partner-type" class="hidden peer" value="Designer" {{ old('partner-type') == 'Designer' ? 'checked' : '' }}>
                    <div class="bg-kLightGray flex-1 p-3 gap-x-4 rounded-md text-kBlack border-2 border-kBlack text-center transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                        Designer
                    </div>
                </label>
                <label for="printer" class="cursor-pointer flex-1">
                    <input type="radio" id="printer" name="partner-type" class="hidden peer" value="Production" {{ old('partner-type') == 'Production' ? 'checked' : '' }}>
                    <div class="bg-kLightGray flex-1 p-3 gap-x-4 rounded-md text-kBlack border-2 border-kBlack text-center transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                        Printer/Tailor
                    </div>
                </label>
            </div>
            @error('partner-type')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex gap-x-3">
            <div class="flex flex-grow flex-col gap-y-3 w-1/2">
                <div class="flex flex-col gap-y-3">
                    <div class="flex flex-col">
                        <h1 class="text-lg font-medium">* Company name</h1>
                        <input type="text" id="company_name" name="company_name" class="text-normal text-kGray focus:outline-none" placeholder="VanJam" value="{{ old('company_name') }}">
                        @error('company_name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg font-medium">* Email address</h1>
                        <input type="email" id="email" name="email" class="focus:outline-none text-normal text-kGray" placeholder="example@example.com" value="{{ old('email') }}">
                        @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg font-medium">* Phone number</h1>
                        <div class="flex gap-x-2">
                            <select name="country_code" id="" class="focus:outline-none text-normal w-[170px]">
                                @foreach ($countryCodes as $country)
                                <option value="{{ $country->code }}" {{ old('country_code') == $country->code ? 'selected' : '' }}>
                                    {{ $country->flag_emoji }} {{ $country->name }} | {{ $country->code }}
                                </option>
                                @endforeach
                            </select>
                            <input type="text" id="phone_number" name="phone_number" class="focus:outline-none text-normal text-kGray" placeholder="123-456" value="{{ old('phone_number') }}">
                        </div>
                        @error('phone_number')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="flex flex-grow w-1/2">
                <div class="flex flex-col">
                    <!-- if designer selected -->
                    <div id="designer-options" class="flex flex-col gap-y-3">
                        <h1>* Select apparel</h1>
                        <div class="flex gap-x-3">
                            <div class="flex flex-col gap-y-3">
                                <label for="tshirt" class="cursor-pointer">
                                    <input type="checkbox" name="apparel_categories[]" id="tshirt" value="1" class="hidden peer" {{ is_array(old('apparel_categories')) && in_array(1, old('apparel_categories')) ? 'checked' : '' }}>
                                    <div class="flex gap-x-4 border-2 h-[50] rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                                        <h1 class="text-base">T-shirt</h1>
                                    </div>
                                </label>
                                <label for="hoodie" class="cursor-pointer">
                                    <input type="checkbox" name="apparel_categories[]" id="hoodie" value="2" class="hidden peer" {{ is_array(old('apparel_categories')) && in_array(2, old('apparel_categories')) ? 'checked' : '' }}>
                                    <div class="flex gap-x-4 items-center h-[50] border-2 rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                                        <h1 class="text-base">Hoodie</h1>
                                    </div>
                                </label>
                                <label for="poloshirt" class="cursor-pointer">
                                    <input type="checkbox" name="apparel_categories[]" id="poloshirt" value="3" class="hidden peer" {{ is_array(old('apparel_categories')) && in_array(3, old('apparel_categories')) ? 'checked' : '' }}>
                                    <div class="flex gap-x-4 border-2 h-[50] items-center rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                                        <h1 class="text-base">Polo shirt</h1>
                                    </div>
                                </label>
                            </div>
                            <div class="flex flex-col gap-y-3">
                                <label for="shorts" class="cursor-pointer">
                                    <input type="checkbox" name="apparel_categories[]" id="shorts" value="4" class="hidden peer" {{ is_array(old('apparel_categories')) && in_array(4, old('apparel_categories')) ? 'checked' : '' }}>
                                    <div class="flex gap-x-4 border-2 h-[50] items-center rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                                        <h1 class="text-base">Shorts</h1>
                                    </div>
                                </label>
                                <label for="sportswear" class="cursor-pointer">
                                    <input type="checkbox" name="apparel_categories[]" id="sportswear" value="5" class="hidden peer" {{ is_array(old('apparel_categories')) && in_array(5, old('apparel_categories')) ? 'checked' : '' }}>
                                    <div class="flex gap-x-4 border-2 h-[50] items-center justify-between rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite">
                                        <h1 class="text-base">Sportswear</h1>
                                    </div>
                                </label>
                            </div>
                        </div>
                        @error('apparel_categories')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div id="printer-options" class="flex flex-col gap-y-3">
                        <!-- if printer/tailor selected -->
                        <h1>* Production Style</h1>
                        <div class="flex gap-x-3">
                            <div class="flex flex-col gap-y-3">
                                <label for="heatpress" class="cursor-pointer">
                                    <input type="checkbox" name="prodStyle" id="heatpress" class="hidden peer">
                                    <div class="flex gap-x-4 border-2 h-[50] rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                                        <h1 class="text-base">Heat press</h1>
                                    </div>
                                </label>
                            </div>
                            <div class="flex flex-col gap-y-3">
                                <label for="embroidery" class="cursor-pointer">
                                    <input type="checkbox" name="prodStyle" id="embroidery" class="hidden peer">
                                    <div class="flex gap-x-4 border-2 h-[50] items-center justify-between rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite">
                                        <h1 class="text-base">Embroidery</h1>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-kLightGray p-3 flex flex-col gap-y-3 rounded-md">
            <h1 class="text-lg font-semibold">Please upload the necessary documents</h1>
            <label class="border-2 border-kBlack rounded-md p-3 flex gap-x-2 cursor-pointer">
                <h4 class="text-base font-semibold">Business permit</h4>
                <input type="file" id="business-permit" name="business_permit" class="hidden">
            </label>
            @error('business_permit')
            <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
            <label class="border-2 border-kBlack rounded-md p-3 flex gap-x-2 cursor-pointer">
                <h4 class="text-base font-semibold">* Business owner identification card</h4>
                <input type="file" id="owner-id" name="owner_id" class="hidden">
            </label>
            @error('owner_id')
            <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <label for="tAndc" class="flex gap-x-3">
            <input type="radio" class="ring-kBlack" name="tAndc" id="tAndc" {{ old('tAndc') ? 'checked' : '' }}>
            I agree to the Terms and Conditions
        </label>
        @error('tAndc')
        <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror
        <button type="submit" class="p-2 bg-kBlack text-kWhite rounded-md">Submit</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const designerRadio = document.getElementById('designer');
        const printerRadio = document.getElementById('printer');
        const designerOptions = document.getElementById('designer-options');
        const printerOptions = document.getElementById('printer-options');

        //  both options are hidden initially
        designerOptions.style.display = 'none';
        printerOptions.style.display = 'none';

        designerRadio.addEventListener('change', function() {
            if (designerRadio.checked) {
                designerOptions.style.display = 'block';
                printerOptions.style.display = 'none';
            }
        });

        printerRadio.addEventListener('change', function() {
            if (printerRadio.checked) {
                printerOptions.style.display = 'block';
                designerOptions.style.display = 'none';
            }
        });
    });
</script>


@endsection