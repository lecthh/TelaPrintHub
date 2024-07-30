@extends('layout.layout')

@section('content')
<div class="bg-kWhite font-dm-sans px-6 py-10 flex justify-between gap-x-8">
    <div class="flex flex-col gap-y-6">
        <h1 class="text-4xl font-bold">Contact us</h1>
        <p class="max-w-[700]">We’re here to help you with any questions or concerns you might have. Whether you need assistance with your order, have a general inquiry, or just want to provide feedback, our team is ready to assist you. Reach out to us through any of the following methods, and we’ll get back to you as soon as possible.</p>
    </div>
    <div class="flex flex-col gap-y-6">
        <h1 class="text-4xl font-bold">Say hello!</h1>
        <div class="flex flex-col gap-y-3">
            <div class="flex gap-x-3">
                <div class="flex flex-col w-[284]">
                    <h3 class="font-medium text-lg">Name</h3>
                    <input type="text" class="text-kGray" placeholder="Jane Doe">
                </div>
                <div class="flex flex-col w-[284]">
                    <h3 class="font-medium text-lg">Subject</h3>
                    <input type="text" class="text-kGray" placeholder="Subject name">
                </div>
            </div>
            <div class="flex gap-x-3">
                <div class="flex flex-col w-[284]">
                    <h3 class="font-medium text-lg">Email address</h3>
                    <input type="text" class="text-kGray" placeholder="jane@example.com">
                </div>
                <div class="flex flex-col w-[284]">
                    <h3 class="font-medium text-lg">Company</h3>
                    <input type="text" class="text-kGray" placeholder="Company name">
                </div>
            </div>
            <div class="flex flex-col">
                <h3 class="font-medium text-lg">Message</h3>
                <textarea name="" id="" class="text-kGray">Input message here...</textarea>
            </div>
        </div>
    </div>
</div>
@endsection