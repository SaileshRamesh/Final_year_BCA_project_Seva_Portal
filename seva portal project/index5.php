<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<form action="" method="post">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Payment-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="row .payment-dialog-row">
        <div class="col-12 col-md-4 offset-md-4">
            <div class="card credit-card-box">
                <div class="card-header">
                    <h3><span class="panel-title-text">Payment Details </span><img class="img-fluid panel-title-image" src="assets/img/accepted_cards.png"></h3>
                </div>
                <div class="card-body">
                    <form id="payment-form">
                        <div class="form-row">
                            <div class="col-12">
                            <div class="form-group"><label for="cardNumber">Name</label>
                                    <div class="input-group"><input class="form-control" type="text" name="name" id="name" required="" value="<?php echo $name; ?>" placeholder="Name">
                                    </div><br>
                                <div class="form-group"><label for="cardNumber">Card number </label>
                                    <div class="input-group"><input class="form-control" type="text" id="cno" name="cno" required="" placeholder="Valid Card Number">
                                        <div class="input-group-append"><span class="input-group-text"><i class="fa fa-credit-card"></i></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-7">
                                <div class="form-group"><label for="cardExpiry"><span>expiration </span><span>EXP </span> date</label><input class="form-control" type="date" id="edate" name="edate" required="" placeholder="YY/MM/dd"></div>
                            </div>
                            <div class="col-5 pull-right">
                                <div class="form-group"><label for="cardCVC">cv code</label><input class="form-control" type="tel" name="cvv" id="cvv" required="" placeholder="CVC"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group"><label for="couponCode">Amount</label><input class="form-control" value="120" name="amount" type="text" id="amount"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12"><br></br></br><br><button class="btn btn-success btn-block btn-lg" name="submit7" id="submit7" type="submit7">Pay</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>
    <p class="examples-note"></p>

<div class="examples">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Card Number</th>
                    <th>Security Code</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Visa</td>
                    <td>4716108999716531</td>
                    <td>257</td>
                </tr>
                <tr>
                    <td>Master Card</td>
                    <td>5281037048916168</td>
                    <td>043</td>
                </tr>
                <tr>
                    <td>American Express</td>
                    <td>342498818630298</td>
                    <td>3156</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</form>
</html>