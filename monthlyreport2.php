<?php
session_start();

if (!isset($_SESSION['username']))
{
echo "Please <a href=authenticate.php>click here</a> to log in.";
exit;
}
?>
<?php
header('Content-type: application/vnd.ms-excel; charset=utf-8');
header('Content-Disposition: attachment; filename="monthlyreport.xls"');
require_once 'login.php';

  // Get the search variable from URL

	  $month = @$_GET['month'];
	  $year = @$_GET['year'];
require_once 'login.php';
 mysql_connect(localhost, $username, $password);
 @mysql_select_db($database) or die("Unable to select database");

// Build SQL Query  
$query = "select * from people where
	  month like \"$month\" and year like
	  \"$year\" order by lieuduviol, lieudeviolautres ";
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
echo "<table border=1>";
echo "<tr><td><b>Liste des victimes par zone du Mois de " . $month . "/" . $year . "</b></td></tr>";
echo "<tr><td><b>Zone</b></td><td><b>Noms</b></td><td><b> Prenoms</b></td><td><b>Eske se te nan kan</b></td><td><b>Quartier, Camp</b></td><td><b>Adultes</b></td><td><b>Enfants</b></td></tr>";

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
// $dansuncamp = $row['dansuncamp']; // Eske se te nan kan
// $indiquerzone = $row['indiquerzone']; // Zon precize
$dansuncamp = $row['kikotemoun']; // Eske se te nan kan
$indiquerzone = $row['quartier'] . ", " . $row['camp']; // Zon precize
$enfantdisplay = "";
$adultdisplay = "";

$age = $violyear - $birthyear;
if( ($violmonth == $birthmonth || $violday < $birthday) || $violmonth < $birthmonth)
  $age--;
if($age < 0 || $age > 110)
  $age = "?";
if ($lieuduviol == "Autres" && $row['lieudeviolautres'] == "")
	$lieuduviol = "(empty)";
if ($lieuduviol == "Selectionner / Seleksyone" || $lieuduviol == "Autres")
	$lieuduviol = $displaylieuduviol = $row['lieudeviolautres'];

if (strtolower($lieuduviol) == strtolower($oldlieuduviol)) // case-insensitive equality 
  $displaylieuduviol = "";
else
  {
    if($oldlieuduviol != "")
      {
	echo "<tr>";
	echo "<td><b>TOTAL</b></td>";
	echo "<td></td><td></td><td></td><td></td>";
	echo "<td ALIGN=right><b> " . $subtotaladults . " </b></td>";
	echo "<td ALIGN=right><b> " . $subtotalenfants . " </b></td>";
	echo "</tr>";
	$subtotaladults = $subtotalenfants = 0;
      }
  $displaylieuduviol = $lieuduviol;
  }

//if ($lieuduviol == "Selectionner / Seleksyone" || $lieuduviol == "Autres")
//	$displaylieuduviol = $row['lieudeviolautres'];

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
echo "<td>" . $dansuncamp . "</td><td>" . $indiquerzone . "</td>";
echo "<td>" . $adultdisplay . "</td>";
echo "<td>" . $enfantdisplay . "</td>";
echo "</tr>";
$oldlieuduviol = $lieuduviol;
  }
echo "<tr>";
echo "<td> <b>TOTAL</b></td>";
	echo "<td></td><td></td><td></td><td></td>";
echo "<td ALIGN=right><b> " . $subtotaladults . " </b></td>";
echo "<td ALIGN=right><b> " . $subtotalenfants . " </b></td>";
echo "</tr>";
echo "<tr><td>Total des victimes: " . $numrows . " Cas</td></tr>";
echo "<tr><td>Donc " . $numberadults . " Adultes / " . $numberenfants . " Enfants</td></tr>";

echo "</table>";
//break before paging

	  function get_post($var)
	  {
	  return mysql_real_escape_string($_POST[$var]);
	  }
?>


