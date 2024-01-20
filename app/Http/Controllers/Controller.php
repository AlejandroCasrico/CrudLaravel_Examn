<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index(){
        $suppliers = Supplier::orderBy('supplier','ASC')->paginate(8);
        $products = Product::orderBy('id','ASC')->paginate(8);
        return view('dashboard',['suppliers'=>$suppliers,'products'=>$products]);
    }


}