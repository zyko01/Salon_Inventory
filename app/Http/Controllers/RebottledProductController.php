<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     {   
         $rebottled_product = RebottledProduct::pluck('product_id', 'designation');
         return view('rebottledproducts.create');
     }

     public function show($id)
     {
         $rebottled_product = RebottledProduct::find($id);
         return view('rebottledproducts.show', compact('rebottled_product'));
     }

     public function store(Request $request)
     {
         $this->validate($request,['product_id' => 'required',
                                   'use_product' => 'required',
                                   'produce_bottle' => 'required',
                                   'designation' => 'required']);
 
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
                                    'produce_bottle' => 'required',
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
