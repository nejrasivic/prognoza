<?php

if (isset($_COOKIE[session_name()])){
	setcookie(session_name(), " ", time ()- 86400 , '/')
}
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout stranica</title>
	
	<link rel="stylesheet" href="css/style.css">
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

<form action = "pocetna.html">
	<div class="dugme">
<p id="logo">
	<input type="submit" name="redirect" value = "Vrati se na pocetnu!" 21>
</p>
</div>
</form>

</body>
</html>