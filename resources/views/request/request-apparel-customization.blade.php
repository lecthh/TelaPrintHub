@extends('layout.layout')

@section('content')
<div class="bg-kWhite px-8 py-10">
    <form method="POST" action="{{ route('request-apparel-customization-post') }}" class="flex flex-col gap-y-10">
        @csrf
        <div class="flex flex-col gap-y-3">
            <div class="flex gap-x-3 items-center">
                <h1 class="bg-kBlack text-lg text-kWhite font-semibold p-3 rounded-md">Customization</h1>
                <p class="text-kBlack text-base max-w-[1400]">Personalize your apparel with your unique design. Use the tools below to upload reference images, provide design details, and create your custom artwork. This is where you bring your vision to life.</p>
            </div>
            <div class="flex gap-x-3">
                <!-- Add customization fields here -->
            </div>
        </div>

        <div class="inline-flex justify-end">
            <button type="submit" class="bg-kBlack font-semibold flex gap-x-2 justify-around items-center text-kWhite text-lg rounded-md p-3">
                <p>Next</p>
                <svg width="21" height="9" viewBox="0 0 21 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.3441 5.11273C20.5445 4.92267 20.5528 4.6062 20.3627 4.40587L17.2656 1.14128C17.0755 0.94095 16.759 0.932622 16.5587 1.12268C16.3584 1.31274 16.35 1.62921 16.5401 1.82954L19.2931 4.7314L16.3913 7.48444C16.191 7.6745 16.1826 7.99097 16.3727 8.1913C16.5627 8.39163 16.8792 8.39996 17.0795 8.2099L20.3441 5.11273ZM0.986847 4.74983L19.9868 5.24982L20.0132 4.25017L1.01315 3.75017L0.986847 4.74983Z" fill="white" />
                </svg>
            </button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection