<?
	//include "include/functions.php";
	//include_once "include/functions.php";
	//require "include/functions.php";
	require_once "include/functions.php";

	echo fact(5);

	echo "<hr>";
	$n = 10;
	for($i = 0; $i < $n; $i++){
		echo fib($i), " ";
	}

	echo "<hr>";

	$filename = "text.text";
	//$handle = fopen($filename, 'w');
	/*$handle = fopen($filename, 'a');
	fputs($handle, "Hello world!\r\n");
	fclose($handle);*/
	echo "<hr>";
	$handle = fopen($filename, 'r');
	while(!feof($handle)){
		$string .= fgets($handle)."<br>";
	}
	fclose($handle);
	echo $string;

	echo "<hr>";
	$handle = fopen($filename, 'r');
	$str = fread($handle, filesize($filename));
	fclose($handle);
	echo nl2br($str);

	echo "<hr>";
	mkdir('test');
	echo "<hr>";
	$filename = "test/text1.text";
	//$handle = fopen($filename, 'w');
	/*$handle = fopen($filename, 'a');
	fputs($handle, "Hello world!\r\n");
	fclose($handle);*/
	echo "<hr>";
	$dh = opendir('test');
	$dir = readdir($dh);
	print_r($dir);
	$dir = readdir($dh);
	print_r($dir);
	closedir($dh);


