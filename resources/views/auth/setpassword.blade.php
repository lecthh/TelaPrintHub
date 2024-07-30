@extends('layout.layout')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-kWhite font-dm-sans px-4 py-7">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Create Password</h2>
        <form method="POST" action="{{ route('setpasswordPost') }}">
            @csrf
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required autofocus class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @if($errors->has('password'))
                <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="mb-6">
                <label for="confirmpassword" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input type="password" id="confirmpassword" name="confirmpassword" required class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                @if($errors->has('confirmpassword'))
                <span class="text-red-500 text-sm">{{ $errors->first('confirmpassword') }}</span>
                @endif
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg shadow-md font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Set Password</button>
            </div>
        </form>
    </div>
</div>
@endsection