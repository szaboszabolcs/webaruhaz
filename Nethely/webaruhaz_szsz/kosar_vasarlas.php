<html lang="hu">
<head>
<head>
  <!--
	<meta charset="utf-8">
	<title>KANDOIKT - Webáruház</title>
    <link href="favicon.ico" rel="shortcut icon">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="bootstrap.min.css">
  	<script src="jquery.min.js"></script>
  	<script src="bootstrap.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="oldal_tetejere_nyil.js"></script>-->
	<meta charset="utf-8">
  	<title>Szabó Szabolcs - Webáruház</title>
    <link href="favicon.ico" rel="shortcut icon">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="bootstrap.min.css">
  	<script src="jquery.min.js"></script>
  	<script src="bootstrap.min.js"></script>
	<script src="oldal_tetejere_nyil.js"></script></head>
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
	<H1 align="center">KOSÁRBA - <img src="kosar.png" width="50" height="50" alt=""></H1>
	<p align="center"></p>
	<div align="center">
		<H2 align=center>Az Ön által kiválasztott termék:</H2>
	</div>
	<hr>
<?php
		$termek_id = $_POST["termek_id"];
		//$termek_id1 = $_POST["termek_id1"];
		print ("<br>");
		
?>

<div class="container" style="margin-top:30px">
<h1  class="text-center" ></h1></H2><table class="table table-condensed table table-striped">
 
<thead>

	<?php
$servername = "localhost";
$username = "webaruhaz_szsz";
$password = "TraxxMozdony002";
$dbname = "webaruhaz_szsz";
// Create connection --------------------------------------------------------------
$kapcsolat = mysqli_connect($servername, $username, $password, $dbname);
// sql lekérdezések
$sql = "SELECT * FROM termek WHERE id ='$termek_id'";

// A lekérdezés eredménye
$eredmeny = mysqli_query($kapcsolat, $sql) or die(print("Nem tudtam az utasítást végrehajtani! A hiba oka: ".mysqli_error()));

//$sor = mysql_fetch_array($eredmeny, MYSQL_ASSOC);
print("<table class=\"table table-condensed table table-striped\">
    <thead>
		<tr>");
			//$sor = mysql_fetch_array($eredmeny,MYSQL_ASSOC);
			//while (list($k, $v) = each($sor))
			//{
				//print("<th style= \"width: 2%\">$k</th>");
			//}	
		print("<th style= \"width: 2%\">ID</th>");
		print("<th style= \"width: 2%\">Kategória</th>");
		print("<th style= \"width: 2%\">Terméknév</th>");
		print("<th style= \"width: 2%\">Ár</th>");
		print("<th style= \"width: 2%\">Fotó</th>");
		print("<th style= \"width: 2%\">Készlet</th>");
	
		print("</tr>
    </thead>
	
    <tbody>");

	$eredmeny = mysqli_query($kapcsolat, $sql) or die(print("Nem tudtam az utasítást végrehajtani! A hiba oka: ".mysqli_error()));
	$termek_szamlalo=0;
	while ($sor = mysqli_fetch_array($eredmeny,MYSQLI_ASSOC))
	{
		print ("<tr>");
		$mezo_szamlalo=0;
		foreach ($sor as $i=>$ertek)
		{
			$mezo_szamlalo++;
			if ($mezo_szamlalo == 1)
				{print("<td>$ertek</td>"); $termek_id=$ertek; $termek_id_nagykephez=$ertek;}
			if ($mezo_szamlalo == 2) 
					print("<td>$ertek</td>");
				if ($mezo_szamlalo == 3) 
					print("<td>$ertek</td>");
			if ($mezo_szamlalo == 4)
				print("<td>$ertek Ft</td>");
			if ($mezo_szamlalo == 5)
				print("<td><a href=\"fotok/$sor[foto_nk]\" target=\"_blank\"><img src=\"webaruhaz_termekei/fotok/$ertek\" alt=\"\" height=\"200\" widht=\"300\" style=\"max-width=\"300\"\"></a></td>");
			//if ($mezo_szamlalo == 6)
				//print("<td><a href=\"fotok/$ertek\" target=\"_blank\">nagykép</a></td>");
			if ($mezo_szamlalo == 7) 
				print("<td>$ertek db</td>");
						
		}
		print("</tr>");
	}		
		
print("</table>\n");

print ("<br>
<hr>
<h2 align=\"center\">A megrendelés adatai:</h2>"
);

//print ("A mennyiseg: ".$mennyiseg);
//print (" A termék id: ".$termek_id);










print ("<br>
<form name=\"form\" method=\"post\" action=\"folyamatban1.php\">
	<table width=\"700\" align=\"center\" class=\"table table-bordered\">
	  <tr>
		<td><label>A megrendelt termék neve:</label></td>
		<td>$termeknev</td>
	  </tr>
	  <tr>
		<td><label>A megrendelt termék kategoriája:</label></td>
		<td>$kategoria</td>
	  </tr>
	  <tr>
		<td><label>A megrendelt termék ára:</label></td>
		<td>$ar Ft/db</td>
	  </tr>
	  ");


// id lekérdezése

$sql1 = "SELECT MAX(`id`) AS 'maxid' FROM `termek`";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    while($row1 = mysqli_fetch_assoc($result1)) {
        //echo $row1["maxid"];
        $kovetkezoId =  $row1["maxid"] + 1;
    }
  } else {
    echo "0 results";
  }


print "A következő id értéke: ". $kovetkezoId;


mysqli_close($conn);
?>	  

<tr>
		<td><label>A megrendelt termék mennyisége:</label></td>
		<td><input name="mtm" type="text" id="mtm" size="3" /> db</td>
	  </tr>
	  <tr>
		<td><label>A megrendelõ neve:</label></td>
		<td><input name="mn" type="text" id="mn" size="90" /></td>
	  </tr>
      <tr>
		<td><label for="email">A megrendelõ e-mail címe:</label></td>
		<td><input type="email" class="_form-control" placeholder="valaki@pelda.com" id="email" size="30" ></td>
	  </tr>
	  <tr>
		<td><label>A megrendelõ lakcíme:</label></td>
		<td><input name="ml" type="text" id="ml" size="90" /></td>
	  </tr>
	  <tr>
		<td><label>Szállítási cím:</label></td>
		<td><input name="szc" type="text" id="szc" size="90" /></td>
	  </tr>
	  <tr>
		<td><label>Fizetési mód:</label></td>
		<td>Kiszállításkor utánvétellel történik.</td>
	  </tr>

	</table>
	<p align="center">
	  <button type="submit"> 
	  <div align="center">Megrendelem</div>
	  </button></p>
</form>
	
	
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>
	  Készítette: Szabó Szabolcs
	  <br>
	  2021
  </p>
</div>

<br><br><br><br>
</body>
</html>