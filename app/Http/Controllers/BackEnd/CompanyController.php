<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company; // models company from tender 
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=company::all();
        return view('BackEnd.companies.index',compact('companies'));
    }
       /**
     *
     * 
     *View deleted data
     *
     * 
     * */
    public function trashCompany()
    {
        $companies=company::onlyTrashed()->get();
        return view('BackEnd.companies.trash_company',compact('companies'));
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
        $companies=company::onlyTrashed()->where('id',$id)->restore();
        return redirect('/all_companis');
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.companies.add_new_company');
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
            'email'=>'required|max:255',
            'fax'=>'required|max:10',
            'phone_number'=>'required|max:10',
            'location'=>'required|max:255',
            'notes'=>'required|max:255',
          ]);
    
            //dd($request->all()); test
    
            Company::create([
    
                "name"=>$request->name,
                "email"=>$request->email,
                "fax"=>$request->fax,
                "phone_number"=>$request->phone_number,
                "mobile"=>$request->mobile,
                "location"=>$request->location,
                "notes"=>$request->notes,
    
    
    
            ]);
        return redirect('/all_companis');
    
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $companies=company::find($id);
        return view('BackEnd.companies.profile_company',compact('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies=company::find($id);
        return view('BackEnd.companies.edit_company_info',compact('companies'));
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
        $companies=company::find($id);
        $companies->name=$request->name;
        $companies->email=$request->email;
        $companies->fax=$request->fax;
        $companies->phone_number=$request->phone_number;
        $companies->mobile=$request->mobile;
        $companies->location=$request->location;
        $companies->notes=$request->notes;
        $companies->update();
        return redirect('/all_companis');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companies=company::find($id);
        $companies->destroy($id);
        return redirect('/all_companis');
    }
}
