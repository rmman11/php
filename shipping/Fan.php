<?php

namespace  shipping;

use  \interface\ShippingInterface;

class Fan implements ShippingInterface{


public function generateAWB(){

	return 'generare awb';
}
public function printAWB(){

	return 'printare awb';
}
public function getAWB(){

	return 'vizualizare awb';
}
	
}