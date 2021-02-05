@extends('BackEnd.layouts.main')
@section('content')
<div class="container" >
    <br><br>
    <div><h2 class="text-center">قائمة الاعضاء </h2></div>
    <br><br>

     

<a href="{{route('person.create')}}" type="button" class="btn btn-primary btn-md">اضافة عضو </a>

<a href="{{route('person.trashMember')}}" type="button" class="btn btn-dark btn-md">المهملات </a>
<br><br>
    <div>
        <table class="table table-striped">
            <thead>
              <tr>
              <th scope="col"> رقم</th>
                <th scope="col"> اسم العضو</th>
                <th scope="col"> بريد الالكتروني </th>
                <th scope="col"> مكان العمل </th>
                <th scope="col"> </th>
              </tr>
            </thead> @foreach ($persons as $Person)
                
          
            <tbody>
              <tr>
                <td>{{$Person->id}}</td>
                <td>{{$Person->name}}</td>
                <td>{{$Person->email}}</td>
                <td>{{$Person->work_place}}</td> 
             <td>
              <a href="{{route('person.show',['id'=>$Person->id])}}"type="button" class="btn btn-secondary">تفاصيل </a>
              <a href="{{route('person.edit',['id'=>$Person->id])}}"type="button" class="btn btn-success">تعديل </a>
              <a href="{{route('person.destroy',['id'=>$Person->id])}}"type="button"class="btn btn-danger">حذف</a>
            </td> 
            </tr>
            
            </tbody>   @endforeach 
          </table>








    </div></div>
@endsection