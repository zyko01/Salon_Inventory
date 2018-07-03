<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rebottle;
use App\Excess;

class ExcessController extends Controller
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

        $rebottle = Rebottle::all();
        $excess = Excess::paginate(5);
        return view('excess.index', compact('rebottle', 'excess'));
    }

    public function create()
    {   $rebottle = Rebottle::pluck('id')->toArray();
       


        return view('excess.create', compact('rebottle'));
    }
    public function show($id)
    {
        $excess = Excess::find($id);
        $rebottle = Rebottle::find($id);
        return view('rebottleproducts.show', compact('rebottle', 'excess'));
    }

    public function store(Request $request)
    {
        $this->validate($request,['rebottle_id' => 'required',
                                  'excess_bottle' => 'required']);
      
       Excess::create($request->all());
       return redirect()->route('excess.index')->with('success', 'Successfully Created New Excess Product');
    }

    public function edit($id)
    {
        $excess = Excess::find($id);
        return view('excess.edit', compact('excess'));
    }

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
