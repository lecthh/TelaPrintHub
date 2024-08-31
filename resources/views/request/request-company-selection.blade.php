    @extends('layout.layout')

    @section('content')
    <div class="bg-kWhite px-8 py-10">
        <!-- Category Selection -->
        <div class="flex flex-col gap-y-3">
            <div class="flex gap-x-3 items-center">
                <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Select your apparel</h1>
                <p class="text-kBlack text-base max-w-[1400px]">Choose the type of apparel you want to customize. We offer a range of options to suit your needs.</p>
            </div>
            <div class="flex gap-x-3">
                <label for="tshirt" class="cursor-pointer">
                    <input type="radio" name="apparel" id="tshirt" value="T-shirt" class="hidden peer" onclick="filterCompanies('T-shirt');">
                    <div class="flex gap-x-4 border-2 border-kBlack h-[65px] hover:bg-kBlack hover:text-kWhite rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">T-shirt</h1>
                    </div>
                </label>
                <label for="hoodie" class="cursor-pointer">
                    <input type="radio" name="apparel" id="hoodie" value="Hoodie" class="hidden peer" {{ request('apparel') === 'Hoodie' ? 'checked' : '' }} onclick="filterCompanies('Hoodie');">
                    <div class="flex gap-x-4 items-center h-[65px] border-2 hover:bg-kBlack hover:text-kWhite border-kBlack rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Hoodie</h1>
                    </div>
                </label>
                <label for="poloshirt" class="cursor-pointer">
                    <input type="radio" name="apparel" id="poloshirt" value="Polo shirt" class="hidden peer" {{ request('apparel') === 'Polo shirt' ? 'checked' : '' }} onclick="filterCompanies('Polo shirt');">
                    <div class="flex gap-x-4 border-2 border-kBlack hover:bg-kBlack hover:text-kWhite h-[65px] items-center rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Polo shirt</h1>
                    </div>
                </label>
                <label for="shorts" class="cursor-pointer">
                    <input type="radio" name="apparel" id="shorts" value="Shorts" class="hidden peer" {{ request('apparel') === 'Shorts' ? 'checked' : '' }} onclick="filterCompanies('Shorts');">
                    <div class="flex gap-x-4 border-2 h-[65px] hover:bg-kBlack hover:text-kWhite border-kBlack items-center rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Shorts</h1>
                    </div>
                </label>
                <label for="sportswear" class="cursor-pointer">
                    <input type="radio" name="apparel" id="sportswear" value="Sportswear" class="hidden peer" {{ request('apparel') === 'Sportswear' ? 'checked' : '' }} onclick="filterCompanies('Sportswear');">
                    <div class="flex gap-x-4 border-2 border-kBlack h-[65px] hover:bg-kBlack hover:text-kWhite items-center justify-between rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite">
                        <h1 class="text-base">Sportswear</h1>
                    </div>
                </label>
            </div>
        </div>

        <div id="company-selection" class="hidden mt-3 flex-col gap-y-10">
            <!-- Company Selection -->
            <form method="POST" action="{{ route('request-company-selection-post') }}" class="flex flex-col gap-y-10">
                @csrf
                <div class="flex flex-col gap-y-3">
                    <div class="flex gap-x-3 items-center">
                        <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Choose a printing company</h1>
                        <p class="text-kBlack text-base max-w-[1400px]">Choose from our list of reputable printing partners who will bring your custom design to life with high-quality printing. Each partner offers a range of services to meet your needs.</p>
                    </div>

                    @if($designerCompanies->isEmpty())
                    <p class="text-red-700 text-base">No companies are offering this apparel.</p>
                    @else
                    <div id="company-list" class="flex gap-x-3">
                        @foreach($designerCompanies as $company)
                        <label for="{{ $company->designer_ID }}" class="cursor-pointer company-label" data-category="{{ $company->category_name }}">
                            <input type="radio" name="company" id="{{ $company->designer_ID }}" class="hidden peer" onchange="updateDescription('{{ $company->name }}', '{{ $company->description }}', '{{ $company->designer_ID }}')">
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
                <input type="hidden" name="selected_category" id="selected_category" value="{{ request('apparel') }}">
                <input type="hidden" name="selected_company" id="selected_company">
                <div class="inline-flex justify-end">
                    <button type="submit" value="Next" class="bg-kBlack font-semibold flex gap-x-2 justify-around items-center text-kWhite text-lg rounded-md p-3">
                        <p>Next</p>
                        <svg width="21" height="9" viewBox="0 0 21 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.3441 5.11273C20.5445 4.92267 20.5445 4.62236 20.3441 4.4323L17.0541 1.38567C16.6428 0.995191 15.9531 1.26678 15.9531 1.85337V3.77628C12.3562 3.71857 9.28089 3.11568 6.45656 2.08861C4.35969 1.33506 2.34018 0.388245 0.442036 0.243427C0.0263667 0.214523 -0.132995 0.738119 0.16867 0.983667C3.2363 3.33058 6.88441 4.88212 10.7598 5.37282C12.8992 5.65985 14.9704 5.8528 17.1931 5.88036V7.85337C17.1931 8.44 16.5034 8.71155 16.0921 8.3211L20.3441 5.11273Z" fill="white" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accordionButton = document.querySelector('[data-accordion-target]');
            const accordionContent = document.querySelector(accordionButton.getAttribute('data-accordion-target'));

            accordionButton.addEventListener('click', function() {
                const isExpanded = accordionContent.classList.toggle('hidden');
                accordionButton.setAttribute('aria-expanded', !isExpanded);

                const icon = accordionButton.querySelector('[data-accordion-icon]');
                if (icon) {
                    icon.classList.toggle('rotate-180');
                }
            });
        });

        function updateDescription(companyname, description, companyid) {
            document.getElementById('company-name').innerText = 'About ' + companyname;
            document.getElementById('company-description').innerText = description;
            document.getElementById('selected_company').value = companyid;
        }

        function filterCompanies(selectedCategory) {
            let companySelectionDiv = document.getElementById('company-selection');
            let companies = document.querySelectorAll('.company-label');

            companySelectionDiv.classList.remove('hidden');

            companies.forEach(company => {
                let category = company.getAttribute('data-category');
                company.style.display = (category === selectedCategory) ? 'block' : 'none';
            });
            document.getElementById('selected_category').value = selectedCategory;
        }
    </script>
    @endsection