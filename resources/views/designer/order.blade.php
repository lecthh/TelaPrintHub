@extends('layout.businesshub-layout')
@vite('resources/css/app.css')

@section('content')
@include('layout.dashboard-layout')

<div class="flex flex-col gap-y-2 p-3 bg-kWhite border border-kBlack lowercase">
    <div class="flex gap-x-3 p-3">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.87 5.6701L6.45 7.75012L4.89001 5.19012C4.32001 4.25012 4.62 3.01012 5.56 2.44012C6.5 1.87012 7.74 2.1701 8.31 3.1101L9.87 5.6701Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.82 9.16009L8.66 11.0801C6.82 12.2001 6.25999 14.4601 7.14999 16.2601L9.19999 20.4401C9.85999 21.7901 11.46 22.2601 12.74 21.4701L19.17 17.5601C20.46 16.7801 20.77 15.1501 19.88 13.9401L17.11 10.2001C15.91 8.58013 13.66 8.04009 11.82 9.16009Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10.7567 5.09815L5.63208 8.21875L7.71248 11.6351L12.8371 8.51455L10.7567 5.09815Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M14.31 16.8101L15.96 19.5201" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.75 18.3701L13.4 21.0801" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16.87 15.25L18.52 17.96" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <h1 class="text-base font-bold text-[#5C5959]">active orders</h1>
    </div>
    <table class="table-auto border border-kBlack">
        <thead>
            <tr class="border-b border-kBlack">
                <td class="text-lg font-bold border-r border-kBlack p-2"></td>
                <td class="text-lg font-bold border-r border-kBlack p-2">date confirmed</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">order no.</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">customer name</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">contact no</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">email</td>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="flex flex-col gap-y-2 p-3 bg-kWhite border border-kBlack lowercase">
    <div class="flex gap-x-3 p-3">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.87 5.6701L6.45 7.75012L4.89001 5.19012C4.32001 4.25012 4.62 3.01012 5.56 2.44012C6.5 1.87012 7.74 2.1701 8.31 3.1101L9.87 5.6701Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.82 9.16009L8.66 11.0801C6.82 12.2001 6.25999 14.4601 7.14999 16.2601L9.19999 20.4401C9.85999 21.7901 11.46 22.2601 12.74 21.4701L19.17 17.5601C20.46 16.7801 20.77 15.1501 19.88 13.9401L17.11 10.2001C15.91 8.58013 13.66 8.04009 11.82 9.16009Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10.7567 5.09815L5.63208 8.21875L7.71248 11.6351L12.8371 8.51455L10.7567 5.09815Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M14.31 16.8101L15.96 19.5201" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.75 18.3701L13.4 21.0801" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16.87 15.25L18.52 17.96" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <h1 class="text-base font-bold text-[#5C5959]">pending requests</h1>
    </div>
    <table class="table-auto border border-kBlack">
        <thead>
            <tr class="border-b border-kBlack">
                <td class="text-lg font-bold border-r border-kBlack p-2"></td>
                <td class="text-lg font-bold border-r border-kBlack p-2">date requested</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">order no.</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">customer name</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">contact no</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">email</td>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="flex flex-col gap-y-2 p-3 bg-kWhite border border-kBlack lowercase">
    <div class="flex gap-x-3 p-3">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.87 5.6701L6.45 7.75012L4.89001 5.19012C4.32001 4.25012 4.62 3.01012 5.56 2.44012C6.5 1.87012 7.74 2.1701 8.31 3.1101L9.87 5.6701Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.82 9.16009L8.66 11.0801C6.82 12.2001 6.25999 14.4601 7.14999 16.2601L9.19999 20.4401C9.85999 21.7901 11.46 22.2601 12.74 21.4701L19.17 17.5601C20.46 16.7801 20.77 15.1501 19.88 13.9401L17.11 10.2001C15.91 8.58013 13.66 8.04009 11.82 9.16009Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10.7567 5.09815L5.63208 8.21875L7.71248 11.6351L12.8371 8.51455L10.7567 5.09815Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M14.31 16.8101L15.96 19.5201" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.75 18.3701L13.4 21.0801" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16.87 15.25L18.52 17.96" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <h1 class="text-base font-bold text-[#5C5959]">confirmed requests</h1>
    </div>
    <table class="table-auto border border-kBlack">
        <thead>
            <tr class="border-b border-kBlack">
                <td class="text-lg font-bold border-r border-kBlack p-2"></td>
                <td class="text-lg font-bold border-r border-kBlack p-2">date requested</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">order no.</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">customer name</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">contact no</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">email</td>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="flex flex-col gap-y-2 p-3 bg-kWhite border border-kBlack lowercase">
    <div class="flex gap-x-3 p-3">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.87 5.6701L6.45 7.75012L4.89001 5.19012C4.32001 4.25012 4.62 3.01012 5.56 2.44012C6.5 1.87012 7.74 2.1701 8.31 3.1101L9.87 5.6701Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.82 9.16009L8.66 11.0801C6.82 12.2001 6.25999 14.4601 7.14999 16.2601L9.19999 20.4401C9.85999 21.7901 11.46 22.2601 12.74 21.4701L19.17 17.5601C20.46 16.7801 20.77 15.1501 19.88 13.9401L17.11 10.2001C15.91 8.58013 13.66 8.04009 11.82 9.16009Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10.7567 5.09815L5.63208 8.21875L7.71248 11.6351L12.8371 8.51455L10.7567 5.09815Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M14.31 16.8101L15.96 19.5201" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.75 18.3701L13.4 21.0801" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16.87 15.25L18.52 17.96" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <h1 class="text-base font-bold text-[#5C5959]">order history</h1>
    </div>
    <table class="table-auto border border-kBlack">
        <thead>
            <tr class="border-b border-kBlack">
                <td class="text-lg font-bold border-r border-kBlack p-2"></td>
                <td class="text-lg font-bold border-r border-kBlack p-2">date</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">order no.</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">customer name</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">contact no</td>
                <td class="text-lg font-bold border-r border-kBlack p-2">email</td>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
            <tr class="border-b border-kBlack hover:bg-[#EEEEEE] cursor-pointer">
                <td class="text-base border-r border-kBlack p-2 text-center"><input type="checkbox"></td>
                <td class="text-base border-r border-kBlack p-2 normal-case">August 10, 2024</td>
                <td class="text-base border-r border-kBlack p-2 uppercase">TELAPH-49052</td>
                <td class="text-base border-r border-kBlack p-2 normal-case">Jane Doe</td>
                <td class="text-base border-r border-kBlack p-2">+52 93485204</td>
                <td class="text-base border-r border-kBlack p-2">asadf@fdsa.com</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection