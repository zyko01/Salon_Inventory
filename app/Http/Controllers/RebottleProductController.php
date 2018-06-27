<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Rebottle;

class RebottleProductController extends Controller
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
    public function index(){

        $products = Product::all();
        $rebottle = Rebottle::all();
        return view('rebottleproducts.index', compact('rebottle', 'products'));
    }

    public function create()
    {   $product = Product::pluck('product_name','id')->toArray();
        // $select = array();
        // foreach($product as $key => $value){
        //     $select[$value->product()->id ] = $value->product()->product_name;
        // }


        return view('rebottleproducts.create', compact('product'));
    }

    public function show($id)
    {
        $product = Product::all();
        $rbottle = Rebottle::all();
        $rebottle = Rebottle::find($id);
        return view('rebottleproducts.show', compact('rebottle', 'rbottle', 'product'));
    }

    public function store(Request $request)
    {
        $this->validate($request,['product_id' => 'required',
                                  'quantity_use' => 'required',
                                  'produce_bottle' => 'required',
                                  'designation' => 'required']);
      
       Rebottle::create($request->all());
       return redirect()->route('rebottleproducts.index')->with('success', 'Successfully created new product');
    }

    // public function edit($id)
    // {
    //     $rebottle = Rebottle::find($id);
    //     return view('rebottleproducts.edit', compact('rebottle'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $this->validate($request,[
    //                                'product_id' => 'required',
    //                                'quantity_use' => 'required',
    //                                'produce_bottle' => 'required',
    //                                'designation' => 'required']);
                               
    //     Rebottle::find($id)->update($request->all());
    //     return redirect()->route('rebottleproducts.index')->with('success', 'Successfully updated product');
    // }

    public function destroy($id)
    {
        $rebottle = Rebottle::find($id)->delete();
        return redirect()->route('rebottleproducts.index')->with('success', 'Successfully deleted product');
    }

}
