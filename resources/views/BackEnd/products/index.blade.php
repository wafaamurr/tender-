@extends('BackEnd.layouts.main')
@section('content')
<div class="container" >
    <br><br>
    <div><h2 class="text-center">قائمة المنتجات   </h2></div>
    <br><br>

     

<a href="{{route('product.create')}}" type="button" class="btn btn-primary btn-md">اضافة منتج </a>
<a href="{{route('product.trashProduct')}}" type="button" class="btn btn-dark btn-md">المهملات  </a>
<br><br>
    <div>
        <table class="table table-striped">
            <thead>
              <tr>
              <th scope="col"> رقم</th>
                <th scope="col"> اسم المنتج</th>
                <th scope="col">وصف المنتج</th>
                <th scope="col">التصنيف</th>
                <th scope="col"></th>
              </tr>
            </thead> @foreach ($products as $product)
                
          
          
            <tbody>
              <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
               <td>{{$product->description}}</td>
               <td>
                @foreach ($categories as $categor)
                        @if ($product->cat_id===$categor->id)
                              {{$categor->name}}
                        @endif
                    @endforeach  
              
                  </td>  
                
             <td>
              <a href="{{route('product.show',['id'=>$product->id])}}"type="button" class="btn btn-secondary">تفاصيل </a>
              <a href="{{route('product.edit',['id'=>$product->id])}}" type="button" class="btn btn-success">تعديل </a>
              <a href="{{route('product.destroy',['id'=>$product->id])}}" class="btn btn-danger" role="button">حذف</a>
            </tr>
            
            </tbody>   @endforeach 


            
          </table>


          





    </div></div>
@endsection