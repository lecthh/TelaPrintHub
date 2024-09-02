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