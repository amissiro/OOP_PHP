<?php
ini_set('display_errors', 1);
include 'SedanCar.php';
include 'Safety.php';
/**
 * Created by PhpStorm.
 * User: azretmissirov
 * Date: 2/11/16
 * Time: 7:03 PM
 */
class Mercedes extends SedanCar implements Safety
{
	const ENGINE_SIZE = 3.5;

	const SAFETY_RATING = 85;

	const TRANSMISSION_TYPE = 'Manual';

	private $make;

	private $mpg;


	public function __construct($make)
	{
		$this->make = $make;
	}

	/**
	 * Get the sedan car make.
	 *
	 * @return string   The car's make.
	 */
	public function getModel()
	{
		return $this->make;
	}

	/**
	 * Sets the mpg for a car.
	 *
	 * @param float $mpg   The MPG.
	 */
	public function setMpg($mpg)
	{
		$this->mpg = $mpg;
	}

	/**
	 * Gets the mpg for a car.
	 *
	 * @return float $mpg   The MPG.
	 */
	public function getMpg()
	{
		return $this->mpg;
	}

	public function getEngineSize()
	{
		return self::ENGINE_SIZE;
	}

	public function getTransmissionType()
	{
		return self::TRANSMISSION_TYPE;
	}

	public function getSafetyRating()
	{
		return self::SAFETY_RATING;
	}

	public function printInfo()
	{
		echo "Info : Mercedes " . $this->make . "has following mpg " . $this->mpg;
	}

}

$mercedes = new Mercedes("clk-350");

$mercedes->setMpg(30);
$mercedes->travelCost($mercedes->getMpg(),300, 2.2);

$mercedes->printInfo();



