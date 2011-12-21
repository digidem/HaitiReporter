<?php
session_start();

if (!isset($_SESSION['username']))
{
echo "Please <a href=authenticate.php>click here</a> to log in.";
exit;
}
// ini_set("default_charset", 'utf-8')
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
		<p>This is the "Update" page.</p>
        </div>
    </div>
<?php
	  function get_post($var)
	  {
	  return mysql_real_escape_string($_POST[$var]);
	  }


require_once 'login.php';
mysql_connect(localhost, $username, $password);
@mysql_select_db($database) or die("Unable to select database");

// implement Unicode support
$query1 = "SET NAMES utf8";
mysql_query($query1);
// end Unicode support adding code

	  if (isset($_POST['update']) && isset($_POST['id']))
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
	  }

?>
<div id="panel">
  <div class="right">
<form action="updaterecord.php" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
<input type="hidden" name="id" value=<?php echo $id; ?> />

<h1>Victim Information Form</h1><br />
Nimewo Dosye:<b><?php echo $row['id']; ?></b><br><br>
Creator:<b><?php echo $row['creator']; ?></b><br><br>
Date / Dat:
<table border=0>
 <tr><td>
Mois / Mwa: </td><td><select name="month">
<option <?php if ($myBirthMonth == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
<option <?php if ($myBirthMonth == "01") echo $select; ?>>01 janvier</option>
<option <?php if ($myBirthMonth == "02") echo $select; ?>>02 février</option>
<option <?php if ($myBirthMonth == "03") echo $select; ?>>03 mars</option>
<option <?php if ($myBirthMonth == "04") echo $select; ?>>04 avril</option>
<option <?php if ($myBirthMonth == "05") echo $select; ?>>05 mai</option>
<option <?php if ($myBirthMonth == "06") echo $select; ?>>06 juin</option>
<option <?php if ($myBirthMonth == "07") echo $select; ?>>07 juillet</option>
<option <?php if ($myBirthMonth == "08") echo $select; ?>>08 août</option>
<option <?php if ($myBirthMonth == "09") echo $select; ?>>09 septembre</option>
<option <?php if ($myBirthMonth == "10") echo $select; ?>>10 octobre</option>
<option <?php if ($myBirthMonth == "11") echo $select; ?>>11 novembre</option>
<option <?php if ($myBirthMonth == "12") echo $select; ?>>12 décembre</option>
</select></td></tr><tr><td>
Jour / Jou:</td><td><select name="day">
<option <?php if ($myBirthDay == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
<option <?php if ($myBirthDay == "01") echo $select; ?>>01</option>
<option <?php if ($myBirthDay == "02") echo $select; ?>>02</option>
<option <?php if ($myBirthDay == "03") echo $select; ?>>03</option>
<option <?php if ($myBirthDay == "04") echo $select; ?>>04</option>
<option <?php if ($myBirthDay == "05") echo $select; ?>>05</option>
<option <?php if ($myBirthDay == "06") echo $select; ?>>06</option>
<option <?php if ($myBirthDay == "07") echo $select; ?>>07</option>
<option <?php if ($myBirthDay == "08") echo $select; ?>>08</option>
<option <?php if ($myBirthDay == "09") echo $select; ?>>09</option>
<option <?php if ($myBirthDay == "10") echo $select; ?>>10</option>
<option <?php if ($myBirthDay == "11") echo $select; ?>>11</option>
<option <?php if ($myBirthDay == "12") echo $select; ?>>12</option>
<option <?php if ($myBirthDay == "13") echo $select; ?>>13</option>
<option <?php if ($myBirthDay == "14") echo $select; ?>>14</option>
<option <?php if ($myBirthDay == "15") echo $select; ?>>15</option>
<option <?php if ($myBirthDay == "16") echo $select; ?>>16</option>
<option <?php if ($myBirthDay == "17") echo $select; ?>>17</option>
<option <?php if ($myBirthDay == "18") echo $select; ?>>18</option>
<option <?php if ($myBirthDay == "19") echo $select; ?>>19</option>
<option <?php if ($myBirthDay == "20") echo $select; ?>>20</option>
<option <?php if ($myBirthDay == "21") echo $select; ?>>21</option>
<option <?php if ($myBirthDay == "22") echo $select; ?>>22</option>
<option <?php if ($myBirthDay == "23") echo $select; ?>>23</option>
<option <?php if ($myBirthDay == "24") echo $select; ?>>24</option>
<option <?php if ($myBirthDay == "25") echo $select; ?>>25</option>
<option <?php if ($myBirthDay == "26") echo $select; ?>>26</option>
<option <?php if ($myBirthDay == "27") echo $select; ?>>27</option>
<option <?php if ($myBirthDay == "28") echo $select; ?>>28</option>
<option <?php if ($myBirthDay == "29") echo $select; ?>>29</option>
<option <?php if ($myBirthDay == "30") echo $select; ?>>30</option>
<option <?php if ($myBirthDay == "31") echo $select; ?>>31</option>
</select></td></tr><tr><td>

Annee / Ane:</td><td>
  <select name="year">
    <option <?php if ($myBirthYear == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
<option <?php if ($myBirthYear == "2009") echo $select; ?>>2009</option>
<option <?php if ($myBirthYear == "2010") echo $select; ?>>2010</option>
<option <?php if ($myBirthYear == "2011") echo $select; ?>>2011</option>
<option <?php if ($myBirthYear == "2012") echo $select; ?>>2012</option>
<option <?php if ($myBirthYear == "2013") echo $select; ?>>2013</option>
<option <?php if ($myBirthYear == "2014") echo $select; ?>>2014</option>
<option <?php if ($myBirthYear == "2015") echo $select; ?>>2015</option>
<option <?php if ($myBirthYear == "2016") echo $select; ?>>2016</option>
<option <?php if ($myBirthYear == "2017") echo $select; ?>>2017</option>
<option <?php if ($myBirthYear == "2018") echo $select; ?>>2018</option>
<option <?php if ($myBirthYear == "2019") echo $select; ?>>2019</option>
<option <?php if ($myBirthYear == "2020") echo $select; ?>>2020</option>
<option <?php if ($myBirthYear == "2021") echo $select; ?>>2021</option>
<option <?php if ($myBirthYear == "2022") echo $select; ?>>2022</option>
<option <?php if ($myBirthYear == "2023") echo $select; ?>>2023</option>
<option <?php if ($myBirthYear == "2024") echo $select; ?>>2024</option>
<option <?php if ($myBirthYear == "2025") echo $select; ?>>2025</option>
<option <?php if ($myBirthYear == "2026") echo $select; ?>>2026</option>

</td></tr></table>
<label for="interview">Interview / Entevyou:</label> <p
class="input"><input type="text" name="interview" maxlength="255" value="<?php echo $row['interview']; ?>"></p><br />
Organization (MSF, KOFAVIV, Hopital Generale, APROSIFA, Autree):
<select name="organization1">
 <option <?php if ($row['organization1'] == "MSF") echo $select; ?>>MSF</option>
 <option <?php if ($row['organization1'] == "KOFAVIV") echo $select; ?>>KOFAVIV</option>
 <option <?php if ($row['organization1'] == "Hopital Generale") echo $select; ?>>Hopital Generale</option>
 <option <?php if ($row['organization1'] == "APROSIFA") echo $select; ?>>APROSIFA</option>
 <option <?php if ($row['organization1'] == "Autre") echo $select; ?>>Autre</option>
</select><br> <br>
Si d'autres:<br><p class="input"><input type="text" name="organizationother"  maxlength="255" value="<?php echo $row['organizationother']; ?>"></p><br />

Comment est-ce que vous avez trouvé KOFAVIV? / Kijan ou te jwenn KOFAVIV?:<br>
	<label for="KOFAVIVcentre"><input type="checkbox"  class ="checkbox" name="KOFAVIVcentre" value="1" <?php if ($row['KOFAVIVcentre'] == "1") echo "checked"; ?>> Centre d'appel / Sant dapel</label><br />
	<label for="KOFAVIVsant"><input type="checkbox"  class ="checkbox" name="KOFAVIVsant" value="1" <?php if ($row['KOFAVIVsant'] == "1") echo "checked"; ?>> Agent / Ajan</label><br />

	<label for="KOFAVIVminustah"><input type="checkbox"  class ="checkbox" name="KOFAVIVminustah" value="1" <?php if ($row['KOFAVIVminustah'] == "1") echo "checked"; ?>> Institution / Institisyon (MINUSTAH)</label><br />
	<label for="KOFAVIVhopital"><input type="checkbox"  class ="checkbox" name="KOFAVIVhopital" value="1" <?php if ($row['KOFAVIVhopital'] == "1") echo "checked"; ?>> Institution / Institisyon (Hopital Generale)</label><br />
	<label for="KOFAVIVcommissariat"><input type="checkbox"  class ="checkbox" name="KOFAVIVcommissariat" value="1" <?php if ($row['KOFAVIVcommissariat'] == "1") echo "checked"; ?>> Institution / Institisyon (Commissariat) </label><br />
	<label for="KOFAVIVautre"><input type="checkbox"  class ="checkbox" name="KOFAVIVautre" value="1" <?php if ($row['KOFAVIVautre'] == "1") echo "checked"; ?>> Autre</label><br />

Si d'autres:<br> <p class="input"> <input type="text"
name="KOFAVIVautre2" maxlength="255"  value="<?php echo $row['KOFAVIVautre2']; ?>"></p><br />




Nom de Famille / Siyati fanmi:<br><p class="input"> <input type="text" name="familyname" maxlength="255"  value="<?php echo $row['familyname']; ?>"></p><br />
Prenom / Non:<br> <p class="input"><input type="text" name="name"  maxlength="255" value="<?php echo $row['name']; ?>"></p><br />
Date de naissance / Dat ou fet:
<table border=0><tr><td>
Month:</td><td> <select name="birthmonth">
<option <?php if ($row['birthmonth'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
<option <?php if ($row['birthmonth'] == "01") echo $select; ?>>01 janvier</option>
<option <?php if ($row['birthmonth'] == "02") echo $select; ?>>02 février</option>
<option <?php if ($row['birthmonth'] == "03") echo $select; ?>>03 mars</option>
<option <?php if ($row['birthmonth'] == "04") echo $select; ?>>04 avril</option>
<option <?php if ($row['birthmonth'] == "05") echo $select; ?>>05 mai</option>
<option <?php if ($row['birthmonth'] == "06") echo $select; ?>>06 juin</option>
<option <?php if ($row['birthmonth'] == "07") echo $select; ?>>07 juillet</option>
<option <?php if ($row['birthmonth'] == "08") echo $select; ?>>08 août</option>
<option <?php if ($row['birthmonth'] == "09") echo $select; ?>>09 septembre</option>
<option <?php if ($row['birthmonth'] == "10") echo $select; ?>>10 octobre</option>
<option <?php if ($row['birthmonth'] == "11") echo $select; ?>>11 novembre</option>
<option <?php if ($row['birthmonth'] == "12") echo $select; ?>>12 décembre</option>
</select></td></tr><tr><td>

Day:</td><td><select name="birthday">
  <option <?php if ($row['birthday'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
<option <?php if ($row['birthday'] == "01") echo $select; ?>>01</option>
<option <?php if ($row['birthday'] == "02") echo $select; ?>>02</option>
<option <?php if ($row['birthday'] == "03") echo $select; ?>>03</option>
<option <?php if ($row['birthday'] == "04") echo $select; ?>>04</option>
<option <?php if ($row['birthday'] == "05") echo $select; ?>>05</option>
<option <?php if ($row['birthday'] == "06") echo $select; ?>>06</option>
<option <?php if ($row['birthday'] == "07") echo $select; ?>>07</option>
<option <?php if ($row['birthday'] == "08") echo $select; ?>>08</option>
<option <?php if ($row['birthday'] == "09") echo $select; ?>>09</option>
<option <?php if ($row['birthday'] == "10") echo $select; ?>>10</option>
<option <?php if ($row['birthday'] == "11") echo $select; ?>>11</option>
<option <?php if ($row['birthday'] == "12") echo $select; ?>>12</option>
<option <?php if ($row['birthday'] == "13") echo $select; ?>>13</option>
<option <?php if ($row['birthday'] == "14") echo $select; ?>>14</option>
<option <?php if ($row['birthday'] == "15") echo $select; ?>>15</option>
<option <?php if ($row['birthday'] == "16") echo $select; ?>>16</option>
<option <?php if ($row['birthday'] == "17") echo $select; ?>>17</option>
<option <?php if ($row['birthday'] == "18") echo $select; ?>>18</option>
<option <?php if ($row['birthday'] == "19") echo $select; ?>>19</option>
<option <?php if ($row['birthday'] == "20") echo $select; ?>>20</option>
<option <?php if ($row['birthday'] == "21") echo $select; ?>>21</option>
<option <?php if ($row['birthday'] == "22") echo $select; ?>>22</option>
<option <?php if ($row['birthday'] == "23") echo $select; ?>>23</option>
<option <?php if ($row['birthday'] == "24") echo $select; ?>>24</option>
<option <?php if ($row['birthday'] == "25") echo $select; ?>>25</option>
<option <?php if ($row['birthday'] == "26") echo $select; ?>>26</option>
<option <?php if ($row['birthday'] == "27") echo $select; ?>>27</option>
<option <?php if ($row['birthday'] == "28") echo $select; ?>>28</option>
<option <?php if ($row['birthday'] == "29") echo $select; ?>>29</option>
<option <?php if ($row['birthday'] == "30") echo $select; ?>>30</option>
<option <?php if ($row['birthday'] == "31") echo $select; ?>>31</option>
</select></td></tr><tr><td>

Year:</td><td><select name="birthyear">
    <option <?php if ($row['birthyear'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
  <option <?php if ($row['birthyear'] == "1940") echo $select; ?>>1940</option>
<option <?php if ($row['birthyear'] == "1941") echo $select; ?>>1941</option>
<option <?php if ($row['birthyear'] == "1942") echo $select; ?>>1942</option>
<option <?php if ($row['birthyear'] == "1943") echo $select; ?>>1943</option>
<option <?php if ($row['birthyear'] == "1944") echo $select; ?>>1944</option>
<option <?php if ($row['birthyear'] == "1945") echo $select; ?>>1945</option>
<option <?php if ($row['birthyear'] == "1946") echo $select; ?>>1946</option>
<option <?php if ($row['birthyear'] == "1947") echo $select; ?>>1947</option>
<option <?php if ($row['birthyear'] == "1948") echo $select; ?>>1948</option>
<option <?php if ($row['birthyear'] == "1949") echo $select; ?>>1949</option>
<option <?php if ($row['birthyear'] == "1950") echo $select; ?>>1950</option>
<option <?php if ($row['birthyear'] == "1951") echo $select; ?>>1951</option>
<option <?php if ($row['birthyear'] == "1952") echo $select; ?>>1952</option>
<option <?php if ($row['birthyear'] == "1953") echo $select; ?>>1953</option>
<option <?php if ($row['birthyear'] == "1954") echo $select; ?>>1954</option>
<option <?php if ($row['birthyear'] == "1955") echo $select; ?>>1955</option>
<option <?php if ($row['birthyear'] == "1956") echo $select; ?>>1956</option>
<option <?php if ($row['birthyear'] == "1957") echo $select; ?>>1957</option>
<option <?php if ($row['birthyear'] == "1958") echo $select; ?>>1958</option>
<option <?php if ($row['birthyear'] == "1959") echo $select; ?>>1959</option>
<option <?php if ($row['birthyear'] == "1960") echo $select; ?>>1960</option>
<option <?php if ($row['birthyear'] == "1961") echo $select; ?>>1961</option>
<option <?php if ($row['birthyear'] == "1962") echo $select; ?>>1962</option>
<option <?php if ($row['birthyear'] == "1963") echo $select; ?>>1963</option>
<option <?php if ($row['birthyear'] == "1964") echo $select; ?>>1964</option>
<option <?php if ($row['birthyear'] == "1965") echo $select; ?>>1965</option>
<option <?php if ($row['birthyear'] == "1966") echo $select; ?>>1966</option>
<option <?php if ($row['birthyear'] == "1967") echo $select; ?>>1967</option>
<option <?php if ($row['birthyear'] == "1968") echo $select; ?>>1968</option>
<option <?php if ($row['birthyear'] == "1969") echo $select; ?>>1969</option>
<option <?php if ($row['birthyear'] == "1970") echo $select; ?>>1970</option>
<option <?php if ($row['birthyear'] == "1971") echo $select; ?>>1971</option>
<option <?php if ($row['birthyear'] == "1972") echo $select; ?>>1972</option>
<option <?php if ($row['birthyear'] == "1973") echo $select; ?>>1973</option>
<option <?php if ($row['birthyear'] == "1974") echo $select; ?>>1974</option>
<option <?php if ($row['birthyear'] == "1975") echo $select; ?>>1975</option>
<option <?php if ($row['birthyear'] == "1976") echo $select; ?>>1976</option>
<option <?php if ($row['birthyear'] == "1977") echo $select; ?>>1977</option>
<option <?php if ($row['birthyear'] == "1978") echo $select; ?>>1978</option>
<option <?php if ($row['birthyear'] == "1979") echo $select; ?>>1979</option>
<option <?php if ($row['birthyear'] == "1980") echo $select; ?>>1980</option>
<option <?php if ($row['birthyear'] == "1981") echo $select; ?>>1981</option>
<option <?php if ($row['birthyear'] == "1982") echo $select; ?>>1982</option>
<option <?php if ($row['birthyear'] == "1983") echo $select; ?>>1983</option>
<option <?php if ($row['birthyear'] == "1984") echo $select; ?>>1984</option>
<option <?php if ($row['birthyear'] == "1985") echo $select; ?>>1985</option>
<option <?php if ($row['birthyear'] == "1986") echo $select; ?>>1986</option>
<option <?php if ($row['birthyear'] == "1987") echo $select; ?>>1987</option>
<option <?php if ($row['birthyear'] == "1988") echo $select; ?>>1988</option>
<option <?php if ($row['birthyear'] == "1989") echo $select; ?>>1989</option>
<option <?php if ($row['birthyear'] == "1990") echo $select; ?>>1990</option>
<option <?php if ($row['birthyear'] == "1991") echo $select; ?>>1991</option>
<option <?php if ($row['birthyear'] == "1992") echo $select; ?>>1992</option>
<option <?php if ($row['birthyear'] == "1993") echo $select; ?>>1993</option>
<option <?php if ($row['birthyear'] == "1994") echo $select; ?>>1994</option>
<option <?php if ($row['birthyear'] == "1995") echo $select; ?>>1995</option>
<option <?php if ($row['birthyear'] == "1996") echo $select; ?>>1996</option>
<option <?php if ($row['birthyear'] == "1997") echo $select; ?>>1997</option>
<option <?php if ($row['birthyear'] == "1998") echo $select; ?>>1998</option>
<option <?php if ($row['birthyear'] == "1999") echo $select; ?>>1999</option>
<option <?php if ($row['birthyear'] == "2000") echo $select; ?>>2000</option>
<option <?php if ($row['birthyear'] == "2001") echo $select; ?>>2001</option>
<option <?php if ($row['birthyear'] == "2002") echo $select; ?>>2002</option>
<option <?php if ($row['birthyear'] == "2003") echo $select; ?>>2003</option>
<option <?php if ($row['birthyear'] == "2004") echo $select; ?>>2004</option>
<option <?php if ($row['birthyear'] == "2005") echo $select; ?>>2005</option>
<option <?php if ($row['birthyear'] == "2006") echo $select; ?>>2006</option>
<option <?php if ($row['birthyear'] == "2007") echo $select; ?>>2007</option>
<option <?php if ($row['birthyear'] == "2008") echo $select; ?>>2008</option>
<option <?php if ($row['birthyear'] == "2009") echo $select; ?>>2009</option>
<option <?php if ($row['birthyear'] == "2010") echo $select; ?>>2010</option>
<option <?php if ($row['birthyear'] == "2011") echo $select; ?>>2011</option>
<option <?php if ($row['birthyear'] == "2012") echo $select; ?>>2012</option>
<option <?php if ($row['birthyear'] == "2013") echo $select; ?>>2013</option>
<option <?php if ($row['birthyear'] == "2014") echo $select; ?>>2014</option>
<option <?php if ($row['birthyear'] == "2015") echo $select; ?>>2015</option>
<option <?php if ($row['birthyear'] == "2016") echo $select; ?>>2016</option>
<option <?php if ($row['birthyear'] == "2017") echo $select; ?>>2017</option>
<option <?php if ($row['birthyear'] == "2018") echo $select; ?>>2018</option>
<option <?php if ($row['birthyear'] == "2019") echo $select; ?>>2019</option>
<option <?php if ($row['birthyear'] == "2020") echo $select; ?>>2020</option>
<option <?php if ($row['birthyear'] == "2021") echo $select; ?>>2021</option>
<option <?php if ($row['birthyear'] == "2022") echo $select; ?>>2022</option>
<option <?php if ($row['birthyear'] == "2023") echo $select; ?>>2023</option>
<option <?php if ($row['birthyear'] == "2024") echo $select; ?>>2024</option>
<option <?php if ($row['birthyear'] == "2025") echo $select; ?>>2025</option>
<option <?php if ($row['birthyear'] == "2026") echo $select; ?>>2026</option>

</td></tr></table><br />

Enfant ou Adulte/Timoun oswa Granmoun:<b>  <?php echo $row['enfant']; ?></b><br /><br />

Lieu de naissance / Kote ou fet:<br><p class="input"><input type="text" name="lieudenaissance"  maxlength="255"  value="<?php echo $row['lieudenaissance']; ?>"></p><br />

Adresse / Adres:<br>  <p class="input"> <input type="text" name="adresse"  maxlength="255" value="<?php echo $row['adresse']; ?>"></p><br />
Situation Matrimoniale / Sitiyasyon Matrimonyal:<br>
<select name="matrimoniale">
  <option <?php if ($row['matrimoniale'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
<option <?php if ($row['matrimoniale'] == "Celibataire / Selibaté") echo $select; ?>>Celibataire / Selibaté</option>
<option <?php if ($row['matrimoniale'] == "Placée / Plase") echo $select; ?>>Placée / Plase</option>
<option <?php if ($row['matrimoniale'] == "Mariée / Marye") echo $select; ?>>Mariée / Marye</option>
<option <?php if ($row['matrimoniale'] == "Divorcée / Divòse") echo $select; ?>>Divorcée / Divòse</option>
</select><br />
Numero de telephone / Nimewo telefon:<br><p class="input"><input type="text"   name="numerodetelephone"  maxlength="255" value="<?php echo $row['numerodetelephone']; ?>"></p><br />
Profession / Pwofesyon:<br> <p class="input"> <input type="text" name="profession"  maxlength="255" value="<?php echo $row['profession']; ?>"></p><br />
Religion / Relijyon:<br> <p class="input"> <input type="text" name="religion" maxlength="255"  value="<?php echo $row['religion']; ?>"></p><br />
Organization - Association / Oganizasyon - Asosyasyon:<br> <p class="input"> <input type="text" name="organization"  maxlength="255" value="<?php echo $row['organization']; ?>"></p><br />
Statut / Stati:<br> <p class="input"> <input type="text" name="statut"  maxlength="255" value="<?php echo $row['statut']; ?>"></p><br />
Date et Heure du viol / Dat ak le kadejak la fet:
<table border=0><tr><td>
Month:</td><td> <select name="violmonth">
<option <?php if ($row['violmonth'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
<option <?php if ($row['violmonth'] == "01") echo $select; ?>>01 janvier</option>
<option <?php if ($row['violmonth'] == "02") echo $select; ?>>02 février</option>
<option <?php if ($row['violmonth'] == "03") echo $select; ?>>03 mars</option>
<option <?php if ($row['violmonth'] == "04") echo $select; ?>>04 avril</option>
<option <?php if ($row['violmonth'] == "05") echo $select; ?>>05 mai</option>
<option <?php if ($row['violmonth'] == "06") echo $select; ?>>06 juin</option>
<option <?php if ($row['violmonth'] == "07") echo $select; ?>>07 juillet</option>
<option <?php if ($row['violmonth'] == "08") echo $select; ?>>08 août</option>
<option <?php if ($row['violmonth'] == "09") echo $select; ?>>09 septembre</option>
<option <?php if ($row['violmonth'] == "10") echo $select; ?>>10 octobre</option>
<option <?php if ($row['violmonth'] == "11") echo $select; ?>>11 novembre</option>
<option <?php if ($row['violmonth'] == "12") echo $select; ?>>12 décembre</option>
</select></td></tr><tr><td>

Day:</td><td><select name="violday">
  <option <?php if ($row['violday'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
<option <?php if ($row['violday'] == "01") echo $select; ?>>01</option>
<option <?php if ($row['violday'] == "02") echo $select; ?>>02</option>
<option <?php if ($row['violday'] == "03") echo $select; ?>>03</option>
<option <?php if ($row['violday'] == "04") echo $select; ?>>04</option>
<option <?php if ($row['violday'] == "05") echo $select; ?>>05</option>
<option <?php if ($row['violday'] == "06") echo $select; ?>>06</option>
<option <?php if ($row['violday'] == "07") echo $select; ?>>07</option>
<option <?php if ($row['violday'] == "08") echo $select; ?>>08</option>
<option <?php if ($row['violday'] == "09") echo $select; ?>>09</option>
<option <?php if ($row['violday'] == "10") echo $select; ?>>10</option>
<option <?php if ($row['violday'] == "11") echo $select; ?>>11</option>
<option <?php if ($row['violday'] == "12") echo $select; ?>>12</option>
<option <?php if ($row['violday'] == "13") echo $select; ?>>13</option>
<option <?php if ($row['violday'] == "14") echo $select; ?>>14</option>
<option <?php if ($row['violday'] == "15") echo $select; ?>>15</option>
<option <?php if ($row['violday'] == "16") echo $select; ?>>16</option>
<option <?php if ($row['violday'] == "17") echo $select; ?>>17</option>
<option <?php if ($row['violday'] == "18") echo $select; ?>>18</option>
<option <?php if ($row['violday'] == "19") echo $select; ?>>19</option>
<option <?php if ($row['violday'] == "20") echo $select; ?>>20</option>
<option <?php if ($row['violday'] == "21") echo $select; ?>>21</option>
<option <?php if ($row['violday'] == "22") echo $select; ?>>22</option>
<option <?php if ($row['violday'] == "23") echo $select; ?>>23</option>
<option <?php if ($row['violday'] == "24") echo $select; ?>>24</option>
<option <?php if ($row['violday'] == "25") echo $select; ?>>25</option>
<option <?php if ($row['violday'] == "26") echo $select; ?>>26</option>
<option <?php if ($row['violday'] == "27") echo $select; ?>>27</option>
<option <?php if ($row['violday'] == "28") echo $select; ?>>28</option>
<option <?php if ($row['violday'] == "29") echo $select; ?>>29</option>
<option <?php if ($row['violday'] == "30") echo $select; ?>>30</option>
<option <?php if ($row['violday'] == "31") echo $select; ?>>31</option>
</select></td></tr><tr><td>

Year:</td><td><select name="violyear">
    <option <?php if ($row['violyear'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
<option <?php if ($row['violyear'] == "2003") echo $select; ?>>2003</option>
<option <?php if ($row['violyear'] == "2004") echo $select; ?>>2004</option>
<option <?php if ($row['violyear'] == "2005") echo $select; ?>>2005</option>
<option <?php if ($row['violyear'] == "2006") echo $select; ?>>2006</option>
<option <?php if ($row['violyear'] == "2007") echo $select; ?>>2007</option>
<option <?php if ($row['violyear'] == "2008") echo $select; ?>>2008</option>
<option <?php if ($row['violyear'] == "2009") echo $select; ?>>2009</option>
<option <?php if ($row['violyear'] == "2010") echo $select; ?>>2010</option>
<option <?php if ($row['violyear'] == "2011") echo $select; ?>>2011</option>
<option <?php if ($row['violyear'] == "2012") echo $select; ?>>2012</option>
<option <?php if ($row['violyear'] == "2013") echo $select; ?>>2013</option>
<option <?php if ($row['violyear'] == "2014") echo $select; ?>>2014</option>
<option <?php if ($row['violyear'] == "2015") echo $select; ?>>2015</option>
<option <?php if ($row['violyear'] == "2016") echo $select; ?>>2016</option>
<option <?php if ($row['violyear'] == "2017") echo $select; ?>>2017</option>
<option <?php if ($row['violyear'] == "2018") echo $select; ?>>2018</option>
<option <?php if ($row['violyear'] == "2019") echo $select; ?>>2019</option>
<option <?php if ($row['violyear'] == "2020") echo $select; ?>>2020</option>
<option <?php if ($row['violyear'] == "2021") echo $select; ?>>2021</option>
<option <?php if ($row['violyear'] == "2022") echo $select; ?>>2022</option>
<option <?php if ($row['violyear'] == "2023") echo $select; ?>>2023</option>
<option <?php if ($row['violyear'] == "2024") echo $select; ?>>2024</option>
<option <?php if ($row['violyear'] == "2025") echo $select; ?>>2025</option>
<option <?php if ($row['violyear'] == "2026") echo $select; ?>>2026</option>

</td></tr></table><br />

Heure du viol / Lé kadejak la fet:<br />  <select name="heureduviol">
  <option <?php if ($row['heureduviol'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
<option <?php if ($row['heureduviol'] == "Matin / Maten") echo $select; ?>>Matin / Maten</option>
<option <?php if ($row['heureduviol'] == "Aprés-midi / Apremidi") echo $select; ?>>Aprés-midi / Apremidi</option>
<option <?php if ($row['heureduviol'] == "Soir / Aswe") echo $select; ?>>Soir / Aswe</option>
<option <?php if ($row['heureduviol'] == "Nuit / Nwit") echo $select; ?>>Nuit / Nwit</option>
</select><br><br>

Moment du viol:<select name="heureduviolhour">
<option>  </option>
<option <?php if ($row[heureduviolhour] == "1") echo $select; ?>>1</option>
<option <?php if ($row[heureduviolhour] == "2") echo $select; ?>>2</option>
<option <?php if ($row[heureduviolhour] == "3") echo $select; ?>>3</option>
<option <?php if ($row[heureduviolhour] == "4") echo $select; ?>>4</option>
<option <?php if ($row[heureduviolhour] == "5") echo $select; ?>>5</option>
<option <?php if ($row[heureduviolhour] == "6") echo $select; ?>>6</option>
<option <?php if ($row[heureduviolhour] == "7") echo $select; ?>>7</option>
<option <?php if ($row[heureduviolhour] == "8") echo $select; ?>>8</option>
<option <?php if ($row[heureduviolhour] == "9") echo $select; ?>>9</option>
<option <?php if ($row[heureduviolhour] == "10") echo $select; ?>>10</option>
<option <?php if ($row[heureduviolhour] == "11") echo $select; ?>>11</option>
<option <?php if ($row[heureduviolhour] == "12") echo $select; ?>>12</option>
</select>

: <select name="heureduviolminute">i
<option>  </option>
<option <?php if ($row[heureduviolminute] == "00") echo $select; ?>>00</option>
<option <?php if ($row[heureduviolminute] == "01") echo $select; ?>>01</option>
<option <?php if ($row[heureduviolminute] == "02") echo $select; ?>>02</option>
<option <?php if ($row[heureduviolminute] == "03") echo $select; ?>>03</option>
<option <?php if ($row[heureduviolminute] == "04") echo $select; ?>>04</option>
<option <?php if ($row[heureduviolminute] == "05") echo $select; ?>>05</option>
<option <?php if ($row[heureduviolminute] == "06") echo $select; ?>>06</option>
<option <?php if ($row[heureduviolminute] == "07") echo $select; ?>>07</option>
<option <?php if ($row[heureduviolminute] == "08") echo $select; ?>>08</option>
<option <?php if ($row[heureduviolminute] == "09") echo $select; ?>>09</option>
<option <?php if ($row[heureduviolminute] == "10") echo $select; ?>>10</option>
<option <?php if ($row[heureduviolminute] == "11") echo $select; ?>>11</option>
<option <?php if ($row[heureduviolminute] == "12") echo $select; ?>>12</option>
<option <?php if ($row[heureduviolminute] == "13") echo $select; ?>>13</option>
<option <?php if ($row[heureduviolminute] == "14") echo $select; ?>>14</option>
<option <?php if ($row[heureduviolminute] == "15") echo $select; ?>>15</option>
<option <?php if ($row[heureduviolminute] == "16") echo $select; ?>>16</option>
<option <?php if ($row[heureduviolminute] == "17") echo $select; ?>>17</option>
<option <?php if ($row[heureduviolminute] == "18") echo $select; ?>>18</option>
<option <?php if ($row[heureduviolminute] == "19") echo $select; ?>>19</option>
<option <?php if ($row[heureduviolminute] == "20") echo $select; ?>>20</option>
<option <?php if ($row[heureduviolminute] == "21") echo $select; ?>>21</option>
<option <?php if ($row[heureduviolminute] == "22") echo $select; ?>>22</option>
<option <?php if ($row[heureduviolminute] == "23") echo $select; ?>>23</option>
<option <?php if ($row[heureduviolminute] == "24") echo $select; ?>>24</option>
<option <?php if ($row[heureduviolminute] == "25") echo $select; ?>>25</option>
<option <?php if ($row[heureduviolminute] == "26") echo $select; ?>>26</option>
<option <?php if ($row[heureduviolminute] == "27") echo $select; ?>>27</option>
<option <?php if ($row[heureduviolminute] == "28") echo $select; ?>>28</option>
<option <?php if ($row[heureduviolminute] == "29") echo $select; ?>>29</option>
<option <?php if ($row[heureduviolminute] == "30") echo $select; ?>>30</option>
<option <?php if ($row[heureduviolminute] == "31") echo $select; ?>>31</option>
<option <?php if ($row[heureduviolminute] == "32") echo $select; ?>>32</option>
<option <?php if ($row[heureduviolminute] == "33") echo $select; ?>>33</option>
<option <?php if ($row[heureduviolminute] == "34") echo $select; ?>>34</option>
<option <?php if ($row[heureduviolminute] == "35") echo $select; ?>>35</option>
<option <?php if ($row[heureduviolminute] == "36") echo $select; ?>>36</option>
<option <?php if ($row[heureduviolminute] == "37") echo $select; ?>>37</option>
<option <?php if ($row[heureduviolminute] == "38") echo $select; ?>>38</option>
<option <?php if ($row[heureduviolminute] == "39") echo $select; ?>>39</option>
<option <?php if ($row[heureduviolminute] == "40") echo $select; ?>>40</option>
<option <?php if ($row[heureduviolminute] == "41") echo $select; ?>>41</option>
<option <?php if ($row[heureduviolminute] == "42") echo $select; ?>>42</option>
<option <?php if ($row[heureduviolminute] == "43") echo $select; ?>>43</option>
<option <?php if ($row[heureduviolminute] == "44") echo $select; ?>>44</option>
<option <?php if ($row[heureduviolminute] == "45") echo $select; ?>>45</option>
<option <?php if ($row[heureduviolminute] == "46") echo $select; ?>>46</option>
<option <?php if ($row[heureduviolminute] == "47") echo $select; ?>>47</option>
<option <?php if ($row[heureduviolminute] == "48") echo $select; ?>>48</option>
<option <?php if ($row[heureduviolminute] == "49") echo $select; ?>>49</option>
<option <?php if ($row[heureduviolminute] == "50") echo $select; ?>>50</option>
<option <?php if ($row[heureduviolminute] == "51") echo $select; ?>>51</option>
<option <?php if ($row[heureduviolminute] == "52") echo $select; ?>>52</option>
<option <?php if ($row[heureduviolminute] == "53") echo $select; ?>>53</option>
<option <?php if ($row[heureduviolminute] == "54") echo $select; ?>>54</option>
<option <?php if ($row[heureduviolminute] == "55") echo $select; ?>>55</option>
<option <?php if ($row[heureduviolminute] == "56") echo $select; ?>>56</option>
<option <?php if ($row[heureduviolminute] == "57") echo $select; ?>>57</option>
<option <?php if ($row[heureduviolminute] == "58") echo $select; ?>>58</option>
<option <?php if ($row[heureduviolminute] == "59") echo $select; ?>>59</option>
</select>

<select name="heureduviolampm">
<option>  </option>
<option <?php if ($row['heureduviolampm'] == "AM") echo $select; ?>>AM</option>
<option <?php if ($row['heureduviolampm'] == "PM") echo $select; ?>>PM</option>
</select><br><br>

(deprecated) Lieu du viol / Kote kadejak la fet:<br>  <select name="lieuduviol">
  <option>Selectionner / Seleksyone</option>
  <option <?php if ($row['lieuduviol'] == "Cite Soleil") echo $select; ?>>Cite Soleil</option>
  <option <?php if ($row['lieuduviol'] == "Bel Air") echo $select; ?>>Bel Air</option>
  <option <?php if ($row['lieuduviol'] == "Bicentenaire") echo $select; ?>>Bicentenaire</option>
  <option <?php if ($row['lieuduviol'] == "Carrefour") echo $select; ?>>Carrefour</option>
  <option <?php if ($row['lieuduviol'] == "Petion Ville") echo $select; ?>>Petion Ville</option>
  <option <?php if ($row['lieuduviol'] == "Croix des Bouquets / Croix des Mission") echo $select; ?>>Croix des Bouquets / Croix des Mission</option>
  <option <?php if ($row['lieuduviol'] == "Bourdon / Carnape Vert") echo $select; ?>>Bourdon / Carnape Vert</option>
  <option <?php if ($row['lieuduviol'] == "Martissant") echo $select; ?>>Martissant</option>
  <option <?php if ($row['lieuduviol'] == "Solino") echo $select; ?>>Solino</option>
  <option <?php if ($row['lieuduviol'] == "Fontamara") echo $select; ?>>Fontamara</option>
  <option <?php if ($row['lieuduviol'] == "Leogane") echo $select; ?>>Leogane</option>
  <option <?php if ($row['lieuduviol'] == "Bon Repos") echo $select; ?>>Bon Repos</option>
  <option <?php if ($row['lieuduviol'] == "Delmas") echo $select; ?>>Delmas</option>
  <option <?php if ($row['lieuduviol'] == "Carrefour Feuilles") echo $select; ?>>Carrefour Feuilles</option>
  <option <?php if ($row['lieuduviol'] == "Champs de Mars") echo $select; ?>>Champs de Mars</option>
  <option <?php if ($row['lieuduviol'] == "Autres") echo $select; ?>>Autres</option>
</select><br><br>
(deprecated) Si d'autres:<br> <p class="input">  <input type="text" name="lieudeviolautres"  maxlength="255" value="<?php echo $row['lieudeviolautres']; ?>"></p><br />

Commune:<br> <p class="input">  <input type="text" name="commune"  maxlength="255" value="<?php echo $row['commune']; ?>"></p><br />

Quartier:<br> <p class="input">  <input type="text" name="quartier"  maxlength="255" value="<?php echo $row['quartier']; ?>"></p><br />

Camp:<br> <p class="input">  <input type="text" name="camp"  maxlength="255" value="<?php echo $row['camp']; ?>"></p><br />

(deprecated) Indiquer zone ou camp préciser / Zòn oubyen kan presize:<br> <p class="input">  <input type="text" name="indiquerzone" maxlength="255"  value="<?php echo $row['indiquerzone']; ?>"></p><br />

Ki kote moun ki te fè w sa te jwenn ou? Est-ce que c'etait dans un camp? / Èske se te nan kan?<br>
<select name="kikotemoun">
<option  <?php if ($row['kikotemoun'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
  <option <?php if ($row['kikotemoun'] == "Oui / Wi") echo $select; ?>>Oui / Wi</option>
  <option <?php if ($row['kikotemoun'] == "Non / Non") echo $select; ?>>Non / Non</option>
</select><br><br>

<select name="newkikote1">

<option <?php if ($row['newkikote1'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
<option <?php if ($row['newkikote1'] == "Domisil / Domicile + Tant / Tente") echo $select; ?>>Domisil / Domicile + Tant / Tente</option>
<option <?php if ($row['newkikote1'] == "Domisil / Domicile + Lakay / Maison + Pwòp / Propre") echo $select; ?>>Domisil / Domicile + Lakay / Maison + Pwòp / Propre</option>
<option <?php if ($row['newkikote1'] == "Domisil / Domicile + Lakay / Maison + Agresè / Agresseur") echo $select; ?>>Domisil / Domicile + Lakay / Maison + Agresè / Agresseur</option>
<option <?php if ($row['newkikote1'] == "Domisil / Domicile + Lakay / Maison + Autre") echo $select; ?>>Domisil / Domicile + Lakay / Maison + Autre</option>
<option <?php if ($row['newkikote1'] == "Kote piblik / Lieu public + Kay kraze / Maison Detruite") echo $select; ?>>Kote piblik / Lieu public + Kay kraze / Maison Detruite</option>
<option <?php if ($row['newkikote1'] == "Kote piblik / Lieu public + Lari / Rue") echo $select; ?>>Kote piblik / Lieu public + Lari / Rue</option>
<option <?php if ($row['newkikote1'] == "Kote piblik / Lieu public + Lekòl / Ecole") echo $select; ?>>Kote piblik / Lieu public + Lekòl / Ecole</option>
<option <?php if ($row['newkikote1'] == "Kote piblik / Lieu public + Resto / Bar") echo $select; ?>>Kote piblik / Lieu public + Resto / Bar</option>
<option <?php if ($row['newkikote1'] == "Kote piblik / Lieu public + Twalet / Toilette") echo $select; ?>>Kote piblik / Lieu public + Twalet / Toilette</option>
<option <?php if ($row['newkikote1'] == "Kote piblik / Lieu public + Mache / Marche") echo $select; ?>>Kote piblik / Lieu public + Mache / Marche</option>
<option <?php if ($row['newkikote1'] == "Kote piblik / Lieu public + Douch / Douche") echo $select; ?>>Kote piblik / Lieu public + Douch / Douche</option>
<option <?php if ($row['newkikote1'] == "Kote piblik / Lieu public + Autre") echo $select; ?>>Kote piblik / Lieu public + Autre</option>
<option <?php if ($row['newkikote1'] == "Enstitisyon detat / Institution étatique + Biwo / Bureau") echo $select; ?>>Enstitisyon detat / Institution étatique + Biwo / Bureau</option>
<option <?php if ($row['newkikote1'] == "Enstitisyon detat / Institution étatique + Lopital / Hopital") echo $select; ?>>Enstitisyon detat / Institution étatique + Lopital / Hopital</option>
<option <?php if ($row['newkikote1'] == "Enstitisyon detat / Institution étatique + Komisaria / Commissariat") echo $select; ?>>Enstitisyon detat / Institution étatique + Komisaria / Commissariat</option>
<option <?php if ($row['newkikote1'] == "Enstitisyon detat / Institution étatique + Autre") echo $select; ?>>Enstitisyon detat / Institution étatique + Autre</option>
</select><br /><br />

Autre:<br> <p class="input"> <input
type="text" name="newkikote3" maxlength="255" value="<?php echo $row['newkikote3']; ?>" ></p><br />

(depracated) Preciser lieu / Lye presize:<br>
 <select name="preciserlieu1">
  <option <?php if ($row['preciserlieu1'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
  <option <?php if ($row['preciserlieu1'] == "Maison / Lakay") echo $select; ?>>Maison / Lakay</option>
  <option <?php if ($row['preciserlieu1'] == "La Rue / Lari") echo $select; ?>>La Rue / Lari</option>
  <option <?php if ($row['preciserlieu1'] == "Marche / Mache") echo $select; ?>>Marche / Mache</option>
  <option <?php if ($row['preciserlieu1'] == "Tente / Tant") echo $select; ?>>Tente / Tant</option>
  <option <?php if ($row['preciserlieu1'] == "L ecole / Lekòl") echo $select; ?>>L ecole / Lekòl</option>
  <option <?php if ($row['preciserlieu1'] == "Toilette / Twalet") echo $select; ?>>Toilette / Twalet</option>
  <option <?php if ($row['preciserlieu1'] == "Autre / Lot kote") echo $select; ?>>Autre / Lot kote</option>
</select><br><br>

Ki kote kadejak la te fet? Est-ce que c'etait dans un camp? / Èske se te nan kan?<br>
<select name="kikotekadejak">
<option  <?php if ($row['kikotekadejak'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
  <option <?php if ($row['kikotekadejak'] == "Oui / Wi") echo $select; ?>>Oui / Wi</option>
  <option <?php if ($row['kikotekadejak'] == "Non / Non") echo $select; ?>>Non / Non</option>
</select><br><br>
<select name="newkikote2">
<option <?php if ($row['newkikote2'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
<option <?php if ($row['newkikote2'] == "Domisil / Domicile + Tant / Tente") echo $select; ?>>Domisil / Domicile + Tant / Tente</option>
<option <?php if ($row['newkikote2'] == "Domisil / Domicile + Lakay / Maison + Pwòp / Propre") echo $select; ?>>Domisil / Domicile + Lakay / Maison + Pwòp / Propre</option>
<option <?php if ($row['newkikote2'] == "Domisil / Domicile + Lakay / Maison + Agresè / Agresseur") echo $select; ?>>Domisil / Domicile + Lakay / Maison + Agresè / Agresseur</option>
<option <?php if ($row['newkikote2'] == "Domisil / Domicile + Lakay / Maison + Autre") echo $select; ?>>Domisil / Domicile + Lakay / Maison + Autre</option>
<option <?php if ($row['newkikote2'] == "Kote piblik / Lieu public + Kay kraze / Maison Detruite") echo $select; ?>>Kote piblik / Lieu public + Kay kraze / Maison Detruite</option>
<option <?php if ($row['newkikote2'] == "Kote piblik / Lieu public + Lari / Rue") echo $select; ?>>Kote piblik / Lieu public + Lari / Rue</option>
<option <?php if ($row['newkikote2'] == "Kote piblik / Lieu public + Lekòl / Ecole") echo $select; ?>>Kote piblik / Lieu public + Lekòl / Ecole</option>
<option <?php if ($row['newkikote2'] == "Kote piblik / Lieu public + Resto / Bar") echo $select; ?>>Kote piblik / Lieu public + Resto / Bar</option>
<option <?php if ($row['newkikote2'] == "Kote piblik / Lieu public + Twalet / Toilette") echo $select; ?>>Kote piblik / Lieu public + Twalet / Toilette</option>
<option <?php if ($row['newkikote2'] == "Kote piblik / Lieu public + Mache / Marche") echo $select; ?>>Kote piblik / Lieu public + Mache / Marche</option>
<option <?php if ($row['newkikote2'] == "Kote piblik / Lieu public + Douch / Douche") echo $select; ?>>Kote piblik / Lieu public + Douch / Douche</option>
<option <?php if ($row['newkikote2'] == "Kote piblik / Lieu public + Autre") echo $select; ?>>Kote piblik / Lieu public + Autre</option>
<option <?php if ($row['newkikote2'] == "Enstitisyon detat / Institution étatique + Biwo / Bureau") echo $select; ?>>Enstitisyon detat / Institution étatique + Biwo / Bureau</option>
<option <?php if ($row['newkikote2'] == "Enstitisyon detat / Institution étatique + Lopital / Hopital") echo $select; ?>>Enstitisyon detat / Institution étatique + Lopital / Hopital</option>
<option <?php if ($row['newkikote2'] == "Enstitisyon detat / Institution étatique + Komisaria / Commissariat") echo $select; ?>>Enstitisyon detat / Institution étatique + Komisaria / Commissariat</option>
<option <?php if ($row['newkikote2'] == "Enstitisyon detat / Institution étatique + Autre") echo $select; ?>>Enstitisyon detat / Institution étatique + Autre</option>
</select><br><br>

Autre:<br> <p class="input"> <input
type="text" name="newkikote4" maxlength="255"  value="<?php echo $row['newkikote4']; ?>"></p><br />

(deprecated) Preciser lieu / Lye presize:<br>
 <select name="preciserlieu2">
  <option <?php if ($row['preciserlieu2'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
  <option <?php if ($row['preciserlieu2'] == "Maison / Lakay") echo $select; ?>>Maison / Lakay</option>
  <option <?php if ($row['preciserlieu2'] == "La Rue / Lari") echo $select; ?>>La Rue / Lari</option>
  <option <?php if ($row['preciserlieu2'] == "Marche / Mache") echo $select; ?>>Marche / Mache</option>
  <option <?php if ($row['preciserlieu2'] == "Tente / Tant") echo $select; ?>>Tente / Tant</option>
  <option <?php if ($row['preciserlieu2'] == "L ecole / Lekòl") echo $select; ?>>L ecole / Lekòl</option>
  <option <?php if ($row['preciserlieu2'] == "Toilette / Twalet") echo $select; ?>>Toilette / Twalet</option>
  <option <?php if ($row['preciserlieu2'] == "Autre / Lot kote") echo $select; ?>>Autre / Lot kote</option>
</select><br><br>

La personne qui a commis cet acte / Eske ou konnen moun ki te komet zak la?:<br>
 <select name="lapersonne">
<option  <?php if ($row['lapersonne'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
  <option <?php if ($row['lapersonne'] == "Oui / Wi") echo $select; ?>>Oui / Wi</option>
  <option <?php if ($row['lapersonne'] == "Non / Non") echo $select; ?>>Non / Non</option>
</select><br><br>


Nombre / Konbyen moun:<br><p class="input">  <input type="text" name="nombre" maxlength="255"  value="<?php echo $row['nombre']; ?>"></p><br />
Sexe / Seks:<br>  <select name="sexe">
  <option <?php if ($row['sexe'] == "Homme" || $row['sexe'] == "Homme / Gason") echo $select; ?>>Homme / Gason</option>
  <option <?php if ($row['sexe'] == "Femme" || $row['sexe'] == "Femme / Fanm") echo $select; ?>>Femme / Fanm</option>
  <option <?php if ($row['sexe'] == "Homme et Femme / Gason e Fanm") echo $select; ?>>Homme et Femme / Gason e Fanm</option>
</select><br><br>
Nombre qui a participe dans le viol / Kantite moun ki te fe kadejak la:<br>  <p class="input"><input type="text" name="nombrequiaparticipe" maxlength="255"  value="<?php echo $row['nombrequiaparticipe']; ?>"></p><br />
Adress / Adres:<br> <p class="input"> <input type="text" name="adressadres" maxlength="255"  value="<?php echo $row['adressadres']; ?>"></p><br />
Lien / Relasyon:<br> <p class="input"> <input type="text" name="lienrelasyon"  maxlength="255" value="<?php echo $row['lienrelasyon']; ?>"></p><br />

	<input type="checkbox" class ="checkbox"  name="lieninfogang" value="1" <?php if ($row['lieninfogang'] == "1") echo "checked"; ?>>Gang Arme (Expliquer) / Gang ame (Eksplike) <br />
	<input type="checkbox"  class ="checkbox" name="lieninfoinconnu" value="1" <?php if ($row['lieninfoinconnu'] == "1") echo "checked"; ?>>Inconnu / Enkoni <br />
	<input type="checkbox"  class ="checkbox" name="lieninfopolice" value="1" <?php if ($row['lieninfopolice'] == "1") echo "checked"; ?>>Police / Polisye <br />
	<input type="checkbox" class ="checkbox"  name="lieninfopreciser" value="1" <?php if ($row['lieninfopreciser'] == "1") echo "checked"; ?>>A Preciser / Presize <br />
<br><br>
A Preciser / Presize:<br> <p class="input">  <input type="text" name="apreciserpresize" maxlength="255"  value="<?php echo $row['apreciserpresize']; ?>"></p><br />

Tip dagresyon / Type d’aggressions<br />

<input type="checkbox" class ="checkbox"  name="tip1" value="1" <?php if ($row['tip1'] == "1") echo "checked"; ?>>Vyol / Viol<br />
<input type="checkbox" class ="checkbox"  name="tip2" value="1" <?php if ($row['tip2'] == "1") echo "checked"; ?>>Agresyon seksyèl /Agression sexuelle <br />
<input type="checkbox" class ="checkbox"  name="tip3" value="1" <?php if ($row['tip3'] == "1") echo "checked"; ?>>Agresyon fizik / Agression physique<br />
<input type="checkbox" class ="checkbox"  name="tip4" value="1" <?php if ($row['tip4'] == "1") echo "checked"; ?>>Deni resous / Déni de ressources, d’opportunités ou de services <br />
<input type="checkbox" class ="checkbox"  name="tip5" value="1" <?php if ($row['tip5'] == "1") echo "checked"; ?>>Abi sikolojik, emosyonèl / Abus psychologique, émotionnel <br />
<br><br>

(depracated) Type d'agression / Ki jan dagresyon:<br />

<input type="checkbox"  class ="checkbox"  name="typedagressionmeutre" value="1" <?php if ($row['typedagressionmeutre'] == "1") echo "checked"; ?>>Meutre / Asasina <br />
<input type="checkbox"  class ="checkbox"  name="typedagressiondisparition" value="1" <?php if ($row['typedagressiondisparition'] == "1") echo "checked"; ?>>Disparition / Disparisyon (Lot moun) <br />
<input type="checkbox"  class ="checkbox"  name="typedagressiondestruction" value="1" <?php if ($row['typedagressiondestruction'] == "1") echo "checked"; ?>>Destruction des biens (indice / Pillage / etc...) / Destriksyon byen (Dife / Piye) <br />
<input type="checkbox" class ="checkbox"   name="typedagressionarrestation" value="1" <?php if ($row['typedagressionarrestation'] == "1") echo "checked"; ?>>Arrestation / Arestasyon <br />
<input type="checkbox"  class ="checkbox"  name="typedagressionkidnapping" value="1" <?php if ($row['typedagressionkidnapping'] == "1") echo "checked"; ?>>Kidnaping / Kidnapin <br />
<input type="checkbox"  class ="checkbox"  name="typedagressionmenace" value="1" <?php if ($row['typedagressionmenace'] == "1") echo "checked"; ?>>Menace / Menas <br />
<input type="checkbox"  class ="checkbox"  name="typedagressionviol" value="1" <?php if ($row['typedagressionviol'] == "1") echo "checked"; ?>>Viol / Vyol <br />
<input type="checkbox"  class ="checkbox"  name="typedagressionassaut" value="1" <?php if ($row['typedagressionassaut'] == "1") echo "checked"; ?>>Assaut / Atak <br />
<br><br>
Comment as-tu pu identifier le(s) agresseur(s)? Koman ou te idantifye agrese a.:<br><p class="input"><textarea name="comment" rows="7" cols="30"><?php echo $row['comment']; ?></textarea></p><br />
Ou est-ce qu-il est? Sont bases? / Ki kote yo gen baz yo?: <br><p class="input"><textarea name="ouestcequil" rows="7" cols="30"><?php echo $row['ouestcequil']; ?></textarea></p><br />
Quel uniforme est-ce qu-il(s) portait(ent)? Ki rad kit te sou yo?:<br> <p class="input"><textarea name="queluniforme" rows="7" cols="30"><?php echo $row['queluniforme']; ?></textarea></p><br />
Est-ce qu-il(s) portait(ent) des masques (Cagoules)? Eske yo te maske?:<br>  <select name="portaitdesmasques">
<option  <?php if ($row['portaitdesmasques'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
  <option <?php if ($row['portaitdesmasques'] == "Oui / Wi") echo $select; ?>>Oui / Wi</option>
  <option <?php if ($row['portaitdesmasques'] == "Non / Non") echo $select; ?>>Non / Non</option>
</select><br><br>
Est-ce qu-il(s) avait(ent) des armes? / Eske yo te gen zam?:<br>  <select name="desarmes">
<option  <?php if ($row['desarmes'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
    <option <?php if ($row['desarmes'] == "Oui / Wi") echo $select; ?>>Oui / Wi</option>
  <option <?php if ($row['desarmes'] == "Non / Non") echo $select; ?>>Non / Non</option>
</select><br><br>
Quel type d'arme? / Ki kalite zam?:<br><p class="input"><input type="text" name="plan2" maxlength="255"  value="<?php echo $row['plan2']; ?>"></p><br />
Est-ce qu-il y avait d'autres personnes qui ont ete violes? / Eske gen lot moun ki te subi kadejak?:<br> <select name="sexe2">
<option  <?php if ($row['sexe2'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
    <option <?php if ($row['sexe2'] == "Oui / Wi") echo $select; ?>>Oui / Wi</option>
  <option <?php if ($row['sexe2'] == "Non / Non") echo $select; ?>>Non / Non</option>
</select><br><br>
Est-ce qu'il a d'autres victimes? / eske gen lot moun ki viktim?:<br>  <select name="sexe3">
<option  <?php if ($row['sexe3'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
    <option <?php if ($row['sexe3'] == "Oui / Wi") echo $select; ?>>Oui / Wi</option>
  <option <?php if ($row['sexe3'] == "Non / Non") echo $select; ?>>Non / Non</option>
</select><br><br>
Si oui, Nom, Age, Relation avec victimes/ Primaire / Si wi, bay, non ak laj epi relasyon w ak viktim lan.:<br><p class="input"><textarea name="siouinom" rows="7" cols="30"><?php echo $row['siouinom']; ?></textarea></p><br />
La raison pour laquelle tu as ete siblee. / Rezon kif e ou te sible.:<br><p class="input"><textarea name="laraison" rows="7" cols="30"><?php echo $row['laraison']; ?></textarea></p><br />
<div class="content">
<h1>Temoins / Temwen</h1>
  </div>
Est-ce qu'il y avait des temoins? / eske te gen temwen?:<br>  <select name="temoins">
<option  <?php if ($row['temoins'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
    <option <?php if ($row['temoins'] == "Oui / Wi") echo $select; ?>>Oui / Wi</option>
  <option <?php if ($row['temoins'] == "Non / Non") echo $select; ?>>Non / Non</option>
</select><br><br>
Quels sont les temoins? / Kiles temwen yo ye?:<br><p class="input"><input type="text" name="temoins2" maxlength="255"  value="<?php echo $row['temoins2']; ?>"></p><br />
Comment est-ce qu-ils (elles) peuvent etre contactes? / Koman ou ka kontakte yo?:<br> <p class="input"> <input type="text" name="contactes"  maxlength="255" value="<?php echo $row['contactes']; ?>"></p><br />
Qui etait mis au courant? / Ki moun ki te konn sa ki te pase a ?:<br>  <p class="input"><input type="text" name="courant" maxlength="255"  value="<?php echo $row['courant']; ?>"></p><br />
Est-ce que tu as motive les autorites? Eske ou te aveti leta? :<br>  <select name="autorites">
<option  <?php if ($row['autorites'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
    <option <?php if ($row['autorites'] == "Oui / Wi") echo $select; ?>>Oui / Wi</option>
  <option <?php if ($row['autorites'] == "Non / Non") echo $select; ?>>Non / Non</option>
</select><br><br>

Quel type d'autorite? / Ki biwo leta? : <br>

	<input type="checkbox" class ="checkbox"  name="typedautoritepolice" value="1" <?php if ($row['typedautoritepolice'] == "1") echo "checked"; ?>>La Police / La polis <br />
	<input type="checkbox" class ="checkbox"  name="typedautoriteCASEC" value="1" <?php if ($row['typedautoriteCASEC'] == "1") echo "checked"; ?>>CASEC / KAZEK <br />
	<input type="checkbox"  class ="checkbox" name="typedautoriteJuge" value="1" <?php if ($row['typedautoriteJuge'] == "1") echo "checked"; ?>>Juge de paix / Jij de pe <br />
	<input type="checkbox" class ="checkbox"  name="typedautoriteMagistrat" value="1" <?php if ($row['typedautoriteMagistrat'] == "1") echo "checked"; ?>>Magistrat / Majistra <br />
	<input type="checkbox" class ="checkbox"  name="typedautoriteAutre" value="1" <?php if ($row['typedautoriteAutre'] == "1") echo "checked"; ?>>Autre / Lot (Preciser) <br />
<br><br>
Si d'autres:<br> <p class="input"> <input type="text" name="typedautoritedautre"  maxlength="255" value="<?php echo $row['typedautoritedautre']; ?>"></p><br />
<div class="content">
<h1> Situation Personnelle / Sitiyasyon Pesonel </h1>
</div>
Est-ce que tu as recherche l'assistance medicale? / Eske ou te al kay dokte?:<br> <select name="medicale">
<option  <?php if ($row['medicale'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
    <option <?php if ($row['medicale'] == "Oui / Wi") echo $select; ?>>Oui / Wi</option>
  <option <?php if ($row['medicale'] == "Non / Non") echo $select; ?>>Non / Non</option>
</select><br><br>
Ou / Ki kote ?<p class="input"><input type="text" name="oukikote"  maxlength="255" value="<?php echo $row['oukikote']; ?>"></p><br />
Besoins medicaux / Bezwen medikal: <br><p class="input"><textarea name="besoins" rows="7" cols="30"><?php echo $row['besoins']; ?></textarea></p><br />
Dommage Materiel / Domaj materyel: <br><p class="input"><textarea name="dommage" rows="7" cols="30"><?php echo $row['dommage']; ?></textarea></p><br />
Est-ce que vous avez laisse votre maison? esche ou kite kay la:<br> <select name="maison">
<option  <?php if ($row['maison'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
    <option <?php if ($row['maison'] == "Oui / Wi") echo $select; ?>>Oui / Wi</option>
  <option <?php if ($row['maison'] == "Non / Non") echo $select; ?>>Non / Non</option>
</select><br />
Pourquoi? / Poukisa?:<br>  <select name="organization3">
<option  <?php if ($row['organization3'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
    <option <?php if ($row['organization3'] == "Persecution / Pesekisyon") echo $select; ?>>Persecution / Pesekisyon</option>
  <option <?php if ($row['organization3'] == "Peur / Pe") echo $select; ?>>Peur / Pe</option>
  <option <?php if ($row['organization3'] == "Honte / Wont") echo $select; ?>>Honte / Wont</option>
</select><br />
Quelles possibilites avez-vous? / Ki mwayen ou genyen?: <br><p class="input"><textarea name="dommage2" rows="7" cols="30"><?php echo $row['dommage2']; ?></textarea></p><br />
Qu'est-ce qui serait la meilleure solution pour vous? / Kisa ki ta pi bon pou ou? : <br><p class="input"><textarea name="dommage3" rows="7" cols="30"><?php echo $row['dommage3']; ?></textarea></p><br />
Est-ce que vous avez une famille en province? / Eske ou gen fanmi an pwovens?: <br> <select name="province">
<option  <?php if ($row['province'] == "Selectionner / Seleksyone") echo $select; ?>>Selectionner / Seleksyone</option>
    <option <?php if ($row['province'] == "Oui / Wi") echo $select; ?>>Oui / Wi</option>
  <option <?php if ($row['province'] == "Non / Non") echo $select; ?>>Non / Non</option>
</select><br />

Note: existing files in this dossier will be overwritten without prompting<br>
Note: files are not type checked. Uploading the wrong type of file will cause strange but potentially hilarious misbehavior<br>
Fichier 1 (PDF):<br /><input name="userfile" type="file" id="userfile">
Fichier 2 (audio):<br /><input name="userfile2" type="file" id="userfile2">


<p class="button"><button name="submit" type="submit">Edit Record</button></p>
</form>
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
