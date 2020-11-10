<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();//use item model
        //dd($items);
        return view('Backend.Categories.index',compact('categories')) ; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('Backend.Categories.create',compact('category'))  ;
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
                "photo"=>'required',
                
            ]);

        // if include file,upload file
            $imageName=time().'.'.$request->photo->extension();

            $request->photo->move(public_path('backend/categoryimg'),$imageName);//file upload

            $path= 'backend/categoryimg/'.$imageName;
        //datainsert
          $category=new Category;

          
          $category->name=$request->name;
         
          $category->photo=$path;
         $category->save();

         



        //redirect
         return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
         
        return view('Backend.Categories.edit',compact('category'))  ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
                
                "name"=>'required',
                "photo"=>'sometimes',
                "oldphoto"=>'required'
                
            ]);

        // if include file,upload file
            
            if($request->hasFile('photo')){
            $imageName=time().'.'.$request->photo->extension();

            $request->photo->move(public_path('backend/categoryimg'),$imageName);//file upload

            $path= 'backend/categoryimg/'.$imageName;
            }else{
                $path=$request->oldphoto;
            }
        //datainsert
          $category->name=$request->name;
         
          $category->photo=$path;
         $category->save();

         



        //redirect
         return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
