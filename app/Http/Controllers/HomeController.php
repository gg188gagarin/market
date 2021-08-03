<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index(){
        $products = Product::where('id',5)->first();
        $products = Product::orderBy('created_at')->take(8)->get();

                return view('home.index',[
            'products2' => $products
        ]);
    }
}
