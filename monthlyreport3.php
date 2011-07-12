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
header('Content-Disposition: attachment; filename="publicmonthlyreport.xls"');
require_once 'login.php';

  // Get the search variable from URL

	  $month = @$_GET['month'];
	  $year = @$_GET['year'];
require_once 'login.php';
 mysql_connect(localhost, $username, $password);
 @mysql_select_db($database) or die("Unable to select database");

$fields = array( 'lapersonne', 'lieu', 'typedagressionmeutre','typedagressiondisparition', 'typedagressiondestruction', 'typedagressionarrestation', 'typedagressionkidnapping', 'typedagressionmenace', 'typedagressionviol', 'typedagressionassaut', 'desarmes', 'dansuncamp');

$questions = array( 
'lapersonne' => 'La personne qui a commis cet acte / Eske ou konnen moun ki te komet zak la?:',
'lieu' => 'Indiquer zone preciser / Zon precize', 
'typedagressionmeutre' => 'Meutre / Asasina',
'typedagressiondisparition' => 'Disparition / Disparisyon (Lot moun)', 
'typedagressiondestruction' => 'Destruction des biens (indice / Pillage / etc...) / Destriksyon byen (Dife / Piye)', 
'typedagressionarrestation' => 'Arrestation / Arestasyon', 
'typedagressionkidnapping' => 'Kidnaping / Kidnapin', 
'typedagressionmenace' => 'Menace / Menas',
'typedagressionviol' => 'Viol / Vyol', 
'typedagressionassaut' => 'Assaut / Atak ', 
'desarmes' => 'Est-ce qu-il(s) avait(ent) des armes? / Eske yo te gen zam?',
'dansuncamp' => "Est-ce que c'etait dans un camp? / Èske se te nan kan?");

echo "<table border=1>";
echo "<tr><td><b>Value</b></td><td><b>Number Selected</b></td></tr>";

foreach ($fields as $currentField)
{
$query = "select $currentField from people where month like \"$month\" and year like \"$year\" ";
$result = mysql_query($query) or die("Couldn't execute query");
$valuesArray = countValues($result);
echo "<tr><td><b>";
echo $questions[$currentField];
echo "</b></td><td></td></tr>";
$selections = array_keys($valuesArray);

	for ($i = 0; $i < count($selections); $i++)
	{
		$thisSelection = $selections[$i];
		if ($thisSelection == "")
			$thisSelection = "(empty)";
		if ($thisSelection == "1")
			$thisSelection = "(checked)";
		echo "<tr><td>" . $thisSelection . "</td><td>" . current($valuesArray) . "</td></tr>";
		next($valuesArray);
	}
} 
// first part of table finished, now add age totals for "Autres" locations

$query = "select lieudeviolautres, enfant from people where month like \"$month\" and year like \"$year\" and lieuduviol like \"Autres\" ";
$result = mysql_query($query) or die("Couldn't execute query");
echo "<tr><td>";
echo "<b>Lieu (Autres)</b></td><td><b>Enfant ou Adulte</b></td>";
echo "</tr>";
	while($row=mysql_fetch_row($result))
	{		
		echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><tr>";
	} 



// second part of table finished, now add age totals for non-"Autres" locations

// Build SQL Query  
$query = "select * from people where
	  month like \"$month\" and year like
	  \"$year\" order by lieuduviol ";
// EDIT HERE and specify your table and field names for the SQL query


  $result = mysql_query($query) or die("Couldn't execute query");
  $numrows=mysql_num_rows($result);

// now you can display the results returned
echo "<tr><td><b>Lieu</b></td><td><b>Totals</b></td></tr>";

$oldlieuduviol = "";
$numberenfants = 0;
$numberadults = 0;
$subtotalenfants = 0;
$subtotaladults = 0;

while ($row= mysql_fetch_array($result)) {

$lieuduviol = $row['lieuduviol'];
$displaylieuduviol = $lieuduviol;
$enfant = $row['enfant'];

if($oldlieuduviol != "" && $lieuduviol != $oldlieuduviol)
      {
	echo "<tr>";
	echo "<td>" . $oldlieuduviol . "</td>";
	echo "<td>" . $subtotaladults . " Adultes / ";
	echo $subtotalenfants . " Enfants</td>";
	echo "</tr>";
	$subtotaladults = $subtotalenfants = 0;
      }

if ($enfant == "Enfant / Timoun")
  {
    	$numberenfants++;
    	$subtotalenfants++;
  }
else
  {
  	$numberadults++;
  	$subtotaladults++;
  }

$oldlieuduviol = $lieuduviol;
  }

echo "<tr>";
echo "<td>" . $oldlieuduviol . "</td>";
echo "<td>" . $subtotaladults . " Adultes / ";
echo $subtotalenfants . " Enfants</td>";
echo "</tr>";

echo "<tr><td>Total des victimes: " . $numrows . " Cas</td></tr>";
echo "<tr><td>Donc " . $numberadults . " Adultes / " . $numberenfants . " Enfants</td></tr>";
echo "</table>";


	  function get_post($var)
	  {
	  return mysql_real_escape_string($_POST[$var]);
	  }
	function countValues($result)
	{
		while($row=mysql_fetch_row($result))
		{		
		$newarray[]=$row[0];
		} 	
		return(array_count_values($newarray));
	}
?>


