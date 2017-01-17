<?php
require 'lib/Car.php';
require 'lib/MyCar.php';
$car = new MyCar();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Voiture</title>
</head>
<body>
	<h1>My Car</h1>
	<div>
		<form action="index.php" method="get">
			<label for="manufacture">Manufacturer</label>
			<input type="text" name="manufacture" id="manufacture">

			<label for="roues">Nombre de roues</label>
			<input type="number" name="roues" id="roues">

			<label for="kilometres">Nombre de kilomètres</label>
			<input type="number" name="kilometres" id="kilometres">

			<label for="airbag">Airbag présent</label>
			<input type="text" name="airbag" id="airbag">

			<label for="abs">ABS présent</label>
			<input type="text" name="abs" id="abs">

			<label for="portes">Nombre de portes</label>
			<input type="text" name="portes" id="portes">

			<input type="submit">
		</form>
	</div>
	<div>
		<br>Manufacturer: <?= $car->getManufacturer(); ?></br>
		<br>Roues: <?= $car->getWheels(); ?></br>
		<br>Kilométrage: <?= $car->getKilometrage(); ?></br>
		<br>Airbag: <?= $car->getAirbag(); ?></br>
		<br>ABS: <?= $car->getAbs(); ?></br>
		<br>Portes: <?= $car->getDoors(); ?></br>
	</div>
	
</body>
</html>