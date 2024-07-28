@extends('layout.layout')

@section('content')
<div class="font-[Inter] bg-kLightBlue flex px-8 py-28 gap-x-8 justify-center items-center">
    <div class="flex flex-col gap-y-6">
        <div>
            <h3 class="text-2xl font-bold">Design. Print. Wear.</h3>
            <h3 class="text-2xl font-bold text-kDarkBlue">It's that simple with PrintHub</h3>
        </div>
        <div>
            <a href="" class="bg-kDarkBlue py-3 px-6 text-kDirtyWhite border-black rounded-md shadow-lg">
                Start designing
            </a>
        </div>
    </div>
    <div class="relative w-72 h-72 border-dashed border-4 border-kDarkBlue transform rotate-[6.2deg]">
        <img src="" alt="" class="absolute inset-0 w-full h-full object-cover">
    </div>
</div>

<div class="scroller-wrapper overflow-hidden relative w-full">
    <div class="scroller font-[Roboto] font-bold text-kDarkBlue bg-white flex whitespace-nowrap gap-x-4 py-6 px-12">
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
