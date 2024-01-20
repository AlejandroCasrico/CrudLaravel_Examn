@extends('layouts.app')
@section('title')
Dashboard Page
@endsection

@section('content')
@section('navbar')
@include('components.navbar')
@endsection
<div class="max-w-screen-md mx-auto mt-8">
    <div>
        <h2 class="mb-4 text-2xl font-bold">Information Suppliers</h2>
        <table class="min-w-full border border-gray-200">

            <thead class="text-white bg-gray-800">
                <tr>
                    <th class="px-4 py-2 border-b">Supplier</th>
                    <th class="px-4 py-2 border-b">Address</th>
                    <th class="px-4 py-2 border-b">Phone</th>
                    <th class="px-4 py-2 border-b"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $supplier)
                <tr>
                    <td class="px-4 py-2 border-b">{{ $supplier->supplier }}</td>
                    <td class="px-4 py-2 border-b">{{ $supplier->address }}</td>
                    <td class="px-4 py-2 border-b">{{ $supplier->phone }}</td>
                    <td class="px-4 py-2 border-b">
                        <a href="{{ route('suppliers.show',$supplier) }}"
                            class="mr-2 text-yellow-500 hover:underline">Update</a>

                        <form class="text-red-500" action="{{ route('supplier.destroy', $supplier) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>

                    </td>
                </tr>

                @endforeach
                <td colspan="1" class="px-2 py-2 border-b">
                    <a href="{{ route('supplier.index') }}"
                        class="flex items-center px-4 py-2 text-white bg-blue-500 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Add Supplier
                    </a>
                </td>
            </tbody>
        </table>
        <x-errors />
    </div>

    <div class="mt-8">
        <h2 class="mb-4 text-2xl font-bold">Information Products</h2>
        <table class="min-w-full border border-gray-200">

            <thead class="text-white bg-gray-800">
                <tr>
                    <th class="px-4 py-2 border-b">Product</th>
                    <th class="px-4 py-2 border-b">Supplier</th>
                    <th class="px-4 py-2 border-b">Type</th>
                    <th class="px-4 py-2 border-b">Stock</th>
                    <th class="px-4 py-2 border-b">Expiration Date</th>
                    <th class="px-4 py-2 border-b"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td class="px-4 py-2 border-b">{{ $product->product }}</td>
                    <td class="px-4 py-2 border-b">{{ $product->supplier->supplier }}</td>
                    <td class="px-4 py-2 border-b">{{ $product->type }}</td>
                    <td class="px-4 py-2 border-b">{{ $product->stock }}</td>
                    <td class="px-4 py-2 border-b">{{ $product->expiration_date }}</td>
                    <td class="px-4 py-2 border-b">
                        <a href="{{ route('product.show',$product) }}"
                            class="mr-2 text-yellow-500 hover:underline">Update</a>
                        <form class="text-red-500" action="{{ route('product.destroy', $product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
                <td colspan="1" class="px-2 py-2 border-b">
                    <a href="{{ route('product.index') }}"
                        class="flex items-center px-4 py-2 text-white bg-blue-500 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Add Supplier
                    </a>

                </td>

            </tbody>
        </table>
        <x-errors-products />
    </div>
</div>

@endsection