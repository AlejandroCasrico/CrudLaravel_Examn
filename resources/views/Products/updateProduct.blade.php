@extends('layouts.app')


@section('title')
Edit Supplier Form
@endsection

@section('content')

<div class="flex items-center justify-center min-h-screen ">
    <div class="w-full p-8 bg-gray-500 rounded shadow-md sm:w-96">
        <h1 class="mb-4 text-4xl font-semibold text-center text-white">Update Product</h1>
        <form action="{{ route('product.update',$product) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label for="product" class="block mb-2 text-sm font-bold text-white">Product name</label>
                <input type="text" id="product" name="product" class="w-full p-2 border rounded"
                    placeholder="enter a product name" value="{{ old('product',$product->product) }}">
                @error('product')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="supplier" class="block mb-2 text-sm font-bold text-white">Supplier</label>
                <select id="supplier" name="supplier" class="w-full p-2 border rounded">
                    @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->supplier }}" {{ old('supplier')===$supplier->supplier ? 'selected' : ''
                        }}>
                        {{ $supplier->supplier }}
                    </option>
                    @endforeach
                </select>
                @error('supplier')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="stock" class="block mb-2 text-sm font-bold text-white">Stock</label>
                <input type="stock" id="stock" name="stock" class="w-full p-2 border rounded"
                    placeholder="write the stock number" value="{{ old('stock',$product->stock) }}">
                @error('stock')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="type" class="block mb-2 text-sm font-bold text-white">Type</label>
                <input type="type" id="type" name="type" class="w-full p-2 border rounded"
                    placeholder="write your phone number" value="{{ old('type',$product->type) }}">
                @error('type')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="expiration_date" class="block mb-2 text-sm font-bold text-white">Expiration</label>
                <input type="date" id="expiration_date" name="expiration_date" class="w-full p-2 border rounded"
                    placeholder="write the expiration date "
                    value="{{ old('expiration_date',$product->expiration_date) }}">
                @error('phone')
                <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex">
                <button type="submit"
                    class="px-2 py-1 mr-24 text-white rounded bg-emerald-400 hover:bg-gray-800 focus:outline-none focus:shadow-outline-blue active:bg-blue-800 whitespace-nowrap">
                    Update Product
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