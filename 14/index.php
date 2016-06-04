<?php
	ini_set('display_errors', 'on');
	//include 'init.php';
	include 'classes/SimpleClass.php';
	include 'classes/AnotherClass.php';

	use Simple\SimpleClass as SClass;
	use Simple\AnotherClass;


	$an = new AnotherClass();
	$an->className();
	echo "<hr>";
	$simple = new SClass();

	$simple->className();

/*	$pickachu = new Pikachu(new FileLogger('pickachu.log'));

	$pickachu->meth();
	echo "<br>", $pickachu->fff;*/
