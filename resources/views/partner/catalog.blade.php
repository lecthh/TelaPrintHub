@extends('layout.businesshub-layout')
@vite('resources/css/app.css')

@section('content')
<h1 class="font-bold text-xl normal-case">Hello. Company Name!</h1>
<div class="flex gap-x-3 p-3 bg-kWhite border border-kBlack justify-between">
    <a href="" class="flex flex-grow gap-x-3 p-3 border-r border-kBlack">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 15.2V9C2 5.5 4 4 7 4H17C20 4 22 5.5 22 9V15C22 18.5 20 20 17 20H8.5" stroke="#171717"
                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M18.5 9.5V14.5" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M9 18C9 18.75 8.78998 19.46 8.41998 20.06C7.72998 21.22 6.46 22 5 22C3.54 22 2.27002 21.22 1.58002 20.06C1.21002 19.46 1 18.75 1 18C1 15.79 2.79 14 5 14C7.21 14 9 15.79 9 18Z"
                stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M7.75 15.25L2.25 20.75" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="flex flex-col gap-y-3">
            <h1 class="text-base font-bold text-[#5C5959]">sales revenue</h1>
            <h1 class="text-xl font-bold">&#8369 200.00</h1>
        </div>
    </a>
    <a href="" class="flex flex-grow gap-x-3 p-3 border-r border-kBlack">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 15.2V9C2 5.5 4 4 7 4H17C20 4 22 5.5 22 9V15C22 18.5 20 20 17 20H8.5" stroke="#171717"
                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M18.5 9.5V14.5" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M9 18C9 18.75 8.78998 19.46 8.41998 20.06C7.72998 21.22 6.46 22 5 22C3.54 22 2.27002 21.22 1.58002 20.06C1.21002 19.46 1 18.75 1 18C1 15.79 2.79 14 5 14C7.21 14 9 15.79 9 18Z"
                stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M7.75 15.25L2.25 20.75" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="flex flex-col gap-y-3">
            <h1 class="text-base font-bold text-[#5C5959]">active orders</h1>
            <h1 class="text-xl font-bold">10</h1>
        </div>
    </a>
    <a href="" class="flex flex-grow gap-x-3 p-3 border-r border-kBlack">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 15.2V9C2 5.5 4 4 7 4H17C20 4 22 5.5 22 9V15C22 18.5 20 20 17 20H8.5" stroke="#171717"
                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M18.5 9.5V14.5" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M9 18C9 18.75 8.78998 19.46 8.41998 20.06C7.72998 21.22 6.46 22 5 22C3.54 22 2.27002 21.22 1.58002 20.06C1.21002 19.46 1 18.75 1 18C1 15.79 2.79 14 5 14C7.21 14 9 15.79 9 18Z"
                stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M7.75 15.25L2.25 20.75" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="flex flex-col gap-y-3">
            <h1 class="text-base font-bold text-[#5C5959]">pending requests</h1>
            <h1 class="text-xl font-bold">5</h1>
        </div>
    </a>
    <a href="" class="flex flex-grow gap-x-3 p-3 border-kBlack">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 15.2V9C2 5.5 4 4 7 4H17C20 4 22 5.5 22 9V15C22 18.5 20 20 17 20H8.5" stroke="#171717"
                stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M12 14.5C13.3807 14.5 14.5 13.3807 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 13.3807 10.6193 14.5 12 14.5Z"
                stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M18.5 9.5V14.5" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M9 18C9 18.75 8.78998 19.46 8.41998 20.06C7.72998 21.22 6.46 22 5 22C3.54 22 2.27002 21.22 1.58002 20.06C1.21002 19.46 1 18.75 1 18C1 15.79 2.79 14 5 14C7.21 14 9 15.79 9 18Z"
                stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M7.75 15.25L2.25 20.75" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10"
                stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <div class="flex flex-col gap-y-3">
            <h1 class="text-base font-bold text-[#5C5959]">confirmed requests</h1>
            <h1 class="text-xl font-bold">3</h1>
        </div>
    </a>
</div>

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