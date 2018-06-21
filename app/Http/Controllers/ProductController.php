<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth');
     }
 
     /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
         $product = Product::all();
         return view('products.index', compact('product'));
     }

     public function create()
     {   
         $product = Product::pluck('product_status', 'product_name', 'product_type', 'product_category', 'id' );
         return view('products.create');
     }

     public function store(Request $request)
     {
         $this->validate($request,['product_name' => 'required|string|max:255',
                                   'product_type' => 'required',
                                   'product_category' => 'required',
                                   'product_status' => 'required',
                                   'product_cost' => 'required']);
 
         Product::create($request->all());
         return redirect()->route('products.index')->with('success', 'Successfully created new product');
     }
}
