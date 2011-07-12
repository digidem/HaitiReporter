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

		<h1>Welcome to Haiti Reporter</h1>
		<p>This is the "View Record" page</p>
        </div>
    </div>
<div id="panel">
  <div class="right">

<?php
	  function get_post($var)
	  {
	  return mysql_real_escape_string($_POST[$var]);
	  }


require_once 'login.php';
mysql_connect(localhost, $username, $password);
@mysql_select_db($database) or die("Unable to select database");
// Unicode support
$query1 = "SET NAMES utf8";
mysql_query($query1);
// end Unicode support

	  if (isset($_POST['view']) && isset($_POST['id']))
	  {
	  $id  = get_post('id');
	  $query = "SELECT * FROM people WHERE id='$id'";
	  $result = mysql_query($query);

	  if (!$result)	
	  echo "VIEW failed: $query<br />" .
	  mysql_error() . "<br /><br />";

	  $row = mysql_fetch_assoc($result);
	  $myBirthMonth = $row["month"];
	  $myBirthDay = $row["day"];
	  $myBirthYear = $row["year"];

	    $select = 'selected="selected"';
	    $disabled = 'disabled="disabled"';
	  }

?>

Nimewo Dosye:<b><?php echo $row['id']; ?></b><br><br>
Creator:<b><?php echo $row['creator']; ?></b><br><br>
Date / Dat:<br>
Mois / Mwa: <b><?php echo $myBirthMonth; ?></b><br />
Jour / Jou: <b><?php echo $myBirthDay; ?></b><br />
Annee / Ane: <b><?php echo $myBirthYear; ?></b><br><br>
Interview / Entevyou:<b><b><?php echo $row['interview']; ?></b></b><br><br>
Organization (MSF, KOFAVIV, Hopital Generale, APROSIFA, Autre):<b><?php echo $row['organization1']; ?></b><br />
Si d'autres:<b><?php echo $row['organizationother']; ?></b><br><br>
Comment est-ce que vous avez trouvé KOFAVIV? / Kijan ou te jwenn KOFAVIV?:<br>
<input type="checkbox"  class ="checkbox" name="KOFAVIVcentre" disabled="disabled" value="1" <?php if ($row['KOFAVIVcentre'] == "1") echo "checked"; ?>> Centre d'appel / Sant dapel<br />
<input type="checkbox"  class ="checkbox" name="KOFAVIVsant" disabled="disabled" value="1" <?php if ($row['KOFAVIVsant'] == "1") echo "checked"; ?>> Agent / Ajan<br />
<input type="checkbox"  class ="checkbox" name="KOFAVIVagent" disabled="disabled" value="1" <?php if ($row['KOFAVIVagent'] == "1") echo "checked"; ?>> Centre d'appel / Sant dapel<br />
<input type="checkbox"  class ="checkbox" name="KOFAVIVminustah" disabled="disabled" value="1" <?php if ($row['KOFAVIVminustah'] == "1") echo "checked"; ?>> Institution / Institisyon (MINUSTAH)<br />
<input type="checkbox"  class ="checkbox" name="KOFAVIVhopital" disabled="disabled" value="1" <?php if ($row['KOFAVIVhopital'] == "1") echo "checked"; ?>> Institution / Institisyon (Hopital Generale)<br />
<input type="checkbox"  class ="checkbox" name="KOFAVIVcommissariat" disabled="disabled" value="1" <?php if ($row['KOFAVIVcommissariat'] == "1") echo "checked"; ?>> Institution / Institisyon (Commissariat)<br />
<input type="checkbox"  class ="checkbox" name="KOFAVIVautre" disabled="disabled" value="1" <?php if ($row['KOFAVIVautre'] == "1") echo "checked"; ?>> Autre<br />

Si d'autres:<b><?php echo $row['KOFAVIVautre2']; ?></b><br><br>
Nom de Famille / Siyati fanmi:<b><?php echo $row['familyname']; ?></b><br><br>
Prenom / Non:<b><?php echo $row['name']; ?></b><br><br>
Date de naissance / Dat ou fet:<br>
Mois / Mwa: <b><?php echo $row['birthmonth']; ?></b><br />
Jour / Jou:<b><?php echo $row['birthday']; ?></b><br />
Annee / Ane:<b><?php echo $row['birthyear']; ?></b><br><br> 
Enfant ou Adulte/Timoun oswa Granmoun:<b><?php echo $row['enfant']; ?></b><br><br> 
Lieu de naissance / Kote ou fet:<b><?php echo $row['lieudenaissance']; ?></b><br><br>
Adresse / Adres:<b><?php echo $row['adresse']; ?></b><br><br>
Situation Matrimoniale / Sitiyasyon Matrimonyal:<b><?php echo $row['matrimoniale']; ?></b><br><br>
Numero de telephone / Nimewo telefon:<b><?php echo $row['numerodetelephone']; ?></b><br><br>
Profession / Pwofesyon:<b><?php echo $row['profession']; ?></b><br><br>
Religion / Relijyon:<b><?php echo $row['religion']; ?></b><br><br>
Organization - Association / Oganizasyon - Asosyasyon:<b><?php echo $row['organization']; ?></b><br><br>
Statut / Stati:<b><?php echo $row['statut']; ?></b><br><br>
Date et Heure du viol / Dat ak le kadejak la fet:
Mois / Mwa: <b><?php echo $row['violmonth']; ?></b><br />
Jour / Jou:<b><?php echo $row['violday']; ?></b><br />
Annee / Ane:<b><?php echo $row['violyear']; ?></b><br><br> 
Heure du viol / Lé kadejak la fet:<b><?php echo $row['heureduviol']; ?></b><br><br> 
Moment du viol:<b><?php echo $row['heureduviolhour']; ?>:<?php echo $row['heureduviolminute']; ?> <?php echo $row['heureduviolampm']; ?></b><br />

Commune:<b><?php echo $row['commune']; ?></b><br />
Quartier:<b><?php echo $row['quartier']; ?></b><br />
Camp:<b><?php echo $row['camp']; ?></b><br />

Lieu du viol / Kote kadejak la fet:<b><?php echo $row['lieuduviol']; ?></b><br />
Si d'autres:<b><?php echo $row['lieudeviolautres']; ?></b><br><br>
Est-ce que c'etait dans un camp? / Èske se te nan kan?:<b><?php echo $row['dansuncamp']; ?></b><br><br>
Indiquer zone ou camp préciser / Zòn oubyen kan presize:<b><?php echo $row['indiquerzone']; ?></b><br><br>
Lieu / Lye: <b><?php echo $row['lieu']; ?></b><br />
Si d'autres:<b><?php echo $row['lieuautres']; ?></b><br><br>

Ki kote moun ki te fè w sa te jwenn ou? Est-ce que c'etait dans un camp? / Èske se te nan kan?:<b><?php echo $row['kikotemoun']; ?></b><br><br>
<b><?php echo $row['newkikote1']; ?></b><br><br>
Autre:<b><?php echo $row['newkikote3']; ?></b><br><br>

(deprecated) Preciser lieu / Lye presize:<b><?php echo $row['preciserlieu1']; ?></b><br><br>
Ki kote kadejak la te fet? Est-ce que c'etait dans un camp? / Èske se te nan kan?<b><?php echo $row['kikotekadejak']; ?></b><br><br>
<b><?php echo $row['newkikote2']; ?></b><br><br>
Autre:<b><?php echo $row['newkikote4']; ?></b><br><br>

(deprecated) Preciser lieu / Lye presize:<b><?php echo $row['preciserlieu2']; ?></b><br><br>

La personne qui a commis cet acte / Eske ou moun ki komet zak la?:<b><?php echo $row['lapersonne']; ?></b><br><br>
Nombre / Konbyen moun:<b><?php echo $row['nombre']; ?></b><br><br>
Sexe / Seks: <b><?php echo $row['sexe']; ?></b><br />
Nombre qui a participe dans le viol / Kantite moun ki te fe kadejak la:<b><?php echo $row['nombrequiaparticipe']; ?></b><br><br>
Adress / Adres:<b><?php echo $row['adressadres']; ?></b><br><br>
Lien / Relasyon:<b><?php echo $row['lienrelasyon']; ?></b><br><br>

	<input type="checkbox" name="lieninfogang" disabled="disabled" value="1" <?php if ($row['lieninfogang'] == "1") echo "checked"; ?>>Gang Arme (Expliquer) / Gang ame (Eksplike) <br />
	<input type="checkbox" name="lieninfoinconnu" disabled="disabled" value="1" <?php if ($row['lieninfoinconnu'] == "1") echo "checked"; ?>>Inconnu / Enkoni <br />
	<input type="checkbox" name="lieninfopolice" disabled="disabled" value="1" <?php if ($row['lieninfopolice'] == "1") echo "checked"; ?>>Police / Polisye <br />
	<input type="checkbox" name="lieninfopreciser" disabled="disabled" value="1" <?php if ($row['lieninfopreciser'] == "1") echo "checked"; ?>>A Preciser / Presize <br />
<br><br>

A Preciser / Presize:<b><?php echo $row['apreciserpresize']; ?></b><br>

Tip dagresyon / Type d’aggressions<br />
<input type="checkbox" name="tip1" value="1" disabled="disabled" <?php if ($row['tip1'] == "1") echo "checked"; ?>>Vyol / Viol<br />
<input type="checkbox" name="tip2" value="1" disabled="disabled" <?php if ($row['tip2'] == "1") echo "checked"; ?>>Agresyon seksyèl /Agression sexuelle <br />
<input type="checkbox" name="tip3" value="1" disabled="disabled" <?php if ($row['tip3'] == "1") echo "checked"; ?>>Agresyon fizik / Agression physique<br />
<input type="checkbox" name="tip4" value="1" disabled="disabled" <?php if ($row['tip4'] == "1") echo "checked"; ?>>Deni resous / Déni de ressources, d’opportunités ou de services <br />
<input type="checkbox" name="tip5" value="1" disabled="disabled" <?php if ($row['tip5'] == "1") echo "checked"; ?>>Abi sikolojik, emosyonèl / Abus psychologique, émotionnel <br />
<br><br>

(deprecated) Type d'agression / Ki jan dagresyon:<br>

<input type="checkbox" name="typedagressionmeutre" value="1" disabled="disabled" <?php if ($row['typedagressionmeutre'] == "1") echo "checked"; ?>>Meutre / Asasina <br />
<input type="checkbox" name="typedagressiondisparition" value="1" disabled="disabled" <?php if ($row['typedagressiondisparition'] == "1") echo "checked"; ?>>Disparition / Disparisyon (Lot moun) <br />
<input type="checkbox" name="typedagressiondestruction" value="1" disabled="disabled" <?php if ($row['typedagressiondestruction'] == "1") echo "checked"; ?>>Destruction des biens (indice / Pillage / etc...) / Destriksyon byen (Dife / Piye) <br />
<input type="checkbox" name="typedagressionarrestation" value="1" disabled="disabled" <?php if ($row['typedagressionarrestation'] == "1") echo "checked"; ?>>Arrestation / Arestasyon <br />
<input type="checkbox" name="typedagressionkidnapping" value="1" disabled="disabled" <?php if ($row['typedagressionkidnapping'] == "1") echo "checked"; ?>>Kidnaping / Kidnapin <br />
<input type="checkbox" name="typedagressionmenace" value="1" disabled="disabled" <?php if ($row['typedagressionmenace'] == "1") echo "checked"; ?>>Menace / Menas <br />
<input type="checkbox" name="typedagressionviol" value="1" disabled="disabled" <?php if ($row['typedagressionviol'] == "1") echo "checked"; ?>>Viol / Vyol <br />
<input type="checkbox" name="typedagressionassaut" value="1" disabled="disabled" <?php if ($row['typedagressionassaut'] == "1") echo "checked"; ?>>Assaut / Atak <br />
<br><br>
Comment as-tu pu identifier le(s) agresseur(s)? Koman ou te idantifye agrese a.:<br><b><?php echo $row['comment']; ?></b><br><br>
Ou est-ce qu-il est? Sont bases? / Ki kote yo gen baz yo?: <b><?php echo $row['ouestcequil']; ?></b><br><br>
Quel uniforme est-ce qu-il(s) portait(ent)? Ki rad kit te sou yo?:<br><b><?php echo $row['queluniforme']; ?></b><br><br>
Est-ce qu-il(s) portait(ent) des masques (Cagoules)? Eske yo te maske?:<br> <b><?php echo $row['portaitdesmasques']; ?></b><br><br>
Est-ce qu-il(s) avait(ent) des armes? / Eske yo te gen zam?:<br><b><?php echo $row['desarmes']; ?></b><br><br>
Quel type d'arme? / Ki kalite zam?:<b><?php echo $row['plan2']; ?></b><br><br>
Est-ce qu-il y avait d'autres personnes qui ont ete violes? / Eske gen lot moun ki te subi kadejak?:<br><b><?php echo $row['sexe2']; ?></b><br><br>
Est-ce qu'il a d'autres victimes? / eske gen lot moun ki viktim?:<br> <b><?php echo $row['sexe3']; ?></b><br><br>
Si oui, Nom, Age, Relation avec victimes/ Primaire / Si wi, bay, non ak laj epi relasyon w ak viktim lan.:<br><b><?php echo $row['siouinom']; ?></b><br><br>
La raison pour laquelle tu as ete siblee. / Rezon kif e ou te sible.:<br><b><?php echo $row['laraison']; ?></b><br>
<div class="content">
<h1>Temoins / Temwen</h1>
  </div>
Est-ce qu'il y avait des temoins? / eske te gen temwen?:<b><?php echo $row['temoins']; ?></b><br />
Quels sont les temoins? / Kiles temwen yo ye?:<b><?php echo $row['temoins2']; ?></b><br><br>
Comment est-ce qu-ils (elles) peuvent etre contactes? / Koman ou ka kontakte yo?:<b><?php echo $row['contactes']; ?></b><br><br>
Qui etait mis au courant? / Ki moun ki te konn sa ki te pase a ?:<b><?php echo $row['courant']; ?></b><br><br>
Est-ce que tu as motive les autorites? Eske ou te aveti leta?:<br><b><?php echo $row['autorites']; ?></b><br />
Quel type d'autorite? / Ki biwo leta? : <br>

	<input type="checkbox" name="typedautoritepolice" value="1" disabled="disabled" <?php if ($row['typedautoritepolice'] == "1") echo "checked"; ?>>La Police / La polis <br />
	<input type="checkbox" name="typedautoriteCASEC" value="1" disabled="disabled" <?php if ($row['typedautoriteCASEC'] == "1") echo "checked"; ?>>CASEC / KAZEK <br />
	<input type="checkbox" name="typedautoriteJuge" value="1" disabled="disabled" <?php if ($row['typedautoriteJuge'] == "1") echo "checked"; ?>>Juge de paix / Jij de pe <br />
	<input type="checkbox" name="typedautoriteMagistrat" value="1" disabled="disabled" <?php if ($row['typedautoriteMagistrat'] == "1") echo "checked"; ?>>Magistrat / Majistra <br />
	<input type="checkbox" name="typedautoriteAutre" value="1" disabled="disabled" <?php if ($row['typedautoriteAutre'] == "1") echo "checked"; ?>>Autre / Lot (Preciser) <br />
<br><br>
Si d'autres:<b><?php echo $row['typedautoritedautre']; ?></b><br><br>
<div class="content">
<h1> Situation Personnelle / Sitiyasyon Pesonel </h1>
</div>
Est-ce que tu as recherche l'assistance medicale? / Eske ou te al kay dokte?:<b><?php echo $row['medicale']; ?></b> <br />
Ou / Ki kote ?<b><?php echo $row['oukikote']; ?></b><br><br>
Besoins medicaux / Bezwen medikal: <br> <b><?php echo $row['besoins']; ?></b><br><br>
Dommage Materiel / Domaj materyel: <br> <b><?php echo $row['dommage']; ?></b><br><br>
Est-ce que vous avez laisse votre maison? esche ou kite kay la:<br><b><?php echo $row['maison']; ?></b><br><br>
Pourquoi? / Poukisa?:<br>  <b><?php echo $row['organization3']; ?></b><br><br>
Quelles possibilites avez-vous? / Ki mwayen ou genyen?: <br><b><?php echo $row['dommage2']; ?></b><br><br>
Qu'est-ce qui serait la meilleure solution pour vous? / Kisa ki ta pi bon pou ou? : <br><b><?php echo $row['dommage3']; ?></b><br><br>
Est-ce que vous avez une famille en province? / Eske ou gen fanmi an pwovens?: <br><b><?php echo $row['province']; ?></b><br><br>
 </div>
 </div>
<?php
// display embeded files. File 1 is PDF, File 2 is audio. There is no type checking
$filename1 = $row['filename'];
$filename2 = $row['filename2'];

// if spaces added to filenames, this will need some quotes action
if($filename1)
	{
	echo '<br>embedded PDF:<br>';
	echo '<embed src=' . $filename1 . ' width="1000" height="750">';
	}
else
	echo '<br>no PDF attached<br>';
if($filename2)
	{
	echo '<br>embedded audio:<br>';
	echo '<embed src=' . $filename2 . '>';
	}
else
	echo'<br>no audio file attached<br>';
?>
		<div class="divider"></div>
	<div class="footer">
<p><a href="http://digital-democracy.org"> Digital Democracy</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons License</a>.<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a>
	</div>
<a href=logout.php>Log Out</a>
</div>


</body>
</html>
