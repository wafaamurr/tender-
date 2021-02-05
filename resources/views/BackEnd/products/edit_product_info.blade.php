@extends('BackEnd.layouts.main')
@section('content')
<br>
                    <div><h2 class="text-center">تعديل بيانات المنتجات </h2></div>
                    <br>
   
   
    <div class="container" >
    <form action="{{route('product.update',['id'=> $products->id])}}" method="POST" >
        @csrf  
        
        
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label"> اسم المنتج: </label>
         
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name"  value="{{$products->name}}">
          </div>
        </div>
        
     <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">وصف المنتج:</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="description" name="description" rows="3">{{$products->description}}</textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="id" class="col-sm-2 col-form-label"> تنصيفات:</label>
        <div class="col-sm-10">
          <select name="id" id="id" class="form-control">
            <option value="{{$products->cat_id}} ">  
              @foreach ($cates as $cate)
               @if ($products->cat_id===$cate->id)
                    {{$cate->name}}
               @endif
            @endforeach
            </option>
          @foreach ($cates as $cate)
                <option value="{{$cate->id}}">{{$cate->name}}</option>@endforeach 
          </select>
      <button type="submit" class="btn btn-primary" >تعديل </button>
    </form>
</div>





@endsection