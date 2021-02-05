@extends('BackEnd.layouts.main')
@section('content')
<div class="container" >
    <br><br>
    <div><h2 class="text-center">قائمة الشركات  </h2></div>
    <br><br>

     

<a href="{{route('company.create')}}" type="button" class="btn btn-primary btn-md">اضافة شركة </a>

<a href="{{route('company.trashCompany')}}" type="button" class="btn btn-dark btn-md "> المهملات </a>
<br><br>
    <div>
        <table class="table table-striped">
            <thead>
              <tr>
              <th scope="col"> رقم</th>
                <th scope="col"> اسم الشركة</th>
                <th scope="col"> بريد الالكتروني </th>
                <th scope="col">   موقع الشركة   </th>
                <th scope="col"> </th>
              </tr>
            </thead> @foreach ($companies as $company)
                
          
            <tbody>
              <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->email}}</td>
               <td>{{$company->location}}</td> 
             <td>
              <a href="{{route('company.show',['id'=>$company->id])}}"type="button" class="btn btn-secondary">تفاصيل </a>
              <a href="{{route('company.edit',['id'=>$company->id])}}" type="button" class="btn btn-success">تعديل </a>
              <a href="{{route('company.destroy',['id'=>$company->id])}}" class="btn btn-danger" role="button">حذف</a></td> 
            </tr>
            
            </tbody>   @endforeach 
          </table>








    </div></div>
@endsection