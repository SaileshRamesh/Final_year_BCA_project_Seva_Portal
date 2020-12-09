<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <h3 class="text-center">What's the biggest reason for cancellation?</h3>
    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" style="margin-left: 568px;margin-top: 53px;"><label class="form-check-label" for="formCheck-1" style="margin-left: 587px;margin-top: 46px;">It's too costly</label></div>
    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" style="margin-left: 568px;"><label class="form-check-label" for="formCheck-2" style="margin-left: 587px;">I found another product that's fullfills my needs&nbsp;</label></div>
    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" style="margin-left: 568px;"><label class="form-check-label" for="formCheck-3" style="margin-left: 587px;">I don't use it enough</label></div>
    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4" style="margin-left: 568px;"><label class="form-check-label" for="formCheck-4" style="margin-left: 587px;">Other</label></div>
    <button class="btn btn-primary btn-block" type="submit" id="submit8" name="submit8" style="margin-left: 565px;width: 176px;margin-top: 250px;">Cancel My passport</button>
    <input type="submit" name="button9"
                class="button" value="Button9" /> 
    <button class="btn btn-primary border-light" type="submit" onclick="location='home.php'" style="margin-top: 170px;margin-left: -167px;background-color: rgb(247,248,248);color: rgb(14,13,13);">Go back to home</button>
    
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
if (isset($_POST['submit9'])) {
  header('location: proceed.php');
}
?>