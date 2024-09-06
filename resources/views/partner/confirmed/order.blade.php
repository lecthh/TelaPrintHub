@extends('layout.businesshub-layout')
@vite('resources/css/app.css')

@section('content')
@include('layout.dashboard-layout')
<div class="flex flex-col gap-y-5 p-3 bg-kWhite border border-kBlack lowercase">
    <div class="flex gap-x-3 pt-3 pl-3">
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
        <h1 class="text-base font-bold text-[#5C5959] uppercase">active order - TELAPHSF1280</h1>
    </div>

    <div class="flex gap-x-3 p-3 bg-kWhite border border-kBlack justify-between">
        <div href="" class="flex flex-grow gap-x-3 p-3 border-r border-kBlack">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.1601 10.87C12.0601 10.86 11.9401 10.86 11.8301 10.87C9.45006 10.79 7.56006 8.84 7.56006 6.44C7.56006 3.99 9.54006 2 12.0001 2C14.4501 2 16.4401 3.99 16.4401 6.44C16.4301 8.84 14.5401 10.79 12.1601 10.87Z"
                    stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M7.15997 14.56C4.73997 16.18 4.73997 18.82 7.15997 20.43C9.90997 22.27 14.42 22.27 17.17 20.43C19.59 18.81 19.59 16.17 17.17 14.56C14.43 12.73 9.91997 12.73 7.15997 14.56Z"
                    stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="flex flex-col gap-y-3">
                <h1 class="text-base font-bold text-[#5C5959]">customer reference</h1>
                <h1 class="text-base font-bold uppercase">GULF SHIP HANDLER</h1>
            </div>
        </div>
        <div href="" class="flex flex-grow gap-x-3 p-3 border-r border-kBlack">
            <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 6V16C17 20 16 21 12 21H6C2 21 1 20 1 16V6C1 2 2 1 6 1H12C16 1 17 2 17 6Z" stroke="#171717"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M11 4.5H7" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M8.99995 18.1C9.85599 18.1 10.55 17.406 10.55 16.55C10.55 15.694 9.85599 15 8.99995 15C8.14391 15 7.44995 15.694 7.44995 16.55C7.44995 17.406 8.14391 18.1 8.99995 18.1Z"
                    stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="flex flex-col gap-y-3">
                <h1 class="text-base font-bold text-[#5C5959]">mobile number</h1>
                <h1 class="text-base font-bold uppercase">0937 432 8439</h1>
            </div>
        </div>
        <div href="" class="flex flex-grow gap-x-3 p-3 border-r border-kBlack">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5Z"
                    stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="#171717" stroke-width="1.5"
                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="flex flex-col gap-y-3">
                <h1 class="text-base font-bold text-[#5C5959]">email</h1>
                <h1 class="text-base font-bold normal-case">gulf@gmail.com</h1>
            </div>
        </div>
        <div href="" class="flex flex-grow gap-x-3 p-3 border-r border-kBlack">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5Z"
                    stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="#171717" stroke-width="1.5"
                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="flex flex-col gap-y-3">
                <h1 class="text-base font-bold text-[#5C5959]">apparel</h1>
                <h1 class="text-base font-bold normal-case">Sportswear</h1>
            </div>
        </div>
        <div href="" class="flex flex-grow gap-x-3 p-3">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 2V5" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M16 2V5" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M3.5 9.08997H20.5" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
                    stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M11.9955 13.7H12.0045" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M8.29431 13.7H8.30329" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M8.29431 16.7H8.30329" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>

            <div class="flex flex-col gap-y-3">
                <h1 class="text-base font-bold text-[#5C5959]">date</h1>
                <h1 class="text-base font-bold normal-case">13 August, 2024</h1>
            </div>
        </div>
    </div>

    <div class="flex gap-x-4">
        <div class="w-[800px] h-[300px] bg-kViolet border border-kBlack">
        </div>
        <div class="inline-block w-full">
            <table class="table-auto border border-kBlack w-full">
                <thead>
                    <tr class="border-b border-kBlack">
                        <td class="text-lg font-bold border-r border-kBlack p-2 text-center">no</td>
                        <td class="text-lg font-bold border-r border-kBlack p-2">shirt name</td>
                        <td class="text-lg font-bold border-r border-kBlack p-2">jersey #</td>
                        <td class="text-lg font-bold border-r border-kBlack p-2">size</td>
                        <td class="text-lg font-bold border-r border-kBlack p-2">short #</td>
                        <td class="text-lg font-bold border-r border-kBlack p-2">size</td>
                        <td class="text-lg font-bold border-r border-kBlack p-2">pocket</td>
                        <td class="text-lg font-bold border-r border-kBlack p-2">remarks</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-kBlack">
                        <td class="text-base border-r border-kBlack p-2 text-center font-bold">1</td>
                        <td class="text-base border-r border-kBlack p-2 normal-case">Alexis</td>
                        <td class="text-base border-r border-kBlack p-2 uppercase">10</td>
                        <td class="text-base border-r border-kBlack p-2 uppercase">M</td>
                        <td class="text-base border-r border-kBlack p-2"></td>
                        <td class="text-base border-r border-kBlack p-2"></td>
                        <td class="text-base border-r border-kBlack p-2"></td>
                        <td class="text-base border-r border-kBlack p-2"></td>
                    </tr>
                    <tr class="border-b border-kBlack">
                        <td class="text-base border-r border-kBlack p-2 text-center font-bold">1</td>
                        <td class="text-base border-r border-kBlack p-2 normal-case">Joel</td>
                        <td class="text-base border-r border-kBlack p-2 uppercase">10</td>
                        <td class="text-base border-r border-kBlack p-2 uppercase">M</td>
                        <td class="text-base border-r border-kBlack p-2"></td>
                        <td class="text-base border-r border-kBlack p-2"></td>
                        <td class="text-base border-r border-kBlack p-2"></td>
                        <td class="text-base border-r border-kBlack p-2"></td>
                    </tr>
                    <tr class="border-b border-kBlack">
                        <td class="text-base border-r border-kBlack p-2 text-center font-bold">1</td>
                        <td class="text-base border-r border-kBlack p-2 normal-case">Cyber</td>
                        <td class="text-base border-r border-kBlack p-2 uppercase">10</td>
                        <td class="text-base border-r border-kBlack p-2 uppercase">M</td>
                        <td class="text-base border-r border-kBlack p-2"></td>
                        <td class="text-base border-r border-kBlack p-2"></td>
                        <td class="text-base border-r border-kBlack p-2"></td>
                        <td class="text-base border-r border-kBlack p-2"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="flex flex-col gap-x-3 p-3 border border-kBlack">
        <div class="flex gap-x-3 p-3">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M22.9999 17.91C23.0199 18.66 22.8199 19.37 22.4599 19.98C22.2599 20.34 21.9899 20.6701 21.6899 20.9401C20.9999 21.5801 20.0899 21.9701 19.0799 22.0001C17.6199 22.0301 16.3299 21.2801 15.6199 20.1301C15.2399 19.5401 15.0099 18.8301 14.9999 18.0801C14.9699 16.8201 15.5299 15.6801 16.4299 14.9301C17.1099 14.3701 17.9699 14.0201 18.9099 14.0001C21.1199 13.9501 22.9499 15.7 22.9999 17.91Z"
                    stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M17.4399 18.0298L18.45 18.9897L20.5399 16.9697" stroke="#171717" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3.17017 7.44043L12.0002 12.5504L20.7701 7.4704" stroke="#171717" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12.0002 21.61V12.54" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M21.6101 9.17V14.83C21.6101 14.88 21.6101 14.92 21.6001 14.97C20.9001 14.36 20.0001 14 19.0001 14C18.0601 14 17.1901 14.33 16.5001 14.88C15.5801 15.61 15.0001 16.74 15.0001 18C15.0001 18.75 15.2101 19.46 15.5801 20.06C15.6701 20.22 15.7801 20.37 15.9001 20.51L14.0701 21.52C12.9301 22.16 11.0701 22.16 9.93011 21.52L4.59012 18.56C3.38012 17.89 2.39014 16.21 2.39014 14.83V9.17C2.39014 7.79 3.38012 6.11002 4.59012 5.44002L9.93011 2.48C11.0701 1.84 12.9301 1.84 14.0701 2.48L19.4101 5.44002C20.6201 6.11002 21.6101 7.79 21.6101 9.17Z"
                    stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="flex flex-col gap-y-3 w-full">
                <h1 class="font-bold text-base text-[#5C5959]">confirm details</h1>
                <div class="flex flex-col">
                    <div class="flex flex-grow">
                        <h1 class="flex flex-grow font-bold text-kBlack w-1/2">printer:</h1>
                        <div class="flex flex-col gap-y-1 w-1/2">
                            <select name="" id="">
                                <option value="">VanJam</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-grow">
                        <h1 class="flex flex-grow font-bold text-kBlack w-1/2">total quantity:</h1>
                        <div class="flex w-1/2">
                            <input type="file" name="" id="">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-grow">
                        <h1 class="flex flex-grow font-bold text-kBlack w-1/2">generate link:</h1>
                        <div class="flex w-1/2">
                            <button class="p-2 bg-[#5C5959] text-kWhite">generate confirmation link</button>
                        </div>
                    </div>
                </div>
                <div class="flex gap-x-3 justify-end">
                    <button class="p-2 border border-kBlack">cancel request</button>
                    <button class="text-kWhite p-2 bg-kblack">activate order</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
