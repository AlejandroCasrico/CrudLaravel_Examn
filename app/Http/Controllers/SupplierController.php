<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('suppliers.supplier');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'supplier' => 'required|unique:suppliers|max:50',
            'address' => 'required|max:100',
            'phone'=>'required|max:10|min:10'
        ]);
        Supplier::create([
            'supplier'=>$request->supplier,
            'address'=>$request->address,
            'phone'=>$request->phone
        ]);
            return redirect()->route('dashboard.index')->with('message','success creating the supplier');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        return view('suppliers.update',['supplier'=>$supplier]);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $this->validate($request,[
            'supplier' => 'required|unique:suppliers|max:50',
            'address' => 'required|max:100',
            'phone' => 'sometimes|nullable|max:10|min:10|unique:suppliers,phone,' . $supplier->id
        ]);

        $supplier->update($request->all());
        return redirect()->route('dashboard.index')->with('updated','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('dashboard.index')->with('success', 'Supplier deleted successfully');
    }
}
