<?php

/**
 * The vehicle description.
 */
abstract class Vehicle
{
	/**
	 * Get the type of the vehicle.
	 *
	 * @return string   The vehicle type.
	 */
	abstract function getType();

	/**
	 * Get the total number of seats in the vehicle.
	 *
	 * @return int   The number of seats.
	 */
	abstract function getNumberOfSeats();

	/**
	 * Get the total number of wheels in the vehicle.
	 *
	 * @return int   The number of wheels.
	 */
	abstract function getNumberOfWheels();

	/**
	 * Get the MPG for the vehicle.
	 *
	 * @return float   The vehicle MPG.
	 */
	public function getMpg()
	{
		return null;
	}

	/**
	 * Calculates the total cost for the travel with the current MPG .
	 *
	 * @param float $mpg        The vehicle MPG.
	 * @param float $distance   The distance to be travel.
 	 * @param float $gasPrice   The current gas price per gallon.
	 *
	 * @return float   The cost.
	 */
	public function travelCost($mpg, $distance, $gasPrice)
	{
		return null;
	}

	public function printTravelCost($mpg, $distance, $gasPrice)
	{
		echo $this->travelCost($mpg, $distance, $gasPrice);
	}

	public function printType()
	{
		echo $this->getType();
	}
}