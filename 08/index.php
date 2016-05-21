<?
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";

	$str = 'Hello23 World';
	$pattern = '/^[a-z0-9 ]+$/i';
	$matches = [ ];
	if (preg_match($pattern, $str, $matches)) {
		echo "TRUE";
		echo "<pre>";
		print_r($matches);
		echo "</pre>";
	} else {
		echo "FALSE";
	}
	echo "<hr>";
	$lorem = "Loreme ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequuntur, dolorem earum enim quam suscipit
voluptates. At delectus enim error esse ipsum, maxime nam nostrum pariatur quidem, reprehenderit voluptas
voluptatibus?";

	$ipsum = '/[a-z]*[me]{1}[a-z]*/i';

	$arRes = [];

	preg_match_all($ipsum, $lorem, $arRes);

	echo "<pre>";
	print_r($arRes);
	echo "</pre>";

	echo "<hr>";
	$lorem = "Loreme meipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequuntur, dolorem earum enim quam suscipit
voluptates. At delectus enim error esse ipsum, maxime nam nostrum pariatur quidem, reprehenderit voluptas
voluptatibus?";

	$ipsum = '/[a-z]*me[a-z]*/i';

	$arRes = [];

	preg_match_all($ipsum, $lorem, $arRes);

	echo "<pre>";
	print_r($arRes);
	echo "</pre>";

	echo "<hr>";

	$string = "April 15, 2003";

	echo $string, "<br>";

	$pattern = '/(\w+) (\w+), (\d+)/i';
	$replacement = "\$1, sdfsdfsdf \$3 sefhfgh \$2";
	echo preg_replace($pattern, $replacement, $string);