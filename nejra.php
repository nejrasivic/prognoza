<!DOCTYPE html>
<html>
<head>
<link href="css/vremprognoza1.css" rel="stylesheet" type="text/css"/>
<title>Vremenska prognoza</pre></title>
</head>
<body>
<style>
    body{
    background-image:url(sunny.jpg);
    background-repeat: no-repeat;
    width: auto;
    height: auto;
    background-size: 100%;
    }
</style>
<div class="container"> 
    <div class="card" id="main">
    <div class="card-header">
        <h1><b><i>Vremenska prognoza</i></b> </h1>
        <h2><b><i>Izaberite grad </i></b></h2>
    </div>

    <div class="card-body" id="mainContent">  
    <div class="select-div">
        <form name="formular">
        <select name="izbornik">
        <option value=none class="grupa">Pronadjite Vašu lokaciju</option>
        <option value="tuzla.php">Tuzla</option>
        <option value="mostar.php">Mostar</option>
        <option value="sarajevo.php">Sarajevo</option>
        <option value="london.php">London</option>
        <option value="paris.php">Pariz</option>
        </select>
        <input class="btn" type="button" name="btn" value="Traži" onClick="location=document.formular.izbornik.options[document.formular.izbornik.selectedIndex].value;">
        </form>
    </div>
    </div>
    </div>
</div>

</body>
</html>