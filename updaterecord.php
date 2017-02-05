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

		<h1>Edit submitted!</h1>


<?php
require_once 'login.php';
mysql_connect(localhost, $username, $password);
@mysql_select_db($database) or die("Unable to select database");

// Unicode support
$query1 = "SET NAMES utf8";
mysql_query($query1);
// end Unicode support

$id = sanitizeMySQL($_POST['id']);
$month = sanitizeMySQL($_POST['month']);
$day = sanitizeMySQL($_POST['day']);
$year = sanitizeMySQL($_POST['year']);
$interview = sanitizeMySQL($_POST['interview']);
$plan = sanitizeMySQL($_POST['plan']);
$organization1 = sanitizeMySQL($_POST['organization1']);
$organizationother = sanitizeMySQL($_POST['organizationother']);
$familyname = sanitizeMySQL($_POST['familyname']);
$name = sanitizeMySQL($_POST['name']);
$dansuncamp = sanitizeMySQL($_POST['dansuncamp']);
$enfant = sanitizeMySQL($_POST['enfant']);

$birthday = sanitizeMySQL($_POST['birthday']);
$birthmonth = sanitizeMySQL($_POST['birthmonth']);
$birthyear = sanitizeMySQL($_POST['birthyear']);
// $lieudenaissance = sanitizeMySQL($_POST['lieudenaissance']);
$lieudenaissance = mysql_real_escape_string($_POST['lieudenaissance']);
$adresse = sanitizeMySQL($_POST['adresse']);
$numerodetelephone = sanitizeMySQL($_POST['numerodetelephone']);
$profession = sanitizeMySQL($_POST['profession']);
$religion = sanitizeMySQL($_POST['religion']);
$organization = sanitizeMySQL($_POST['organization']);
$statut = sanitizeMySQL($_POST['statut']);
$lieuduviol = sanitizeMySQL($_POST['lieuduviol']);
$lieudeviolautres = sanitizeMySQL($_POST['lieudeviolautres']);
$indiquerzone = sanitizeMySQL($_POST['indiquerzone']);
$lieu = $_POST['lieu'];
$lieuautres = sanitizeMySQL($_POST['lieuautres']);
$lapersonne = sanitizeMySQL($_POST['lapersonne']);
$nombre = sanitizeMySQL($_POST['nombre']);
$sexe = sanitizeMySQL($_POST['sexe']);
$nombrequiaparticipe = sanitizeMySQL($_POST['nombrequiaparticipe']);
$adressadres = sanitizeMySQL($_POST['adressadres']);
$lienrelasyon = sanitizeMySQL($_POST['lienrelasyon']);
$lieninfogang = sanitizeMySQL($_POST['lieninfogang']);
$lieninfoinconnu = sanitizeMySQL($_POST['lieninfoinconnu']);
$lieninfopolice = sanitizeMySQL($_POST['lieninfopolice']);
$lieninfopreciser = sanitizeMySQL($_POST['lieninfopreciser']);
$apreciserpresize = sanitizeMySQL($_POST['apreciserpresize']);
$typedagressionmeutre = sanitizeMySQL($_POST['typedagressionmeutre']);
$typedagressiondisparition = sanitizeMySQL($_POST['typedagressiondisparition']);
$typedagressiondestruction = sanitizeMySQL($_POST['typedagressiondestruction']);
$typedagressionarrestation = sanitizeMySQL($_POST['typedagressionarrestation']);
$typedagressionkidnapping = sanitizeMySQL($_POST['typedagressionkidnapping']);
$typedagressionmenace = sanitizeMySQL($_POST['typedagressionmenace']);
$typedagressionviol = sanitizeMySQL($_POST['typedagressionviol']);
$typedagressionassaut = sanitizeMySQL($_POST['typedagressionassaut']);
$comment = sanitizeMySQL($_POST['comment']);
$ouestcequil = sanitizeMySQL($_POST['ouestcequil']);
$queluniforme = sanitizeMySQL($_POST['queluniforme']);
$portaitdesmasques = sanitizeMySQL($_POST['portaitdesmasques']);
$desarmes = sanitizeMySQL($_POST['desarmes']);
$plan2 = sanitizeMySQL($_POST['plan2']);
$sexe2 = sanitizeMySQL($_POST['sexe2']);
$sexe3 = sanitizeMySQL($_POST['sexe3']);
$siouinom = sanitizeMySQL($_POST['siouinom']);
$laraison = sanitizeMySQL($_POST['laraison']);
$temoins = sanitizeMySQL($_POST['temoins']);
$temoins2 = sanitizeMySQL($_POST['temoins2']);
$contactes = sanitizeMySQL($_POST['contactes']);
$courant = sanitizeMySQL($_POST['courant']);
$autorites = sanitizeMySQL($_POST['autorites']);
$typedautoritepolice = sanitizeMySQL($_POST['typedautoritepolice']);
$typedautoriteCASEC = sanitizeMySQL($_POST['typedautoriteCASEC']);
$typedautoriteJuge = sanitizeMySQL($_POST['typedautoriteJuge']);
$typedautoriteMagistrat = sanitizeMySQL($_POST['typedautoriteMagistrat']);
$typedautoriteAutre = sanitizeMySQL($_POST['typedautoriteAutre']);
$typedautoritedautre2 = sanitizeMySQL($_POST['typedautoritedautre2']);
$medicale = sanitizeMySQL($_POST['medicale']);
$oukikote = sanitizeMySQL($_POST['oukikote']);
$besoins = sanitizeMySQL($_POST['besoins']);
$dommage = sanitizeMySQL($_POST['dommage']);
$maison = sanitizeMySQL($_POST['maison']);
$organization3 = sanitizeMySQL($_POST['organization3']);
$dommage2 = sanitizeMySQL($_POST['dommage2']);
$dommage3 = sanitizeMySQL($_POST['dommage3']);
$province = sanitizeMySQL($_POST['province']);

$typedautoritedautre = sanitizeMySQL($_POST['typedautoritedautre']);

$violyear = sanitizeMySQL($_POST['violyear']);
$violmonth = sanitizeMySQL($_POST['violmonth']);
$violday = sanitizeMySQL($_POST['violday']);
$KOFAVIVcentre = sanitizeMySQL($_POST['KOFAVIVcentre']);
$KOFAVIVsant = sanitizeMySQL($_POST['KOFAVIVsant']);
$KOFAVIVagent = sanitizeMySQL($_POST['KOFAVIVagent']);
$KOFAVIVminustah = sanitizeMySQL($_POST['KOFAVIVminustah']);
$KOFAVIVhopital = sanitizeMySQL($_POST['KOFAVIVhopital']);
$KOFAVIVcommissariat = sanitizeMySQL($_POST['KOFAVIVcommissariat']);
$KOFAVIVautre = sanitizeMySQL($_POST['KOFAVIVautre']);
$KOFAVIVautre2 = sanitizeMySQL($_POST['KOFAVIVautre2']);
// $matrimoniale = sanitizeMySQL($_POST['matrimoniale']);
$matrimoniale = $_POST['matrimoniale'];
$heureduviol = sanitizeMySQL($_POST['heureduviol']);
$heureduviolhour = sanitizeMySQL($_POST['heureduviolhour']);
$heureduviolminute = sanitizeMySQL($_POST['heureduviolminute']);
$heureduviolampm = sanitizeMySQL($_POST['heureduviolampm']);

$kikotemoun = sanitizeMySQL($_POST['kikotemoun']);
$kikotekadejak = sanitizeMySQL($_POST['kikotekadejak']);
$preciserlieu1 = $_POST['preciserlieu1'];
$preciserlieu2 = $_POST['preciserlieu2'];

$commune = sanitizeMySQL($_POST['commune']);
$quartier = sanitizeMySQL($_POST['quartier']);
$camp = sanitizeMySQL($_POST['camp']);
$partiii1 = sanitizeMySQL($_POST['partiii1']);

$tip1 = sanitizeMySQL($_POST['tip1']);
$tip2 = sanitizeMySQL($_POST['tip2']);
$tip3 = sanitizeMySQL($_POST['tip3']);
$tip4 = sanitizeMySQL($_POST['tip4']);
$tip5 = sanitizeMySQL($_POST['tip5']);

$newkikote1 = sanitizeMySQL($_POST['newkikote1']);
$newkikote2 = sanitizeMySQL($_POST['newkikote2']);

// this code intelligently sets the ENFANT field to either Adulte or Enfant based on (age at time of violation)

$age = $violyear - $birthyear;
if( ($violmonth == $birthmonth || $violday < $birthday) || $violmonth < $birthmonth)
  $age--;

if ($age < 18)
	$enfant = "Enfant / Timoun";
else
	$enfant = "Adulte / Granmoun";
// end intelligent code ;)

$query = "UPDATE people SET month = '$month', day = '$day', year = '$year',
interview = '$interview', plan = '$plan',
organization1 = '$organization1', organizationother = '$organizationother',
familyname = '$familyname', name = '$name', birthday = '$birthday',
birthmonth = '$birthmonth', birthyear = '$birthyear',
lieudenaissance = '$lieudenaissance', adresse = '$adresse',
numerodetelephone = '$numerodetelephone', profession = '$profession',
religion = '$religion', organization2 = '$organization2',
statut = '$statut',
lieuduviol = '$lieuduviol', lieudeviolautres = '$lieudeviolautres',
indiquerzone = '$indiquerzone', lieu = '$lieu',
lieuautres = '$lieuautres', lapersonne = '$lapersonne', nombre = '$nombre',
sexe = '$sexe', nombrequiaparticipe = '$nombrequiaparticipe',
adressadres = '$adressadres', lienrelasyon = '$lienrelasyon',
lieninfogang = '$lieninfogang', lieninfoinconnu = '$lieninfoinconnu',
lieninfopolice = '$lieninfopolice',
lieninfopreciser = '$lieninfopreciser',
apreciserpresize = '$apreciserpresize', typedagressionmeutre = '$typedagressionmeutre',
typedagressiondisparition = '$typedagressiondisparition',
typedagressiondestruction = '$typedagressiondestruction',
typedagressionarrestation = '$typedagressionarrestation',
typedagressionkidnapping = '$typedagressionkidnapping',
typedagressionmenace = '$typedagressionmenace',
typedagressionviol = '$typedagressionviol',
typedagressionassaut = '$typedagressionassaut', comment = '$comment',
ouestcequil = '$ouestcequil', queluniforme = '$queluniforme',
portaitdesmasques = '$portaitdesmasques', desarmes = '$desarmes',
plan2 = '$plan2', sexe2 = '$sexe2', sexe3 = '$sexe3',
siouinom = '$siouinom', laraison = '$laraison', temoins = '$temoins',
temoins2 = '$temoins2', contactes = '$contactes',
courant = '$courant', autorites = '$autorites',
typedautoritepolice = '$typedautoritepolice',
typedautoriteCASEC = '$typedautoriteCASEC',
typedautoriteJuge = '$typedautoriteJuge',
typedautoriteMagistrat = '$typedautoriteMagistrat',
typedautoriteAutre = '$typedautoriteAutre',
typedautoritedautre = '$typedautoritedautre',
typedautoritedautre2 = '$typedautoritedautre2',
medicale = '$medicale', oukikote = '$oukikote', besoins = '$besoins',
dommage = '$dommage', maison = '$maison', organization3 = '$organization3',
dommage2 = '$dommage2', dommage3 = '$dommage3',
province = '$province', violyear = '$violyear', violmonth = '$violmonth',
violday = '$violday', KOFAVIVcentre = '$KOFAVIVcentre',
KOFAVIVsant = '$KOFAVIVsant', KOFAVIVagent = '$KOFAVIVagent',
KOFAVIVminustah = '$KOFAVIVminustah', KOFAVIVhopital = '$KOFAVIVhopital',
KOFAVIVcommissariat = '$KOFAVIVcommissariat', KOFAVIVautre = '$KOFAVIVautre',
KOFAVIVautre2 = '$KOFAVIVautre2', matrimoniale = '$matrimoniale',
heureduviol = '$heureduviol', heureduviolhour = '$heureduviolhour',
heureduviolminute = '$heureduviolminute', heureduviolampm = '$heureduviolampm',
dansuncamp = '$dansuncamp',
kikotemoun = '$kikotemoun',
kikotekadejak = '$kikotekadejak',
preciserlieu1 = '$preciserlieu1',
preciserlieu2 = '$preciserlieu2',
tip1 = '$tip1',
tip2 = '$tip2',
tip3 = '$tip3',
tip4 = '$tip4',
tip5 = '$tip5',
newkikote1 = '$newkikote1',
newkikote2 = '$newkikote2',
newkikote3 = '$newkikote3',
newkikote4 = '$newkikote4',
commune = '$commune',
quartier = '$quartier',
camp = '$camp',

enfant = '$enfant' WHERE id = '$id'";

$result = mysql_query($query);

if (!$result)
echo "INSERT failed: $query<br />" .
mysql_error() . "<br /><br />";

echo <<<_END
<form action="update.php" method="post">
<input type="hidden" name="update" value="yes" />
<input type="hidden" name="id" value=$id />
<p class="button"><button name="Update" type="submit">Continuer à éditer $name $familyname</button></p>
_END;

// mysql_close();

if($_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$error    = $_FILES['userfile']['error'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
// $content = addslashes($content);
fclose($fp);

	if(!get_magic_quotes_gpc())
	{
    	$fileName = addslashes($fileName);
	}

$pieces = explode(".", $fileName);
$extension = end($pieces);
$newFileName = "./files/" . $id . "." . $extension;
if(file_put_contents($newFileName, $content))
	echo $fileName . " uploaded successfully<br>";
else
	echo "upload error! problem writing " . $fileName . "<br>";

$query = "UPDATE people SET filename = '$newFileName' WHERE id='$id'";
$result = mysql_query($query);
if (!$result)
echo "UPDATE failed: $query<br />" .
mysql_error() . "<br /><br />";
}


if($_FILES['userfile2']['size'] > 0)
{
$fileName = $_FILES['userfile2']['name'];
$tmpName  = $_FILES['userfile2']['tmp_name'];
$fileSize = $_FILES['userfile2']['size'];
$fileType = $_FILES['userfile2']['type'];
$error    = $_FILES['userfile2']['error'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
// $content = addslashes($content);
fclose($fp);

	if(!get_magic_quotes_gpc())
	{
    	$fileName = addslashes($fileName);
	}

$pieces = explode(".", $fileName);
$extension = end($pieces);
$newFileName2 = "./files/" . $id . "." . $extension;
if(file_put_contents($newFileName2, $content))
	echo $fileName . " uploaded successfully<br>";
else
	echo "upload error! problem writing " . $fileName . "<br>";

$query = "UPDATE people SET filename2 = '$newFileName2' WHERE id='$id'";
$result = mysql_query($query);
if (!$result)
echo "UPDATE failed: $query<br />" .
mysql_error() . "<br /><br />";
}


mysql_close();


function sanitizeString($var)
{
$var = stripslashes($var);
$var = htmlentities($var);
$var = strip_tags($var);
return $var;
}

function sanitizeMySQL($var)
{
  // $var = sanitizeString($var);
$var = mysql_real_escape_string($var);
return $var;
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
