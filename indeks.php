<?php
session_start();
$cookie_name = "user";
setcookie($cookie_name, time() + (86400), "/");

if($_SERVER['REQUEST_METHOD']=='POST') {
	include_once('connection.php');
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);

	$sql = "SELECT id,username,password FROM accounts where username = '$username' LIMIT 1";
	$query = mysqli_query($db, $sql);
	if($query) {
		$row = mysqli_fetch_row($query);
		$userId= $row[0];
		$dbUserName = $row[1];
		$dbPassword = $row[2];
	}
	if($username == $dbUserName && $password == $dbPassword) {
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $userId;
		header('Location: nejra.php');
	}
	else {
		echo "<b><i>Podaci koje ste unijeli nisu tačni. <br>Pokusajte ponovno!! </i><b>";

	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In </title>

	
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?> 
<style>
body{
background-image:url(reg.jpg);
background-repeat: no-repeat;
width: auto;
height: auto;
background-size: 100%;
}
</style>
	<div class="login">
<h1>Login</h1>
<form method="post" action="indeks.php">
<label for="username">
	<i class="fas fa-user"></i>
		</label>
		<input type="text" name="username" placeholder="Korisnicko ime" id="username" required>
		<label for="password">
			
		</label>
		<input type="password" name="password" placeholder="Password" id="password" required>
		<input type="submit" value="Login">

</form>

<p id="reg">
	<a href="register.php" input type="submit" value="Register" >
	<input type="submit" value="Register">
</p>
</div>
</body>
</html>