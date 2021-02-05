@extends('BackEnd.layouts.main')
@section('content')
<div class="container" >
   <p> هل انت متاكد من الحذف</p>
  

   <form action="" method="POST" >
      @csrf  
      
     
          
      
     
   <input type="hidden" id="yes" name="yes" value="1">
   <button type="submit" class="btn btn-primary" >نعم  </button>

   
      
   <input type="hidden" id="n" name="n" value="0">
  <button type="submit" class="btn btn-danger" >لا  </button>
   </form>
  
</div>




@endsection