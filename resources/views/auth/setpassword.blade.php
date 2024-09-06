@extends('layout.business-layout')

@section('content')
<div class="flex px-6 py-[56px] gap-x-3 lowercase justify-center">
    <form method="POST" action="{{ route('setpassword.post') }}" class="flex flex-col px-6 py-8 border border-kBlack justify-center items-center text-center gap-y-3">
        @csrf
        <h1 class="text-xl font-bold">create password</h1>
        <div class="flex flex-col gap-y-3 w-[612px]">
            <div class="flex flex-col gap-y-3">
                <h2 class="text-lg font-bold text-start">password</h2>
                <input type="password" name="password" id="password" required>
                @if($errors->has('password'))
                <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="flex flex-col gap-y-3">
                <h2 class="text-lg font-bold text-start">confirm password</h2>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
                @if($errors->has('password_confirmation'))
                <span class="text-red-500 text-sm">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">
        </div>
        <div class="flex w-full">
            <button type="submit" class="flex flex-grow justify-center items-center p-2 text-kWhite bg-kBlack">set password</button>
        </div>
    </form>
</div>
<!-- <div class="min-h-screen flex items-center justify-center bg-kWhite font-dm-sans px-4 py-7">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Create Password</h2>
        <form method="POST" action="{{ route('setpassword.post') }}">
            @csrf
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required autofocus class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @if($errors->has('password'))
                <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @if($errors->has('password_confirmation'))
                <span class="text-red-500 text-sm">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg shadow-md font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Set Password</button>
            </div>
        </form>
    </div>
</div> -->
@endsection