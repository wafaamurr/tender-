<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category; // model Category from tender 

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('BackEnd.categories.index',compact('categories'));
    }

     /**
     *
     * 
     *View deleted data
     *
     * 
     * */

    public function trashCategory()
    {
        $categories=Category::onlyTrashed()->get();
        return view('BackEnd.categories.trash_category',compact('categories'));
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
        $categories=Category::onlyTrashed()->where('id',$id)->restore();
        return redirect('/all_category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.categories.add_new_category');
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
          ]);
    
            //dd($request->all()); test
    
            Category::create([
    
                "name"=>$request->name,
               
                "description"=>$request->description,
    
    
    
            ]);
        return redirect('/all_category');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories=Category::find($id);
        return view('BackEnd.categories.profile_category',compact('categories'));
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
        return view('BackEnd.categories.edit_category_info',compact('categories'));
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
        $categories=Category::find($id);
        $categories->name=$request->name;
        $categories->description=$request->description;
        $categories->update();
        return redirect('/all_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $categories=Category::find($id);
        $categories->destroy($id);
        return redirect('/all_category');
    }

  
    
}
