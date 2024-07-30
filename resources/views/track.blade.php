@extends('layout.layout')
@section('content')
<div class="bg-kWhite font-dm-sans px-8 py-10 flex gap-x-8 justify-evenly">
    <div class="flex flex-col gap-y-3">
        <h1 class="font-bold text-3xl">Track my order</h1>
        <div class="flex flex-col">
            <h3 class="font-medium text-lg">Order no:</h3>
            <input type="text" class="font-normal text-lg text-kGray focus:outline-none" placeholder="TELAPH-J8tkdg">
        </div>
        <div class="flex flex-col">
            <h3 class="font-medium text-lg">Email address:</h3>
            <input type="email" class="font-normal text-lg text-kGray focus:outline-none" placeholder="jane@example.com">
        </div>
        <button type="submit" class="bg-kBlack text-kWhite rounded-md p-2">Track</button>
    </div>

    <!--if naa na search-->
    <div class="border-l-2 pl-10 flex flex-col gap-y-3">
        <h1 class="font-bold text-3xl">Order details</h1>
        <div class="flex flex-col gap-y-6">
            <div class="flex flex-col gap-y-3">
                <div class="flex flex-col">
                    <h3 class="font-medium text-lg">Order no:</h3>
                    <h4 class="font-normal text-lg text-kGray">TELAPH-J8tkdg</h4>
                </div>
                <div class="flex flex-col">
                    <h3 class="font-medium text-lg">Email address:</h3>
                    <h4 class="font-normal text-lg text-kGray">jane@example.com</h4>
                </div>
            </div>
            <div class="flex flex-col gap-y-3">
                <div class="flex flex-col">
                    <h3 class="font-medium text-lg">Order date:</h3>
                    <h4 class="font-normal text-lg text-kGray">July 20, 2024</h4>
                </div>
                <div class="flex flex-col">
                    <h3 class="font-medium text-lg">Order specifications:</h3>
                    <h4 class="font-normal text-lg text-kGray">20 Hoodies</h4>
                </div>
            </div>
            <div class="flex gap-x-10">
                <div class="flex flex-col">
                    <h3 class="font-medium text-lg">Producer:</h3>
                    <a href="">
                        <h4 class="font-normal text-lg text-kGray">VanJam</h4>
                    </a>
                    
                </div>
                <div class="flex flex-col">
                    <h3 class="font-medium text-lg">Designer:</h3>
                    <a href="">
                        <h4 class="font-normal text-lg text-kGray">VanJam</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-kWhite h-[260] px-6 py-10 flex flex-col gap-y-5 items-center justify-center">
    <div class="flex items-center">
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="48" height="48" rx="24" fill="#1F1F1F"/>
        <path d="M27.5 23.25H20.5C20.09 23.25 19.75 22.91 19.75 22.5C19.75 22.09 20.09 21.75 20.5 21.75H27.5C27.91 21.75 28.25 22.09 28.25 22.5C28.25 22.91 27.91 23.25 27.5 23.25Z" fill="white"/>
        <path d="M28 34.3199C27.66 34.3199 27.32 34.22 27.03 34.03L22.77 31.1899H19C15.56 31.1899 13.25 28.8799 13.25 25.4399V19.4399C13.25 15.9999 15.56 13.6899 19 13.6899H29C32.44 13.6899 34.75 15.9999 34.75 19.4399V25.4399C34.75 28.6199 32.77 30.84 29.75 31.15V32.5699C29.75 33.2199 29.4 33.8099 28.83 34.1099C28.57 34.2499 28.28 34.3199 28 34.3199ZM19 15.1799C16.42 15.1799 14.75 16.8499 14.75 19.4299V25.4299C14.75 28.0099 16.42 29.6799 19 29.6799H23C23.15 29.6799 23.29 29.7199 23.42 29.8099L27.87 32.77C27.98 32.84 28.08 32.81 28.13 32.78C28.18 32.75 28.26 32.6899 28.26 32.5599V30.4299C28.26 30.0199 28.6 29.6799 29.01 29.6799C31.59 29.6799 33.26 28.0099 33.26 25.4299V19.4299C33.26 16.8499 31.59 15.1799 29.01 15.1799H19Z" fill="white"/>
        </svg>

        <svg width="24" height="2" viewBox="0 0 24 2" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line y1="1" x2="24" y2="1" stroke="black" stroke-width="2"/>
        </svg>
        
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="1" y="1" width="46" height="46" rx="23" fill="white"/>
        <rect x="1" y="1" width="46" height="46" rx="23" stroke="black" stroke-width="2"/>
        <path d="M24 12C17.37 12 12 17.37 12 24C12 26.25 12.63 28.38 13.74 30.18C15.81 33.66 19.62 36 24 36C28.38 36 32.19 33.66 34.26 30.18C35.37 28.38 36 26.25 36 24C36 17.37 30.63 12 24 12ZM29.91 23.01L23.52 28.92C23.1 29.31 22.53 29.52 21.99 29.52C21.42 29.52 20.85 29.31 20.4 28.86L17.43 25.89C16.56 25.02 16.56 23.58 17.43 22.71C18.3 21.84 19.74 21.84 20.61 22.71L22.05 24.15L26.85 19.71C27.75 18.87 29.19 18.93 30.03 19.83C30.87 20.73 30.81 22.17 29.91 23.01Z" fill="#1F1F1F"/>
        </svg>

        <svg width="24" height="2" viewBox="0 0 24 2" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line y1="1" x2="24" y2="1" stroke="black" stroke-width="2"/>
        </svg>

        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="48" height="48" rx="24" fill="#1F1F1F"/>
        <path d="M20 14V17" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M28 14V17" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M19 23H27" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M19 27H24" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M27 34H21C16 34 15 31.94 15 27.82V21.65C15 16.95 16.67 15.69 20 15.5H28C31.33 15.68 33 16.95 33 21.65V28" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M33 28L27 34V31C27 29 28 28 30 28H33Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <svg width="24" height="2" viewBox="0 0 24 2" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line y1="1" x2="24" y2="1" stroke="black" stroke-width="2"/>
        </svg>

        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="48" height="48" rx="24" fill="#1F1F1F"/>
        <path d="M14 24.94V27C14 32 16 34 21 34H27C32 34 34 32 34 27V21C34 16 32 14 27 14H21C16 14 14 16 14 21" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M20.42 22.9C21.4804 22.9 22.34 22.0404 22.34 20.98C22.34 19.9196 21.4804 19.06 20.42 19.06C19.3596 19.06 18.5 19.9196 18.5 20.98C18.5 22.0404 19.3596 22.9 20.42 22.9Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M20.42 28.94C21.4804 28.94 22.34 28.0804 22.34 27.02C22.34 25.9596 21.4804 25.1 20.42 25.1C19.3596 25.1 18.5 25.9596 18.5 27.02C18.5 28.0804 19.3596 28.94 20.42 28.94Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M29.4999 20.7L22.1599 26.19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M29.4999 27.28L22.1599 21.79" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <svg width="24" height="2" viewBox="0 0 24 2" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line y1="1" x2="24" y2="1" stroke="black" stroke-width="2"/>
        </svg>

        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="48" height="48" rx="24" fill="#1F1F1F"/>
        <path d="M19.25 19H28.75V17C28.75 15 28 14 25.75 14H22.25C20 14 19.25 15 19.25 17V19Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M28 27V31C28 33 27 34 25 34H23C21 34 20 33 20 31V27H28Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M33 22V27C33 29 32 30 30 30H28V27H20V30H18C16 30 15 29 15 27V22C15 20 16 19 18 19H30C32 19 33 20 33 22Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M29 27H27.79H19" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M19 23H22" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

        <svg width="24" height="2" viewBox="0 0 24 2" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line y1="1" x2="24" y2="1" stroke="black" stroke-width="2"/>
        </svg>

        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="48" height="48" rx="24" fill="#1F1F1F"/>
        <path d="M15.1699 19.44L23.9999 24.55L32.7699 19.47" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M24 33.61V24.54" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M21.9299 14.48L16.5899 17.44C15.3799 18.11 14.3899 19.79 14.3899 21.17V26.82C14.3899 28.2 15.3799 29.88 16.5899 30.55L21.9299 33.52C23.0699 34.15 24.9399 34.15 26.0799 33.52L31.4199 30.55C32.6299 29.88 33.6199 28.2 33.6199 26.82V21.17C33.6199 19.79 32.6299 18.11 31.4199 17.44L26.0799 14.47C24.9299 13.84 23.0699 13.84 21.9299 14.48Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
    

    <div class="flex flex-col items-center">
        <h4 class="text-lg font-medium">Order confirmed!</h4>
        <h5 class="text-sm font-normal">Last updated: July 26, 2024</h5>
    </div>

</div>
@endsection