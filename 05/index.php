<?php

	$arNumbers = array(77, 465, 6, 4, 5);

	//echo "<pre>";
	var_dump($arNumbers);

	echo "<hr>";

	$arNumbers = array(
		100 => 77,
		-2 => 465,
		25 => 6,
		3 => 4,
		43 => 5
	);

	//echo "<pre>";
	var_dump($arNumbers);

	echo "<hr>";

	$arNumbers = [77, 467, 689, 455, 5];

	//echo "<pre>";
	var_dump($arNumbers);

	echo "<hr>";

	$arEmpty = []; // array();

	var_dump($arEmpty);

	echo "<hr>";

	$arNumbers = [10 => 77, 467, 20 => 689, 455, 5];

	var_dump($arNumbers);

	echo "<hr>";

	$arStrings = ['dsf', 'dfsdf', 'dsfsdg', 'ghjghjg'];

	var_dump($arStrings);

	echo "<hr>";

	$arStrings = [
		'one' => 'dsf',
		'two' =>'dfsdf',
		'three' =>'dsfsdg',
		'four' =>'ghjghjg'
	];

	var_dump($arStrings);

	echo "<hr>";

	const two = 10; //define('two', 10);

	//echo $arStrings[two]; так делать не надо!!!!
	echo $arStrings['two']; //правильный вариант!!!

	echo "<hr>";

	echo $arNumbers[20];

	echo "<hr>";

	$arNumbers[20] = 400;

	var_dump($arNumbers);

	echo "<hr>";

	$arNumbers[20] /= 2;//$arNumbers[20] = $arNumbers[20] / 2;

/*	$a = $arNumbers[20];
	$res = $a / 2;
	$arNumbers[20] = $res;*/

	var_dump($arNumbers[20]);

	echo "<hr>";

	$arNumbers[26] = "ssss";

	var_dump($arNumbers);

	echo "<hr>";

	$arTestNum = [];
	for($i = 1; $i <= 10; $i++){
		$arTestNum[] = $i;
	}

	var_dump($arTestNum);

	echo count($arTestNum);

	echo "<hr>";

	$arStrings = [
		'one' => 'dsf',
		'two' =>'dfsdf',
		'three' =>'dsfsdg',
		'four' =>'ghjghjg'
	];

	foreach($arStrings as $key => $value){
		echo "key: $key - value: $value<br>";
	}

	echo "<hr>";

	foreach($arStrings as $value){
		echo "value: $value<br>";
	}

	echo "<hr>";

	$arNumbers = [10, 20, 30, 40, 50];
	var_dump($arNumbers);

	foreach ($arNumbers as $key => $number) {
		$arNumbers[$key] = $number / 2;
	}

	var_dump($arNumbers);

	echo "<hr>";

	$arNumbers = [10, 20, 30, 40, 50];
	var_dump($arNumbers);

	foreach ($arNumbers as &$number) {
		$number /= 2;
	}
	unset($number);

	var_dump($arNumbers);

	foreach ($arNumbers as $number) {
		echo $number, "<br>";
	}

	echo "<hr>";

	$arPeople = [
		[
			'ID' => 1,
			'NAME' => 'Вася',
			'AGE' => 22,
			'FRIENDS' => [
				[
					'NAME' => 'Ольга',
					'AGE' => 18
				],
				[
					'NAME' => 'Валера',
					'AGE' => 40
				]
			]
		],
		[
			'ID' => 2,
			'NAME' => 'Петя',
			'AGE' => 24,
			'FRIENDS' => [
				[
					'NAME' => 'Евгений',
					'AGE' => 13
				],
				[
					'NAME' => 'Виталий',
					'AGE' => 34
				]
			]
		]
	];
	/*echo '<pre>';
	print_r($arPeople);*/

	echo $arPeople[0]['NAME'],"<br>";
	echo $arPeople[1]['NAME'];

	echo "<hr>";

	foreach ($arPeople as $arItem) {
		echo $arItem['NAME']." - ".$arItem['AGE'], "<br>";

		echo "Friends:<br>";

		foreach($arItem['FRIENDS'] as $arFriend){
			echo $arFriend['NAME']." - ".$arFriend['AGE'], "<br>";
		}
		echo "-----------------------<br>";
	}

	echo "<hr>";

	$arPeople[] = [
		'ID' => 3,
		'NAME' => 'Валера',
		'AGE' => 40,
	];

	echo '<pre>';
	print_r($arPeople);

	echo "<hr>";
	$arPeople[0]['FRIENDS'][] = [
		'NAME' => 'Евгений',
		'AGE' => 13
	];

	echo '<pre>';
	print_r($arPeople);

	echo "<hr>";

	$arId = [1, 2];

	foreach($arPeople as $arItem){
		if(in_array($arItem['ID'], $arId)){
			echo $arItem['NAME'], "<br>";
		}
	}
