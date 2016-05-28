<?php

	class Human {
		public static $eyes = 2;

		private static $religion = "XXXXX";

		const PI = 3.14;

		public static function getReligion(){
			return self::$religion;
		}

		public static function setReligion($value){
			self::$religion = $value;
		}
	}

	echo Human::$eyes;

	Human::$eyes = 4;

	echo Human::$eyes;

	echo "<hr>";

	echo Human::getReligion();

	Human::setReligion('Буддизм');

	echo Human::getReligion();

	echo "<hr>";

	class Cat {
		public $name;
		public $age;
		public $color;
	}

	$myCat = new Cat();
	var_dump($myCat);

	$myCat->name = "Byte";

	echo $myCat->name;