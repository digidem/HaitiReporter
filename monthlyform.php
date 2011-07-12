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
	<li><a href="search.php">Rechèch</a></li>
	<li class="selected"><a href="monthlyform.php">Rapò Mansyèl</a></li>
	<li><a href="admin.php">Admin</a></li>
</ul>
</div>


<div id="content">
	<div class="article">

		<p>Choose month and year to produce a list of all
		reports produced during that month.</p>
    <div id="panel">
        <div class="right">
<form name="form" action="" method="get">
<h3>Rechèch pou mwa:</h3>
<table border=0><tr><td>
Mois / Mwa:</td><td> <select name="month">
  <option>Selectionner / Seleksyone</option>
<option value="01">01 January</option>
<option value="02">02 February</option>
<option value="03" selected>03 March</option>
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

Année / Ane:</td><td>
<select name="year">
<option>Selectionner / Seleksyone</option>
<option>2009</option>
<option>2010</option>
<option selected>2011</option>
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

<p class="buttom"><button name="submit" type="submit" onClick="this.form.action='monthly.php';this.form.submit()">List Dossiers</button></p>
<p class="buttom"><button name="submit" type="submit" onClick="this.form.action='monthlyreport.php';this.form.target='_blank';this.form.submit()">Produce Monthly Report</button></p>
<p class="buttom"><button name="submit" type="submit" onClick="this.form.action='monthlyreport2.php';this.form.submit()">Excel File Report (with names)</button></p>
<p class="buttom"><button name="submit" type="submit" onClick="this.form.action='monthlyreport4.php';this.form.target='_blank';this.form.submit()">Raw HTML Report (with names)</button></p>
<p class="buttom"><button name="submit" type="submit" onClick="this.form.action='monthlyreport5.php';this.form.submit()">Excel File Report (public)</button></p>
</form><br />
<br>Please Note: These buttons do not work in Internet Explorer.<br>

</div>
</div>
		<div class="divider"></div>

		<h2>Problems with this webpage? Need technical support?</h2>
		<p>For help, send email to reporter@digital-democracy.org</p>

	<div id="footer">
<p><a href="http://digital-democracy.org"> Digital Democracy</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons License</a>.<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a>
	</div>
</div>
<a href=logout.php>Log Out</a>

</body>
</html>
