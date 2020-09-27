<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function backendfun($value='')
    {
    	// $route=Route::current();
    	// dd($route); //လက်ရှိဟာကိုထုတ်ကြည့်တာ dd dieနဲ့တူတယ်
    	return view('Backend.dashboard');//view user show place
    }
}
