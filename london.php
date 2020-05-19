<?php
session_start();
$user = $_SESSION['username'];
$jsonfile = file_get_contents("http://api.openweathermap.org/data/2.5/weather?id=1006984&appid=b3e3437be07f846b4f566dc4336b2fba&units=metric");
$jsondata = json_decode($jsonfile);
$temp = $jsondata->main->temp;
$pressure = $jsondata->main->pressure;
$humidity= $jsondata->main->humidity;
$mintemp = $jsondata->main->temp_min;
$maxtemp = $jsondata->main->temp_max;
$wind = $jsondata->wind->speed;
$humidity = $jsondata->main->humidity;
$desc = $jsondata->weather[0]->description;
$maind = $jsondata->weather[0]->main;
$name= $jsondata->name; 
$country= $jsondata->sys->country;
$temp=$jsondata->main->temp;
$date= date("Y/m/d") ;
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/vremprognoza.css">	
<title>Vremenska prognoza</title>
<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- weather icons -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css">

</head>
<body>
<style>
  body{
  background-image:url(jedan.jpg);
  background-repeat: no-repeat;
  width: auto;
  height: auto;
  background-size: 100%;
  }
</style>
<div class ="navbar">
    <p> <?php echo $date;?> </p>
    <?php echo "Trenutno vrijeme " . date("h:i:sa");?>
</div>
 <br>
 <div class="korisnik">
    <?php
    echo "Dobrodošli $user"; ?>
 </div>
 <br> 

<h2>Vremenska prognoza -<?php echo $name; ?> </h2>
<br>
<br>

<center>
	
<div id="tabela">
<table style="border:2px solid black;margin-left:200px ;margin-right:120px;">
<!--<table style="width:60%; border:7px solid black; "> -->
  <col style="width:40%;" />
  <col style="width:30%;" />
  <col style="width:30%;" />
<div id ="row">
	  <p id="naslov"> <?php echo $name , $country ?></p>
	  <p> Temperatura u gradu iznosi <?php echo $temp; ?> C </p>
 </div>
  <tr>
    <th>Minimalna temperatura iznosi</th>
	  <th>Vlaznost zraka iznosi </th>
	  <th>Brzina vjetra iznosi </th>
  </tr>

  <tr> 
	  <td><img src="temp.jpg" height=70px weight =70px></td> 
	  <td><img src="vlaznostzraka.jpg" height=70px weight =70px></td>
	  <td><img src="vjetar.jpg" height=70px weight =70px ></td>
    
  </tr>
  <tr>
    <td><p><?php echo $mintemp; ?> C </p></td>
	  <td><p><?php echo $humidity;?> % </p></td>
	  <td><p><?php echo $wind;?> mph </p></td>
  </tr>

</table>
</div>
</center>
<br>
<br>
<br>
<br>
<!--
<p class="logo">
<form action="logout.php">
	<input type="submit" name="logout" value="Logout"  border:2px solid black;margin-left:200px ;margin-right:120px;> 
</form>
</p> --> 
<div class="desno">
    <b><a href="logout.php">Log Out </a><b></div>
<div class="lijevo">
    <b><a href="nejra.php">Nazad </a></b></div>
</body>
</html>
