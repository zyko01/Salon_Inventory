<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('item');
    }

    public function find()
    {
        $data['data'] = DB::table('users')->get();

        return view('item',[ 'data' => $data]);
    }
}
