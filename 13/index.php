<?php
	ini_set('display_errors', 'on');
	include "init.php";

	$car = new Car('BMW', 300, 2, 4);
	$smallCar = new SmallCar('Smart', 200, 1, 3);
	$ship = new Ship('Titanic', 20, 3000);


	echo $car->showSpeed(),'<br>';
	echo $ship->showSpeed(),'<br>';
	echo $smallCar->showSpeed(),'<br>';


	echo "<hr>";

	$order = new Order(new FileLogger());
	$order->add();
	$order->delete();

	$order1 = new Order(new DisplayLogger());
	$order1->add();
	$order1->delete();

	/*echo "<pre>";
	var_dump($transport);
	var_dump($car);*/