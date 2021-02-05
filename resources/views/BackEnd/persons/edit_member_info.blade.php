@extends('BackEnd.layouts.main')
@section('content')
<br>
                    <div><h2 class="text-center">تعديل بيانات العضو</h2></div>
                    <br>
   
   
    <div class="container" >
    <form action="{{route('person.update',['id'=>$persons->id])}}" method="POST" >
        @csrf  
        
        
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label"> اسم العضو: </label>
         
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name"  value="{{$persons->name}}">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">بريد الالكتروني :</label>
          <div class="col-sm-10">
            <input type="email"  class="form-control" id="email" name="email" value="{{$persons->email}}" >
          </div>
        </div>
      
     
      <div class="form-group row">
        <label for="phone_number" class="col-sm-2 col-form-label">  الهاتف المحمول: </label>
       
        <div class="col-sm-10">
          <input  type="tel" class="form-control" id="phone_number" name="phone_number" value="{{$persons->phone_number}}" >
        </div>
      </div>
      <div class="form-group row">
        <label for="mobile" class="col-sm-2 col-form-label">الهاتف الارضي:</label>
        <div class="col-sm-10">
          <input  type="tel" class="form-control" id="mobile" name="mobile" value="{{$persons->mobile}}"  >
        </div>
      </div>
      <div class="form-group row">
        <label for="fax" class="col-sm-2 col-form-label"> فاكس:</label>
        <div class="col-sm-10">
          <input  type="tel"  class="form-control" id="fax" name="fax" value="{{$persons->fax}}" >
        </div>
      </div>
      <div class="form-group row">
        <label for="work_place" class="col-sm-2 col-form-label">مكان العمل :</label>
        <div class="col-sm-10">
          <input type="text"  class="form-control" id="work_place" name="work_place" value="{{$persons->work_place}}">
        </div>
      </div>
     <div class="form-group row">
        <label for="notes" class="col-sm-2 col-form-label">ملاحظات:</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="notes" name="notes" rows="3">{{$persons->notes}}</textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" >تعديل </button>
    </form>
</div>





@endsection