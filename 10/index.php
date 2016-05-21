<?
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Ajax example</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/app.css" rel="stylesheet">

</head>
<body>
<?if(!isset($_SESSION['user'])):?>
	<div class="container">
		<div class="row margin-top">
			<form class="login-form center-block">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-default login-btn">Submit</button>
			</form>
		</div>
	</div>
<?else:?>
	<h1>Hello, <?=$_SESSION['user']['name']?>!</h1>
	<button class="btn btn-default logout-btn">Logout</button>
<?endif?>
<?

/*	$a = 33;
	echo $a;
	$_SESSION['a'] = $a;*/
/*	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";*/

	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";

	/*setcookie ("TestCookie", "Hello cookie", time() - 3600);
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";*/
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>