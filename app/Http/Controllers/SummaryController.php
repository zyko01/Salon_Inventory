<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Rebottle;

class SummaryController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $rebottle = Rebottle::all();

        return view('summary', compact('product', 'rebottle'));
    }
}
