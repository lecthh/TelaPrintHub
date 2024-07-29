@extends('layout.layout')

@section('content')
<div class="font-[Inter] bg-kLightBlue flex px-8 py-28 gap-x-8 justify-center items-center">
    <div class="flex flex-col gap-y-6">
        <div>
            <h3 class="text-2xl font-bold">Design. Print. Wear.</h3>
            <h3 class="text-2xl font-bold text-kDarkBlue">It's that simple with PrintHub</h3>
        </div>
        <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
            <a href="" class="bg-kDarkBlue py-3 px-6 text-kDirtyWhite border-black rounded-md shadow-lg">
                Start designing
            </a>
        </div>
    </div>
    <div class="relative w-[416.52px] h-[416.52px] border-dashed border-4 border-kDarkBlue transform rotate-[6.2deg]">
        <img src="/img/landing.jpg" alt="" class="absolute inset-0 w-full h-full object-contain bg-kDirtyWhite">
    </div>
</div>

<!-- scrolling -->
<div class="scroller-wrapper overflow-hidden relative w-full">
    <div
        class="scroller font-Roboto-condensed font-bold text-kDarkBlue bg-white flex whitespace-nowrap gap-x-4 py-6 px-12">
        <span class="flex items-center gap-4">
            <h1 class="text-3xl">HOW IT WORKS</h1>
            <i class="text-2xl fa-solid fa-shirt" style="color: #010387;"></i>
        </span>
        <span class="flex items-center gap-4">
            <h1 class="text-3xl">HOW IT WORKS</h1>
            <i class="text-2xl fa-solid fa-shirt" style="color: #010387;"></i>
        </span>
        <span class="flex items-center gap-4">
            <h1 class="text-3xl">HOW IT WORKS</h1>
            <i class="text-2xl fa-solid fa-shirt" style="color: #010387;"></i>
        </span>
        <span class="flex items-center gap-4">
            <h1 class="text-3xl">HOW IT WORKS</h1>
            <i class="text-2xl fa-solid fa-shirt" style="color: #010387;"></i>
        </span>
        <span class="flex items-center gap-4">
            <h1 class="text-3xl">HOW IT WORKS</h1>
            <i class="text-2xl fa-solid fa-shirt" style="color: #010387;"></i>
        </span>
        <span class="flex items-center gap-4">
            <h1 class="text-3xl">HOW IT WORKS</h1>
            <i class="text-2xl fa-solid fa-shirt" style="color: #010387;"></i>
        </span>
    </div>
</div>

<!-- how it works -->
<div class="flex gap-y-6">
    <div class="container bg-kDarkBlue px-16 py-[84] w-1/2 flex justify-center">
        <div class="relative w-[487] h-[626]">
            <img src="/img/design.png" alt="" class="absolute inset-0 h-full">
        </div>
    </div>
    <div class="container font-Roboto-condensed bg-kLightBlue w-1/2 px-8 py-16">
        <div class="flex items-center gap-x-6">
            <h1 class="font-bold text-kDarkBlue text-[220px]">1</h1>
            <h1 class="font-bold text-kDarkBlue text-8xl leading-[100px]">CREATE A<br>DESIGN !!!</h1>
        </div>
        <p class="font-bold font-Roboto-condensed text-kDarkBlue text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.
            Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis
            tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur
            pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales.
            Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci
            facilisis id.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.
        </p>
    </div>
</div>

<div class="flex gap-y-6">
    <div class="container font-Roboto-condensed bg-kLightBlue w-1/2 px-8 py-16">
        <div class="flex items-center gap-x-6">
            <h1 class="font-bold text-kDarkBlue text-[220px]">2</h1>
            <h1 class="font-bold text-kDarkBlue text-8xl leading-[100px]">REQUEST <br>A PRINT</h1>
        </div>
        <p class="font-bold font-Roboto-condensed text-kDarkBlue text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.
            Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis
            tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur
            pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales.
            Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci
            facilisis id.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.
        </p>
    </div>
    <div class="container bg-kDarkBlue w-1/2 px-16 py-[84] flex justify-center">
        <div class="relative w-[487] h-[626]">
            <img src="/img/print.png" alt="" class="absolute inset-0 h-full">
        </div>
    </div>
</div>

<div class="flex gap-y-6">
    <div class="container flex flex-col font-Roboto-condensed bg-kDarkBlue w-1/2 px-8 py-6 gap-y-16">
        <div>
            <div class="flex items-center gap-x-6">
                <h1 class="font-bold text-kDirtyWhite text-[220px]">3</h1>
                <h1 class="font-bold text-kDirtyWhite text-8xl leading-[100px]">WEAR</h1>
            </div>
            <p class="font-bold font-Roboto-condensed text-kDirtyWhite text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna.
                Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae
                mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum
                eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at
                sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu
                eros, eget tempus orci facilisis id.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa
                mi.
            </p>
        </div>
        <a href="" class="transition ease-in-out delay-150 flex bg-kDirtyWhite p-2 font-semibold font-Inter text-kDarkBlue justify-center hover:bg-kLightBlue">
            Start NOW !!! -->
        </a>
    </div>

    <div class="container bg-kDirtyWhite w-1/2 px-16 py-[84] flex justify-center">
        <div class="relative w-[487] h-[626]">
            <img src="/img/wera.jpg" alt="" class="absolute inset-0 h-full object-cover">
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const scroller = document.querySelector('.scroller');
        const scrollerWidth = scroller.scrollWidth;
        const wrapperWidth = document.querySelector('.scroller-wrapper').offsetWidth;

        if (scrollerWidth <= wrapperWidth) {
            scroller.innerHTML += scroller.innerHTML;
        }
    });
</script>

@endsection