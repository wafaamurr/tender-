<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\People;// models people from tender 
class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons=People::all();
        return view('BackEnd.persons.index',compact('persons'));
    }
      /**
     *
     * 
     *View deleted data
     *
     * 
     * */
    public function trashMember()
    {
        $persons=People::onlyTrashed()->get();
        return view('BackEnd.persons.trash_person',compact('persons'));
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
        $persons=People::onlyTrashed()->where('id',$id)->restore();
        return redirect('/all_member');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('BackEnd.persons.add_new_member');



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     //validation 

     $this->validate($request,[

        'name'=>'required|max:255',
        'email'=>'required|max:255',
        'fax'=>'required|max:10',
        'phone_number'=>'required|max:10',
        'work_place'=>'required|max:255',
        'notes'=>'required|max:255',
      ]);

        //dd($request->all()); test

        People::create([

            "name"=>$request->name,
            "email"=>$request->email,
            "fax"=>$request->fax,
            "phone_number"=>$request->phone_number,
            "mobile"=>$request->mobile,
            "work_place"=>$request->work_place,
            "notes"=>$request->notes,



        ]);
        return redirect('/all_member');



       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persons=People::find($id);
        return view('BackEnd.persons.profile_person',compact('persons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persons=People::find($id);
        return view('BackEnd.persons.edit_member_info',compact('persons'));
        
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
        $persons=People::find($id);
        $persons->name=$request->name;
        $persons->email=$request->email;
        $persons->phone_number=$request->phone_number;
        $persons->mobile=$request->mobile;
        $persons->fax=$request->fax;
        $persons->work_place=$request->work_place;
        $persons->notes=$request->notes;
        $persons->update();
        return redirect('/all_member');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persons=People::find($id);
        $persons->destroy($id);
        return redirect('/all_member');

    }
}
