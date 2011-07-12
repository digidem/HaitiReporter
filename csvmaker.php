<?php
session_start();

if (!isset($_SESSION['username']))
{
echo "Please <a href=authenticate.php>click here</a> to log in.";
exit;
}
?>
<?php
header('Content-type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename="ushahidi.csv"');
require_once 'login.php';

  // Get the search variable from URL

require_once 'login.php';
 mysql_connect(localhost, $username, $password);
 @mysql_select_db($database) or die("Unable to select database");

$fields = array( 'lapersonne', 'lieu', 'desarmes', 'dansuncamp');

$checkboxFields = array( 'typedagressionmeutre','typedagressiondisparition', 'typedagressiondestruction', 'typedagressionarrestation', 'typedagressionkidnapping', 'typedagressionmenace', 'typedagressionviol', 'typedagressionassaut');

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

//here begins the first part, display "Autres" location (lieu) results
// now you can display the results returned

echo "#,INCIDENT TITLE,INCIDENT DATE,LOCATION,DESCRIPTION,CATEGORY,LATITUDE,LONGITUDE,APPROVED,VERIFIED
";
// first part of table finished, now add age totals for non-"Autres" locations

// Build SQL Query  
$query = "select * from people
	  order by lieuduviol ";
// EDIT HERE and specify your table and field names for the SQL query

  $result = mysql_query($query) or die("Couldn't execute query");

while ($row= mysql_fetch_array($result)) {

$lieuduviol = $row['lieuduviol'];
$id = $row['id'];
$violyear = $row['violyear'];
$violmonth = $row['violmonth'];
$violday = $row['violday'];
$displaylieuduviol = $lieuduviol;
$enfant = $row['enfant'];
switch ($lieuduviol) {
	case "Cite Soleil":
	$latlong = '"18.583056","-72.335"';
	break;
	case "Bel Air":
	$latlong = '"18.550224","-72.33623"';
	break;
	case "Bicentenaire":
	$latlong = '"18.543843","-72.336906"';
	break;
	case "Carrefour":
	$latlong = '"18.535104","-72.40719"';
	break;
	case "Petion Ville":
	$latlong = '"18.513145","-72.285425"';
	break;
	case "Croix des Bouquets / Croix des Mission":
	$latlong = '"18.577188","-72.23027"';
	break;
	case "Bourdon / Carnape Vert":
	$latlong = '"18.538856","-72.315412"';
	break;
	case "Martissant":
	$latlong = '"18.527585","-72.357096"';
	break;
	case "Solino":
	$latlong = '"18.566813","-72.346922"';
	break;
	case "Fontamara":
	$latlong = '"18.527876","-72.374002"';
	break;
	case "Leogane":
	$latlong = '"18.535351","-72.347672"';
	break;
	case "Bon Repos":
	$latlong = '"18.625785","-72.270301"';
	break;
	case "Delmas":
	$latlong = '"18.544623","-72.278476"';
	break;
	case "Carrefour Feuilles":
	$latlong = '"18.524162","-72.348281"';
	break;
	case "Champs de Mars":
	$latlong = '"18.548076","-72.349963"';
	break;
	default:
		$latlong = ",";
	}
if($violyear == "Sele")
	$violyear = "2010";
if($violmonth == "Se")
	$violmonth = "01";
echo '"' . $id . '","KOFAVIV","' . $violyear . "-" . $violmonth . "-" . $violday . ' 01:00:00","';
echo $lieuduviol . ' , Haiti","Gender-based violence","';
echo 'Vyol, ", '; // change this to 1334 category code
echo $latlong . ','; // latitude and longitude
echo 'YES,YES
';


  }


// begin this part of table: dropdown questions finished, now checkbox questions

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


