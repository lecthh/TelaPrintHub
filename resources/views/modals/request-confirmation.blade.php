<div id="request-confirmed" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div class="relative max-h-full w-full max-w-2xl bg-white p-4 shadow dark:bg-gray-700">
        <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5 dark:border-gray-600">
            <h3 class="text-kBlack text-xl font-semibold">Your Request Has Been Received!</h3>
            <button type="button"
                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="request-confirmed">
                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <div class="space-y-4 p-4 md:p-5">
            <p class="text-base leading-relaxed text-kBlack">Thank you for submitting your print
                request! We're excited to start working on your custom apparel.</p>
            <div class="bg-kLightGray flex flex-col items-center justify-center rounded-md">
                @if(Session::has('request-confirmed'))
                    <p>
                        Your request has been successfully received and assigned the Reference Number:<span
                            class="font-semibold">{{ Session::get('request-confirmed')['tracking_number'] }}</span>.
                    </p>
                    <br />
                    <p>
                        A confirmation email has been sent to <span
                            class="font-semibold">{{ Session::get('request-confirmed')['email'] }}</span> with
                        details about your request and the next steps.
                    </p>
                @endif
            </div>
            <p class="text-base">If you have any immediate questions or need further assistance, feel free to contact
                us. We look forward to a fruitful partnership!</p>
        </div>
        <div class="flex items-center rounded-b border-t border-gray-200 p-4 md:p-5 dark:border-gray-600">
            <button data-modal-hide="request-confirmed" type="button"
                class="bg-kBlack text-kWhite flex items-center justify-around gap-x-2 p-2 text-base font-semibold">
                <p>close</p>
            </button>
        </div>
    </div>
</div>