@csrf
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
  <div class="relative max-h-full w-full max-w-2xl rounded-lg bg-white p-4 shadow dark:bg-gray-700">
    <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5 dark:border-gray-600">
      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Cancel Order</h3>
      <button type="button" class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close modal</span>
      </button>
    </div>
    <div class="space-y-4 p-4 md:p-5">
      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">Please state the reason:</p>
      <textarea name="reasonCancellation" id="reasonCancellation" rows="5" class="border-kBlack w-full border p-2 " required></textarea>
      <p class="text-base">The customer will receive an email informing them that their order has been canceled.</p>
    </div>
    <div class="flex items-center justify-end rounded-b border-t border-gray-200 p-4 md:p-5 dark:border-gray-600">
      <button data-modal-hide="default-modal" type="button" class="bg-kBlack text-kWhite flex items-center justify-around gap-x-2 rounded-md p-3 text-lg font-semibold">
        <p>Cancel</p>
      </button>
      <button type="submit" class="bg-kBlack text-kWhite flex items-center justify-around gap-x-2 rounded-md p-3 text-lg font-semibold">
        <p>Confirm</p>
      </button>
    </div>
  </div>
  <input type="hidden" name="orderPlacementID" value="{{$orderPlacement->order_placement_ID}}">