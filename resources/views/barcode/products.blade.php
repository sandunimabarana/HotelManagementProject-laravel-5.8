@extends('layouts.app')

@yield('title')


<h2>Details Of Staff Member</h2>
@section('content')


<div class="container">

    @if(isset($details))
   
   
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Nic</th>
                <th>status</th>
                <th>update</th>
                  
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $products)
            <tr>
                <td>{{$products->name}}</td>
                <td>{{$products->nic}}</td>
                <td>
      @if($products->status)
      <button class="btn btn-success">Present</button>
      @else
      <button class="btn btn-warning">Not Present</button>
      @endif
     </td>
                <td>
                    @if(!$products->status)
                        <a href="/updateaspresent/{{$products->id}}" class="btn btn-primary">Update as Present</a>
                        @endif</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>





       
@endsection