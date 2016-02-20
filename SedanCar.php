<?php
include 'Vehicle.php';

/**
 * The sedan car description.
 */
abstract class SedanCar extends Vehicle
{
	const NUMBER_OF_SEATS = 5;

	const NUMBER_OF_WHEELS = 4;


	public function getType()
	{
		// TODO: Implement getType() method.
		return 'Sedan Car';
	}

	public function getNumberOfSeats()
	{
		// TODO: Implement getNumberOfSeats() method.
		return self::NUMBER_OF_SEATS;
	}

	public function getNumberOfWheels()
	{
		// TODO: Implement getNumberOfWheels() method.

		return self::NUMBER_OF_WHEELS;
	}

	public function travelCost($mpg, $distance, $gasPrice)
	{
		return ($distance/$mpg)*$gasPrice;
	}

	/**
	 * Get the transmission type.
	 *
	 * @return string   The transmission type.
	 */
	abstract function getTransmissionType();

	/**
	 * Get the engine size.
	 *
	 * @return int   The engine size.
	 */
	abstract function getEngineSize();

}