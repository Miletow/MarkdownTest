<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Pay Page</title>
</head>
<body>
<div class="container">
<h2 class="my-4 text-center">Intro To React Course [$50]</h2>
<form action="./charge.php" method="post" id="payment-form">
  <div class="form-row">
    <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First name">
    <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last name">
    <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email">
    <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Submit Payment</button>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.7.0/d3.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="js/charge.js"></script>
</body>
</html>