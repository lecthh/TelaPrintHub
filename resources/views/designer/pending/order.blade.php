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
                <h1 class="text-base font-bold uppercase"> {{ $orderPlacement->userDetails->name }}</h1>
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
                <h1 class="text-base font-bold uppercase"> {{ $orderPlacement->userDetails->contact_information }}</h1>
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
                <h1 class="text-base font-bold normal-case">{{ $orderPlacement->userDetails->email }}</h1>
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
                <h1 class="text-base font-bold normal-case">{{$orderPlacement->order->apparelCategory->name}}</h1>
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
                <h1 class="text-base font-bold normal-case">{{ $orderPlacement->created_at->format('d F, Y') }}</h1>
            </div>
        </div>
    </div>

    <div class="flex w-full gap-x-3">
        <div class="w-[610px] h-[400px] border border-kBlack bg-kViolet">
            @if($Images->isNotEmpty())
            <img src="{{ asset($Images->first()->file_path) }}" alt="Large Image" class="w-full h-full object-cover cursor-pointer" onclick="openModal('{{ asset($Images->first()->file_path) }}')">
            @else
            <p class="text-center text-gray-500">No images available</p>
            @endif
        </div>

        <div class="flex flex-col flex-grow gap-y-3">
            <div class="flex gap-x-2 w-full">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.77199 19.7C7.59199 18.82 8.84199 18.89 9.56199 19.85L10.572 21.2C11.382 22.27 12.692 22.27 13.502 21.2L14.512 19.85C15.232 18.89 16.482 18.82 17.302 19.7C19.082 21.6 20.532 20.97 20.532 18.31V7.04C20.542 3.01 19.602 2 15.822 2H8.26199C4.48199 2 3.54199 3.01 3.54199 7.04V18.3C3.54199 20.97 5.00199 21.59 6.77199 19.7Z"
                        stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8.04199 7H16.042" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M9.04199 11H15.042" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <h1 class="font-bold text-[#5C5959]">order details</h1>
            </div>
            <div class="flex flex-col gap-y-2 h-full">
                <h1 class="font-bold">description</h1>
                @if($orderPlacement->order->description == null)
                <p class="p-2 border text-red-500 border-kBlack w-full h-full">No additional information provided</p>
                @else
                <p class="p-2 border border-kBlack w-full h-full">{{$orderPlacement->order->description}}</p>
                @endif
            </div>
            <div class="flex flex-col gap-y-2 h-full">
                <h1 class="font-bold">images</h1>
                <div class="flex gap-x-2">
                    @php
                    $smallImages = $Images->slice(1, 2); // Get the next 2 images for small display
                    @endphp
                    @foreach($smallImages as $image)
                    <div class="w-[135px] h-[150px] border border-kBlack bg-kViolet">
                        <img src="{{ asset($image->file_path) }}" alt="Small Image" class="w-full h-full object-cover cursor-pointer" onclick="openModal('{{ asset($image->file_path) }}')">
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

    <div class="flex flex-col gap-x-3 p-3 border border-kBlack">
        <div class="flex gap-x-3 p-3">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.02 19.5H7.5C6.88 19.5 6.33 19.48 5.84 19.41C3.21 19.12 2.5 17.88 2.5 14.5V9.5C2.5 6.12 3.21 4.88 5.84 4.59C6.33 4.52 6.88 4.5 7.5 4.5H10.96" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15.02 4.5H16.5C17.12 4.5 17.67 4.52 18.16 4.59C20.79 4.88 21.5 6.12 21.5 9.5V14.5C21.5 17.88 20.79 19.12 18.16 19.41C17.67 19.48 17.12 19.5 16.5 19.5H15.02" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15 2V22" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8 8.5V15.5" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <div class="flex flex-col gap-y-3 w-full">
                <h1 class="font-bold text-base text-[#5C5959]">action</h1>
                <div class="flex gap-x-3 justify-end">
                    <button class="p-2 border border-kBlack">cancel request</button>
                    <button class="text-kWhite p-2 bg-kblack">confirm request</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center" onclick="closeModal(event)">
    <span class="absolute top-2 right-2 text-white cursor-pointer text-xl">&times;</span>
    <img id="modalImage" class="max-w-full max-h-full">
</div>
<script>
    function openModal(src) {
        document.getElementById('modalImage').src = src;
        document.getElementById('imageModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('imageModal').classList.add('hidden');
    }
</script>
@endsection