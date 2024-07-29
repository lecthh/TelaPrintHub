@extends('layout.layout')

@section('content')
<div class="bg-kWhite font-dm-sans px-8 py-10 flex justify-between items-center">
    <div class="flex flex-col">
        <div class="flex flex-col gap-y-2 max-w-[800]">
            <h1 class="font-bold text-3xl">Transform Your Ideas<br>into Wearable Art</h1>
            <p>
                Choose a design that perfectly represents your vision from our extensive library or upload your own unique artwork. Next, select from our trusted network of top-tier printing partners who specialize in high-quality prints and reliable service. Finally, place your order and relax as your custom apparel is expertly printed and delivered straight to your doorstep.
            </p>
        </div>
        <div class="mt-6">
            <a href="" class="bg-kBlack text-kWhite rounded-md inline-flex items-center gap-x-2 px-4 py-2">
                Request a print
                <svg width="21" height="9" viewBox="0 0 21 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.3441 5.11273C20.5445 4.92267 20.5528 4.6062 20.3627 4.40587L17.2656 1.14128C17.0755 0.94095 16.759 0.932622 16.5587 1.12268C16.3584 1.31274 16.35 1.62921 16.5401 1.82954L19.2931 4.7314L16.3913 7.48444C16.191 7.6745 16.1826 7.99097 16.3727 8.1913C16.5627 8.39163 16.8792 8.39996 17.0795 8.2099L20.3441 5.11273ZM0.986847 4.74983L19.9868 5.24982L20.0132 4.25017L1.01315 3.75017L0.986847 4.74983Z" fill="white"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="flex gap-x-6">
        <div class="bg-kBlack p-3 w-[207px] h-[207px] rounded-md"></div>
        <div class="bg-kBlack p-3 w-[207px] h-[207px] rounded-md"></div>
        <div class="bg-kBlack p-3 w-[207px] h-[207px] rounded-md"></div>
    </div>
</div>
@endsection
