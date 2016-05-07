<?php
ini_set('display_errors', 'on');


	function foo(){
		return 4;
	}


	function mul($a, $b){

		return $a * $b + foo();
	}

	echo mul(3, 2);

	echo "<hr>";

	$GLOBALS['c']  = 3;
	//$c = 4;
	function bar($a, $b){
		//global $c;
		return $a * $b + $GLOBALS['c'];
	}

	echo bar(2, 2);

	//var_dump($GLOBALS);

	echo "<hr>";

	function sum($x, $y = 1){
		return $x + $y;
	}

	echo sum(2, 3);

	echo "<hr>";

	$sum = function($x, $y){
		return $x + $y;
	};

	echo $sum(2, 3);

	var_dump($sum);

	echo "<hr>";

	$func = 'sum';
	echo $$func(10, 2);

	echo "<hr>";

	$func = 'sum';
	echo $func(10, 5);

	echo "<hr>";

	function bazz(&$a, $b){
		$a += $b;
	}

	$a = 3;
	$r = 3;

	bazz($a, $r);
	echo $a;

	echo "<hr>";

	function walk_array($array, Closure $callback){
		foreach($array as $item){
			$callback($item);
		}
	}

	$arTest = [1,2,3,4,5];

	walk_array($arTest, function($item){
		echo pow($item, 2), '<br>';
	});

	echo "<hr>";

	walk_array($arTest, function($item){
		echo $item, ', ';
	});

	echo "<hr>";

	function map_array(&$array, Closure $callback){
		foreach($array as &$item){
			$item = $callback($item);
		}
	}

	$arTest = [1,2,3,4,5];

	var_dump($arTest);

	map_array($arTest, function($item){
		return pow($item, 2);
	});

	var_dump($arTest);


