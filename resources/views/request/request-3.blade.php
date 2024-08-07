@extends('layout.layout')

@section('content')
<div class="bg-kWhite px-8 py-10">
    <form action="" class="flex flex-col gap-y-10">
        <div class="flex flex-col gap-y-3">
            <div class="flex gap-x-3 items-center">
                <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Contact details</h1>
                <p class="text-kBlack text-base max-w-[1400]">Fill in your contact details so we can reach you with updates about your order and any necessary communications.</p>
            </div>
            <div class="flex gap-x-3 w-1/2">
                <div class="flex flex-col flex-1">
                    <h3 class="font-medium text-lg">First name</h3>
                    <input type="text" class="text-kGray rounded-md focus:outline-none focus:ring-0 focus:border-kBlack" placeholder="Jane">
                </div>
                <div class="flex flex-col flex-1">
                    <h3 class="font-medium text-lg">Last name</h3>
                    <input type="text" class="text-kGray rounded-md focus:outline-none focus:ring-0 focus:border-kBlack" placeholder="Doe">
                </div>
            </div>
            <div class="flex gap-x-3 w-1/2">
                <div class="flex flex-col flex-1">
                    <h3 class="font-medium text-lg">Email</h3>
                    <input type="email" class="text-kGray rounded-md focus:outline-none focus:ring-0 focus:border-kBlack" placeholder="jane@example.com">
                </div>
                <div class="flex flex-col gap-x-2 flex-1">
                    <h3 class="font-medium text-lg">Phone number</h3>
                    <div class="flex gap-x-2">
                        <select name="country_code" id="" class="rounded-md focus:outline-none focus:ring-0 focus:border-kBlack text-normal w-[200px]">
                            @foreach ($countryCodes as $country)
                            <option value="{{ $country->code }}" {{ $country->code == '+63' ? 'selected' : '' }}>
                                {{ $country->flag_emoji }} {{ $country->name }} | {{ $country->code }}
                            </option>
                            @endforeach
                        </select>
                        <input type="number" id="phone_number" name="phone_number" class="rounded-md focus:outline-none focus:ring-0 focus:border-kBlack text-normal text-kGray" placeholder="123-456">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-y-3">
            <div class="flex gap-x-3 items-center">
                <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Review order</h1>
                <p class="text-kBlack text-base max-w-[1400]">Please review your order.</p>
            </div>
            <div class="flex gap-x-6">
                <div class="w-1/2">
                    <div class="bg-kBlack text-kWhite p-3 h-full">
                        IMAGE
                    </div>
                </div>
                <div class="w-1/2">
                    <div class="text-kBlack p-3 flex flex-col gap-y-2">
                        <h1 class="text-lg font-semibold">Order details:</h1>
                        <div class="flex flex-col gap-x-2 pb-2">
                            <h1 class="text-base font-semibold">Apparel: <span class="font-normal text-base text-kGray">{{ $selectedCategory }}</span></h1>
                            <h1 class="text-base font-semibold">Company: <span class="font-normal text-base text-kGray">{{ $selectedCompany->name }}</span></h1>
                        </div>

                        <hr>

                        <h1 class="text-lg font-semibold">Contact details:</h1>
                        <div class="flex flex-col gap-x-2 pb-2">
                            <h1 class="text-base font-semibold">Name: <span class="font-normal text-base text-kGray">Jane Doe</span></h1>
                            <h1 class="text-base font-semibold">Email: <span class="font-normal text-base text-kGray">jane@example.com</span></h1>
                            <h1 class="text-base font-semibold">Number: <span class="font-normal text-base text-kGray">8560386</span></h1>
                            <h1 class="text-base font-semibold">Preferred mode of contact: <span class="font-normal text-base text-kGray">WhatsApp</span></h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="inline-flex justify-end">
            <button type="submit" class="bg-kBlack font-semibold flex gap-x-2 justify-around items-center text-kWhite text-lg rounded-md p-3">
                <p>Confirm</p>
            </button>
        </div>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection