<?php

namespace  process;

use  \shipping\Fan;
use   \shipping\Dpd;
use   \shipping\Gls;
use  \interface\ShippingInterface;

class Checkout{


public function processShipping($shippingInfo){

   return $shippingInfo->generateAWB();
}


}