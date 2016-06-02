<?php

	class Car extends Transport{
		protected $typeSpeed = 'km/h';
		protected $wheels;

		public function __construct($brand, $speed, $weight, $wheels){
			parent::__construct($brand, $speed, $weight);
			$this->wheels = $wheels;
		}

		/*public function showSpeed(){
			$str = parent::showSpeed();
			return $str.$this->typeSpeed;
		}*/
		protected function info()
		{

		}
	}
