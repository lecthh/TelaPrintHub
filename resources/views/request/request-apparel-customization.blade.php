@extends('layout.layout')

@section('content')
<div class="bg-kWhite px-8 py-10">
    <form method="POST" action="{{ route('request-apparel-customization-post') }}" enctype="multipart/form-data" class="flex flex-col gap-y-10">
        @csrf
        <div class="flex flex-col gap-y-4">
            <label for="images" class="text-kBlack text-base font-medium">Upload Images</label>
            <input type="file" name="images[]" id="images" accept="image/*" class="file-input w-full border rounded p-2 text-kBlack" multiple>

            <label for="description">
                <textarea name="description" id="description" rows="5" cols="80" placeholder="Enter your description here"></textarea>
            </label>
        </div>

        <div class="inline-flex justify-end">
            <button type="submit" class="bg-kBlack flex lowercase justify-around items-center text-kWhite text-base p-3">
                <p>Next</p>
            </button>
        </div>
    </form>
</div>
@if($errors->any())
<div class="text-red-500 text-sm">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection