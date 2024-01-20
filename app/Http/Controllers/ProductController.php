<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::orderBy('id','ASC')->get();
        return view('Products.addProduct',['suppliers'=> $suppliers]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'product' => 'required',
            'type' => 'required',
            'stock' => 'required|numeric',
            'expiration_date' => 'required|date',
            'supplier' => 'required|exists:suppliers,supplier'
        ]);

        $supplier = Supplier::where('supplier', $request->input('supplier'))->first();


            Product::create([
                'product' => $request->product,
                'supplier_id' => $supplier->id,
                'type' => $request->type,
                'expiration_date' => $request->expiration_date,
                'stock' => $request->stock
            ]);

            return redirect()->route('dashboard.index')->with('create','product created!');


    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $suppliers = Supplier::orderBy('id',"DESC")->paginate(8);
        return view('Products.updateProduct',['product'=>$product,'suppliers'=>$suppliers]);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'product' => 'required',
            'type' => 'required',
            'stock' => 'required|numeric',
            'expiration_date' => 'required|date',
            'supplier' => 'required|exists:suppliers,supplier'
        ]);
        $product->update($request->all());
        return redirect()->route('dashboard.index',)->with('updateProduct','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard.index')->with('deletedProduct','Deleted successfully');
    }
}