@extends('layouts.app')


@section('title')
Add Supplier Form
@endsection

@section('content')

<div class="flex items-center justify-center min-h-screen ">
    <div class="w-full p-8 bg-blue-300 rounded shadow-md sm:w-96">
        <h1 class="mb-4 text-4xl font-semibold text-center text-white">Enter Supplier</h1>
        <form action="{{ route('supplier.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="supplier" class="block mb-2 text-sm font-bold text-white">Supplier name</label>
                <input type="text" id="supplier" name="supplier" class="w-full p-2 border rounded"
                    placeholder="enter a supplier name">
                @error('supplier')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="address" class="block mb-2 text-sm font-bold text-white">Address</label>
                <input type="text" id="address" name="address" class="w-full p-2 border rounded"
                    placeholder="write the address">
                @error('address')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="phone" class="block mb-2 text-sm font-bold text-white">Phone</label>
                <input type="number" id="phone" name="phone" class="w-full p-2 border rounded"
                    placeholder="write your phone number">
                @error('phone')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>


            <div class="flex">
                <button type="submit"
                    class="px-2 py-1 mr-24 text-white bg-blue-600 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline-blue active:bg-blue-800 whitespace-nowrap">
                    Add Supplier
                </button>
                <a href="{{ route('dashboard.index') }}"
                    class="flex items-center px-2 py-2 mr-2 text-white bg-red-500 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline-blue active:bg-blue-800 whitespace-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Go back
                </a>
            </div>

        </form>

    </div>
</div>

@endsection