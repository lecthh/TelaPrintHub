@extends('layout.layout')

@section('content')
<div class="bg-kWhite flex flex-col gap-y-6 px-8 py-10 font-dm-sans">
    <div class="flex gap-x-3 items-center">
        <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Business sign up</h1>
        <p class="text-kBlack text-base max-w-[1400]">We’re excited to expand our network of printing partners and collaborate with top-quality businesses like yours. By joining our network, you’ll gain access to a diverse range of print requests and opportunities to grow your business. Follow the simple steps below to get started!</p>
    </div>
    <div class="bg-kLightGray p-3 flex flex-col rounded-md items-center gap-y-4">
        <h1 class="font-semibold text-lg">I am a...</h1>
        <!-- make state -->
        <div class="flex gap-x-4 w-full">
            <a href="" class="bg-kWhite flex-1 p-3 gap-x-4 rounded-md text-kBlack border border-kBlack text-center transition hover:bg-kBlack hover:text-kWhite">
                Designer
            </a>
            <a href="" class="bg-kWhite flex-1 p-3 gap-x-4 rounded-md text-kBlack border border-kBlack text-center transition hover:bg-kBlack hover:text-kWhite">
                Printer/Tailor
            </a>
        </div>
    </div>
    <div class="flex">
        <form method="POST" action="{{ route('become-a-partner.post') }}" class="flex flex-grow flex-col gap-y-3">
            @csrf
            <div class="flex flex-col gap-y-3">
                <div class="flex flex-col">
                    <label for="company_name" class="text-lg font-medium">* Company name</label>
                    <input type="text" id="company_name" name="company_name" class="text-normal text-kGray focus:outline-none" placeholder="VanJam" required>
                </div>
                <div class="flex flex-col">
                    <label for="email" class="text-lg font-medium">* Email address</label>
                    <input type="email" id="email" name="email" class="focus:outline-none text-normal text-kGray" placeholder="VanJam@example.com" required>
                </div>
                <div class="flex flex-col">
                    <label for="phone_number" class="text-lg font-medium">* Phone number</label>
                    <div class="flex gap-x-2">
                        <select name="country_code" id="country_code" class="focus:outline-none text-normal w-[170]" required>
                            @foreach ($countryCodes as $country)
                            <option value="{{ $country->code }}">
                                {{ $country->flag_emoji }} {{ $country->name }} | {{ $country->code }}
                            </option>
                            @endforeach
                        </select>
                        <input type="text" id="phone_number" name="phone_number" class="focus:outline-none text-normal text-kGray" placeholder="123-456" required>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Register</button>
            </div>
        </form>
    </div>
    <div class="flex flex-grow">

    </div>
</div>
</div>
@endsection