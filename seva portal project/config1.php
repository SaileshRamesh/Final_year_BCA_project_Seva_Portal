<?php 
// Product Details 
// Minimum amount is $0.50 US 
$itemName = "Demo Product"; 
$itemNumber = "PN12345"; 
$itemPrice = 25; 
$currency = "USD"; 
 
// Stripe API configuration  
define('STRIPE_API_KEY', 'sk_test_THAR1dNgi3Et9BTMeXZNfG0g00tdNfGoHC'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_5tGyIlhHYbyZ7QNOOeixwmnv00OHzmCeAZ'); 
  
// Database configuration  
define('DB_HOST', 'localhost'); 
define('DB_USERNAME','root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'seva_portal');