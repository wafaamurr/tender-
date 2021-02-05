@extends('BackEnd.layouts.main')
@section('content')
<div class="container" >
    <br><br>
    <div><h2 class="text-center">  قائمة التصنيفات المهملة </h2></div>
    <br><br>

     

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
              <a href="{{route('category.restore',['id'=>$category->id])}}"type="button" class="btn btn-secondary">إستعادة التصنيف </a>
      
              <a href="#" class="btn btn-danger" role="button">حذف</a>
            </tr>
            
            </tbody>   @endforeach 
          </table>


          





    </div></div>
@endsection