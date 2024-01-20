@extends('layouts.app')


@section('title')
LogIn
@endsection

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-300">
    <div class="w-full p-8 bg-white rounded shadow-md sm:w-96">

        <div class="flex items-center justify-center mb-4">
            <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                alt="Your Company">
            <h2 class="text-2xl font-semibold">Login</h2>
        </div>

        <form action="{{ route('login.store') }}" method="POST" novalidate>
            @csrf

            <div class="mb-4">
                <label for="email" class="flex items-center mb-2 text-sm font-bold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>

                    Email
                </label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded" placeholder="email">
                @error('email')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="flex items-center mb-2 text-sm font-bold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>

                    Password
                </label>
                <input type="password" id="password" name="password" class="w-full p-2 border rounded"
                    placeholder="password">
                @error('password')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                Log in
            </button>
        </form>
        <div class="mt-4">
            <a href="{{ route('register.index') }}" class="text-sm text-blue-500 hover:text-blue-700">Forgot
                Password?</a>
        </div>
    </div>
</div>

@endsection