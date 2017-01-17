<?php

class MyCar extends Car {
	public function __construct() {
		$this->setManufacturer($_GET['manufacture']);
		$this->setWheels($_GET['roues']);
		$this->setKilometrage($_GET['kilometres']);
		$this->setAirbag($_GET['airbag']);
		$this->setAbs($_GET['abs']);
		$this->setDoors($_GET['portes']);
	}

	public function saveFile() {

	}
}

?>