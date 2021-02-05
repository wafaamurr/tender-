@extends('BackEnd.layouts.main')
@section('content')

   
   
    <div class="container" >
    <form action="{{route('product.show',['id'=>$products->id])}}" method="POST" >
        @csrf  
                   <br>
                    <div><h2 class="text-center">بيانات المنتج  ({{$products->name}})  </h2></div>
                    <br>
                    <br>
        
<table class="table table-striped">
    <thead>
        <tr>
        <th colspan="1">الاسم المنتج:</th>
       
        <td colspan="2">{{$products->name}}</td>
      </tr>


      <tr>
        <th colspan="1" > وصف المنتج: </th>
       
        <td colspan="3">{{$products->description}}</td>
      </tr>
      <tr>
        <th colspan="1" >  التصنيف: </th>
       
        <td colspan="3">{{$products->cat_id}}</td>
      </tr>

        </tbody>
      </table>
    </form>
</div>


@endsection
