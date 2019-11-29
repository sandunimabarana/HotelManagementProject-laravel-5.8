@extends('layouts.temp')


@section('content')
<br>
@foreach( $dates as $date)
<h2><i>From:{{$date->start_date}} To:{{$date->end_date}} </i></h2>
@endforeach
<br>
@foreach( $available_rooms as $Aroom)
<div class="row" id="rr1">
       
        <div class="col-sm-2"><img src="/storage/{{$Aroom->image }}" alt="" width="100%"></div>

        
        <div class="col-sm-4">
            <br><br>
            <h2 id="roomdesh">{{$Aroom->RoomName}} {{$Aroom->RoomType}} Room</h2>

        </div>
        <div class="col-sm-4" id="">
            <br><br>
            <span id="rate">{{$Aroom->Price}}</span> / Night

        </div>
        <div class="col-sm-2" id="roomdes">
            <br><br>
            
            <a type="submit" href="{{
                    route('Online_payment',
                      [
                        'checkid' => $Aroom->id,    
                        'startdate' => $date->start_date,
                        'enddate' => $date->end_date,
                      ]
                    )
                  }}"><button class="form-control submitroom" >Book Now</button></a>
        </div>
       
    </div>
    <br>
    @endforeach
    
    </div>
    





@endsection



  