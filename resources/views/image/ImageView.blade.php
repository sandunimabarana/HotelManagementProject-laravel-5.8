@extends('layouts.temp')

@yield('title')

<h2>View Room Details</h2>

@section('content')
       

<div>

<table class="table table-borderless table-dark">
  <thead>
    <tr>
    
      <th scope="col">Image</th>
     
    </tr>
  </thead>
  <tbody>

  @foreach($data as $Rupdate)
    <tr>
   
      <td><img src="/storage/{{$Rupdate->image }}" alt="Image" style="width:200px;height:200px;"></td>
      
    </tr>
    @endforeach
  </tbody>
</table>





</div>

  @endsection