@extends('BackEnd.layouts.main')
@section('content')
<div class="container" >
    <br><br>
    <div><h2 class="text-center">قائمة التصنيفات  </h2></div>
    <br><br>

     

<a href="{{route('category.create')}}" type="button" class="btn btn-primary btn-md">اضافة تصنيف </a>
<a href="{{route('category.trashCategory')}}" type="button" class="btn btn-dark btn-md">المهملات  </a>
<br><br>
    <div>
        <table class="table table-striped">
            <thead>
              <tr>
              <th scope="col"> رقم</th>
                <th scope="col"> اسم التصنيف</th>
                <th scope="col">وصف التصنيف</th>
                <th scope="col"> </th>
              </tr> 
            </thead> @foreach ($categories as $category)
                
          
            <tbody>
              <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
               <td>{{$category->description}}</td> 
             <td>
              <a href="{{route('category.show',['id'=>$category->id])}}"type="button" class="btn btn-secondary">تفاصيل </a>
              <a href="{{route('category.edit',['id'=>$category->id])}}" type="button" class="btn btn-success">تعديل </a>
              <a href="{{route('category.destroy',['id'=>$category->id])}}" class="btn btn-danger" role="button">حذف</a>
            </tr>
            
            </tbody>   @endforeach 
          </table>


          





    </div></div>
@endsection