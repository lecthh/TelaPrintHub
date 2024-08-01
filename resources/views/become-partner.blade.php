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
                    <input type="radio" id="designer" name="partner-type" class="hidden peer" value="Designer">
                    <div class="bg-kLightGray flex-1 p-3 gap-x-4 rounded-md text-kBlack border-2 border-kBlack text-center transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                        Designer
                    </div>
                </label>
                <label for="printer" class="cursor-pointer flex-1">
                    <input type="radio" id="printer" name="partner-type" class="hidden peer" value="Production">
                    <div class="bg-kLightGray flex-1 p-3 gap-x-4 rounded-md text-kBlack border-2 border-kBlack text-center transition hover:bg-kBlack hover:text-kWhite peer-checked:bg-kBlack peer-checked:text-kWhite">
                        Printer/Tailor
                    </div>
                </label>
            </div>
        </div>
        <div class="flex">
            <div class="flex flex-grow flex-col gap-y-3 w-1/2">
                <div class="flex flex-col gap-y-3">
                    <div class="flex flex-col">
                        <h1 class="text-lg font-medium">* Company name</h1>
                        <input type="text" id="company_name" name="company_name" class="text-normal text-kGray rounded-md focus:outline-none focus:ring-0 focus:border-kBlack" placeholder="VanJam">
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg font-medium">* Email address</h1>
                        <input type="email" id="email" name="email" class="rounded-md focus:outline-none focus:ring-0 focus:border-kBlack text-kGray" placeholder="VanJam">
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg font-medium">* Phone number</h1>
                        <div class="flex gap-x-2">
                            <select name="country_code" id="" class="rounded-md focus:outline-none focus:ring-0 focus:border-kBlack text-normal w-[200px]">
                                @foreach ($countryCodes as $country)
                                <option value="{{ $country->code }}" {{ $country->code == '+63' ? 'selected' : '' }}>
                                    {{ $country->flag_emoji }} {{ $country->name}} | {{ $country->code }}
                                </option>
                                @endforeach
                            </select>
                            <input type="number" id="phone_number" name="phone_number" class="rounded-md focus:outline-none focus:ring-0 focus:border-kBlack text-normal text-kGray" placeholder="123-456">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-grow pl-8 w-1/2">
                <div class="flex flex-col">
                    <!-- if designer selected -->
                    <div id="designer-options" class="flex flex-col gap-y-3">
                        <h1>* Select apparel</h1>
                        <div class="flex gap-x-3">
                            <div class="flex flex-col gap-y-3">
                                <label for="tshirt" class="cursor-pointer">
                                    <input type="checkbox" name="apparel" id="tshirt" class="hidden peer">
                                    <div class="flex gap-x-4 border-2 h-[50] border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                                        <h1 class="text-base">T-shirt</h1>
                                        <div class="w-6 h-6"><x-lineawesome-tshirt-solid /></div>
                                    </div>
                                </label>
                                <label for="hoodie" class="cursor-pointer">
                                    <input type="checkbox" name="apparel" id="hoodie" class="hidden peer">
                                    <div class="flex gap-x-4 items-center h-[50] border-2 border-kBlack rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                                        <h1 class="text-base">Hoodie</h1>
                                        <div class="w-6 h-6"><x-phosphor-hoodie /></div>
                                    </div>
                                </label>
                                <label for="poloshirt" class="cursor-pointer">
                                    <input type="checkbox" name="apparel" id="poloshirt" class="hidden peer">
                                    <div class="flex gap-x-4 border-2 h-[50] items-center border-kBlack rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                                        <h1 class="text-base">Polo shirt</h1>
                                        <div class="w-6 h-6"><x-ri-shirt-line /></div>
                                    </div>
                                </label>
                            </div>
                            <div class="flex flex-col gap-y-3">
                                <label for="shorts" class="cursor-pointer">
                                    <input type="checkbox" name="apparel" id="shorts" class="hidden peer">
                                    <div class="flex gap-x-4 border-2 h-[50] items-center border-kBlack rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                                        <h1 class="text-base">Shorts</h1>
                                        <div class="w-6 h-6"><x-hugeicons-shorts-pants /></div>
                                    </div>
                                </label>
                                <label for="sportswear" class="cursor-pointer">
                                    <input type="checkbox" name="apparel" id="sportswear" class="hidden peer">
                                    <div class="flex gap-x-4 border-2 h-[50] items-center justify-between border-kBlack rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite">
                                        <h1 class="text-base">Sportswear</h1>
                                        <div class="w-6 h-6"><x-tabler-shirt-sport /></div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="printer-options" class="flex flex-col gap-y-3">
                        <!-- if printer/tailor selected -->
                        <h1>* Production Style</h1>
                        <div class="flex gap-x-3">
                            <div class="flex flex-col gap-y-3">
                                <label for="heatpress" class="cursor-pointer">
                                    <input type="checkbox" name="prodStyle" id="heatpress" class="hidden peer">
                                    <div class="flex gap-x-4 border-2 h-[50] border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                                        <h1 class="text-base">Heat press</h1>
                                        <div class="w-6 h-6"><x-iconoir-heating-square /></div>
                                    </div>
                                </label>
                            </div>
                            <div class="flex flex-col gap-y-3">
                                <label for="embroidery" class="cursor-pointer">
                                    <input type="checkbox" name="prodStyle" id="embroidery" class="hidden peer">
                                    <div class="flex gap-x-4 border-2 border-kBlack h-[50] items-center justify-between rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite">
                                        <h1 class="text-base">Embroidery</h1>
                                        <div class="w-6 h-6"><x-radix-sewing-pin /></div>
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
                <div class="w-6 h-6"><x-bx-file /></div>
                <h4 class="text-base font-semibold">Business permit</h4>
                <input type="file" id="business-permit" name="business_permit" class="hidden">
            </label>
            <label class="border-2 border-kBlack rounded-md p-3 flex gap-x-2 cursor-pointer">
                <div class="w-6 h-6"><x-tabler-id /></div>
                <h4 class="text-base font-semibold">* Business owner identification card</h4>
                <input type="file" id="owner-id" name="owner_id" class="hidden">
            </label>
        </div>
        <label for="tAndc" class="flex gap-x-3 cursor-pointer">
            <input type="checkbox" id="tAndc" class="accent-kBlack ring-kBlack focus:ring-kBlack focus:accent-kBlack" required>
            I agrewo the Terms and Conditions
        </label>
        <button type="submit" class="p-2 bg-kBlack text-kWhite rounded-md">Submit</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const designerRadio = document.getElementById('designer');
        const printerRadio = document.getElementById('printer');
        const designerOptions = document.getElementById('designer-options');
        const printerOptions = document.getElementById('printer-options');

        //  both options hidden initially
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