@extends('layout.layout')

@section('content')
<div class="bg-kWhite font-dm-sans px-8 py-10 flex justify-around items-center">
    <div class="flex flex-col">
        <div class="flex flex-col gap-y-2 max-w-[800]">
            <h1 class="font-bold text-3xl">Transform Your Ideas<br>into Wearable Art</h1>
            <p>
                Choose a design that perfectly represents your vision from our extensive library or upload your own unique artwork. Next, select from our trusted network of top-tier printing partners who specialize in high-quality prints and reliable service. Finally, place your order and relax as your custom apparel is expertly printed and delivered straight to your doorstep.
            </p>
        </div>
        <div class="mt-6">
            <a href="" class="bg-kBlack text-kWhite rounded-md inline-flex items-center gap-x-2 px-4 py-2 hover:shadow-md">
                Request a print
                <svg width="21" height="9" viewBox="0 0 21 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.3441 5.11273C20.5445 4.92267 20.5528 4.6062 20.3627 4.40587L17.2656 1.14128C17.0755 0.94095 16.759 0.932622 16.5587 1.12268C16.3584 1.31274 16.35 1.62921 16.5401 1.82954L19.2931 4.7314L16.3913 7.48444C16.191 7.6745 16.1826 7.99097 16.3727 8.1913C16.5627 8.39163 16.8792 8.39996 17.0795 8.2099L20.3441 5.11273ZM0.986847 4.74983L19.9868 5.24982L20.0132 4.25017L1.01315 3.75017L0.986847 4.74983Z" fill="white" />
                </svg>
            </a>
        </div>
    </div>

    <div class="flex gap-x-6">
        <div class="bg-kBlack p-3 w-[207px] h-[207px] rounded-md">
            <img src="/img/landing-1.png" alt="">
        </div>
        <div class="bg-kBlack p-3 w-[207px] h-[207px] rounded-md">
            <img src="/img/landing-2.png" alt="">
        </div>
        <div class="bg-kBlack p-3 w-[207px] h-[207px] rounded-md">
            <img src="/img/landing-3.png" alt="">
        </div>
    </div>
</div>

<div class="bg-kBlack px-8 py-10 flex items-center justify-center">
    <h1 class="text-kWhite text-lg font-bold">!! COMPANY LOGOS !!</h1>
</div>

<div class="bg-kWhite flex flex-col gap-y-6 px-8 py-10">
    <div class="flex gap-x-6 justify-start">
        <div class="bg-kBlack p-3 rounded-md text-kWhite font-bold text-lg">
            How it works
        </div>
        <p class="max-w-[1400] text-base">
            Getting your custom apparel is a breeze with our simple and straightforward process. Follow these easy steps to bring your unique designs to life, choose a reliable printing partner, and enjoy wearing your custom-made clothing with pride.
        </p>
    </div>

    <div class="bg-kLightGray p-3 flex flex-col gap-y-4 rounded-md">
        <h1 class="text-lg font-bold">1. Create a design</h1>
        <p class="text-base">Start by crafting a design that reflects your style and message. Use our intuitive design tools to create something from scratch or choose from a variety of customizable templates. Upload your own artwork or artwork, ensuring it’s exactly how you envision it.</p>
    </div>
    <div class="bg-kLightGray p-3 flex flex-col gap-y-4 rounded-md">
        <h1 class="text-lg font-bold">2. Choose a partner</h1>
        <p class="text-base">Select from our curated list of trusted printing partners, each known for their expertise and quality. Compare options based on printing techniques, materials, and customer reviews to find the best fit for your needs. Our partners will ensure your design is printed with precision and care.your own artwork or artwork, ensuring it’s exactly how you envision it.</p>
    </div>
    <div class="bg-kLightGray p-3 flex flex-col gap-y-4 rounded-md">
        <h1 class="text-lg font-bold">3. Wear</h1>
        <p class="text-base">Once your order is placed, sit back and relax as your custom apparel is expertly produced and delivered. When it arrives, try it on and enjoy your one-of-a-kind garment that’s tailored just for you. Wear it with pride, knowing you’ve created something truly special.</p>
    </div>
    <button id="triggerModal" data-modal-target="default-modal" data-modal-toggle="default-modal" class="size-12"></button>
</div>



<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" fill="none">
            <path d="M15 0H5C2 0 0 1.5 0 5V12C0 15.5 2 17 5 17H15C18 17 20 15.5 20 12V5C20 1.5 18 0 15 0ZM15.47 6.09L12.34 8.59C11.68 9.12 10.84 9.38 10 9.38C9.16 9.38 8.31 9.12 7.66 8.59L4.53 6.09C4.21 5.83 4.16 5.35 4.41 5.03C4.67 4.71 5.14 4.65 5.46 4.91L8.59 7.41C9.35 8.02 10.64 8.02 11.4 7.41L14.53 4.91C14.85 4.65 15.33 4.7 15.58 5.03C15.84 5.35 15.79 5.83 15.47 6.09Z" fill="#171717" />
        </svg>
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Your Partnership Request is Received!
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Thank you for your interest in becoming a partner with us! We are excited to explore the opportunity to collaborate with you.
                </p>
            </div>
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const triggerModal = document.getElementById('triggerModal');
        if (triggerModal) {
            triggerModal.click();
        }
    });
</script>
@endsection