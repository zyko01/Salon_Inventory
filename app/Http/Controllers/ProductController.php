<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Rebottle;

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
         $rebottle = Rebottle::all();
        
         return view('products.index', compact('rebottle','product'));
     }

     public function create()
     {   
         $product = Product::pluck('product_name', 'product_type', 'product_category');
         return view('products.create');
     }

     public function show($id)
     {
         $product = Product::find($id);
         return view('products.show', compact('product'));
     }

     public function store(Request $request)
     {
         $this->validate($request,['product_name' => 'required|string|max:255',
                                   'product_type' => 'required',
                                   'product_category' => 'required',
                                   'product_quantity' => 'required',
                                   'expiration' => 'required',
                                   'product_cost' => 'required',
                                   'date_delivered' => 'required']);
 
         Product::create($request->all());
         return redirect()->route('products.index')->with('success', 'Successfully created new product');
     }

     public function edit($id)
     {
         $product = Product::find($id);
         return view('products.edit', compact('product'));
     }
 
     public function update(Request $request, $id)
     {
         $this->validate($request,[
                            'product_name' => 'required|string|max:255',
                            'product_type' => 'required',
                            'product_category' => 'required',
                            'product_quantity' => 'required',
                            'expiration' => 'required',
                            'product_cost' => 'required',
                            'date_delivered' => 'required']);
         
                            Product::find($id)->update($request->all());
         return redirect()->route('products.index')->with('success', 'Successfully updated product');
     }
 
     public function destroy($id)
     {
         $product = Product::find($id)->delete();
         return redirect()->route('products.index')->with('success', 'Successfully deleted product');
     }

 }
 

