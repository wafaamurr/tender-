@extends('BackEnd.layouts.main')
@section('content')
<br>
                    <div><h2 class="text-center">تعديل بيانات التصنيفات </h2></div>
                    <br>
   
   
    <div class="container" >
    <form action="{{route('category.update',['id'=> $categories->id])}}" method="POST" >
        @csrf  
        
        
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label"> اسم التصنيف: </label>
         
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name"  value="{{$categories->name}}">
          </div>
        </div>
        
     <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">وصف التصنيف:</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="description" name="description" rows="3">{{$categories->description}}</textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" >تعديل </button>
    </form>
</div>





@endsection