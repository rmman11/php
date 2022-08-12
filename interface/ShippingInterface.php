<?php


namespace interface;

interface ShippingInterface{

	public function generateAWB();
	public function printAWB();
	public function getAWB();
}