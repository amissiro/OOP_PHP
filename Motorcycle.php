<?php

/**
 * Created by PhpStorm.
 * User: azretmissirov
 * Date: 2/11/16
 * Time: 6:55 PM
 */
abstract class Motorcycle extends Vehicle
{
	public function getType()
	{
		return 'Motorcycle';
	}

	public function getNumberOfSeats()
	{
		return 1;
	}

	public function getNumberOfWheels()
	{
		return 2;
	}

	public function mpgCost($mpg, $distance, $gasPrice)
	{
		return ($distance/$mpg)*$gasPrice;
	}

}