<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RebottledProduct;
use App\Product;

class RebottledProductController extends Controller
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
         $rebottled_product = RebottledProduct::all();
         return view('rebottledproducts.index', compact('rebottled_product'));
     }

     public function create()
     {   $product = Product::pluck('id');
         $rebottled_product = RebottledProduct::pluck('designation');
         return view('rebottledproducts.create', compact('rebottled_product', 'product'));
     }

     public function show($id)
     {
         $rebottled_product = RebottledProduct::find($id);
         return view('rebottledproducts.show', compact('rebottled_product'));
     }
    //  public function getProduct($id){
    //     $product = Product::find($id);
    
    //     return $product->toArray();
    // }

     public function store(Request $request, Product $product, RebottledProduct $rebottledproduct)
     {
         $this->validate($request,['product_id' => 'required',
                                   'use_product' => 'required',
                                   'produce_bottle' => 'required',
                                   'designation' => 'required']);
        //  $data = $request->all();
        // $product = Product::create($data);
        // $rebottled_product = RebottledProduct::create($data);

        // $data = $request->all();
        // // $data->product_id = $product->id;
        // // $rebottledproduct->associate($data)->save();
        
        // $product->product()->save($rebottledproduct);

        // $rebottledproduct = new rebottledproduct;
        // $rebottledproduct->product_id = $data->id;
        
        // $rebottledproduct->save();
        RebottledProduct::create($request->all());
        return redirect()->route('rebottledproducts.index')->with('success', 'Successfully created new product');
     }


     public function edit($id)
     {
         $rebottled_product = RebottledProduct::find($id);
         return view('rebottledproducts.edit', compact('rebottled_product'));
     }
 
     public function update(Request $request, $id)
     {
         $this->validate($request,[
                                    'product_id' => 'required',
                                    'use_product' => 'required',
                                    'quantity_use' => 'required',
                                    'designation' => 'required']);
         
         RebottledProduct::find($id)->update($request->all());
         return redirect()->route('rebottledproducts.index')->with('success', 'Successfully updated product');
     }
 
     public function destroy($id)
     {
         $rebottled_product = RebottledProduct::find($id)->delete();
         return redirect()->route('rebottledproducts.index')->with('success', 'Successfully deleted product');
     }

}
