<html lang="hu">
<head>
<title>Pásztor Dávid oldala</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="index.css">
<script src="jquery.min.js"></script>
<script src="popper.js"></script>
<script src="bootstrap.min.js"></script>
</head><body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h4>MSZC Kandó Kálmán Informatikai Technikum</h4>
  <h2>Projektmunka // Webáruház</h2>
  <h5>Pásztor Dávid - Webáruház</h5>  
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="http://kuruczmilan.nhely.hu">IKT Projektmunka I.</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="http://pasztordavid.nhely.hu/">Főoldal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="osszes.php">Összes termék</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="processzor.php">Processzor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="alaplap.php">Alaplap</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="videokartya.php">Videókártya</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="hattertar.php">Háttértár</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="huto.php">Hűtő</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="monitor.php">Monitor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="memoria.php">Memória</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="kereses.php">Keresés</a>
    </li>
  </ul>
</div>  
</nav><hr>

<div id="demo" class="carousel slide container" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="img/aruhaz1.jpg" alt="Los Angeles" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/aruhaz2.jpg" alt="Chicago" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/aruhaz3.jpg" alt="New York" width="1100" height="500">
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
<div class="container" align="center">
  <hr>
  <br>
  Create connection <H2>A Pásztor Dávid webáruház tartalma - minden termék</H2><table class="table table-condensed table table-striped">
	<thead>
		<tr><th style= "width: 2%">id</th><th style= "width: 2%">kategoria</th><th style= "width: 2%">termek_neve</th><th style= "width: 2%">ar</th><th style= "width: 2%">foto</th><th style= "width: 2%">keszlet</th><th style= "width: 2%">vásárlás</th></tr>
	</thead><tbody><tr><td>1</td><td>alaplap</td><td>MSI MPG Z390 GAMING PLUS </td><td>58000 Ft</td><td><a href="webaruhaz_termekei/fotok/01nk.jpg" target="_blank"><img src="webaruhaz_termekei/fotok/01.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>5 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="1">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>2</td><td>alaplap</td><td>Asus Prime Z590M-Plus mATX </td><td>62360 Ft</td><td><a href="webaruhaz_termekei/fotok/02nk.jpg" target="_blank"><img src="webaruhaz_termekei/fotok/02.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>3 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="2">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>3</td><td>alaplap</td><td>Asus ROG Strix x570-E Gaming</td><td>111089 Ft</td><td><a href="fotok/03nk.jpg" target="_blank"><img src="fotok/03.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>2 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="3">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>4</td><td>alaplap</td><td>Gigabyte x570 AORUS PRO</td><td>86791 Ft</td><td><a href="fotok/04nk.jpg" target="_blank"><img src="fotok/04.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>6 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="4">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>5</td><td>alaplap</td><td>Asrock b450 pro4</td><td>27420 Ft</td><td><a href="fotok/05nk.jpg" target="_blank"><img src="fotok/05.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>8 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="5">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>6</td><td>alaplap</td><td>Asus PRIME A320M-E Socket AM4 </td><td>27890 Ft</td><td><a href="fotok/06nk.jpg" target="_blank"><img src="fotok/06.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>4 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="6">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>7</td><td>alaplap</td><td>Asus ROG MAXIMUS XIII EXTREME GLACIAL</td><td>317790 Ft</td><td><a href="fotok/07nk.jpg" target="_blank"><img src="fotok/07.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>1 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="7">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>8</td><td>alaplap</td><td>MSI H310M PRO-VDH PLUS </td><td>14300 Ft</td><td><a href="fotok/08nk.jpg" target="_blank"><img src="fotok/08.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>10 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="8">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>9</td><td>alaplap</td><td>ASRock J3355M </td><td>21700 Ft</td><td><a href="fotok/09nk.jpg" target="_blank"><img src="fotok/09.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>7 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="9">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>10</td><td>memoria</td><td>KINGSTON memoria HYPERX DDR4 16GB 3200MHz CL16 DIMM XMP (Kit of 2) Predator RGB</td><td>38590 Ft</td><td><a href="fotok/10nk.jpg" target="_blank"><img src="fotok/10.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>5 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="10">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>11</td><td>memoria</td><td>HP S1 Series laptop memoria, 8 GB DDR4 RAM, 2400 MHz, CL17</td><td>25918 Ft</td><td><a href="fotok/11nk.jpg" target="_blank"><img src="fotok/11.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>7 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="11">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>12</td><td>memoria</td><td>Dell 8GB DDR4 2666MHz AA335287</td><td>33759 Ft</td><td><a href="fotok/12nk.jpg" target="_blank"><img src="fotok/12.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>4 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="12">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>13</td><td>memoria</td><td>Acer 8GB DDR4 3200MHz BL.9BWWA.206</td><td>21190 Ft</td><td><a href="fotok/13nk.jpg" target="_blank"><img src="fotok/13.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>8 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="13">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>14</td><td>memoria</td><td>Lenovo 8GB DDR4 2666Mhz 4x70W22200</td><td>30890 Ft</td><td><a href="fotok/14nk.jpg" target="_blank"><img src="fotok/14.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>6 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="14">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>15</td><td>memoria</td><td>Samsung 8GB DDR4 2666MHz M471A1K43CB1-CTD</td><td>24699 Ft</td><td><a href="fotok/15nk.jpg" target="_blank"><img src="fotok/15.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>2 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="15">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>16</td><td>memoria</td><td>Kingston 32GB (2x16GB) DDR4 3200MHz KF432S20IB1K2/32</td><td>54000 Ft</td><td><a href="fotok/16nk.jpg" target="_blank"><img src="fotok/16.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>3 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="16">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>17</td><td>memoria</td><td>Kingston HyperX FURY 8GB DDR4 2666MHz HX426C16FB3/8</td><td>14000 Ft</td><td><a href="fotok/17nk.jpg" target="_blank"><img src="fotok/17.jpg
" alt="" height="200" widht="300" style="max-width="300""></a></td><td>7 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="17">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>18</td><td>memoria</td><td>Crucial Ballistix 16GB (2x8GB) DDR4 3600MHz</td><td>35490 Ft</td><td><a href="fotok/18nk.jpg" target="_blank"><img src="fotok/18.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>4 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="18">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>19</td><td>memoria</td><td>G.SKILL Ripjaws V 32GB (2x16GB) DDR4 3200MHz</td><td>66240 Ft</td><td><a href="fotok/19nk.jpg" target="_blank"><img src="fotok/19.jpg
" alt="" height="200" widht="300" style="max-width="300""></a></td><td>9 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="19">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>20</td><td>memoria</td><td>Zeppelin 2GB DDR3 1600MHz ZE-SD3-2G1600</td><td>4090 Ft</td><td><a href="fotok/20nk.jpg" target="_blank"><img src="fotok/20.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>10 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="20">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>21</td><td>monitor</td><td>Samsung Odyssey G5 C27G55TQWR</td><td>93000 Ft</td><td><a href="fotok/21nk.jpg" target="_blank"><img src="fotok/21.jpg
" alt="" height="200" widht="300" style="max-width="300""></a></td><td>4 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="21">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>22</td><td>monitor</td><td>LG 25UM58-P </td><td>46000 Ft</td><td><a href="fotok/22nk.jpg" target="_blank"><img src="fotok/22.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>5 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="22">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>23</td><td>monitor</td><td>Samsung C24RG50FQR </td><td>54000 Ft</td><td><a href="fotok/23nk.jpg" target="_blank"><img src="fotok/23.jpg
" alt="" height="200" widht="300" style="max-width="300""></a></td><td>3 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="23">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>24</td><td>monitor</td><td>AOC 27G2U </td><td>86000 Ft</td><td><a href="fotok/24nk.jpg" target="_blank"><img src="fotok/24.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>4 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="24">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>25</td><td>monitor</td><td>LG 27GN800-B </td><td>114000 Ft</td><td><a href="fotok/25nk.jpg" target="_blank"><img src="fotok/25.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>7 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="25">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>26</td><td>monitor</td><td>LG 27GL850-B </td><td>142000 Ft</td><td><a href="fotok/26nk.jpg" target="_blank"><img src="fotok/26.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>6 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="26">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>27</td><td>monitor</td><td>Samsung S22A330NHU </td><td>35000 Ft</td><td><a href="fotok/27nk.jpg" target="_blank"><img src="fotok/27.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>8 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="27">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>28</td><td>monitor</td><td>LG 29UM69G-B </td><td>68000 Ft</td><td><a href="fotok/28nk.jpg" target="_blank"><img src="fotok/28.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>5 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="28">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>29</td><td>monitor</td><td>Dell S2721H</td><td>62370 Ft</td><td><a href="fotok/29nk.jpg" target="_blank"><img src="fotok/29.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>7 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="29">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>30</td><td>monitor</td><td>Acer Nitro VG240YSbmiipx</td><td>66290 Ft</td><td><a href="fotok/30nk.jpg" target="_blank"><img src="fotok/30.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>9 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="30">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>31</td><td>processzor</td><td>AMD Ryzen 5 5600X 6-Core 3.7GHz AM4 </td><td>93000 Ft</td><td><a href="fotok/31nk.jpg" target="_blank"><img src="fotok/31.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>4 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="31">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>32</td><td>processzor</td><td>AMD Ryzen 5 3600 6-Core 3.6GHz AM4 </td><td>75000 Ft</td><td><a href="fotok/32nk.jpg" target="_blank"><img src="fotok/32.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>3 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="32">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>33</td><td>processzor</td><td>AMD Ryzen 7 5800X 8-Core 3.8GHz AM4 </td><td>132000 Ft</td><td><a href="fotok/33nk.jpg" target="_blank"><img src="fotok/33.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>3 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="33">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>34</td><td>processzor</td><td>Intel Core i5-10400F 6-Core 2.9GHz LGA1200 </td><td>54000 Ft</td><td><a href="fotok/34nk.jpg" target="_blank"><img src="fotok/34.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>7 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="34">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>35</td><td>processzor</td><td>AMD Ryzen 7 3700X 8-Core 3.6GHz AM4 </td><td>89000 Ft</td><td><a href="fotok/35nk.jpg" target="_blank"><img src="fotok/35.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>2 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="35">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>36</td><td>processzor</td><td>AMD Ryzen 9 5900X 12-Core 3.7GHz AM4 </td><td>174000 Ft</td><td><a href="fotok/36nk.jpg" target="_blank"><img src="fotok/36.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>1 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="36">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>37</td><td>processzor</td><td>AMD Ryzen 5 1600 6-Core 3.2GHz AM4 </td><td>41000 Ft</td><td><a href="fotok/37nk.jpg" target="_blank"><img src="fotok/37.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>10 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="37">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>38</td><td>processzor</td><td>Intel Core i3-10105F 4-Core 3.7GHz LGA1200 </td><td>27000 Ft</td><td><a href="fotok/38nk.jpg" target="_blank"><img src="fotok/38.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>6 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="38">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>39</td><td>processzor</td><td>AMD Ryzen 5 5600G 6-Core 3.9GHz AM4</td><td>93000 Ft</td><td><a href="fotok/39nk.jpg" target="_blank"><img src="fotok/39.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>7 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="39">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>40</td><td>processzor</td><td>Intel Core i9-9900KF 8-Core 3.6 GHz LGA1151</td><td>110100 Ft</td><td><a href="fotok/40nk.jpg" target="_blank"><img src="fotok/40.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>2 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="40">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>41</td><td>videokartya</td><td>ASUS GeForce RTX 3070 Ti OC 8GB GDDR6X 256bit (TUF-RTX3070TI-O8G-GAMING)</td><td>449000 Ft</td><td><a href="fotok/41nk.jpg" target="_blank"><img src="fotok/41.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>5 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="41">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>42</td><td>videokartya</td><td>ASUS GeForce RTX 2060 DUAL OC EVO 6GB GDDR6 192bit (DUAL-RTX2060-O6G-EVO)</td><td>212000 Ft</td><td><a href="fotok/42nk.jpg" target="_blank"><img src="fotok/42.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>7 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="42">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>43</td><td>videokartya</td><td>GIGABYTE GeForce RTX 2060 OC 6GB GDDR6 192bit (GV-N2060OC-6GD)</td><td>251000 Ft</td><td><a href="fotok/43nk.jpg" target="_blank"><img src="fotok/43.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>6 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="43">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>44</td><td>videokartya</td><td>EVGA GeForce RTX 3060 XC GAMING 12GB GDDR6 (12G-P5-3657-KR) </td><td>316000 Ft</td><td><a href="fotok/44nk.jpg" target="_blank"><img src="fotok/44.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>4 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="44">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>45</td><td>videokartya</td><td>GIGABYTE GeForce GTX 1660 OC 6GB GDDR5 (GV-N1660OC-6GD) </td><td>208000 Ft</td><td><a href="fotok/45nk.jpg" target="_blank"><img src="fotok/45.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>7 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="45">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>46</td><td>videokartya</td><td>MSI GeForce RTX 3060 X 12GB GDRR6 192bit (RTX 3060 GAMING X 12G) </td><td>305000 Ft</td><td><a href="fotok/46nk.jpg" target="_blank"><img src="fotok/46.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>9 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="46">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>47</td><td>videokartya</td><td>Lenovo Quadro P620 2GB GDDR5 </td><td>86089 Ft</td><td><a href="fotok/47nk.jpg" target="_blank"><img src="fotok/47.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>5 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="47">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>48</td><td>videokartya</td><td>ASUS GeForce GTX 1050 Ti 4GB GDDR5 128bit</td><td>135980 Ft</td><td><a href="fotok/48nk.jpg" target="_blank"><img src="fotok/48.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>4 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="48">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>49</td><td>ventillator</td><td>NZXT Kraken X53 240mm (RL-KRX53-01)</td><td>38000 Ft</td><td><a href="fotok/49nk.jpg" target="_blank"><img src="fotok/49.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>7 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="49">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr><tr><td>50</td><td>ventillator</td><td>Noctua Chromax NH-D15 (FAN-NH-D15-CH)</td><td>39000 Ft</td><td><a href="fotok/50nk.jpg" target="_blank"><img src="fotok/50.jpg" alt="" height="200" widht="300" style="max-width="300""></a></td><td>9 db</td><td>
						<form name="form1" method="post" action="kosar_vasarlas.php">
						<input name="termek_id" type="hidden" id="termek_id" value="50">
						Kosárba<br>
						<input type="image" name="kosar_kepe" src="kosar.png" alt="" height="50" widht="50">
						
						</form>
					   </td></tr></table>
<br>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
<p>
    Készítette: Pásztor Dávid
    <br>
    2021
</p>
</div></body>
</html>