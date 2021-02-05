<?php

namespace App\Http\Controllers;
use  App\Models\Product;

use Illuminate\Http\Request;

class product2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=product::all();
        return response()->json($items);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $item= product::create([
            "name"=>$request->name,
            "description"=>$request->description,
            "cat_id"=>$request->id,
        ]);
        return response()->json($item);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
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
        // echo $id;
        // return response()->json($id);
        
        $products=Product::find($id);
        $products->name=$request->get("name");
        $products->description=$request->get("description");
        $products->cat_id=$request->get("cat_id");

        $products->update();
        return response()->json($products);
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
        return response()->json($products);
    }
}
