<!DOCTYPE html>

<html lang="en">

<head>

  <title>Event Email</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>



<div class="container">

<p>Thank you for purchasing {{$event}} Tickets!</p>

<br>

        <table>

                <tbody>

                <tr>

                <td width="312">

                <p><strong>Name:</strong></p>

                </td>

                <td width="312">

                <p>{{$name}}</p>

                </td>

                </tr>

                <tr>

                <td width="312">

                <p><strong>Email:</strong></p>

                </td>

                <td width="312">

                <p>{{$email}}</p>

                </td>

                </tr>

                <tr>

                <td width="312">

                <p><strong>Phone:</strong></p>

                </td>

                <td width="312">

                <p>{{$phone}}</p>

                </td>

                </tr>

                <tr>

                <td width="312">

                <p><strong>Price:</strong></p>

                </td>

                <td width="312">

                <p>${{$amount}}</p>

                </td>

                </tr>

                <tr>

                <td width="312">

                <p><strong>Quantity:</strong></p>

                </td>

                <td width="312">

                <p>{{$quantity}}</p>

                </td>

                </tr>

                <tr>

                <td width="312">

                <p><strong>Date:</strong></p>

                </td>

                <td width="312">

                <p>{{$date}}</p>

                </td>

                </tr>

                </tbody>

                </table>

                <br>

<em>Total = ${{round($amount, 2)}} x {{$quantity}} = ${{round($amount * $quantity * 1.03, 2)}}</em>

<br><strong>This ticket is valid for {{$quantity}} person.</strong>

<br>


Please stay updated about the event by visiting <a href="www.ga-appna.org/events">here</a>. 



    <p>Thank you,</p>

    <p>Team  APPNA-OK</p>

</div>



</body>

</html>

