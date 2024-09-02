@extends('layout.layout')

@section('content')
<div class="bg-kWhite px-8 py-10">
    <form method="GET" action="{{ route('request-finalization') }}" class="flex flex-col gap-y-10">
        @csrf
        <div class="inline-flex justify-end">
            <button type="submit" class="bg-kBlack flex lowercase justify-around items-center text-kWhite text-base p-3">
                <p>Next</p>
            </button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection