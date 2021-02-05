@extends('BackEnd.layouts.main')
@section('content')

   
   
    <div class="container" >
    <form action="{{route('company.show',['id'=>$companies->id])}}" method="GET" >
        @csrf  
                   <br>
                    <div><h2 class="text-center">الملف الشركة  ({{$companies->name}})  </h2></div>
                    <br>
                    <br>
        
<table class="table table-striped">
    <thead>
        <tr>
        <th colspan="1"> الاسم الشركة :</th>
       
        <td colspan="2">{{$companies->name}}</td>
      </tr>


      <tr>
        <th colspan="1" >البريد الالكتروني: </th>
       
        <td colspan="2">{{$companies->email}}</td>
      </tr>

      <tr>
        <th colspan="1"> الهاتف المحمول: </th>
       
        <td colspan="2">{{$companies->phone_number}}</td>
      </tr>


      <tr>
        <th colspan="1" >الهاتف الارضي:</th>
       
        <td colspan="2">{{$companies->mobile}}</td>
      </tr>


      <tr>
        <th colspan="1">فاكس:</th>
       
        <td colspan="2">{{$companies->fax}}</td>
      </tr>


      <tr>
        <th colspan="1"> موقع الشركة  :</th>
       
        <td colspan="2">{{$companies->location}}</td>
      </tr>
      <tr>
        <th colspan="1">ملاحظات:</th>
       
        <td colspan="2">{{$companies->notes}}</td>
      </tr>
        </tbody>
      </table>
    </form>
</div>


@endsection
