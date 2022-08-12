<?php

include_once 'autoload.php';


use  \process\Checkout;
use  \shipping\Fan;
use   \shipping\Dpd;
use   \shipping\Gls;

$shippingProvider = new Fan();

$checkout = new  Checkout();
echo $checkout->processShipping($shippingProvider);


//https://www.youtube.com/watch?v=mMSkleL6w3E