@extends('layout.businesshub-layout')
@vite('resources/css/app.css')

@section('content')
<h1 class="font-bold text-xl normal-case">Hello, Designer!</h1>
<form action="" class="flex border border-kBlack bg-kWhite p-3 gap-x-3">
    <label for="profile_pic_update" class="min-w-[200px]">
        <img src="/img/profile.jpg" alt="" class="w-[200px] h-[200px] rounded-full border border-kBlack">
        <input type="file" name="profile_pic" id="profile_pic_update" hidden>
    </label>
    <div class="flex flex-col gap-y-5 flex-grow">
        <div class="flex flex-col border border-kBlack p-3 gap-y-3">
            <div class="flex justify-between">
                <h1 class="text-lg font-bold normal-case text-[#5C5959]">About Jane Doe</h1>
            </div>
            <textarea class="flex border-none" rows="5" id="about" placeholder="Tell us about yourself">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, recusandae molestiae alias provident sint itaque. Eos odio maiores velit voluptas, deserunt modi quo impedit repellat est soluta, quis laboriosam sed?</textarea>
        </div>
        <div class="flex flex-col border border-kBlack p-3 gap-y-3">
            <div class="flex justify-between">
                <h1 class="text-lg font-bold normal-case text-[#5C5959]">Jane's Gallery</h1>
                <button>
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.03125 8.5H11.5312" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.03125 16.5H8.03125" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.5312 16.5H14.5312" stroke="#171717" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M22.0312 12.03V16.11C22.0312 19.62 21.1412 20.5 17.5912 20.5H6.47125C2.92125 20.5 2.03125 19.62 2.03125 16.11V7.89C2.03125 4.38 2.92125 3.5 6.47125 3.5H14.5312"
                            stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19.1115 4.13031L15.4015 7.84031C15.2615 7.98031 15.1215 8.26031 15.0915 8.46031L14.8915 9.88031C14.8215 10.3903 15.1815 10.7503 15.6915 10.6803L17.1115 10.4803C17.3115 10.4503 17.5915 10.3103 17.7315 10.1703L21.4415 6.46031C22.0815 5.82031 22.3815 5.08031 21.4415 4.14031C20.4915 3.19031 19.7515 3.49031 19.1115 4.13031Z"
                            stroke="#171717" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18.5811 4.66016C18.9011 5.79016 19.7811 6.67016 20.9011 6.98016" stroke="#171717"
                            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="flex gap-x-3">
                <div class="w-[200px] h-[190px] border border-kBlack bg-kViolet"></div>
                <div class="w-[200px] h-[190px] border border-kBlack bg-kViolet"></div>
                <div class="w-[200px] h-[190px] border border-kBlack bg-kViolet"></div>
            </div>
        </div>
        <div class="flex flex-col border border-kBlack p-3 gap-y-3">
            <div class="flex justify-between">
                <h1 class="text-lg font-bold normal-case text-[#5C5959]">Personal Information</h1>
            </div>
            <div class="flex flex-col gap-y-1 w-1/2">
                <div class="flex justify-between normal-case font-semibold">
                    <h1>Name:</h1>
                    <h1 id="name" contenteditable="true">Jane Doe</h1>
                </div>
                <div class="flex justify-between normal-case font-semibold">
                    <h1>Email:</h1>
                    <h1 id="email" contenteditable="true">jane@gmail.com</h1>
                </div>
                <div class="flex justify-between normal-case font-semibold">
                    <h1>Mobile no:</h1>
                    <h1 id="number" contenteditable="true">+63 0954 234 2345</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-x-3 p-3 border border-kBlack">
            <div class="flex gap-x-3 p-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.02 19.5H7.5C6.88 19.5 6.33 19.48 5.84 19.41C3.21 19.12 2.5 17.88 2.5 14.5V9.5C2.5 6.12 3.21 4.88 5.84 4.59C6.33 4.52 6.88 4.5 7.5 4.5H10.96"
                        stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M15.02 4.5H16.5C17.12 4.5 17.67 4.52 18.16 4.59C20.79 4.88 21.5 6.12 21.5 9.5V14.5C21.5 17.88 20.79 19.12 18.16 19.41C17.67 19.48 17.12 19.5 16.5 19.5H15.02"
                        stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15 2V22" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M8 8.5V15.5" stroke="#171717" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

                <div class="flex flex-col gap-y-3 w-full">
                    <h1 class="font-bold text-base text-[#5C5959]">action</h1>
                    <div class="flex gap-x-3 justify-end">
                        <button class="p-2 border border-kBlack" id="discardButton">discard changes</button>
                        <button class="text-kWhite p-2 bg-kblack" id="updateButton">update changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const originalAboutText = document.getElementById('about').value;
        const originalName = document.getElementById('name').innerText;
        const originalEmail = document.getElementById('email').innerText;
        const originalNumber = document.getElementById('number').innerText;

        const aboutTextArea = document.getElementById('about');
        const nameField = document.getElementById('name');
        const emailField = document.getElementById('email');
        const numberField = document.getElementById('number');

        const discardButton = document.getElementById('discardButton');
        const updateButton =document.getElementById('updateButton');

        //discard
        discardButton.addEventListener('click', () => {
            aboutTextArea.value = originalAboutText;
            nameField.innerText = originalName;
            emailField.innterText =originalEmail;
            numberField.innerText = originalNumber;
        });
    });
</script>