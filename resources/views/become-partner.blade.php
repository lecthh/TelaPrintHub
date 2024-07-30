@extends('layout.layout')

@section('content')
<div class="bg-kWhite flex flex-col gap-y-6 px-8 py-10 font-dm-sans">
    <div class="flex gap-x-3 items-center">
        <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Business sign up</h1>
        <p class="text-kBlack text-base max-w-[1400]">We’re excited to expand our network of printing partners and collaborate with top-quality businesses like yours. By joining our network, you’ll gain access to a diverse range of print requests and opportunities to grow your business. Follow the simple steps below to get started!</p>
    </div>
    <div class="bg-kLightGray p-3 flex flex-col rounded-md items-center gap-y-4">
        <h1 class="font-semibold text-lg">I am a...</h1>
        <div class="flex gap-x-4 w-full">
            <a href="" class="bg-kBlack flex-1 p-3 gap-x-4 rounded-md text-kWhite border border-kBlack text-center">
                Designer
            </a>
            <a href="" class="bg-kWhite flex-1 p-3 gap-x-4 rounded-md text-kBlack border border-kBlack text-center">
                Printer/Tailor
            </a>
        </div>
    </div>
</div>
@endsection