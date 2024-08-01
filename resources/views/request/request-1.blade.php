@extends('layout.layout')

@section('content')
<div class="bg-kWhite px-8 py-10">
    <form action="" class="flex flex-col gap-y-10">
        <div class="flex flex-col gap-y-3">
            <div class="flex gap-x-3 items-center">
                <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Select your apparel</h1>
                <p class="text-kBlack text-base max-w-[1400]">Choose the type of apparel you want to customize. We offer a range of options to suit your needs.</p>
            </div>
            <div class="flex gap-x-3">
                <label for="tshirt" class="cursor-pointer">
                    <input type="radio" name="apparel" id="tshirt" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack h-[65] rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">T-shirt</h1>
                        <div class="w-6 h-6"><x-lineawesome-tshirt-solid /></div>
                    </div>
                </label>
                <label for="hoodie" class="cursor-pointer">
                    <input type="radio" name="apparel" id="hoodie" class="hidden peer">
                    <div class="flex gap-x-4 items-center h-[65] border-2 border-kBlack rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Hoodie</h1>
                        <div class="w-6 h-6"><x-phosphor-hoodie /></div>
                    </div>
                </label>
                <label for="poloshirt" class="cursor-pointer">
                    <input type="radio" name="apparel" id="poloshirt" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack h-[65] items-center rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Polo shirt</h1>
                        <div class="w-6 h-6"><x-ri-shirt-line /></div>
                    </div>
                </label>
                <label for="shorts" class="cursor-pointer">
                    <input type="radio" name="apparel" id="shorts" class="hidden peer">
                    <div class="flex gap-x-4 border-2 h-[65] border-kBlack items-center rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Shorts</h1>
                        <div class="w-6 h-6"><x-hugeicons-shorts-pants /></div>
                    </div>
                </label>
                <label for="sportswear" class="cursor-pointer">
                    <input type="radio" name="apparel" id="sportswear" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack h-[65] items-center justify-between rounded-md p-3 peer-checked:bg-kBlack peer-checked:text-kWhite">
                        <h1 class="text-base">Sportswear</h1>
                        <div class="w-6 h-6"><x-tabler-shirt-sport /></div>
                    </div>
                </label>
            </div>
        </div>

        <div class="flex flex-col gap-y-3">
            <div class="flex gap-x-3 items-center">
                <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Choose a printing company</h1>
                <p class="text-kBlack text-base max-w-[1400]">Choose from our list of reputable printing partners who will bring your custom design to life with high-quality printing. Each partner offers a range of services to meet your needs.</p>
            </div>
            <div class="flex gap-x-3">
                <label for="php" class="cursor-pointer">
                    <input type="radio" name="company" id="php" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">PHP</h1>
                    </div>
                </label>
                <label for="vs" class="cursor-pointer">
                    <input type="radio" name="company" id="vs" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">VS Code</h1>
                    </div>
                </label>
                <label for="git" class="cursor-pointer">
                    <input type="radio" name="company" id="git" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Git</h1>
                    </div>
                </label>
                <label for="intel" class="cursor-pointer">
                    <input type="radio" name="company" id="intel" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Intel</h1>
                    </div>
                </label>
                <label for="spotify" class="cursor-pointer">
                    <input type="radio" name="company" id="spotify" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Spotify</h1>
                    </div>
                </label>
                <label for="apple" class="cursor-pointer">
                    <input type="radio" name="company" id="apple" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Apple</h1>
                    </div>
                </label>
                <label for="windows" class="cursor-pointer">
                    <input type="radio" name="company" id="windows" class="hidden peer">
                    <div class="flex gap-x-4 border-2 border-kBlack rounded-md p-3 items-center peer-checked:bg-kBlack peer-checked:text-kWhite justify-between">
                        <h1 class="text-base">Windows</h1>
                    </div>
                </label>
            </div>
            <div class="accordion-collapse bg-kLightGray p-3 border-2 border-kBlack rounded-md" data-accordion="collapse">
                <h1 class="" id="accordion-collapse-heading-1">
                    <button type="button" class="bg-kLightGray flex items-center justify-between w-full text-base text-kBlack font-semibold" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                        <span class="">About COMPANY NAME</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h1>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="pt-4">
                        <p class="text-kBlack mb-2">PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.</p>
                        <p class="text-kBlack font-semibold mb-3">Price starts at: PHP 1,200</p>
                        <div class="flex flex-col gap-y-3">
                            <h1 class="text-base text-kBlack font-semibold">Sample products/services</h1>
                            <div class="flex gap-x-3 text-kWhite">
                                <div class="h-[120] w-[120] p-3 rounded-md bg-kBlack">
                                    img here
                                </div>
                                <div class="h-[120] w-[120] p-3 rounded-md bg-kBlack">
                                    img here
                                </div>
                                <div class="h-[120] w-[120] p-3 rounded-md bg-kBlack">
                                    img here
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inline-flex justify-end">
            <button type="submit" class="bg-kBlack font-semibold flex gap-x-2 justify-around items-center text-kWhite text-lg rounded-md p-3">
                <p>Next</p>
                <svg width="21" height="9" viewBox="0 0 21 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.3441 5.11273C20.5445 4.92267 20.5528 4.6062 20.3627 4.40587L17.2656 1.14128C17.0755 0.94095 16.759 0.932622 16.5587 1.12268C16.3584 1.31274 16.35 1.62921 16.5401 1.82954L19.2931 4.7314L16.3913 7.48444C16.191 7.6745 16.1826 7.99097 16.3727 8.1913C16.5627 8.39163 16.8792 8.39996 17.0795 8.2099L20.3441 5.11273ZM0.986847 4.74983L19.9868 5.24982L20.0132 4.25017L1.01315 3.75017L0.986847 4.74983Z" fill="white"/>
                </svg>
            </button> <!-- idk if this anchor or button but yup -->
        </div>
    </form>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection