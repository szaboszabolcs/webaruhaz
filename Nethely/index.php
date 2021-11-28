<!DOCTYPE html>
<html lang="hu">
<head>
  <title>Szabó Szabolcs - Webáruháza</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
</head>
<body>
<style>
 
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h4>MSZC Kandó Kálmán Informatikai Technikum</h4>
  <h2>WEBÁRUHÁZ</h2>
  <h5>Szabó Szabolcs és Pásztor Dávid - Webáruháza</h5>  
</div>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#"> Szabó Szabolcs - Webáruház</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
	  <li class="nav-item">
        <a class="nav-link" href="minden_termek.php">Minden termék</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="alaplap.php">Alaplap</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="memoria.php">Memória</a>
      </li> 
<li class="nav-item">
        <a class="nav-link" href="videokartya.php">Videókártya</a>
      </li>	
<li class="nav-item">
        <a class="nav-link" href="monitor.php">Monitor</a>
      </li>	 
<li class="nav-item">
        <a class="nav-link" href="processzor.php">Processzor</a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="huto.php">Hűtő</a>
      </li>	  
    </ul>
  </div>  
</nav>

<hr>


<div class="container" style="margin-top:30px">
<h1  class="text-center" > ÜDVÖZÖLLEK A WEBÁRUHÁZAMBAN!</h1>
<hr>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
 <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="kepek/aruhaz1.jpg" alt="Webáruház" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="webaruhaz_szsz/aruhaz2.jpg" alt="Webáruház" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="webaruhaz_szsz/aruhaz3.jpg" alt="Webáruház" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>


<?php
$servername = "localhost";
$username = "webaruhaz_szsz";
$password = "TraxxMozdony002";
$dbname = "webaruhaz_szsz";

echo "Create connection start"; "<br>";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM termek";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo $row["id"]. " ".$row["kategoria"]. " ".$row["termek_neve"]. " ".$row["ar"]. " ".$row["foto"]. " ".$row["keszlet"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>
	Készítette: Szabó Szabolcs
	<br>
	2021
  </p>
</div>


</body>
</html>