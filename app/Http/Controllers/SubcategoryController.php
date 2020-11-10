<?php

namespace App\Http\Controllers;

use App\Subcategory;
use App\Category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $subcategories=Subcategory::all();//use item model
         $categories=Category::all();
        //dd($items);
        return view('Backend.Subcategories.index',compact('subcategories','categories')) ; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategory=Subcategory::all();
        $categories=Category::all();
        return view('Backend.Subcategories.create',compact('subcategory','categories'))  ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                
                "name"=>'required',
                "category"=>'required'            
            ]);

        // if include file,upload file
           
        //datainsert
          $subcategory=new Subcategory;
          $subcategory->name=$request->name;
          $subcategory->category_id=$request->category;//tablecolumname=name
         $subcategory->save();
        //redirect
         return redirect()->route('subcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $categories=Category::all();
         return view('Backend.Subcategories.edit',compact('subcategory','categories'))  ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
                
                "name"=>'required',
                 
            ]);
        // if include file,upload file          
        //datainsert
          $subcategory->name=$request->name;
          $subcategory->category_id=$request->category;
         $subcategory->save();

         



        //redirect
         return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategories.index');
    }
}
