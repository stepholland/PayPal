<!DOCTYPE html>

<html lang="en">

<head>

  <title>Confirmation Email</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>



<div class="container">

<p>Thank you for purchasing {{$memtype}} membership!</p>

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

                <p><strong>Membership Type:</strong></p>

                </td>

                <td width="312">

                <p>{{$memtype}}</p>

                </td>

                </tr>

                <tr>

                <td width="312">

                <p><strong>Amount:</strong></p>

                </td>

                <td width="312">

                <p>${{$amount}}</p>

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





    <p>Thank you,</p>

    <p>Membership Team APPNA-OK</p>

</div>



</body>

</html>

