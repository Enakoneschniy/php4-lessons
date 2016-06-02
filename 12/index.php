<?php

	ini_set('display_errors', 'on');
	class MyClass{
		private $color;
		private $height;
		private $width;
		private $element;

		public function __get($name){
			return $this->$name;
		}

		public function __set($name, $value){
			if(gettype($value) === 'integer' || gettype($value) === 'float'){
				$this->$name = $value;
			}

		}

		public function __call($name, $arguments){
			if($name == 'mul'){
				return $arguments[0] * $arguments[1];
			}
		}

		public static function __callStatic($name, $arguments){
			if($name == 'mul'){
				return $arguments[0] * $arguments[1];
			}
		}

		public function __construct($c, $h, $w, $e = 'div'){
			$this->color = $c;
			$this->height = $h;
			$this->width = $w;
			$this->element = $e;

			$handler = fopen('dddd','a');
			fclose($handler);

			fread($handler, filesize('dddd'));
		}

		public function __invoke(){
			echo $this->height. " x ". $this->width;
		}

		public function __destruct(){
			//echo 'Destruct';
		}

		public function __toString(){
			$el = "<".$this->element;
			$el .= " style='background:".$this->color;
			$el .= "; height:".$this->height;
			$el .= "; width:".$this->width.";'>";
			$el .= "</".$this->element.">";
			return $el;
		}

		public function show(){
			$el = "<".$this->element;
			$el .= " style='background:".$this->color;
			$el .= "; height:".$this->height;
			$el .= "; width:".$this->width.";'>";
			$el .= "</".$this->element.">";
			echo $el;
		}

	}

	$div = new MyClass("red", 100, 100);
	//$div->show();
	$div->height = 300;
	echo $div->height,"<br>";

	echo $div->mul(2, 3), "<br>";
	echo MyClass::mul(3, 3), "<br>";

	unset($div);//__destruct()

	$div1 = new MyClass("yellow", 100, 100);
	//$div1->show();

	$div2 = new MyClass("green", 100, 100);//__construct()
	//$div2->show();

	echo $div2;//__toString()

	$div2();//__invoke()


