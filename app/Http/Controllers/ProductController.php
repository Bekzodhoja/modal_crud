<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('welcome',compact('products'));

    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
       $request->validate([
        'name'=>'required',
        'price'=>'required',
        'quantity'=>'required',
       ]);
  
       $product= new Product();
       $product->name=$request->name;
       $product->price=$request->price;
       $product->quantity=$request->quantity;
       $product->save();
   return redirect()->route('index');
       


    }

    public function show($id){
        $product= Product::find($id);
        return view('show', compact('product'));
    }

    public function edit($id){
        $prod=Product::find($id);
        return view('edit',compact('prod'));
    }


    public function update(Request $request ,$id)
    {
       $product=Product::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->save();
        return redirect()->back();
       
    }
}
