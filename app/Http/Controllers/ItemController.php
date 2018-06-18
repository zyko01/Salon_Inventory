<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use DB;

class ItemController extends Controller
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
        $item = Item::all();
        return view('items.index', compact('item'));
    }

    public function create()
    {   
        $item = Item::pluck('item_status', 'id');
        return view('items.create');
    }

    public function show($id)
    {
        $item = Item::find($id);
        return view('items.show', compact('item'));
    }

    public function store(Request $request)
    {
        $this->validate($request,['item_name' => 'required|string|max:255',
                                  'item_description' => 'required',
                                  'item_status' => 'required',
                                  'item_cost' => 'required']);

        Item::create($request->all());
        return redirect()->route('items.index')->with('success', 'Successfully created new item');
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
                        'item_name' => 'required|string|max:255',
                        'item_description' => 'required',
                        'item_status' => 'required',
                        'item_cost' => 'required'
        ]);
        Item::find($id)->update($request->all());
        return redirect()->route('items.index')->with('success', 'Successfully updated item');
    }

    public function destroy($id)
    {
        $item = Item::find($id)->delete();
        return redirect()->route('items.index')->with('success', 'Successfully deleted item');
    }
}
