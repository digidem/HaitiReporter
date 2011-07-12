<?php
session_start();

if (!isset($_SESSION['username']))
{
echo "Please <a href=authenticate.php>click here</a> to log in.";
exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Secure Haiti Reporter</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Digital Democracy" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<link rel="stylesheet" title="Normal" type="text/css" media="screen" href="./styles/screen.css" />
	</head>
<body>
<div id="main">
<div id="header">
	<h1>Haiti Reporter</h1>
</div>

<div id="menu">
  <ul>
    <li><a href="./index.php">Akey</a></li>
	<li><a href="insertform.php">Nouvo Dosye</a></li>
	<li class="selected"><a href="search.php">Rechèch</a></li>
	<li><a href="monthlyform.php">Rapò Mansyèl</a></li>
	<li><a href="admin.php">Admin</a></li>
</ul>
</div>


<div id="content">
	<div class="article">

		<h2>Rechèch / Recherche</h2>
		<p>These search
		boxes can be used to find records.</p>
    <div id="panel">
        <div class="right">
<form name="form" action="searchfamilyname.php" method="get">
  <label for="q"><h3>Nom de Famille / Siyati Fami</h3></label><p class="input"><input type="text" name="q" /></p>
<p class="button"><button name="submit" type="submit">Nom de Famille / Siyati Fami  </button></p>
</form><br />

<form name="form" action="searchname.php" method="get">
  <label for="q"><h3>Prénom / Non</h3></label><p class="input"><input type="text" name="q" /></p>
<p class="button"><button name="submit" type="submit">Prénom / Non  </button></p>
</form><br />

<form name="form" action="searchid.php" method="get">
  <label for="q"><h3>Nimewo Dosye</h3></label><p class="input"><input type="text" name="q" /></p>
<p class="button"><button name="submit" type="submit">Nimewo Dosye  </button></p>
</form><br /><br />

<form name="form" action="searchbirthday.php" method="get">
<h3> Recherche Date de naissance / Rechèch Dat ou fet:</h3>
<table border=0><tr><td>
Mois / Mwa:</td><td> <select name="birthmonth">
  <option>Selectionner / Seleksyone</option>
<option value="01">01 January</option>
<option value="02">02 February</option>
<option value="03">03 March</option>
<option value="04">04 April</option>
<option value="05">05 May</option>
<option value="06">06 June</option>
<option value="07">07 July</option>
<option value="08">08 August</option>
<option value="09">09 September</option>
<option value="10">10 October</option>
<option value="11">11 November</option>
<option value="12">12 December</option>
</select>
</td></tr><tr><td>
Jour / Jou:</td><td><select name="birthday">
  <option>Selectionner / Seleksyone</option>

<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select></td></tr><tr><td>

Annee / Ane:</td><td>
<select name="birthyear">
<option>Selectionner / Seleksyone</option>
<option>1940</option>
<option>1941</option>
<option>1942</option>
<option>1943</option>
<option>1944</option>
<option>1945</option>
<option>1946</option>
<option>1947</option>
<option>1948</option>
<option>1949</option>
<option>1950</option>
<option>1951</option>
<option>1952</option>
<option>1953</option>
<option>1954</option>
<option>1955</option>
<option>1956</option>
<option>1957</option>
<option>1958</option>
<option>1959</option>
<option>1960</option>
<option>1961</option>
<option>1962</option>
<option>1963</option>
<option>1964</option>
<option>1965</option>
<option>1966</option>
<option>1967</option>
<option>1968</option>
<option>1969</option>
<option>1970</option>
<option>1971</option>
<option>1972</option>
<option>1973</option>
<option>1974</option>
<option>1975</option>
<option>1976</option>
<option>1977</option>
<option>1978</option>
<option>1979</option>
<option>1980</option>
<option>1981</option>
<option>1982</option>
<option>1983</option>
<option>1984</option>
<option>1985</option>
<option>1986</option>
<option>1987</option>
<option>1988</option>
<option>1989</option>
<option>1990</option>
<option>1991</option>
<option>1992</option>
<option>1993</option>
<option>1994</option>
<option>1995</option>
<option>1996</option>
<option>1997</option>
<option>1998</option>
<option>1999</option>
<option>2000</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
<option>2021</option>
<option>2022</option>
<option>2023</option>
<option>2024</option>
<option>2025</option>
<option>2026</option>
</td></tr></table><br />

<p class="buttom"><button name="submit" type="submit">Rechèch dat ou fet</button></p>
</form><br />

  <h3> Voir Tous Les Dossiers / Gade Tout Dosye (View All Records)</h3>
<form name="form" action="viewall.php" method="get">
<p class="buttom"><button name="submit" type="submit">Gade Tout Dosye</button></p>
</form><br />

</div>
</div>


		<div class="divider"></div>

		<p>For help, send email to reporter@digital-democracy.org</p>

	<div id="footer">
<p><a href="http://digital-democracy.org"> Digital Democracy</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons License</a>.<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a>
	</div>
<a href=logout.php>Log Out</a>
</div>
</body>
</html>
