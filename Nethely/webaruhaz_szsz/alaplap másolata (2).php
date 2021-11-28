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
// Check connection
if (!$kapcsolat) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql =  "SELECT * FROM termek Where kategoria = 'alaplap'";
$eredmeny = mysqli_query($kapcsolat, $sql);


// A lekérdezés kiíratása
print("<H2>A Webáruház tartalma - Alaplap</H2>");

print("<table class=\"table table-condensed table table-striped\">
	<thead>
		<tr>");
// Az eredménytábla mezőneveinek kiíratása
		print("<th style= \"width: 2%\">Sorszám</th>");
		print("<th style= \"width: 2%\">Kategória</th>");
		print("<th style= \"width: 2%\">Termék neve</th>");
		print("<th style= \"width: 2%\">Ár</th>");
		print("<th style= \"width: 2%\">Foto</th>");
		//print("<th style= \"width: 2%\">foto_nk</th>");
		print("<th style= \"width: 2%\">Készlet</th>");	
		print("<th style= \"width: 2%\">Vásárlás</th>");			
print("</tr>
	</thead>");
	
// Az eredménytábla tartalmának kiíratása
	
print("<tbody>");
while ($sor = mysqli_fetch_array($eredmeny,MYSQLI_ASSOC))
	{
		print ("<tr>");
		$mezo_szamlalo=0;
		foreach ($sor as $i=>$ertek)
		{
			$mezo_szamlalo++;
			if ($mezo_szamlalo == 1)
				{$termek_id=$ertek; $termek_id_nagykephez=$ertek;}
			if ($mezo_szamlalo < 4) 
				print("<td>$ertek</td>");
			if ($mezo_szamlalo == 4)
				print("<td>$ertek Ft</td>");
			if ($mezo_szamlalo == 5)
				print("<td><a href=\"fotok/$sor[foto_nk]\" target=\"_blank\"><img src=\"webaruhaz_termekei/fotok/$ertek\" alt=\"\" height=\"200\" widht=\"300\" style=\"max-width=\"300\"\"></a></td>");
			//if ($mezo_szamlalo == 6)
				//print("<td><a href=\"fotok/nk/$ertek\" target=\"_blank\">nagykép</a></td>");
			if ($mezo_szamlalo == 7) 
				print("<td>$ertek db</td>");
						
		}
		print("<td>
						<form name=\"form1\" method=\"post\" action=\"kosar_vasarlas.php\">
						<input name=\"termek_id\" type=\"hidden\" id=\"termek_id\" value=\"$termek_id\">
						Kosárba<br>
						<input type=\"image\" name=\"kosar_kepe\" img src=\"webaruhaz_termekei/kosar.png\" alt=\"\" height=\"50\" widht=\"50\">
						
						</form>
					   </td>");	
		print("</tr>");
	}		
print("</table>\n");

mysqli_close($kapcsolat);
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