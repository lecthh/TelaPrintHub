@extends('layout.layout')

@section('content')
<div class="px-6 flex gap-x-6 justify-center lowercase">
    <div class="">
        <div class="w-[648px] h-[810px] flex flex-col justify-end items-center"
            style="background-image:url(/img/landing-1.png); background-size:cover;">
            <div class="w-[558] text-kWhite bg-kBlack bg-opacity-40 flex flex-col gap-y-3 p-3 mb-10">
                <h1 class="text-lg font-bold">transform your ideas into wearable art</h1>
                <p class="text-base">Choose a design that perfectly represents your vision from our extensive library or
                    upload your own unique artwork. Next, select from our trusted network of top-tier printing partners
                    who specialize in high-quality prints and reliable service. Finally, place your order and relax as
                    your custom apparel is expertly printed and delivered straight to your doorstep.</p>
                <div class="flex justify-end">
                    <a href="" class="flex items-center gap-x-2 justify-center">
                        <p class="text-base font-bold">request a print</p>
                        <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.6883 8.47546C21.0889 8.09535 21.1056 7.4624 20.7255 7.06174L14.5311 0.532564C14.151 0.131902 13.5181 0.115245 13.1174 0.495361C12.7167 0.875477 12.7001 1.50842 13.0802 1.90909L18.5863 7.71279L12.7826 13.2189C12.3819 13.599 12.3652 14.2319 12.7454 14.6326C13.1255 15.0333 13.7584 15.0499 14.1591 14.6698L20.6883 8.47546ZM0.973693 8.24965L19.9737 8.74965L20.0263 6.75034L1.02631 6.25035L0.973693 8.24965Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="w-[648px] h-[810px] flex flex-col justify-end items-center"
            style="background-image:url(/img/landing-2.png); background-size:cover;">
            <div class="w-[558] text-kWhite bg-kBlack bg-opacity-40 flex flex-col gap-y-4 p-3 mb-10">
                <h1 class="text-lg font-bold">How it works</h1>
                <div class="flex flex-col gap-2">
                    <h1 class="text-base">1. Create a design</h1>
                    <p class="text-base">Start by crafting a design that reflects your style and message. Use our
                        intuitive design tools to create something from scratch or choose from a variety of customizable
                        templates. Upload your own artwork or artwork, ensuring it’s exactly how you envision it.</p>
                </div>
                <div class="flex flex-col gap-2">
                    <h1 class="text-base">2. Choose a partner</h1>
                    <p class="text-base">Select from our curated list of trusted printing partners, each known for their
                        expertise and quality. Compare options based on printing techniques, materials, and customer
                        reviews to find the best fit for your needs. Our partners will ensure your design is printed
                        with precision and care.</p>
                </div>
                <div class="flex flex-col gap-2">
                    <h1 class="text-base">3. Wear</h1>
                    <p class="text-base">Once your order is placed, sit back and relax as your custom apparel is
                        expertly produced and delivered. When it arrives, try it on and enjoy your one-of-a-kind garment
                        that’s tailored just for you. Wear it with pride, knowing you’ve created something truly
                        special.</p>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="w-full relative flex items-center justify-center gap-x-3">
    <img src="/img/landing-3.png" alt="Slide 1" class="object-cover h-full w-auto" />
    <img src="/img/landing-4.png" alt="Slide 1" class="object-cover h-full w-auto" />
    <img src="/img/landing-5.png" alt="Slide 1" class="object-cover h-full w-auto" />
</div>

<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div class="relative p-4 w-full max-w-2xl max-h-full bg-white rounded-lg shadow dark:bg-gray-700">
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Your Partnership Request is Received!
            </h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                Thank you for your interest in becoming a partner with us! We are excited to explore the opportunity to collaborate with you.
            </p>
            <div class="bg-kLightGray p-3 flex items-center justify-center rounded-md">
                <p>A confirmation email has been sent to
                    @if(Session::has('partnership'))
                    <span class="font-semibold">{{ Session::get('partnership')['email'] }}</span>
                    @endif
                    with details about the next steps and additional information. Our team will review your application and reach out to you shortly.
                </p>
            </div>
            <p class="text-base">If you have any immediate questions or need further assistance, feel free to contact us. We look forward to a fruitful partnership!</p>
        </div>
        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
            <button data-modal-hide="default-modal" type="button" class="bg-kBlack font-semibold flex gap-x-2 justify-around items-center text-kWhite text-lg rounded-md p-3">
                <p>Close</p>
            </button>
        </div>
    </div>
</div>

<div id="request-confirmed" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div class="relative p-4 w-full max-w-2xl max-h-full bg-white rounded-lg shadow dark:bg-gray-700">
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Your Request Has Been Received!
            </h3>
            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="request-confirmed">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <div class="p-4 md:p-5 space-y-4">
            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                Thank you for submitting your print request! We're excited to start working on your custom apparel.
            </p>
            <div class="bg-kLightGray p-3 flex items-center justify-center rounded-md">
                @if(Session::has('request-confirmed'))
                <p>Your request has been successfully received and assigned the Reference Number:
                    <span class="font-semibold">{{ Session::get('request-confirmed')['tracking_number'] }}</span>
                    . Please keep this number for your records. A confirmation email has been sent to
                    <span class="font-semibold">{{ Session::get('request-confirmed')['email'] }}</span>
                    with details about your request and the next steps. If you have any questions or need further assistance, feel free to contact us.
                </p>
                @endif
            </div>
            <p class="text-base">If you have any immediate questions or need further assistance, feel free to contact us. We look forward to a fruitful partnership!</p>
        </div>
        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
            <button data-modal-hide="request-confirmed" type="button" class="bg-kBlack font-semibold flex gap-x-2 justify-around items-center text-kWhite text-lg rounded-md p-3">
                <p>Close</p>
            </button>
        </div>
    </div>
</div>

@if(Session::has('partnership') || Session::has('request-confirmed'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if(Session::has('partnership'))
        const defaultModal = document.getElementById('default-modal');
        if (defaultModal) {
            defaultModal.classList.remove('hidden');
        }
        @endif

        @if(Session::has('request-confirmed'))
        const requestConfirmedModal = document.getElementById('request-confirmed');
        if (requestConfirmedModal) {
            requestConfirmedModal.classList.remove('hidden');
        }
        @endif

        document.querySelectorAll('[data-modal-hide]').forEach((btn) => {
            btn.addEventListener('click', () => {
                const modal = document.getElementById(btn.getAttribute('data-modal-hide'));
                if (modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    });
</script>
@endif
@endsection