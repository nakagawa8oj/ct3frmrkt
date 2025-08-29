<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
     public function index()
    {
        $items = Item::all();
        return view('itemsindex', ['items' => $items]);
    }

    public function search(Request $request)
    {
  $items = Item::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->get();
  $categories = Category::all();

  return view('itemindex', compact('items'));
    }

    public function getProducts()
    {  $items = Product::all();
       $items = new LengthAwarePaginator($pageData, $items->count(), $perPage, $page, $options);

       return view('itemindex', compact('items'));    }

}
