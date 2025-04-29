<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
  {
    $products = Product::all();
    
    $products = Product::paginate(6);
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

    return redirect('/products');
  }
  
  public function search(Request $request)
{
    $keyword = $request->keyword;
    $products = Product::where('name', 'LIKE', "%" . $keyword . "%")->paginate(4);

    return view('product', compact('products', 'keyword'));
}

public function detail($product_id)
    {
        $product = Product::find($product_id);
        $seasons = Season::all();
        return view('detail', compact('product' , 'seasons'));
    }
}
