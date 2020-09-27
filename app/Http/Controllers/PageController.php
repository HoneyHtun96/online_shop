<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Category;

class PageController extends Controller
{
    function mainfun($value='')
    {
        $categories = Category::all();
        $items = Item::all()->take(6);
        $brands = Brand::all();
     // dd($items);
    	return view('main',compact('items','brands','categories'));
    }
    function itemBybrand($id)
    {
        $brand = Brand::find($id);
    	return view('brand',compact('brand'));
    }
    function itemdetailfun($id)
    {
        $item = Item::find($id);
        $brand_id = $item->brand_id;
        $brands = Item::where('brand_id',$brand_id)->get();

    	return view('itemdetail',compact('item','brands'));
    }
    function lgoinfun($value='')
    {
    	return view('login');//('foldername.filename')
    }
    function promotion($value='')
    {
        $items = Item::where('discount','>',0)->get();

    	return view('promotion',compact('items'));
    }
    function registerfun($value='')
    {
    	return view('register');
    }
    function shoppingcartfun($value='')
    {
    	return view('shoppingcart');
    }
     function subcategoryfun($id)
    {
        // dd($id);
        $subcategories = Item::where('subcategory_id',$id)->get();;

    	return view('subcategory',compact('subcategories'));
    }


}
