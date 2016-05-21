<?

	session_start();
	$email = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
	$arErrors = [];

	$user = [
		"name" => "Evgeniy",
		'email' => 'e.nakoneschniy@gmail.com',
		'password' => '123321'
	];

	if(!preg_match($email, $_REQUEST['email'])){
		$arErrors[] = 'email';
	}else{
		if(!($user['email'] == $_REQUEST['email'])){
			$arErrors[] = 'email';
		}
	}

	if(trim($_REQUEST['password']) == ''){
		$arErrors[] = 'password';
	}else{
		if(!($user['password'] == $_REQUEST['password'])){
			$arErrors[] = 'password';
		}
	}

	if(count($arErrors) > 0){
		echo json_encode($arErrors);
	}else{
		$_SESSION['user'] = $user;
		echo json_encode("OK");
	}
