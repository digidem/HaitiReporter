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

$fields = array( 'lapersonne', 'lieu', 'desarmes', 'dansuncamp', 'kikotemoun', 'newkikote1', 'kikotekadejak','newkikote2'  );

$checkboxFields = array('tip1','tip2','tip3','tip4','tip5');


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
'tip1' => 'Vyol / Viol',
'tip2' => 'Agresyon seksyèl /Agression sexuelle',
'tip3' => 'Agresyon fizik / Agression physique',
'tip4' => 'Deni resous / Déni de ressources, d’opportunités ou de services',
'tip5' => 'Abi sikolojik, emosyonèl / Abus psychologique, émotionnel',
 'desarmes' => 'Est-ce qu-il(s) avait(ent) des armes? / Eske yo te gen zam?',
'lieu' => 'Lieu / Lye:',
'preciserlieu1' => 'Preciser lieu / Lye presize:',
'newkikote1' => "Ki kote moun ki te fè w sa te jwenn ou? Est-ce que c'etait dans un camp? / Èske se te nan kan?",
'kikotemoun' => "Ki kote moun ki te fè w sa te jwenn ou? Est-ce que c etait dans un camp? / Èske se te nan kan?",
'kikotekadejak' => "Ki kote kadejak la te fet? Est-ce que c'etait dans un camp? / Èske se te nan kan?",
'newkikote2' => "Ki kote kadejak la te fet? Est-ce que c'etait dans un camp? / Èske se te nan kan?",
'dansuncamp' => "Est-ce que c'etait dans un camp? / Èske se te nan kan?");

echo "<table border=1>";

//here begins the first part, display "Autres" location (lieu) results
$query = "select * from people where
	  month like \"$month\" and year like
	  \"$year\" order by commune ";
// EDIT HERE and specify your table and field names for the SQL query


  $result = mysql_query($query) or die("Couldn't execute query 55");
  $numrows=mysql_num_rows($result);

// now you can display the results returned
echo "<tr><td><b>Commune</b></td><td><b>Adultes</b></td><td><b>Enfants</b></td></tr>";

$oldlieuduviol = "";
$numberenfants = 0;
$numberadults = 0;
$subtotalenfants = 0;
$subtotaladults = 0;

while ($row= mysql_fetch_array($result)) {

$lieuduviol = $row['commune'];
if ($lieuduviol == "")
	{
		$lieuduviol = "(empty)";
	} 
$displaylieuduviol = $lieuduviol;
$enfant = $row['enfant'];

if($oldlieuduviol != "" && $lieuduviol != $oldlieuduviol)
      {
	echo "<tr>";
	echo "<td>" . $oldlieuduviol . "</td>";
	echo "<td>" . $subtotaladults . "</td><td> ";
	echo $subtotalenfants . "</td>";
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
echo "<td>" . $subtotaladults . "</td><td> ";
echo $subtotalenfants . " </td>";
echo "</tr>";

echo "<tr><td><b>Total</b></td><td><b> " . $numberadults . "</b></td><td><b> " . $numberenfants . "</b> </td></tr>";
echo "<tr><td>Total des victimes Adultes et Enfants:</td><td>" . $numrows . "</td></tr><tr></tr>";
// commune part done; start quartier part

$query = "select * from people where
	  month like \"$month\" and year like
	  \"$year\" order by quartier ";
// EDIT HERE and specify your table and field names for the SQL query


  $result = mysql_query($query) or die("Couldn't execute query 55");
  $numrows=mysql_num_rows($result);

// now you can display the results returned
echo "<tr><td><b>Quartier</b></td><td><b>Adultes</b></td><td><b>Enfants</b></td></tr>";

$oldlieuduviol = "";
$numberenfants = 0;
$numberadults = 0;
$subtotalenfants = 0;
$subtotaladults = 0;

while ($row= mysql_fetch_array($result)) {

$lieuduviol = $row['quartier'];
if ($lieuduviol == "")
	{
		$lieuduviol = "(empty)";
	} 
$displaylieuduviol = $lieuduviol;
$enfant = $row['enfant'];

if($oldlieuduviol != "" && $lieuduviol != $oldlieuduviol)
      {
	echo "<tr>";
	echo "<td>" . $oldlieuduviol . "</td>";
	echo "<td>" . $subtotaladults . "</td><td> ";
	echo $subtotalenfants . "</td>";
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
echo "<td>" . $subtotaladults . "</td><td> ";
echo $subtotalenfants . " </td>";
echo "</tr>";

echo "<tr><td><b>Total</b></td><td><b> " . $numberadults . "</b></td><td><b> " . $numberenfants . "</b> </td></tr>";
echo "<tr><td>Total des victimes Adultes et Enfants:</td><td>" . $numrows . "</td></tr><tr></tr>";

// end quartier part



// begin this part of table: location results finished, now dropdown questions
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

// begin this part of table: dropdown questions finished, now checkbox questions

echo "<tr><td><b>Checkbox</b></td><td><b>Number Checked</b></td></tr>";

foreach ($checkboxFields as $currentField)
{
$query = "select $currentField from people where month like \"$month\" and year like \"$year\" ";
$result = mysql_query($query) or die("Couldn't execute query");
$valuesArray = countValues($result);
if ($valuesArray['0'] != $numrows)
{
echo "<tr><td>";
echo $questions[$currentField];
echo "</td><td>" . $valuesArray[1] . "</td></tr>";
$selections = array_keys($valuesArray);
}

} 

// check box questions finished
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


