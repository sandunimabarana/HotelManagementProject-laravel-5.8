@extends('layouts.temp')


  <script
    src="https://www.paypal.com/sdk/js?client-id=AT4Ga3T2fw7EwoPh3yIW1Qm0Wt-9vhj7bC45bEMKEcGwv5fjIF03DpysprcoxZgmjn5LvwPv8aKPZBua">
  </script>
  
  
  <script
    src="https://www.paypal.com/sdk/js?client-id=AT4Ga3T2fw7EwoPh3yIW1Qm0Wt-9vhj7bC45bEMKEcGwv5fjIF03DpysprcoxZgmjn5LvwPv8aKPZBua">
  </script>


@section('content')
  <div id="paypal-button-container"></div>


  


<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // Capture the funds from the transaction
      return actions.order.capture().then(function(details) {
        // Show a success message to your buyer
        @foreach( $details as $detail)
        window.location.href = "{!!  route('client', [
                                        'room_id' => $detail->checkid,    
                                        'startdate' => $detail->startdate,
                                        'enddate' => $detail->enddate,  ] ) ;  !!}";
      @endforeach
      });
    }
  }).render('#paypal-button-container');
</script>

@endsection


