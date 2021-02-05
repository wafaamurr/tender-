@extends('BackEnd.layouts.main')
@section('content')

   
   
    <div class="container" >
    <form action="{{route('person.show',['id'=>$persons->id])}}" method="GET" >
        @csrf  
                   <br>
                    <div><h2 class="text-center">الملف الشخصي ({{$persons->name}})  </h2></div>
                    <br>
                    <br>
        
<table class="table table-striped">
    <thead>
        <tr>
        <th colspan="1">الاسم:</th>
       
        <td colspan="2">{{$persons->name}}</td>
      </tr>


      <tr>
        <th colspan="1" >البريد الالكتروني: </th>
       
        <td colspan="2">{{$persons->email}}</td>
      </tr>

      <tr>
        <th colspan="1"> الهاتف المحمول: </th>
       
        <td colspan="2">{{$persons->phone_number}}</td>
      </tr>


      <tr>
        <th colspan="1" >الهاتف الارضي:</th>
       
        <td colspan="2">{{$persons->mobile}}</td>
      </tr>


      <tr>
        <th colspan="1">فاكس:</th>
       
        <td colspan="2">{{$persons->fax}}</td>
      </tr>


      <tr>
        <th colspan="1">مكان العمل :</th>
       
        <td colspan="2">{{$persons->work_place}}</td>
      </tr>
      <tr>
        <th colspan="1">ملاحظات:</th>
       
        <td colspan="2">{{$persons->notes}}</td>
      </tr>
        </tbody>
      </table>
    </form>
</div>


@endsection
