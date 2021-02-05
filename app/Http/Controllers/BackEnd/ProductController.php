<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Product;
use App\Models\Category; // model Category from tender 


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        $categories=Category::all();
      
        return view('BackEnd.products.index',compact('products','categories'));
    }

/**
     *
     * 
     *View deleted data
     *
     * 
     * */
    public function trashProduct()
    {
        $products=product::onlyTrashed()->get();
        $categories=Category::all();
        return view('BackEnd.products.trash_product',compact('products','categories'));
    }

   /**
     *
     * 
     * Recover deleted data
     *
     * 
     * */
    
    public function restore($id)
    {
        $products=product::onlyTrashed()->where('id',$id)->restore();
        return redirect('/all_product');
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        $categories=Category::all();
        return view('BackEnd.products.add_new_product',compact('categories'));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
      

      
        $this->validate($request,[
        'name'=>'required|max:255',
        'description'=>'required|max:255',
        'cat_id'=>'require',
      ]);
     
        //dd($request->all()); test

        product::create([

            "name"=>$request->name,
            "description"=>$request->description,
            "cat_id"=>$request->id,



        ]);
    return redirect('/all_product');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $products=Product::find($id);
        return view('BackEnd.products.profile_product',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $categories=Category::find($id);
        $cates=Category::all();
      
        
        $products=Product::find($id);
        return view('BackEnd.products.edit_product_info',compact('products','categories','cates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products=Product::find($id);
        $products->name=$request->name;
        $products->description=$request->description;
        $products->cat_id=$request->id;

        $products->update();
        return redirect('/all_product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=Product::find($id);
        $products->destroy($id);
        return redirect('/all_product');
    }
}
