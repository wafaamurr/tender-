@extends('BackEnd.layouts.main')
@section('content')
<div class="container" >
    <br><br>
    <div><h2 class="text-center">  قائمة المنتجات المهملة </h2></div>
    <br><br>

     

<br><br>
    <div>
        <table class="table table-striped">
            <thead>
              <tr>
              <th scope="col"> رقم</th>
                <th scope="col"> اسم المنتج</th>
                <th scope="col">وصف المنتج</th>
                <th scope="col">التصنيف</th>
                <th scope="col"> </th>
              </tr> 
            </thead> @foreach ($products as $product)
                
          
            <tbody>
              <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
               <td>{{$product->description}}</td> 
               <td>  @foreach ($categories as $categor)
                @if ($product->cat_id===$categor->id)
                      {{$categor->name}}
                @endif
            @endforeach  </td> 
             <td>
              <a href="{{route('product.restore',['id'=>$product->id])}}"type="button" class="btn btn-secondary">إستعادة التصنيف </a>
      
              <a href="#" class="btn btn-danger" role="button">حذف</a>
            </tr>
            
            </tbody>   @endforeach 
          </table>


          





    </div></div>
@endsection