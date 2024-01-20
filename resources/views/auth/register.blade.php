@extends('layouts.app')


@section('title')
Register
@endsection

@section('content')

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full p-8 bg-white rounded shadow-md sm:w-96">
        <div class="flex items-center justify-center mb-4">

            <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                alt="Your Company">
            <h1 class="mt-2 mb-1 text-4xl font-semibold text-center text-gray-500">
                User Register</h1>
        </div>
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="flex items-center mb-2 text-sm font-bold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    Name
                </label>

                <input type="text" id="name" name="name" class="w-full p-2 border rounded" placeholder="your name">
                @error('name')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="flex items-center mb-2 text-sm font-bold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    Username
                </label>
                <input type="text" id="username" name="username" class="w-full p-2 border rounded"
                    placeholder="your username">
                @error('username')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="flex items-center mb-2 text-sm font-bold text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
                    </svg>
                    email
                </label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded" placeholder="your email">
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
                    placeholder="your password">
                @error('password')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2 text-sm font-bold text-gray-700">Repeat
                    Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="w-full p-2 border rounded" placeholder="repeat your password">
                @error('password_confirmation')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline-green active:bg-green-800">
                Register
            </button>
        </form>
        <div class="mt-4">
            <p class="text-sm">Already an account? <a href="{{ route('login.index') }}"
                    class="text-blue-500 hover:text-blue-700">Log In</a></p>
        </div>
    </div>
</div>

@endsection