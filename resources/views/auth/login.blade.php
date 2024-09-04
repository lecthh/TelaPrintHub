@extends('layout.business-layout')

@section('content')
<div class="flex px-6 py-[56px] gap-x-3 lowercase justify-center">
    @if($errors->has('error'))
    <div class="text-red-500 text-sm mb-4">{{ $errors->first('error') }}</div>
    @endif
    <form method="POST" action="{{ route('login.post') }}" class="flex flex-col px-6 py-8 border border-kBlack justify-center items-center text-center gap-y-3">
        @csrf
        <h1 class="text-xl font-bold">business hub login</h1>
        <div class="flex flex-col gap-y-3 w-[612px]">
            <div class="flex flex-col gap-y-3">
                <h2 class="text-lg font-bold text-start">email</h2>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="flex flex-col gap-y-3">
                <h2 class="text-lg font-bold text-start">confirm password</h2>
                <input type="password" name="password" id="password" required>
                @if($errors->has('password'))
                <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>
        <div class="flex w-full">
            <button type="submit" class="flex flex-grow justify-center items-center p-2 text-kWhite bg-kBlack">login</button>
        </div>
    </form>
</div>

<!-- <div class="min-h-screen flex items-center justify-center bg-kWhite font-dm-sans px-4 py-7">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>

        @if($errors->has('error'))
        <div class="text-red-500 text-sm mb-4">{{ $errors->first('error') }}</div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required autofocus class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ old('email') }}">
                @if($errors->has('email'))
                <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @if($errors->has('password'))
                <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full text-white py-3 rounded-lg shadow-md font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Login</button>
            </div>
        </form>
    </div>
</div> -->

@if($errors->any())
<div class="text-red-500 text-sm">
    @foreach($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif

@endsection