@extends('BackEnd.layouts.main')
@section('content')

<br>
<!--error function-->
@if (count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
@endforeach

@endif

<br>
                    <div><h2 class="text-center">إضافة تصنيفات جدد</h2></div>
                    <br>
   
   
  <div class="container" >
    <form action="{{route('category.store')}}" method="POST" >
        @csrf  
        
        
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label"> اسم التصنيف: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
        </div>
        
     <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">وصف:</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" >إضافة</button>
    </form>
</div>





@endsection