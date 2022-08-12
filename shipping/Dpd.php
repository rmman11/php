<?php

namespace  shipping;
use  \interface\ShippingInterface;

class Dpd implements ShippingInterface{


public function generateAWB(){

   return 'generate dpd';
}
public function getAWB(){

 return 'get dpd ';
}

public function printAWB(){

 return 'print dpd';
}
	
}