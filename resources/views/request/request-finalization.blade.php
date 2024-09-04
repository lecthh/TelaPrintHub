@extends('layout.layout')

@section('content')
<div class="flex gap-x-6">
    <form method="POST" action="{{ route('request-finalization-post') }}" class="flex flex-col flex-grow px-6 py-3 gap-y-6 lowercase w-1/2">
        @csrf
        <div class="flex flex-col gap-y-6 px-6 py-3">
            <h1 class="text-xl font-bold">request a print</h1>
            <div class="flex flex-col gap-y-7">
                <h1 class="text-lg font-bold">contact details</h1>
                <div class="flex flex-col gap-y-3">
                    <div class="flex gap-x-3">
                        <div class="flex flex-col gap-y-3 flex-grow">
                            <h1 class="text-lg font-semibold">first name</h1>
                            <input type="text" name="first_name" id="" class="" required>
                            @error('first_name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-y-3 flex-grow">
                            <h1 class="text-lg font-semibold">last name</h1>
                            <input type="text" name="last_name" id="" class="" required>
                            @error('last_name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-lg font-semibold">email address</h1>
                        <input type="email" name="email" id="" class="" required>
                        @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-y-3">
                        <h1 class="text-lg font-semibold">phone number</h1>
                        <div class="flex gap-x-2">
                            <select name="country_code" id="" class="w-[230px]">
                                @foreach ($countryCodes as $country)
                                <option value="{{ $country->code }}" {{ $country->code == '+63' ? 'selected' : '' }}>
                                    {{ $country->flag_emoji }} {{ $country->name }} | {{ $country->code }}
                                </option>
                                @endforeach
                            </select>
                            <input type="text" id="phone_number" name="phone_number" placeholder="123-456" class="flex-grow"
                                value="{{ old('phone_number') }}" required>
                            @error('phone_number')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-3">
                        <h1 class="text-lg font-semibold">choose your preferred mode of communication</h1>
                        <div class="flex gap-x-6">
                            @foreach($preferredCommunicationsType as $communication)
                            <div class="flex gap-y-2">
                                <label for="{{ $communication->name }}" class="flex gap-x-1 normal-case items-center">
                                    <input type="checkbox" name="contact-method[]" id="{{ $communication->name }}" value="{{ $communication->preferred_communication_type_ID }}">
                                    {{ $communication->name }}
                                </label>
                            </div>
                            @endforeach
                            @error('contact-method')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="inline-flex justify-start">
                <button type="submit"
                    class="bg-kBlack font-base flex p-2 justify-around items-center text-kWhite text-base">
                    <p>confirm</p>
                </button>
            </div>
        </div>

        <div class="flex justify-center items-center px-12">
            <div class="flex items-center justify-center">
                <div class="flex w-[30px] h-[30px] rounded-full border-2 border-kBlack bg-kWhite items-center justify-center text-kBlack">
                    <h1 class="text-base font-bold">1</h1>
                </div>
                <svg width="80" height="2" viewBox="0 0 80 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="1" x2="80" y2="1" stroke="black" stroke-width="2" />
                </svg>
            </div>
            <div class="flex items-center justify-center">
                <div
                    class="flex w-[30px] h-[30px] rounded-full border-2 border-kBlack bg-kWhite items-center justify-center text-kBlack">
                    <h1 class="text-base font-bold">2</h1>
                </div>
                <svg width="80" height="2" viewBox="0 0 80 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="1" x2="80" y2="1" stroke="black" stroke-width="2" />
                </svg>
            </div>
            <div class="flex items-center justify-center">
                <div
                    class="flex w-[30px] h-[30px] rounded-full border-2 border-kBlack bg-kBlack items-center justify-center text-kWhite">
                    <h1 class="text-base font-bold">3</h1>
                </div>
            </div>
        </div>
        <input type="hidden" name="uploadedImagePath" value="{{$uploadedImagePath}}">
    </form>

    <div class="flex flex-col flex-grow px-6 py-3 gap-y-6 lowercase w-1/2">
        <h1 class="font-bold text-xl">review order</h1>
        <div class="flex flex-col gap-y-7">
            <div class="flex flex-col gap-y-2">
                <h1 class="text-lg font-semibold">order details</h1>
                <div class="w-[500px] h-[300px] border border-kBlack bg-kViolet overflow-hidden">
                    @if($uploadedImagePath)
                    <img src="{{ asset($uploadedImagePath) }}" alt="Uploaded Image" class="w-full h-full object-cover border">
                    @else
                    <p class="text-red-700 text-base">Error Uploading image, Please retry the customization process again</p>
                    @endif
                </div>
            </div>
            <div class="flex flex-col gap-y-1">
                <div class="flex">
                    <h1 class="text-lg font-bold flex flex-grow">company:</h1>
                    <h1 class="text-lg normal-case flex flex-grow text-end">{{ $selectedCompany->name }}</h1>
                </div>
                <div class="flex">
                    <h1 class="text-lg font-bold flex flex-grow">apparel:</h1>
                    <h1 class="text-lg normal-case flex flex-grow text-end">{{ $selectedCategory->name }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection