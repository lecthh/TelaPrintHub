@extends('layout.designer-layout')
@vite('resources/css/app.css')

@section('content')
@include('layout.dashboard-layout')
<div class="flex flex-col gap-y-3 p-3 bg-kWhite border border-kBlack lowercase">
    <div class="flex gap-x-3">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M9.87006 5.6701L6.45006 7.75012L4.89007 5.19012C4.32007 4.25012 4.62006 3.01012 5.56006 2.44012C6.50006 1.87012 7.74006 2.1701 8.31006 3.1101L9.87006 5.6701Z"
                stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M11.8201 9.16009L8.66012 11.0801C6.82012 12.2001 6.26011 14.4601 7.15011 16.2601L9.20011 20.4401C9.86011 21.7901 11.4601 22.2601 12.7401 21.4701L19.1701 17.5601C20.4601 16.7801 20.7701 15.1501 19.8801 13.9401L17.1101 10.2001C15.9101 8.58013 13.6601 8.04009 11.8201 9.16009Z"
                stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M10.7567 5.09815L5.63208 8.21875L7.71248 11.6351L12.8371 8.51455L10.7567 5.09815Z" stroke="#171717"
                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M14.3101 16.8101L15.9601 19.5201" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M11.75 18.3701L13.4 21.0801" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M16.8701 15.25L18.5201 17.96" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
        <h1 class="lowercase font-bold text-base text-[#5C5959]">confirmed requests</h1>
    </div>
    <table class="border border-kBlack">
        <thead>
            <tr class="">
                <td class="p-2 border border-kBlack"></td>
                <td class="p-2 border border-kBlack font-bold">date confirmed</td>
                <td class="p-2 border border-kBlack font-bold">order no.</td>
                <td class="p-2 border border-kBlack font-bold">customer reference</td>
                <td class="p-2 border border-kBlack font-bold">contact no.</td>
                <td class="p-2 border border-kBlack font-bold">email address</td>
            </tr>
        </thead>
        <tbody>
            @if($confirmedOrders->isEmpty())
            <tr>
                <td colspan="6" class="text-center p-2 text-red-500">No Confirmed Orders</td>
            </tr>
            @else
            @foreach($confirmedOrders as $orderPlacement)
            <tr class="hover:bg-gray-100 cursor-pointer" data-url="{{ route('order-confirmed-details', ['order_placement_ID' => $orderPlacement->order_placement_ID]) }}">
                <td class="p-2 border border-kBlack text-center">
                    <input type="checkbox" name="selected_orders[]" value="{{ $orderPlacement->order->order_ID }}">
                </td>
                <td class="p-2 border border-kBlack capitalize">{{ $orderPlacement->created_at->format('d F, Y') }}</td>
                <td class="p-2 border border-kBlack uppercase">{{ $orderPlacement->order->order_ID }}</td>
                <td class="p-2 border border-kBlack capitalize">{{ $orderPlacement->userDetails->name }}</td>
                <td class="p-2 border border-kBlack capitalize">{{ $orderPlacement->userDetails->contact_information }}</td>
                <td class="p-2 border border-kBlack lowercase">{{ $orderPlacement->userDetails->email }}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    <div class="flex justify-end">
        <div class="inline-block">
            <div class="flex gap-x-1">
                <a href="" class="p-2 border border-kBlack text-center">1</a>
                <a href="" class="p-2 border border-kBlack text-center">2</a>
                <a href="" class="p-2 border border-kBlack text-center">3</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const rows = document.querySelectorAll('tr[data-url]');

        rows.forEach(row => {
            row.addEventListener('click', function() {
                window.location.href = row.getAttribute('data-url');
            });
        });
    });
</script>
@endsection