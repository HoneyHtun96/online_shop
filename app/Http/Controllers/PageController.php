<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Category;
use App\Subcategory;
class PageController extends Controller
{
    public function mainfun($value='')
    {
        $categories = Category::all();
        $items = Item::all()->take(6);
        $brands = Brand::all();
   
    	return view('main',compact('items','brands','categories'));
    }

    public function itemBybrand($id)
    {
        $brand = Brand::find($id);
    	return view('brand',compact('brand'));
    }

    public function itemdetailfun($id)
    {
        $item = Item::find($id);
        $brand_id = $item->brand_id;
        $brands = Item::where('brand_id',$brand_id)->get();

    	return view('itemdetail',compact('item','brands'));
    }

    public function lgoinfun($value='')
    {
    	return view('login');
    }
    public function promotion($value='')
    {
        $items = Item::where('discount','>',0)->get();

    	return view('promotion',compact('items'));
    }

    public function registerfun($value='')
    {
    	return view('registerform');
    }

    public function shoppingcartfun($value='')
    {
    	return view('shoppingcart');
    }

    public function subcategoryfun($id)
    {
        // dd($id);
        $subcategory_items= Item::where('subcategory_id',$id)->get();
        $subcategories = Subcategory::all();
        $subcategory=Subcategory::find($id);

    	return view('subcategory',compact('subcategory_items','subcategories','subcategory'));
    }


}
