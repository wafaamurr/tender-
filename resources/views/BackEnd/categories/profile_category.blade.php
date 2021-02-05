@extends('BackEnd.layouts.main')
@section('content')

   
   
    <div class="container" >
    <form action="{{route('category.show',['id'=>$categories->id])}}" method="POST" >
        @csrf  
                   <br>
                    <div><h2 class="text-center">بيانات التصنيف  ({{$categories->name}})  </h2></div>
                    <br>
                    <br>
        
<table class="table table-striped">
    <thead>
        <tr>
        <th colspan="1">الاسم التصنيف:</th>
       
        <td colspan="2">{{$categories->name}}</td>
      </tr>


      <tr>
        <th colspan="1" > وصف التصنيف: </th>
       
        <td colspan="3">{{$categories->description}}</td>
      </tr>

        </tbody>
      </table>
    </form>
</div>


@endsection
