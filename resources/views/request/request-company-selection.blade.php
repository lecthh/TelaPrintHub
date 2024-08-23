@extends('layout.layout')

@section('content')
<div class="bg-kWhite px-8 py-10">
    <form method="GET" action="{{ route('request-company-selection') }}" class="flex flex-col gap-y-10">
        <div class="flex flex-col gap-y-3">
            <div class="flex gap-x-3 items-center">
                <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Select your apparel</h1>
                <p class="text-kBlack text-base max-w-[1400px]">Choose the type of apparel you want to customize. We offer a range of options to suit your needs.</p>
            </div>
            <div class="flex gap-x-3">
                <label for="tshirt" class="cursor-pointer">
                    <input type="radio" name="apparel" id="tshirt" value="T-shirt" class="hidden peer" {{ request('apparel') === 'T-shirt' ? 'checked' : '' }} onchange="this.form.submit(); document.getElementById('selected_category').value = 'T-shirt';">
                    <div class="flex gap-x-4 border-2 border-kBlack h-[65px] hover:bg-kBlack hover:text-kWhite rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">T-shirt</h1>
                        <div class="w-6 h-6"><x-lineawesome-tshirt-solid /></div>
                    </div>
                </label>
                <label for="hoodie" class="cursor-pointer">
                    <input type="radio" name="apparel" id="hoodie" value="Hoodie" class="hidden peer" {{ request('apparel') === 'Hoodie' ? 'checked' : '' }} onchange="this.form.submit(); document.getElementById('selected_category').value = 'Hoodie';">
                    <div class="flex gap-x-4 items-center h-[65px] border-2 hover:bg-kBlack hover:text-kWhite border-kBlack rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Hoodie</h1>
                        <div class="w-6 h-6"><x-phosphor-hoodie /></div>
                    </div>
                </label>
                <label for="poloshirt" class="cursor-pointer">
                    <input type="radio" name="apparel" id="poloshirt" value="Polo shirt" class="hidden peer" {{ request('apparel') === 'Polo shirt' ? 'checked' : '' }} onchange="this.form.submit(); document.getElementById('selected_category').value = 'Polo shirt';">
                    <div class="flex gap-x-4 border-2 border-kBlack hover:bg-kBlack hover:text-kWhite h-[65px] items-center rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Polo shirt</h1>
                        <div class="w-6 h-6"><x-ri-shirt-line /></div>
                    </div>
                </label>
                <label for="shorts" class="cursor-pointer">
                    <input type="radio" name="apparel" id="shorts" value="Shorts" class="hidden peer" {{ request('apparel') === 'Shorts' ? 'checked' : '' }} onchange="this.form.submit(); document.getElementById('selected_category').value = 'Shorts';">
                    <div class="flex gap-x-4 border-2 h-[65px] hover:bg-kBlack hover:text-kWhite border-kBlack items-center rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Shorts</h1>
                        <div class="w-6 h-6"><x-hugeicons-shorts-pants /></div>
                    </div>
                </label>
                <label for="sportswear" class="cursor-pointer">
                    <input type="radio" name="apparel" id="sportswear" value="Sportswear" class="hidden peer" {{ request('apparel') === 'Sportswear' ? 'checked' : '' }} onchange="this.form.submit(); document.getElementById('selected_category').value = 'Sportswear';">
                    <div class="flex gap-x-4 border-2 border-kBlack h-[65px] hover:bg-kBlack hover:text-kWhite items-center justify-between rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite">
                        <h1 class="text-base">Sportswear</h1>
                        <div class="w-6 h-6"><x-tabler-shirt-sport /></div>
                    </div>
                </label>
            </div>
            <button type="submit" value="filter" class="hidden">Filter</button>
        </div>
    </form>

    <form method="POST" action="{{ route('request-apparel-customization') }}" class="flex flex-col gap-y-10">
        @csrf
        @if($selectedCategory)
        <div class="flex flex-col gap-y-3">
            <div class="flex gap-x-3 items-center">
                <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Choose a printing company</h1>
                <p class="text-kBlack text-base max-w-[1400px]">Choose from our list of reputable printing partners who will bring your custom design to life with high-quality printing. Each partner offers a range of services to meet your needs.</p>
            </div>

            @if($designerCompanies->isEmpty())
            <p class=" text-red-700 text-base">No companies are offering this apparel.</p>
            @else
            <div class="flex gap-x-3">
                @foreach($designerCompanies as $company)
                <label for="{{ $company->designer_ID }}" class="cursor-pointer">
                    <input type="radio" name="company" id="{{ $company->designer_ID }}" class="hidden peer" onchange="updateDescription('{{ $company->designer_ID }}', '{{ $company->description }}')">
                    <div class="flex gap-x-4 border-2 rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">{{ $company->name }}</h1>
                        <img src="/path/to/company/icons/{{ $company->logo }}" alt="Company Icon" width="28" height="29">
                    </div>
                </label>
                @endforeach
            </div>
            <div class="accordion-collapse bg-kLightGray p-3 border-2 border-kBlack rounded-md mb-4" data-accordion="collapse">
                <h1 class="" id="accordion-collapse-heading-1">
                    <button type="button" class="bg-kLightGray flex items-center justify-between w-full text-base text-kBlack font-semibold" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                        <span class="" id="company-name">About COMPANY NAME</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h1>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="pt-4">
                        <p class="text-kBlack mb-4" id="company-description">
                            Please select a company to see the details.
                        </p>
                        <p class="text-kBlack font-semibold mb-3">Price starts at: PHP 1,200</p>
                        <div class="flex flex-col gap-y-3">
                            <h1 class="text-base text-kBlack font-semibold">Sample products/services</h1>
                            <div class="flex gap-x-3 text-kWhite">
                                <div class="h-[120px] w-[120px] p-3 rounded-md bg-kBlack">
                                    img here
                                </div>
                                <div class="h-[120px] w-[120px] p-3 rounded-md bg-kBlack">
                                    img here
                                </div>
                                <div class="h-[120px] w-[120px] p-3 rounded-md bg-kBlack">
                                    img here
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        @endif
        <input type="hidden" name="selected_category" id="selected_category" value="{{ request('apparel') }}">
        <input type="hidden" name="selected_company" id="selected_company">
        <div class="inline-flex justify-end">
            <button type="submit" value="Next" class="bg-kBlack font-semibold flex gap-x-2 justify-around items-center text-kWhite text-lg rounded-md p-3">
                <p>Next</p>
                <svg width="21" height="9" viewBox="0 0 21 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.3441 5.11273C20.5445 4.92267 20.5528 4.6062 20.3627 4.40587L17.2656 1.14128C17.0755 0.94095 16.759 0.932622 16.5587 1.12268C16.3584 1.31274 16.35 1.62921 16.5401 1.82954L19.2931 4.7314L16.3913 7.48444C16.191 7.6745 16.1826 7.99097 16.3727 8.1913C16.5627 8.39163 16.8792 8.39996 17.0795 8.2099L20.3441 5.11273ZM0.986847 4.74983L19.9868 5.24982L20.0132 4.25017L1.01315 3.75017L0.986847 4.74983Z" fill="white" />
                </svg>
            </button>
        </div>
    </form>
</div>

<script>
    function updateDescription(id, description) {
        document.getElementById('company-name').textContent = 'About ' + document.querySelector(`label[for="${id}"] .text-base`).textContent;
        document.getElementById('company-description').textContent = description;

        document.getElementById('selected_company').value = id;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection