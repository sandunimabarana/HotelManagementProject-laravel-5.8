@extends('layouts.temp')

@yield('title')


@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif     


<form method="post" action="{{url('/upload')}}" enctype="multipart/form-data">
{{ csrf_field() }}
        <div class="form-group">
            <div class="row" id="hr5">
                <div class="col-sm-1" id="">
                    
                </div>
                
                        <div class="col-sm-4" id="bookingform">
                            <label for="">Image:</label>
                            <input type="file" class="form-control" id="" name="image" placeholder="">
                        </div>
                       
                        <div class="col-sm-4" id="bookingform">
                            <label for="">&nbsp</label>
                            <button type="submit" class="form-control submitbutton">submit</button>
                        </div>
                    
                <div class="col-sm-1" id="">
                    
                </div>
            </div>
        </div>
    </form>






@endsection