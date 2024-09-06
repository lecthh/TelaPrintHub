@extends('layout.businesshub-layout')
@vite('resources/css/app.css')

@section('content')
@include('layout.dashboard-layout')
<div class="flex flex-col gap-y-5 p-3 bg-kWhite border border-kBlack lowercase">
    <div class="flex gap-x-3 p-3">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M9.87 5.6701L6.45 7.75012L4.89001 5.19012C4.32001 4.25012 4.62 3.01012 5.56 2.44012C6.5 1.87012 7.74 2.1701 8.31 3.1101L9.87 5.6701Z"
                stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M11.82 9.16009L8.66 11.0801C6.82 12.2001 6.25999 14.4601 7.14999 16.2601L9.19999 20.4401C9.85999 21.7901 11.46 22.2601 12.74 21.4701L19.17 17.5601C20.46 16.7801 20.77 15.1501 19.88 13.9401L17.11 10.2001C15.91 8.58013 13.66 8.04009 11.82 9.16009Z"
                stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M10.7567 5.09815L5.63208 8.21875L7.71248 11.6351L12.8371 8.51455L10.7567 5.09815Z" stroke="#171717"
                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M14.31 16.8101L15.96 19.5201" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M11.75 18.3701L13.4 21.0801" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M16.87 15.25L18.52 17.96" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
        <h1 class="text-base font-bold text-[#5C5959] uppercase">pending request - TELAPHSF1280</h1>
    </div>

    <div class="flex gap-x-3 p-3 bg-kWhite border border-kBlack justify-between">
        <div href="" class="flex flex-grow gap-x-3 p-3 border-r border-kBlack">
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
                <h1 class="text-base font-bold text-[#5C5959]">customer reference</h1>
                <h1 class="text-base font-bold uppercase">GULF SHIP HANDLER</h1>
            </div>
        </div>
        <div href="" class="flex flex-grow gap-x-3 p-3 border-r border-kBlack">
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
                <h1 class="text-base font-bold text-[#5C5959]">mobile number</h1>
                <h1 class="text-base font-bold uppercase">0937 432 8439</h1>
            </div>
        </div>
        <div href="" class="flex flex-grow gap-x-3 p-3 border-r border-kBlack">
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
                <h1 class="text-base font-bold text-[#5C5959]">email</h1>
                <h1 class="text-base font-bold lowercase">gulf@gmail.com</h1>
            </div>
        </div>
        <div href="" class="flex flex-grow gap-x-3 p-3 border-r border-kBlack">
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
                <h1 class="text-base font-bold text-[#5C5959]">communication</h1>
                <h1 class="text-base font-bold lowercase">email</h1>
            </div>
        </div>
        <div href="" class="flex flex-grow gap-x-3 p-3">
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
                <h1 class="text-base font-bold text-[#5C5959]">date</h1>
                <h1 class="text-base font-bold normal-case">13 August, 2024</h1>
            </div>
        </div>
    </div>

    <div class="flex gap-x-3">
        <div class="w-[610px] h-[400px] border border-kBlack bg-kViolet">
        </div>
        <div class="flex flex-grow border border-kBlack gap-x-3 p-3">
            <div class="flex flex-col gap-y-2 w-full">
                <div class="flex gap-y-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 5.25H14C13.59 5.25 13.25 4.91 13.25 4.5C13.25 4.09 13.59 3.75 14 3.75H21C21.41 3.75 21.75 4.09 21.75 4.5C21.75 4.91 21.41 5.25 21 5.25Z"
                            fill="#171717" />
                        <path
                            d="M21 10.25H14C13.59 10.25 13.25 9.91 13.25 9.5C13.25 9.09 13.59 8.75 14 8.75H21C21.41 8.75 21.75 9.09 21.75 9.5C21.75 9.91 21.41 10.25 21 10.25Z"
                            fill="#171717" />
                        <path
                            d="M21 15.25H3C2.59 15.25 2.25 14.91 2.25 14.5C2.25 14.09 2.59 13.75 3 13.75H21C21.41 13.75 21.75 14.09 21.75 14.5C21.75 14.91 21.41 15.25 21 15.25Z"
                            fill="#171717" />
                        <path
                            d="M21 20.25H3C2.59 20.25 2.25 19.91 2.25 19.5C2.25 19.09 2.59 18.75 3 18.75H21C21.41 18.75 21.75 19.09 21.75 19.5C21.75 19.91 21.41 20.25 21 20.25Z"
                            fill="#171717" />
                        <path
                            d="M7.92 3.5H5.08C3.68 3.5 3 4.18 3 5.58V8.43C3 9.83 3.68 10.51 5.08 10.51H7.93C9.33 10.51 10.01 9.83 10.01 8.43V5.58C10 4.18 9.32 3.5 7.92 3.5Z"
                            fill="#171717" />
                    </svg>
                    <h4 class="font-bold text-base text-[#5C5959]">order details</h4>
                </div>
                <div class="flex flex-col gap-y-2 w-full h-full">
                    <h1 class="font-bold text-lg">description:</h1>
                    <div class="flex w-full h-full gap-x-3 p-2 border border-kBlack">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas quod earum accusamus.</p>
                    </div>
                </div>
                <div class="flex flex-col gap-y-2 w-full">
                    <h1 class="font-bold text-lg">images:</h1>
                    <div class="flex w-full gap-x-2">
                        <div class="w-[180px] h-[150px] border border-kBlack bg-kViolet">
                        </div>
                        <div class="w-[180px] h-[150px] border border-kBlack bg-kViolet">
                        </div>
                        <div class="w-[180px] h-[150px] border border-kBlack bg-kViolet">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex gap-x-3 p-3 border border-kBlack">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M11.02 19.5H7.5C6.88 19.5 6.33 19.48 5.84 19.41C3.21 19.12 2.5 17.88 2.5 14.5V9.5C2.5 6.12 3.21 4.88 5.84 4.59C6.33 4.52 6.88 4.5 7.5 4.5H10.96"
                stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M15.02 4.5H16.5C17.12 4.5 17.67 4.52 18.16 4.59C20.79 4.88 21.5 6.12 21.5 9.5V14.5C21.5 17.88 20.79 19.12 18.16 19.41C17.67 19.48 17.12 19.5 16.5 19.5H15.02"
                stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M15 2V22" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M8 8.5V15.5" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <div class="flex flex-col w-full">
            <div class="flex flex-col gap-y-2 w-1/2">
                <h1 class="font-bold text-base text-[#5C5959]">confirm details</h1>
                <div class="flex items-center">
                    <h1 class="font-bold text-base w-1/2">designer:</h1>
                    <select name="" id="" class="w-1/2">
                        <option value="">test</option>
                    </select>
                </div>
                <div class="flex items-center">
                    <h1 class="font-bold text-base w-1/2">final design:</h1>
                    <input type="file" name="" id="" class="w-1/2">
                </div>
                <div class="flex items-center">
                    <h1 class="font-bold text-base w-1/2">generate link:</h1>
                    <button class="p-2 bg-[#5C5959] text-kWhite">generate confirmation link</button>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="inline-block">
                    <button class="border border-kBlack bg-kWhite text-kBlack p-2">cancel request</button>
                    <button class="bg-kBlack text-kWhite p-2">confirm request</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection