@extends('layout.layout')

@section('content')
<div class="bg-kWhite font-dm-sans px-8 py-10 flex justify-between items-center">
    <div class="flex flex-col">
        <div class="flex flex-col gap-y-2 max-w-[800]">
            <h1 class="font-bold text-3xl">Welcome!!!!!!!!!!!!!!!!!!!!!!</h1>
            <p>
                Choose a design that perfectly represents your vision from our extensive library or upload your own unique artwork. Next, select from our trusted network of top-tier printing partners who specialize in high-quality prints and reliable service. Finally, place your order and relax as your custom apparel is expertly printed and delivered straight to your doorstep.
            </p>
        </div>
        <div class="mt-6">
            <a href="" class="bg-kBlack text-kWhite rounded-md inline-flex items-center gap-x-2 px-4 py-2">
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

<div class="bg-kWhite px-8 py-10">
    <div class="flex items-center justify-center gap-x-[96px]">
        <img src="/logos/php_logo.png" alt="" class="w-[56]">
        <img src="/logos/vs_logo.png" alt="" class="w-[56]">
        <img src="/logos/git_logo.png" alt="" class="w-[56]">
        <img src="/logos/intel_logo.png" alt="" class="w-[56]">
        <img src="/logos/spotify_logo.png" alt="" class="w-[56]">
        <img src="/logos/apple_logo.png" alt="" class="w-[56]">
        <img src="/logos/microsoft_logo.png" alt="" class="w-[56]">
    </div>
</div>

<div class="bg-kWhite flex flex-col gap-y-6 px-8 py-10">
    <div class="flex gap-x-6 justify-start">
        <div class="bg-kBlack p-3 rounded-md text-kWhite font-bold text-2xl">
            How it works
        </div>
        <p class="max-w-[1400]">
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
</div>
@endsection