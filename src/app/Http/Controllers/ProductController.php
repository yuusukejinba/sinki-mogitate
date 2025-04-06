<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;

class ProductController extends Controller
{
    public function index()
  {
    $products = Product::all();
  
    return view('product' , compact('products'));
  }

  public function register()
  {
    $seasons = Season::all();
    return view('register' , compact('seasons'));
  }

  public function store(Request $request)
  {
    $product['image'] = $request->image->store('img' , 'public');
    $form = [
      'name' => $request->name,   
      'price' => $request->price,
      'image' => $product['image'],
      'description' => $request->description,
    ];

    $Products = Product::create($form);

    return redirect('/product');
  }
  
}
