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
                    <div><h2 class="text-center">إضافة أعضاء جدد</h2></div>
                    <br>
   
   
    <div class="container" >
    <form action="{{route('person.store')}}" method="POST" >
        @csrf  
        
        
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label"> اسم العضو: </label>
         
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">بريد الالكتروني :</label>
          <div class="col-sm-10">
            <input type="email"  class="form-control" id="email" value="email@example.com" name="email" >
          </div>
        </div>
      
     
      <div class="form-group row">
        <label for="phone_number" class="col-sm-2 col-form-label"> رقم الهاتف: </label>
       
        <div class="col-sm-10">
          <input  type="tel" class="form-control" id="phone_number" name="phone_number">
        </div>
      </div>
      <div class="form-group row">
        <label for="mobile" class="col-sm-2 col-form-label">رقم الارضي:</label>
        <div class="col-sm-10">
          <input  type="tel" class="form-control" id="mobile" name="mobile" >
        </div>
      </div>
      <div class="form-group row">
        <label for="fax" class="col-sm-2 col-form-label">رقم الفاكس:</label>
        <div class="col-sm-10">
          <input type="tel"  class="form-control" id="fax" name="fax" >
        </div>
      </div>
      <div class="form-group row">
        <label for="work_place" class="col-sm-2 col-form-label">مكان العمل :</label>
        <div class="col-sm-10">
          <input type="text"  class="form-control" id="work_place" name="work_place" >
        </div>
      </div>
     <div class="form-group row">
        <label for="notes" class="col-sm-2 col-form-label">ملاحظات:</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" >إضافة</button>
    </form>
</div>





@endsection