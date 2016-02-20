<?php

/**
 * The electric car description.
 */
abstract class ElectricCar extends Vehicle
{
	public function getType()
	{
		return 'ElectricCar';
	}

	public function getNumberOfSeats()
	{
		return 4;
	}

	public function getNumberOfWheels()
	{
		return 4;
	}

	public function travelCost()
	{
		return 0;
	}

	/**
	 * Get the battery capacity.
	 *
	 * @return int   The battery capacity.
	 */
	abstract function getBatteryCapacity();

	/**
	 * Get the number of miles per full battery charge.
	 *
	 * @return float   The number of miles per full battery charge.
	 */
	abstract function getMilesPerCharge();
}