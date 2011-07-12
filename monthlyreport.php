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


<?php
require_once 'login.php';

  // Get the search variable from URL

	  $month = @$_GET['month'];
	  $year = @$_GET['year'];
echo "<h1>Liste des victimes par zone du Mois de $month/$year</h1>";
require_once 'login.php';
 mysql_connect(localhost, $username, $password);
 @mysql_select_db($database) or die("Unable to select database");

// Build SQL Query  
$query = "select * from people where
	  month like \"$month\" and year like
	  \"$year\" order by lieuduviol ";
// EDIT HERE and specify your table and field names for the SQL query

 $numresults=mysql_query($query);
 $numrows=mysql_num_rows($numresults);

// If we have no results

 if ($numrows == 0)
  {
  echo "<h4>Results</h4>";
  echo "<p>Sorry, your search returned zero results</p>";
 }

  $result = mysql_query($query) or die("Couldn't execute query");

// begin to show results set

// now you can display the results returned
echo "<br /><table border=5>";
echo "<tr><td><b>Zone</b></td><td><b>Noms</b></td><td><b> Prenoms</b></td><td><b>Adultes</b></td><td><b>Enfants</b></td></tr>";

$oldlieuduviol = "";
$numberenfants = 0;
$numberadults = 0;
$subtotalenfants = 0;
$subtotaladults = 0;

  while ($row= mysql_fetch_array($result)) {
  $title = $row["name"] . " " . $row["familyname"];
$name = $row["name"];
$familyname = $row["familyname"];
$birthday = $row["birthday"];
$birthmonth = $row["birthmonth"];
$birthyear = $row["birthyear"];
$id = $row["id"];
$lieuduviol = $row['lieuduviol'];
$enfant = $row['enfant'];
$violmonth = $row['violmonth'];
$violday = $row['violday'];
$violyear = $row['violyear'];
$enfantdisplay = "";
$adultdisplay = "";

$age = $violyear - $birthyear;
if( ($violmonth == $birthmonth || $violday < $birthday) || $violmonth < $birthmonth)
  $age--;
if($age < 0 || $age > 110)
  $age = "?";

if ($lieuduviol == $oldlieuduviol)
  $displaylieuduviol = "";
else
  {
    if($oldlieuduviol != "")
      {
	echo "<tr>";
	echo "<td></td>";
	echo "<td></td><td><b>TOTAL</b></td>";
	echo "<td><b> " . $subtotaladults . " </b></td>";
	echo "<td><b> " . $subtotalenfants . " </b></td>";
	echo "</tr>";
	$subtotaladults = $subtotalenfants = 0;
      }
  $displaylieuduviol = $lieuduviol;
  }

if ($lieuduviol == "Selectionner / Seleksyone" || $lieuduviol == "Autres")
	$displaylieuduviol = $row['lieudeviolautres'];

if ($enfant == "Enfant / Timoun")
  {
    $enfantdisplay = $age . " ans";
    $numberenfants++;
    $subtotalenfants++;
  }
else
  {
  $adultdisplay = $age . " ans";
  $numberadults++;
  $subtotaladults++;
  }

echo "<tr>";
echo "<td>" . $displaylieuduviol . "</td>";
// if ($displaylieuduviol != "" && $lieuduviol != "Selectionner / Seleksyone" && $lieuduviol != "Autres")
//  echo "</tr><tr><td></td>";
echo "<td>" . $name . "</td><td>" . $familyname . "</td>";
echo "<td>" . $adultdisplay . "</td>";
echo "<td>" . $enfantdisplay . "</td>";
echo "</tr>";
$oldlieuduviol = $lieuduviol;
  }
echo "<tr>";
echo "<td> </td>";
echo "<td> </td><td><b>TOTAL</b></td>";
echo "<td><b> " . $subtotaladults . " </b></td>";
echo "<td><b> " . $subtotalenfants . " </b></td>";
echo "</tr>";
echo "</table><br />";
echo "<h1>Total des victimes: " . $numrows . " Cas</h1><br />";
echo "<h1>dont " . $numberadults . " Adultes / " . $numberenfants . " Enfants</h1>";
//break before paging
  echo "<br />";

	  function get_post($var)
	  {
	  return mysql_real_escape_string($_POST[$var]);
	  }
?>

 </div>
</div>
		<div class="divider"></div>

	<div class="footer">
<p><a href="http://digital-democracy.org"> Digital Democracy</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons License</a>.<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a>
	</div>
<a href=logout.php>Log Out</a>
</div>
</body>
</html>
