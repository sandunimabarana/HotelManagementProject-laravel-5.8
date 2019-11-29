@extends('layouts.app')

@section('content')


<form action="/vacancy" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

<legend>Vacancy Details.</legend>

@if(count($errors) > 0)

@foreach($errors->all() as $error)
  <div class="col-lg-6 alert alert-danger">{{$error}} </div>
  @endforeach
@endif


  <div class="form-group col-md-8">
    <label for="name">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter the title">
    </div>
 

  
  <div class="form-group col-md-8">
    <label for="address">Description</label>
    <textarea class="form-control" name="description" placeholder="Enter the  description" rows="5"></textarea>
  </div>

  <div class="form-group col-md-8">
    <label for="salary">Salary</label>
    <input type="text" class="form-control" name="salary" placeholder="Enter the salary">
    </div>
 
  
  <div class="form-group col-md-8">
  <button type="submit" class="btn btn-primary">Save</button>
  </div>
  
</form>


  

<!--*******************************************************************-->

<!--*******************************************************************-->


@endsection

    



