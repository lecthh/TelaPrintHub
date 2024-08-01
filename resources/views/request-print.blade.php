@extends('layout.layout')

@section('content')
<div class="bg-kWhite px-8 py-10">
    <form action="" class="flex flex-col gap-y-6">
        <div class="flex flex-col gap-y-6">
            <div class="flex gap-x-3 items-center">
                <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Select your apparel</h1>
                <p class="text-kBlack text-base max-w-[1400]">Choose the type of apparel you want to customize. We offer a range of options to suit your needs.</p>
            </div>
            <div class="flex gap-x-3">
                <label for="tshirt" class="cursor-pointer">
                    <input type="checkbox" name="apparel" id="tshirt" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack h-[65] rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">T-shirt</h1>
                        <div class="w-6 h-6]">
                            <x-ionicon-shirt-outline />
                        </div>
                    </div>
                </label>
                <label for="hoodie" class="cursor-pointer">
                    <input type="checkbox" name="apparel" id="hoodie" class="hidden peer">
                    <div class="flex gap-x-4 items-center h-[65] border-2 border-kBlack rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Hoodie</h1>
                        <div class="w-6 h-6">
                            <x-phosphor-hoodie />
                        </div>
                    </div>
                </label>
                <label for="poloshirt" class="cursor-pointer">
                    <input type="checkbox" name="apparel" id="poloshirt" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack h-[65] items-center rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Polo shirt</h1>
                        <div class="w-6 h-6">
                            <x-ri-shirt-line />
                        </div>
                    </div>
                </label>
                <label for="shorts" class="cursor-pointer">
                    <input type="checkbox" name="apparel" id="shorts" class="hidden peer">
                    <div class="flex gap-x-4 border-2 h-[65] border-kBlack items-center rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Shorts</h1>
                        <div class="w-6 h-6">
                            <x-hugeicons-shorts-pants />
                        </div>
                    </div>
                </label>
                <label for="sportswear" class="cursor-pointer">
                    <input type="checkbox" name="apparel" id="sportswear" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack h-[65] items-center justify-between rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite">
                        <h1 class="text-base">Sportswear</h1>
                        <div class="w-6 h-6">
                            <x-tabler-shirt-sport />
                        </div>
                    </div>
                </label>
            </div>
        </div>
        <div class="flex flex-col gap-y-6">
            <div class="flex gap-x-3 items-center">
                <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Customization</h1>
                <p class="text-kBlack text-base max-w-[1400]">Personalize your apparel with your unique design. Use the tools below to upload reference images, provide design details, and create your custom artwork. This is where you bring your vision to life.</p>
            </div>
            <div class="flex gap-x-3">
                <!-- framework and etc -->
            </div>
        </div>
        <div class="flex flex-col gap-y-6">
            <div class="flex gap-x-3 items-center">
                <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Choose a printing company</h1>
                <p class="text-kBlack text-base max-w-[1400]">Choose from our list of reputable printing partners who will bring your custom design to life with high-quality printing. Each partner offers a range of services to meet your needs.</p>
            </div>
            <div class="flex gap-x-3">
                <label for="php" class="cursor-pointer">
                    <input type="radio" name="company" id="php" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">PHP</h1>
                        <div class="w-6 h-6">
                            <x-fab-php />
                        </div>
                    </div>
                </label>
                <label for="vs" class="cursor-pointer">
                    <input type="radio" name="company" id="vs" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">VS Code</h1>
                        <div class="w-6 h-6"><x-tabler-brand-vscode /></div>
                    </div>
                </label>
                <label for="git" class="cursor-pointer">
                    <input type="radio" name="company" id="git" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Git</h1>
                        <div class="w-6 h-6"><x-iconoir-git /></div>
                    </div>
                </label>
                <label for="intel" class="cursor-pointer">
                    <input type="radio" name="company" id="intel" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Intel</h1>
                        <div class="w-6 h-6"><x-fileicon-intel /></div>
                    </div>
                </label>
                <label for="spotify" class="cursor-pointer">
                    <input type="radio" name="company" id="spotify" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Spotify</h1>
                        <div class="w-6 h-6"><x-iconoir-spotify /></div>
                    </div>
                </label>
                <label for="apple" class="cursor-pointer">
                    <input type="radio" name="company" id="apple" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Apple</h1>
                        <div class="w-6 h-6"><x-ri-apple-line /></div>
                    </div>
                </label>
                <label for="windows" class="cursor-pointer">
                    <input type="radio" name="company" id="windows" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Windows</h1>
                        <div class="w-6 h-6"><x-lineawesome-microsoft /></div>
                    </div>
                </label>
            </div>
            <div class="accordion-collapse bg-kBlack p-3 rounded-md" data-accordion="collapse">
                <h1 class="" id="accordion-collapse-heading-1">
                    <button type="button" class="bg-kBlack flex items-center justify-between w-full text-base text-kWhite font-semibold" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                        <span class="">About COMPANY NAME</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h1>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="pt-4">
                        <p class="text-kWhite mb-2">PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.</p>
                        <p class="text-kWhite font-semibold mb-3">Price starts at: PHP 1,200</p>
                        <div class="flex flex-col gap-y-3">
                            <h1 class="text-base text-kWhite font-semibold">Sample products/services</h1>
                            <div class="flex gap-x-3">
                                <div class="h-[76] p-3 rounded-md bg-kWhite">
                                    img here
                                </div>
                                <div class="h-[76] p-3 rounded-md bg-kWhite">
                                    img here
                                </div>
                                <div class="h-[76] p-3 rounded-md bg-kWhite">
                                    img here
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-y-6">
            <div class="flex gap-x-3 items-center">
                <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Contact details</h1>
                <p class="text-kBlack text-base max-w-[1400]">Fill in your contact details so we can reach you with updates about your order and any necessary communications.</p>
            </div>
            <div class="flex">
                <div class="flex flex-col gap-y-3 justify-between">
                    <div class="flex flex-col mr-3">
                        <h1 class="text-base font-medium">* First name</h1>
                        <input type="text" class="text-normal rounded-md text-kGray ocus:outline-none focus:ring-0 focus:border-kBlack" placeholder="Jane">
                    </div>
                    <div class="flex flex-col mr-3">
                        <h1 class="text-base font-medium">* Email address</h1>
                        <input type="email" class="rounded-md focus:outline-none focus:ring-0 focus:border-kBlack text-normal text-kGray" placeholder="jane@gmail.com">
                    </div>
                </div>
                <div class="flex flex-col gap-y-3 justify-between">
                    <div class="flex flex-col">
                        <h1 class="text-base font-medium">* Last name</h1>
                        <input type="text" class="rounded-md text-normal text-kGray ocus:outline-none focus:ring-0 focus:border-kBlack" placeholder="Doe">
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg font-medium">* Phone number</h1>
                        <div class="flex gap-x-2">
                            <select name="country_code" id="" class="rounded-md focus:outline-none focus:ring-0 focus:border-kBlack text-normal w-[170px]">
                                @foreach ($countryCodes as $country)
                                    <option value="{{ $country->code }}">
                                        {{ $country->flag_emoji }} {{ $country->name}} | {{ $country->code }}
                                    </option>
                                @endforeach
                            </select>
                            <input type="number" class="rounded-md focus:outline-none focus:ring-0 focus:border-kBlack text-normal text-kGray" placeholder="123-456">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="bg-kBlack font-semibold text-kWhite text-lg rounded-md p-3">Confirm</button>
    </form>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection