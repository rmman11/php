<?php

namespace  shipping;

use  \interface\ShippingInterface;

class Gls implements ShippingInterface{


public function generateAWB(){

	return 'generate';
}
public function getAWB(){

	return 'get';
}
public function printAWB(){

	return 'print';
}
	
}