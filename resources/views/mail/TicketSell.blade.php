<!DOCTYPE html>

<html lang="en">

<head>

    <title>Ticket Sell</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container">

        <h3>New Tickets Sell Notification</h3>
          <p><strong>Client's Name:</strong>{{$order->name}}</p>
          <p><strong>Client's Email:</strong>{{$order->email}}</p>
          <p><strong>Client's Phone:</strong> {{$order->phone}}</p>

        <br>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Ticket</th>
              <th>Quantity</th>
              <th>Cost</th>
            </tr>

          </thead>
            <tbody>


                @php
                  $allPrices=array();
                @endphp

                @foreach(json_decode($order->tickets) as $ticket=>$units)

                  @php
                    $thisTicket=App\Ticket::where('id',$ticket)->first();
                  @endphp
                  @if($units!=0)
                  <tr>
                    <td>${{$thisTicket->price}} {{$thisTicket->name}}</td>
                    <td>{{$units}}</td>
                    <td>${{$units*$thisTicket->price}}</td>
                  </tr>
                  @endif
                @endforeach

                <tr style="background:gray;color:white">
                    <td colspan="2">Total Amount</td>
                    <td>${{$order->amount}}</td>
                </tr>


            </tbody>

        </table>

        <br>

        <p>Thank you,</p>

        <p>Team APPNA-OK</p>

    </div>

</body>

</html>
