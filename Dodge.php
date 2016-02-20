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
class Dodge extends SedanCar implements Safety
{
	private $model;
	private $mpg;

	private $safetyRating = 67;

	public function __construct($model)
	{
		$this->model = $model;
	}

	public function getModel()
	{
		return $this->model;
	}

	public function setMpg($mpg)
	{
		$this->mpg = $mpg;
	}

	public function printInfo()
	{
		echo "Info : Dodge " . $this->model . "has following mpg " . $this->mpg;
	}

	public function getSafety()
	{
		// TODO: Implement getSafety() method.
		return $this->safetyRating;
	}
}

$dodge = new Dodge("durango");
$dodge->setMpg(20);
$dodge->printInfo();
echo " Safety score : " . $dodge->getSafety();