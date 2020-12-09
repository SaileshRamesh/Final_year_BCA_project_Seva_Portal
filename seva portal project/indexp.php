<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
</div class="container">
<h2 class="my-4 text-center">Online Fee for passport [1Rs]</h2>
<form action="./charge.php" method="post" id="payment-form">
  <div class="form-row">
    <div class="col">
      <input type="text" id="name" name="name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Name" required style="width:600px" >
    </div>
      <input id="email" name="email" type="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email" required style="width:600px">
    </div>
  </div>

  <div class="form-row">
    <div id="iban-element" class="form-control" style="width:600px">
      <!-- A Stripe Element will be inserted here. -->
    </div>
  </div>
  <div id="bank-name">
  </div>
  <button style="margin-left: 350px;width: 600px;margin-top: -110px;">Submit Payment</button>
  <!-- Used to display form errors. -->
  <div id="error-message" role="alert"></div>

  <!-- Display mandate acceptance text. -->
  <div id="mandate-acceptance">
  </div>
</form>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script src="./charge.js"></script>
</body>
</html>