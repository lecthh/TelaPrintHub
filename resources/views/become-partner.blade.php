@extends('layout.layout')

@section('content')
<div class="bg-kWhite flex flex-col gap-y-6 px-8 py-10 font-dm-sans">
    <div class="flex gap-x-3 items-center">
        <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Business sign up</h1>
        <p class="text-kBlack text-base max-w-[1400]">We’re excited to expand our network of printing partners and collaborate with top-quality businesses like yours. By joining our network, you’ll gain access to a diverse range of print requests and opportunities to grow your business. Follow the simple steps below to get started!</p>
    </div>
    <div class="bg-kLightGray p-3 flex flex-col rounded-md items-center gap-y-4">
        <h1 class="font-semibold text-lg">I am a...</h1>
        <!-- make state -->
        <div class="flex gap-x-4 w-full">
            <a href="" class="bg-kWhite flex-1 p-3 gap-x-4 rounded-md text-kBlack border border-kBlack text-center transition hover:bg-kBlack hover:text-kWhite">
                Designer
            </a>
            <a href="" class="bg-kWhite flex-1 p-3 gap-x-4 rounded-md text-kBlack border border-kBlack text-center transition hover:bg-kBlack hover:text-kWhite">
                Printer/Tailor
            </a>
        </div>
    </div>
    <div class="flex">
        <div class="flex flex-col gap-y-3">
            <div class="flex flex-col">
                <h1 class="text-lg font-medium">* Company name</h1>
                <input type="text" class="text-normal text-kGray focus:outline-none" placeholder="VanJam">
            </div>
            <div class="flex flex-col">
                <h1 class="text-lg font-medium">* Email address</h1>
                <input type="email" class="focus:outline-none text-normal text-kGray" placeholder="VanJam">
            </div>
            <div class="flex flex-col">
                <h1 class="text-lg font-medium">* Phone number</h1>
                <input type="text" class="focus:outline-none text-normal text-kGray" placeholder="09384912">
            </div>
        </div>
    </div>
</div>
@endsection