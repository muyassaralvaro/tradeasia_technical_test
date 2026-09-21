<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $product = Product::with('productLang')->limit(4)->get();
        // DB::table('product')->with(produ);
        // dd($product);

        return view('task1n3',compact('product'));
    }
}
