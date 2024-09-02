@extends('layout.layout')
@section('content')
<div class="flex lowercase font-dm-sans gap-x-20 px-6 justify-around">
    <div class="flex flex-col gap-y-6 p-y-3 w-1/2">
        <h1 class="text-xl font-bold">orders and returns</h1>
        <p class="text-base">We seek for your patience and understanding on the delays as we get your orders to you in the days to come. Track your order by entering your email address below. You can return an item within 30 days after receiving your order.</p>
        <div class="flex flex-col gap-y-7">
            <div class="flex flex-col gap-y-3">
                <h1 class="text-lg font-bold">what's your email?</h1>
                <input type="email" name="" id="" placeholder="jane@gmail.com">
            </div>
            <div class="flex flex-col gap-y-3">
                <h1 class="text-lg font-bold">what's your order number?</h1>
                <input type="text" name="" id="" placeholder="TELA-PH84703">
            </div>
            <div class="inline-block">
                <button class="bg-kBlack text-kWhite p-3" type="submit">confirm</button>
            </div>
        </div>
    </div>

    <div id="orderSection" class="flex flex-col gap-y-6 p-y-3 w-1/2">
        <h1 class="text-lg font-bold">order details</h1>
        <div class="flex flex-col gap-y-4">
            <div class="flex flex-col gap-y-2">
                <div class="flex flex-col gap-y-1">
                    <h1 class="text-lg font-bold">order no:</h1>
                    <h1 class="text-base uppercase">TELA-PH89240k</h1>
                </div>
                <div class="flex flex-col gap-y-1">
                    <h1 class="text-lg font-bold">email address:</h1>
                    <h1 class="text-base lowercase">jane@test.com</h1>
                </div>
            </div>
            <div class="flex flex-col gap-y-2">
                <div class="flex flex-col gap-y-1">
                    <h1 class="text-lg font-bold">order date:</h1>
                    <h1 class="text-base lowercase">August 12, 2024</h1>
                </div>
                <div class="flex flex-col gap-y-1">
                    <h1 class="text-lg font-bold">order specifications:</h1>
                    <h1 class="text-base lowercase">20 - hoodie</h1>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col gap-y-1 w-1/2">
                    <h1 class="text-lg font-bold">produced by:</h1>
                    <h1 class="text-base capitalize">Company A</h1>
                </div>
                <div class="flex flex-col gap-y-1 w-1/2">
                    <h1 class="text-lg font-bold">designed by:</h1>
                    <h1 class="text-base capitalize">John Doe</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection