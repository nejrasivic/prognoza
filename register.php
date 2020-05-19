<?php 
	session_start();
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$username = strip_tags($_POST['username']);
		$password = strip_tags($_POST['password']);
		$db = mysqli_connect("localhost", "root", "", "vremenskaprognoza") or die ("Failed to connect");
		$query = "INSERT INTO accounts(username,password) VALUES('$username', '$password')";
		$result = mysqli_query($db,$query);
		if($result) {
			echo "Registracija uspjesna";
			header('Location: nejra.php');
		}
		else {
			echo "Registracija neuspjesna, pokusajte ponovo";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">	
<title>Registracija</title>
</head>
<body>
<style>
	body{
	background-image:url(reg.jpg);
	background-repeat: no-repeat;
	width: auto;
	height: auto;
	background-size: 100%;
	}
</style>

<div class="register">

<h1>Register</h1>
<form method="post" action="register.php">
<label for="username">
	<i class="fas fa-user"></i>
		</label>
		<input type="text" name="username" placeholder="Korisnicko ime" id="username" required>
		<label for="password">
			<br>
			<br>
		</label>
		<input type="password" name="password" placeholder="Password" id="password" required>
		
		<input type="submit" name="submit" value="Register">
</form>


<p id="but">
<a href="indeks.php" input type="submit" value="Login" >
<input type="submit" value="Login">
</p>
</div>
</body>
</html>