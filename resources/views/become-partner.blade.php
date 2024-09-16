@extends('layout.layout')

@section('content')
<div class="flex gap-x-6 justify-center">
    <div class="w-[1100px]">
        <div class="flex flex-col px-6 py-6 gap-y-6">
            <h1 class="text-xl font-bold">partner application</h1>
            <p class="text-base">We’re excited to expand our network of printing partners and collaborate with top-quality businesses like yours. By joining our network, you’ll gain access to a diverse range of print requests and opportunities to grow your business. Follow the simple steps below to get started!</p>

            <form method="POST" action="{{ route('become-a-partner.post') }}" class="lowercase flex flex-col gap-y-7">
                @csrf
                <div class="flex flex-col gap-y-3">
                    <h1 class="text-lg font-bold">i am a...</h1>
                    <div class="flex">
                        <label for="designer" class="cursor-pointer">
                            <input type="radio" name="partner-type" id="designer" class="hidden peer" value="Designer" {{ old('partner-type') == 'Designer' ? 'checked' : '' }}>
                            <div class="p-[10px] border rounded-l-md border-kBlack transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                                designer
                            </div>
                        </label>
                        <label for="printer" class="cursor-pointer">
                            <input type="radio" name="partner-type" id="printer" class="hidden peer" value="Production" {{ old('partner-type') == 'Production' ? 'checked' : '' }}>
                            <div class="p-[10px] border-t border-b border-r rounded-r-md border-kBlack transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                                printer/tailor
                            </div>
                        </label>
                    </div>
                    @error('partner-type')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- for designer -->
                <div id="designerSection" class="flex flex-col gap-y-3">
                    <h1 class="text-lg font-bold">select apparel</h1>
                    <div class="flex">
                        <label for="tshirt" class="cursor-pointer">
                            <input type="checkbox" name="apparel_categories[]" id="tshirt" class="hidden peer" value="1" {{ is_array(old('apparel_categories')) && in_array(1, old('apparel_categories')) ? 'checked' : '' }} onchange="togglePriceInput('tshirt')">
                            <div class="p-[10px] border rounded-l-md border-kBlack transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                                T-shirt
                            </div>
                            <div id="tshirt-price" class="hidden mt-2">
                                <label for="tshirt-price-input" class="block text-sm font-medium text-gray-700">Set base price for T-shirt</label>
                                <input type="number" name="tshirt_price" id="tshirt-price-input" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </label>
                        <label for="hoodie" class="cursor-pointer">
                            <input type="checkbox" name="apparel_categories[]" id="hoodie" class="hidden peer" value="2" {{ is_array(old('apparel_categories')) && in_array(2, old('apparel_categories')) ? 'checked' : '' }} onchange="togglePriceInput('hoodie')">
                            <div class="p-[10px] border-t border-b border-r border-kBlack transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                                Hoodie
                            </div>
                            <div id="hoodie-price" class="hidden mt-2">
                                <label for="hoodie-price-input" class="block text-sm font-medium text-gray-700">Set base price for Hoodie</label>
                                <input type="number" name="hoodie_price" id="hoodie-price-input" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </label>
                        <label for="poloshirt" class="cursor-pointer">
                            <input type="checkbox" name="apparel_categories[]" id="poloshirt" class="hidden peer" value="3" {{ is_array(old('apparel_categories')) && in_array(3, old('apparel_categories')) ? 'checked' : '' }} onchange="togglePriceInput('poloshirt')">
                            <div class="p-[10px] border-t border-b border-r border-kBlack transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                                Polo shirt
                            </div>
                            <div id="poloshirt-price" class="hidden mt-2">
                                <label for="poloshirt-price-input" class="block text-sm font-medium text-gray-700">Set base price for Polo shirt</label>
                                <input type="number" name="poloshirt_price" id="poloshirt-price-input" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </label>
                        <label for="shorts" class="cursor-pointer">
                            <input type="checkbox" name="apparel_categories[]" id="shorts" class="hidden peer" value="4" {{ is_array(old('apparel_categories')) && in_array(4, old('apparel_categories')) ? 'checked' : '' }} onchange="togglePriceInput('shorts')">
                            <div class="p-[10px] border-t border-b border-r border-kBlack transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                                Shorts
                            </div>
                            <div id="shorts-price" class="hidden mt-2">
                                <label for="shorts-price-input" class="block text-sm font-medium text-gray-700">Set base price for Shorts</label>
                                <input type="number" name="shorts_price" id="shorts-price-input" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </label>
                        <label for="sportswear" class="cursor-pointer">
                            <input type="checkbox" name="apparel_categories[]" id="sportswear" class="hidden peer" value="5" {{ is_array(old('apparel_categories')) && in_array(5, old('apparel_categories')) ? 'checked' : '' }} onchange="togglePriceInput('sportswear')">
                            <div class="p-[10px] border-t border-b border-r rounded-r-md border-kBlack transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                                Sportswear
                            </div>
                            <div id="sportswear-price" class="hidden mt-2">
                                <label for="sportswear-price-input" class="block text-sm font-medium text-gray-700">Set base price for Sportswear</label>
                                <input type="number" name="sportswear_price" id="sportswear-price-input" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </label>
                    </div>
                </div>

                <!-- for production -->
                <div id="productionSection" class="flex flex-col gap-y-3">
                    <h1 class="text-lg font-bold">production style</h1>
                    <div class="flex">
                        <label for="heatpress" class="cursor-pointer">
                            <input type="checkbox" name="prodStyle" id="heatpress" class="hidden peer" value="">
                            <div class="p-[10px] border rounded-l-md border-kBlack transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                                heat press
                            </div>
                        </label>
                        <label for="embroidery" class="cursor-pointer">
                            <input type="checkbox" name="prodStyle" id="embroidery" class="hidden peer" value="">
                            <div class="p-[10px] border-t border-b border-r rounded-r-md border-kBlack transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                                embroidery
                            </div>
                        </label>

                    </div>
                </div>

                <div class="flex flex-col gap-y-3 mt-3">
                    <div class="flex flex-col gap-y-3">
                        <h1 class="text-lg font-bold">company name *</h1>
                        <input type="text" name="company_name" id="company_name" placeholder="The Company" class="normal-case" value="{{ old('company_name') }}">
                        @error('company_name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-y-3">
                        <h1 class="text-lg font-bold">business email *</h1>
                        <input type="email" name="email" id="email" placeholder="company@gmail.com" class="lowercase" value="{{ old('email') }}">
                        @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-y-3">
                        <h1 class="text-lg font-bold">phone number *</h1>
                        <div class="flex gap-x-2">
                            <select name="country_code" id="" class="w-[250px]">
                                @foreach ($countryCodes as $country)
                                <option value="{{ $country->code }}" {{ old('country_code') == $country->code ? 'selected' : '' }}>
                                    {{ $country->flag_emoji }} {{ $country->name }} | {{ $country->code }}
                                </option>
                                @endforeach
                            </select>
                            <input type="text" id="phone_number" name="phone_number" placeholder="123-456" class="flex-grow" value="{{ old('phone_number') }}">
                        </div>
                        @error('phone_number')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="inline-block">
                    <button id="submitButton" class="bg-kBlack text-kWhite p-3" type="button">confirm</button>
                </div>

            </form>
        </div>
    </div>
    <div class="w-auto flex justify-center items-center px-6">
        <img src="/img/partner-1.png" alt="">
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const designerSection = document.getElementById('designerSection');
        const productionSection = document.getElementById('productionSection');
        const designerRadio = document.getElementById('designer');
        const printerRadio = document.getElementById('printer');

        designerSection.style.display = 'none';
        productionSection.style.display = 'none';

        designerRadio.addEventListener('change', function() {
            if (designerRadio.checked) {
                designerSection.style.display = 'block';
                productionSection.style.display = 'none';
                clearSelections(productionSection);
            }
        })

        printerRadio.addEventListener('change', function() {
            if (printerRadio.checked) {
                designerSection.style.display = 'none';
                productionSection.style.display = 'block';
                clearSelections(designerSection);
            }
        })

        function clearSelections(section) {
            const checkboxes = section.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => checkbox.checked = false);
        }
    });
</script>

<script>
    function togglePriceInput(id) {
        const checkbox = document.getElementById(id);
        const priceInputDiv = document.getElementById(`${id}-price`);
        
        if (checkbox.checked) {
            priceInputDiv.classList.remove('hidden');
        } else {
            priceInputDiv.classList.add('hidden');
        }
    }
</script>

<script>
    document.getElementById('submitButton').addEventListener('click', function() {
        const checkedApparel = document.querySelectorAll('input[name="apparel_categories[]"]:checked');
        let isValid = true;

        checkedApparel.forEach(apparel => {
            const priceInputDiv = document.getElementById(`${apparel.id}-price`);
            const priceInput = priceInputDiv.querySelector('input[type="number"]');
            
            if (!priceInput.value) {
                isValid = false;
                priceInput.classList.add('border-red-500');
                alert(`Please set a base price for ${apparel.nextElementSibling.innerText}.`);
            } else {
                priceInput.classList.remove('border-red-500');
            }
        });

        if (isValid) {
            document.querySelector('form').submit();
        }
    });
</script>

@endsection