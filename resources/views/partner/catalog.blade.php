@extends('layout.businesshub-layout')
@vite('resources/css/app.css')

@section('content')
@include('layout.dashboard-layout')
<div class="flex gap-x-3 p-3 bg-kWhite border border-kBlack">
    <!-- maximum of 5 ma show, rest is pagination to be implemented and whole page for notification-->
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#171717"
            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path
            d="M7.33002 14.4898L9.71002 11.3998C10.05 10.9598 10.68 10.8798 11.12 11.2198L12.95 12.6598C13.39 12.9998 14.02 12.9198 14.36 12.4898L16.67 9.50977"
            stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
    <div class="flex flex-col flex-grow gap-y-3">
        <h1 class="font-bold text-base text-[#5C5959]">recent activities</h1>
        <div class="flex flex-col gap-y-1">
            <a href="" class="flex pt-1 pb-2 justify-between border-b border-kBlack">
                <p class="text-base">anonymous just gave you a rating!</p>
                <p class="text-base">3 mins. ago</p>
            </a>
            <a href="" class="flex pt-1 pb-2 justify-between border-b border-kBlack">
                <p class="text-base"><span class="font-semibold">order request</span> has been made with <span
                        class="font-bold">reference no: 012858</span></p>
                <p class="text-base">5 mins. ago</p>
            </a>
            <a href="" class="flex pt-1 pb-2 justify-between border-b border-kBlack">
                <p class="text-base"><span class="font-bold">order request: 934895</span> just <span
                        class="font-semibold">confirmed</span> their order</p>
                <p class="text-base">12 mins. ago</p>
            </a>
            <a href="" class="flex pt-1 pb-2 justify-between border-b border-kBlack">
                <p class="text-base">anonymous just gave you a rating!</p>
                <p class="text-base">1 hr. ago</p>
            </a>
            <a href="" class="flex pt-1 pb-2 justify-between border-b border-kBlack">
                <p class="text-base">anonymous just gave you a rating!</p>
                <p class="text-base">3 hr. ago</p>
            </a>
        </div>
    </div>
</div>

<div class="flex gap-x-6">
    <div class="flex flex-grow gap-x-3 p-3 bg-kWhite border border-kBlack">
        <!-- maximum of 5 ma show, rest is pagination to be implemented and whole page for notification-->
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M7.33002 14.4898L9.71002 11.3998C10.05 10.9598 10.68 10.8798 11.12 11.2198L12.95 12.6598C13.39 12.9998 14.02 12.9198 14.36 12.4898L16.67 9.50977"
                stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="flex flex-col flex-grow gap-y-3">
            <h1 class="font-bold text-base text-[#5C5959]">services and pricing</h1>
            <table class="table-auto border border-kBlack">
                <thead class="text-lg">
                    <tr class="border-b border-kBlack">
                        <td class="p-2 font-bold border-r border-kBlack">service</td>
                        <td class="p-2 font-bold border-r border-kBlack">base price</td>
                        <td class="p-2 font-bold border-r border-kBlack">supplier</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-kBlack">
                        <td class="p-2 text-base border-r border-kBlack">t-shirt</td>
                        <td class="p-2 text-base border-r border-kBlack">&#8369 500.00</td>
                        <td class="p-2 text-base border-r border-kBlack normal-case">Company A</td>
                    </tr>
                    <tr class="border-b border-kBlack">
                        <td class="p-2 text-base border-r border-kBlack">t-shirt</td>
                        <td class="p-2 text-base border-r border-kBlack">&#8369 500.00</td>
                        <td class="p-2 text-base border-r border-kBlack normal-case">Company A</td>
                    </tr>
                    <tr class="border-b border-kBlack">
                        <td class="p-2 text-base border-r border-kBlack">t-shirt</td>
                        <td class="p-2 text-base border-r border-kBlack">&#8369 500.00</td>
                        <td class="p-2 text-base border-r border-kBlack normal-case">Company A</td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-end">
                <button class="inline-block bg-kBlack text-kWhite p-2">update</button>
            </div>
        </div>
    </div>

    <div class="flex flex-grow gap-x-3 p-3 bg-kWhite border border-kBlack">
    <!-- maximum of 5 ma show, rest is pagination to be implemented and whole page for notification-->
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M7.33002 14.4898L9.71002 11.3998C10.05 10.9598 10.68 10.8798 11.12 11.2198L12.95 12.6598C13.39 12.9998 14.02 12.9198 14.36 12.4898L16.67 9.50977" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <div class="flex flex-col flex-grow gap-y-3">
        <h1 class="font-bold text-base text-[#5C5959]">shop logs</h1>
        <div class="flex flex-col gap-y-1">
            <a href="" class="flex pt-1 pb-2 justify-between border-b border-kBlack">
                <p class="text-base">transaction complete: order 14940</p>
                <p class="text-base">3 mins. ago</p>
            </a>
            <a href="" class="flex pt-1 pb-2 justify-between border-b border-kBlack">
                <p class="text-base"><span class="font-semibold">confirmed request order 34901 <span class="font-bold">moved to</span> active order</p>
                <p class="text-base">5 mins. ago</p>
            </a>
            <a href="" class="flex pt-1 pb-2 justify-between border-b border-kBlack">
                <p class="text-base"><span class="font-bold">transaction complete: order 1349</p>
                <p class="text-base">12 mins. ago</p>
            </a>
            <a href="" class="flex pt-1 pb-2 justify-between border-b border-kBlack">
                <p class="text-base">anonymous just gave you a rating!</p>
                <p class="text-base">1 hr. ago</p>
            </a>
            <a href="" class="flex pt-1 pb-2 justify-between border-b border-kBlack">
                <p class="text-base">anonymous just gave you a rating!</p>
                <p class="text-base">3 hr. ago</p>
            </a>
        </div>
    </div>
</div>
@endsection