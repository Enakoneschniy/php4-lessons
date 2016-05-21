<?
	session_start();

	if(!isset($_SESSION['user'])){
		header('Location: /10/');
		exit();
	}else{
		echo "You logged";
	}
