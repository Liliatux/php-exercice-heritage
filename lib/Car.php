<?php

class Car {
	private $wheels = 4;
	private $manufacturer;
	private $kilometrage;
	private $airbag;
	private $abs = false;
	private $doors;

	public function __construct() {
		$this->manufacturer = 'unknown';
		$this->kilometrage = 0;
		$this->airbag = false;
		$this->doors = 2;
	}

	//Retourne un nombre sur le nombre de roues
	public function getWheels() {
		return $this->wheels;
	}

	public function setWheels($value) {
		$this->wheels = $value;
	}

	/**
	 * Retrourne une chaîne de caractère
	 * 
	 */
	public function getManufacturer() {
		return $this->manufacturer;
	}

	public function setManufacturer($name) {
		$this->manufacturer = $name;
	}

	// Retourne un nombre sur le kilometrage
	public function getKilometrage() {
		return $this->kilometrage;
	}

	public function setKilometrage($kilo) {
		$this->kilometrage = $kilo;
	}

	/**
	 *	Retourne un booléen sur la disponibilité
	 *	des airbags
	 * 
	 * @return  {boolean} Are airbag available 
	 */

	public function getAirbag() {
		return $this->airbag;
	}

	/**
	 * Définition de la disponibilité des airbags
	 * 
	 * @param $available {boolean}
	 */
	public function setAirbag($available) {
		$this->airbag = $available;
	}


	//Retourne un booleen sur la disponibilité de l'abs
	public function getAbs() {
		return $this->abs;
	}

	public function setAbs($dispo) {
		$this->abs = $dispo;
	}

	//Retourne le nombre de porte
	public function getDoors() {
		return $this->doors;
	}

	public function setDoors($door) {
		$this->doors = $door;
	}
}

$car = new Car;