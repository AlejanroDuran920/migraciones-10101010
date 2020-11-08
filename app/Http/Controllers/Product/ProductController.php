<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\ProductType;

class ProductController extends Controller
{
    public function create(){
        $companies=Company::all();
        $product_types=ProductType::all();
        return view('product.create',compact('companies','product_types'));
    }
    public function store(Request $request){
        $product=Product::create($request->all());
        return $product;
    }
}
