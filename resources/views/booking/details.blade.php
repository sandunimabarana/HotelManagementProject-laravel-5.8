@extends('layouts.temp')


@section('content')


@foreach( $details as $detail)
<div>
<h3>Reservation Details</h3>


<div class="row" id="cusbr1">
        <div class="col-sm-1" id="">
                    
        </div>
        <div class="col-sm-10" id="">
        <br><br>
            <h2><i>{{$detail->First_Name}} {{$detail->Last_Name}}</i></h2>
        </div>
        <div class="col-sm-1" id="">
                    
        </div>            
    </div>
<!--*******************************************************************-->
    <div class="row" id="cusbr2">
        <div class="col-sm-1" id="">
                    
        </div>
        <div class="col-sm-5" id="">
        <br><br>
            <p><b><i>Date &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>{{$detail->startdate}}-{{$detail->enddate}}</i>
            </p>
            <br>
            <p><b><i>Estimated Arrival Time :</i></b>
            <i>{{$detail->Time}}</i>
            </p>
            <br>
            <p><b><i>Adults  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>{{$detail->Adult}}</i>
            </p>
            <br>
            <p><b><i>Children &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>{{$detail->Children}}</i>
            </p>
            <br>
            <p><b><i>Address  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>{{$detail->Address1}},
            {{$detail->Address2}},
            {{$detail->City}}
            </i>
            </p>
            <br>
            <p><b><i>E-mail  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>{{$detail->Email}}</i>
            </p>
            <br>
            <p><b><i>Telephone No  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</i></b>
            <i>{{$detail->Contact_No}}</i>
            </p>
            <br><br>
        </div>
        <div class="col-sm-5" id="">
        <br><br>
            <h2><b><i>{{$detail->RoomName}}-{{$detail->RoomType}}:{{$detail->Price}}</i></b></h2>
            
            <img src="/storage/{{$detail->image }}" alt="" width="100%">
            
            
            
            <p><b><i></i></b></p>
            
            <br> 
        </div>
        <div class="col-sm-1" id="">
            
        </div>            
    </div>   
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
</div>



@endforeach

@endsection