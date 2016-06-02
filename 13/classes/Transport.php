<?php

	abstract class Transport {
		protected $brand;
		protected $speed;
		protected $weight;
		protected $typeSpeed;

		public function __construct($brand, $speed, $weight){
			$this->brand = $brand;
			$this->speed = $speed;
			$this->weight = $weight;
		}

		public final function showSpeed(){
			return $this->brand.", speed: " .$this->speed.$this->typeSpeed;
		}

		protected abstract function info();
	}