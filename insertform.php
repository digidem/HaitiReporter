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
	<li class="selected"><a href="insertform.php">Nouvo Dosye</a></li>
	<li><a href="search.php">Rechèch</a></li>
	<li><a href="monthlyform.php">Rapò Mansyèl</a></li>
	<li><a href="admin.php">Admin</a></li>
</ul>
</div>


<div id="content">
	<div class="article">

		<h1>Welcome to Haiti Reporter</h1>
		<p>This is the "Insert New" page. To create a new
		record, type the information into this form and click
		the "Create New Record" buttom at the bottom of the page.</p>
        </div>
    </div>
<div id="panel">
  <div class="right">
<form name="form" action="insert.php" method="post" accept-charset="UTF-8" enctype="multipart/form-data">

<h1>Victim Information Form</h1><br />
Date / Dat:<br />
<table border=0>
 <tr><td> 
Mois / Mwa:</td><td> <select name="month">
<option>Selectionner / Seleksyone</option>
<option>01 janvier</option>
<option>02 février</option>
<option>03 mars</option>
<option>04 avril</option>
<option>05 mai</option>
<option>06 juin</option>
<option>07 juillet</option>
<option>08 août</option>
<option>09 septembre</option>
<option>10 octobre</option>
<option>11 novembre</option>
<option>12 décembre</option>
</select></td></tr><tr><td>
Jour / Jou:</td><td>
<select name="day">
<option>Selectionner / Seleksyone</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
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
<select name="year">
<option>Selectionner / Seleksyone</option>
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
</select></td></tr></table><br />

<label for="interview">Interview / Entevyou:</label> <p
class="input"><input type="text" name="interview" maxlength="255" ></p><br />
Organization (MSF, KOFAVIV, Hopital Generale, APROSIFA, Autre):<br>
<select name="organization1">
<option>Selectionner / Seleksyone</option>
 <option>MSF</option>
 <option>KOFAVIV</option>
 <option>Hopital Generale</option>
 <option>APROSIFA</option>
 <option>Autre</option>
</select><br> <br>
Si d'autres:<br> <p class="input"> <input type="text"
name="organizationother" maxlength="255" ></p><br />
Comment est-ce que vous avez trouvé KOFAVIV? / Kijan ou te jwenn KOFAVIV?:<br>
	<label for="KOFAVIVcentre"><input type="checkbox"  class ="checkbox" name="KOFAVIVcentre" value="1"> Centre d'appel / Sant dapel</label><br />
	<label for="KOFAVIVsant"><input type="checkbox"  class ="checkbox" name="KOFAVIVsant" value="1"> Agent / Ajan</label><br />
	<label for="KOFAVIVminustah"><input type="checkbox"  class ="checkbox" name="KOFAVIVminustah" value="1"> Institution / Institisyon (MINUSTAH)</label><br />
	<label for="KOFAVIVhopital"><input type="checkbox"  class ="checkbox" name="KOFAVIVhopital" value="1"> Institution / Institisyon (Hopital Generale)</label><br />
	<label for="KOFAVIVcommissariat"><input type="checkbox"  class ="checkbox" name="KOFAVIVcommissariat" value="1"> Institution / Institisyon (Commissariat) </label><br />
	<label for="KOFAVIVautre"><input type="checkbox"  class ="checkbox" name="KOFAVIVautre" value="1"> Autre</label><br />

Si d'autres:<br> <p class="input"> <input type="text"
name="KOFAVIVautre2" maxlength="255" ></p><br />

Nom de Famille / Siyati fanmi:<br><p class="input">  <input
type="text" name="familyname" maxlength="255" ></p><br />
Prenom / Non:<br> <p class="input"> <input type="text"
name="name" maxlength="255" ></p><br />
Date de naissance / Dat ou fet:
<table border=0><tr><td>
Mois / Mwa:</td><td> <select name="birthmonth">
  <option>Selectionner / Seleksyone</option>
<option>01 janvier</option>
<option>02 février</option>
<option>03 mars</option>
<option>04 avril</option>
<option>05 mai</option>
<option>06 juin</option>
<option>07 juillet</option>
<option>08 août</option>
<option>09 septembre</option>
<option>10 octobre</option>
<option>11 novembre</option>
<option>12 décembre</option>
</select>
</td></tr><tr><td>
Jour / Jou:</td><td><select name="birthday">
  <option>Selectionner / Seleksyone</option>

<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
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

Lieu de naissance / Kote ou fet:<br> <p class="input"> <input
type="text" name="lieudenaissance" maxlength="255" ></p><br />
Adresse / Adres:<br> <p class="input"> <input type="text"
name="adresse" maxlength="255" ></p><br />
Situation Matrimoniale / Sitiyasyon Matrimonyal:<br>
<select name="matrimoniale">
  <option>Selectionner / Seleksyone</option>
<option>Celibataire / Selibaté</option>
<option>Placée / Plase</option>
<option>Mariée / Marye</option>
<option>Divorcée / Divòse</option>
</select><br>
Numero de telephone / Nimewo telefon:<br> <p class="input"> <input
type="text" name="numerodetelephone" maxlength="255" ></p><br />
Profession / Pwofesyon:<br> <p class="input"> <input type="text"
name="profession" maxlength="255" ></p><br />
Religion / Relijyon:<br> <p class="input"> <input type="text"
name="religion" maxlength="255" ></p><br />
Organization - Association / Oganizasyon - Asosyasyon:<br> <p
class="input"> <input type="text" name="organization" maxlength="255" ></p><br />
Statut / Stati:<br> <p class="input"> <input type="text"
name="statut" maxlength="255" ></p><br />
Date et Heure du viol / Dat ak le kadejak la fet:

<table border=0><tr><td>
Mois / Mwa:</td><td> <select name="violmonth">
  <option>Selectionner / Seleksyone</option>
<option>01 janvier</option>
<option>02 février</option>
<option>03 mars</option>
<option>04 avril</option>
<option>05 mai</option>
<option>06 juin</option>
<option>07 juillet</option>
<option>08 août</option>
<option>09 septembre</option>
<option>10 octobre</option>
<option>11 novembre</option>
<option>12 décembre</option>
</select>
</td></tr><tr><td>
Jour / Jou:</td><td><select name="violday">
  <option>Selectionner / Seleksyone</option>

<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
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
<select name="violyear">
<option>Selectionner / Seleksyone</option>
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

Heure du viol / Lé kadejak la fet:<br />  <select name="heureduviol">
  <option>Selectionner / Seleksyone</option>
<option>Matin / Maten</option>
<option>Aprés-midi / Apremidi</option>
<option>Soir / Aswe</option>
<option>Nuit / Nwit</option>
</select><br><br>

Moment du viol:<select name="heureduviolhour">
<option>  </option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
</select>

: <select name="heureduviolminute">
<option>  </option>
<option>00</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
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
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
</select>

<select name="heureduviolampm">
<option>  </option>
<option>AM</option>
<option>PM</option>
</select><br><br>

Commune:<br> <p class="input"> <input
type="text" name="commune" maxlength="255" ></p><br />

Quartier:<br> <p class="input"> <input
type="text" name="quartier" maxlength="255" ></p><br />

Camp:<br> <p class="input"> <input
type="text" name="camp" maxlength="255" ></p><br />

(deprecated) Indiquer zone ou camp préciser / Zòn oubyen kan presize:<br> <p class="input"> <input
type="text" name="indiquerzone" maxlength="255" ></p><br />

Ki kote moun ki te fè w sa te jwenn ou? Est-ce que c'etait dans un camp? / Èske se te nan kan?<br>
<select name="kikotemoun">
<option>Selectionner / Seleksyone</option>
  <option>Oui / Wi</option>
  <option>Non / Non</option>
</select><br /><br />

<select name="newkikote1">
<option>Selectionner / Seleksyone</option>
<option>Domisil / Domicile + Tant / Tente</option>
<option>Domisil / Domicile + Lakay / Maison + Pwòp / Propre</option>
<option>Domisil / Domicile + Lakay / Maison + Agresè / Agresseur</option>
<option>Domisil / Domicile + Lakay / Maison + Autre</option>
<option>Kote piblik / Lieu public + Kay kraze / Maison Detruite</option>
<option>Kote piblik / Lieu public + Lari / Rue</option>
<option>Kote piblik / Lieu public + Lekòl / Ecole</option>
<option>Kote piblik / Lieu public + Resto / Bar</option>
<option>Kote piblik / Lieu public + Twalet / Toilette</option>
<option>Kote piblik / Lieu public + Mache / Marche</option>
<option>Kote piblik / Lieu public + Douch / Douche</option>
<option>Kote piblik / Lieu public + Autre</option>
<option>Enstitisyon detat / Institution étatique + Biwo / Bureau</option>
<option>Enstitisyon detat / Institution étatique + Lopital / Hopital</option>
<option>Enstitisyon detat / Institution étatique + Komisaria / Commissariat</option>
<option>Enstitisyon detat / Institution étatique + Autre</option>
</select><br /><br />

Autre:<br> <p class="input"> <input
type="text" name="newkikote3" maxlength="255" ></p><br />


(deprecated) Preciser lieu / Lye presize:<br>
 <select name="preciserlieu1">
  <option>Selectionner / Seleksyone</option>
  <option>Maison / Lakay</option>
  <option>La Rue / Lari</option>
  <option>Marche / Mache</option>
  <option>Tente / Tant</option>
  <option>L ecole / Lekòl</option>
  <option>Toilette / Twalet</option>
  <option>Autre / Lot kote</option>
</select><br /><br />

Ki kote kadejak la te fet? Est-ce que c'etait dans un camp? / Èske se te nan kan?<br>
<select name="kikotekadejak">
<option>Selectionner / Seleksyone</option>
  <option>Oui / Wi</option>
  <option>Non / Non</option>
</select><br /><br />

<select name="newkikote2">
<option>Selectionner / Seleksyone</option>
<option>Domisil / Domicile + Tant / Tente</option>
<option>Domisil / Domicile + Lakay / Maison + Pwòp / Propre</option>
<option>Domisil / Domicile + Lakay / Maison + Agresè / Agresseur</option>
<option>Domisil / Domicile + Lakay / Maison + Autre</option>
<option>Kote piblik / Lieu public + Kay kraze / Maison Detruite</option>
<option>Kote piblik / Lieu public + Lari / Rue</option>
<option>Kote piblik / Lieu public + Lekòl / Ecole</option>
<option>Kote piblik / Lieu public + Resto / Bar</option>
<option>Kote piblik / Lieu public + Twalet / Toilette</option>
<option>Kote piblik / Lieu public + Mache / Marche</option>
<option>Kote piblik / Lieu public + Douch / Douche</option>
<option>Kote piblik / Lieu public + Autre</option>
<option>Enstitisyon detat / Institution étatique + Biwo / Bureau</option>
<option>Enstitisyon detat / Institution étatique + Lopital / Hopital</option>
<option>Enstitisyon detat / Institution étatique + Komisaria / Commissariat</option>
<option>Enstitisyon detat / Institution étatique + Autre</option>
</select><br /><br />

Autre:<br> <p class="input"> <input
type="text" name="newkikote4" maxlength="255" ></p><br />

(deprecated) Preciser lieu / Lye presize:<br>
 <select name="preciserlieu2">
  <option>Selectionner / Seleksyone</option>
  <option>Maison / Lakay</option>
  <option>La Rue / Lari</option>
  <option>Marche / Mache</option>
  <option>Tente / Tant</option>
  <option>L ecole / Lekòl</option>
  <option>Toilette / Twalet</option>
  <option>Autre / Lot kote</option>
</select><br /><br />


La personne qui a commis cet acte / Eske ou konnen moun ki te komet zak la?:<br><select name="lapersonne">
<option>Selectionner / Seleksyone</option>
  <option>Oui / Wi</option>
  <option>Non / Non</option>
</select><br /><br />

Nombre / Konbyen moun:<br> <p class="input"> <input type="text"
name="nombre" maxlength="255" ></p><br />
Sexe / Seks:<br>  <select name="sexe">
 <option>Selectionner / Seleksyone</option>
 <option>Homme / Gason</option>
 <option>Femme / Fanm</option>
 <option>Homme et Femme / Gason e Fanm</option>
</select><br /> <br />
Nombre qui a participe dans le viol / Kantite moun ki te fe kadejak
la:<br> <p class="input"> <input type="text"
name="nombrequiaparticipe" maxlength="255" ></p><br />
Adress / Adres:<br> <p class="input"> <input type="text"
name="adressadres" maxlength="255" ></p><br />
Lien / Relasyon:<br> <p class="input"> <input type="text"
name="lienrelasyon" maxlength="255" ></p><br />
Check all that apply:<br />

    
	<label for="lieninfogang"><input type="checkbox"  class ="checkbox" name="lieninfogang" value="1" />Gang Arme
	(Expliquer) / Gang ame (Eksplike)</label><br />
	<label for="lieninfoconnu"><input type="checkbox"  class ="checkbox" name="lieninfoinconnu" value="1" />Inconnu
	/ Enkoni</label><br />
	<label for="lieninfopolice"><input type="checkbox"  class ="checkbox" name="lieninfopolice" value="1" />Police
	/ Polisye</label><br />
	<label for="lieninfopreciser"><input type="checkbox"  class ="checkbox" name="lieninfopreciser" value="1">A
	Preciser / Presize</label><br />
    

<br />Si A Preciser / Presize:<br> <p class="input"> <input type="text"
	name="apreciserpresize" maxlength="255" ></p><br />

Tip dagresyon / Type d’aggressions<br />

<input type="checkbox" class ="checkbox"  name="tip1" value="1">Vyol / Viol<br />
<input type="checkbox" class ="checkbox"  name="tip2" value="1">Agresyon seksyèl /Agression sexuelle <br />
<input type="checkbox" class ="checkbox"  name="tip3" value="1">Agresyon fizik / Agression physique<br />
<input type="checkbox" class ="checkbox"  name="tip4" value="1">Deni resous / Déni de ressources, d’opportunités ou de services <br />
<input type="checkbox" class ="checkbox"  name="tip5" value="1">Abi sikolojik, emosyonèl / Abus psychologique, émotionnel <br />
<br><br>

(deprecated, use for old records only) Type d'agression / Ki jan dagresyon:<br />

<input type="checkbox" class ="checkbox"  name="typedagressionmeutre" value="1">Meutre / Asasina <br /><input type="checkbox"  class ="checkbox" name="typedagressiondisparition" value="1">Disparition / Disparisyon (Lot moun) <br />
<input type="checkbox"  class ="checkbox" name="typedagressiondestruction" value="1">Destruction des biens (indice / Pillage / etc...) / Destriksyon byen (Dife / Piye) <br />
<input type="checkbox" class ="checkbox"  name="typedagressionarrestation" value="1">Arrestation / Arestasyon <br />
<input type="checkbox"  class ="checkbox" name="typedagressionkidnapping" value="1">Kidnaping / Kidnapin <br />
<input type="checkbox"  class ="checkbox" name="typedagressionmenace" value="1">Menace / Menas <br />
<input type="checkbox"  class ="checkbox" name="typedagressionviol" value="1">Viol / Vyol <br />
<input type="checkbox"  class ="checkbox" name="typedagressionassaut" value="1">Assaut / Atak <br />
<br><br>
Comment as-tu pu identifier le(s) agresseur(s)? Koman ou te idantifye
agrese a.:<br><p class="input"> <textarea name="comment" rows="7"
cols="30"></textarea></p><br />
Ou est-ce qu-il est? Sont bases? / Ki kote yo gen baz yo?: <br><p
class="input"><textarea name="ouestcequil" rows="7"
cols="30"></textarea></p><br />
Quel uniforme est-ce qu-il(s) portait(ent)? Ki rad kit te sou
yo?:<br><p class="input"> <textarea name="queluniforme" rows="7"
cols="30"></textarea></p><br />
Est-ce qu-il(s) portait(ent) des masques (Cagoules)? Eske yo te
maske?:<br />  <select name="portaitdesmasques">
<option>Selectionner / Seleksyone</option>
  <option>Oui / Wi</option>
  <option>Non / Non</option>
</select><br /><br />
Est-ce qu-il(s) avait(ent) des armes? / Eske yo te gen zam?:<br>  <select name="desarmes">
<option>Selectionner / Seleksyone</option>
  <option>Oui / Wi</option>
  <option>Non / Non</option>
</select><br /><br />
Quel type d'arme? / Ki kalite zam?:<br><p class="input">  <input
type="text" name="plan2" maxlength="255" ></p><br />
Est-ce qu-il y avait d'autres personnes qui ont ete violes? / Eske gen lot moun ki te subi kadejak?:<br> <select name="sexe2">
<option>Selectionner / Seleksyone</option>
  <option>Oui / Wi</option>
  <option>Non / Non</option>
</select><br /><br />
Est-ce qu'il a d'autres victimes? / eske gen lot moun ki viktim?:<br>  <select name="sexe3">
<option>Selectionner / Seleksyone</option>
  <option>Oui / Wi</option>
  <option>Non / Non</option>
</select><br /><br />
Si oui, Nom, Age, Relation avec victimes/ Primaire / Si wi, bay, non
ak laj epi relasyon w ak viktim lan.:<br><p class="input"><textarea
name="siouinom" rows="7" cols="30"></textarea></p><br />
La raison pour laquelle tu as ete siblee. / Rezon kif e ou te sible.:<br><p class="input"><textarea name="laraison" rows="7" cols="30"></textarea></p><br>
<div class="content">
<h1>Temoins / Temwen</h1><br />
  </div>
Est-ce qu'il y avait des temoins? / eske te gen temwen?:<br>  <select name="temoins">
<option>Selectionner / Seleksyone</option>
  <option>Oui / Wi</option>
  <option>Non / Non</option>
</select><br /><br />
Quels sont les temoins? / Kiles temwen yo ye?:<br> <p class="input">
<input type="text" name="temoins2" maxlength="255" ></p><br />
Comment est-ce qu-ils (elles) peuvent etre contactes? / Koman ou ka
kontakte yo?:<br> <p class="input"> <input type="text"
name="contactes" maxlength="255" ></p><br />
Qui etait mis au courant? / Ki moun ki te konn sa ki te pase a ?:<br>
<p class="input"> <input type="text" name="courant" maxlength="255" ></p><br />
Est-ce que tu as motive les autorites? Eske ou te aveti leta? :<br>  <select name="autorites">
<option>Selectionner / Seleksyone</option>
  <option>Oui / Wi</option>
  <option>Non / Non</option>
</select><br /><br />

Quel type d'autorite? / Ki biwo leta? : <br>

	<input type="checkbox"  class ="checkbox" name="typedautoritepolice" value="1">La Police / La polis <br />
	<input type="checkbox"  class ="checkbox" name="typedautoriteCASEC" value="1">CASEC / KAZEK <br />
	<input type="checkbox"  class ="checkbox" name="typedautoriteJuge" value="1">Juge de paix / Jij de pe <br />
	<input type="checkbox"  class ="checkbox" name="typedautoriteMagistrat" value="1">Magistrat / Majistra <br />
	<input type="checkbox"  class ="checkbox" name="typedautoriteAutre" value="1">Autre / Lot (Preciser) <br />
<br />
Si d'autres:<br>  <p class="input"><input type="text"
	name="typedautoritedautre" maxlength="255" ></p><br />
<div class="content">
<h1> Situation Personnelle / Sitiyasyon Pesonel </h1><br />
</div>
Est-ce que tu as recherche l'assistance medicale? / Eske ou te al kay dokte?:<br> <select name="medicale">
<option>Selectionner / Seleksyone</option>
  <option>Oui / Wi</option>
  <option>Non / Non</option>
</select><br /><br />
Ou / Ki kote ?<p class="input"><input type="text"
	name="oukikote" maxlength="255" ></p><br />
Besoins medicaux / Bezwen medikal: <br><p class="input"><textarea
	name="besoins" rows="7" cols="30"></textarea></p><br />
Dommage Materiel / Domaj materyel: <br><p class="input"><textarea
	name="dommage" rows="7" cols="30"></textarea></p><br />
Est-ce que vous avez laisse votre maison? esche ou kite kay la:<br> <select name="maison">
<option>Selectionner / Seleksyone</option>
  <option>Oui / Wi</option>
  <option>Non / Non</option>
</select><br /><br />
Pourquoi? / Poukisa?:<br>  <select name="organization3">
<option>Selectionner / Seleksyone</option>
  <option>Persecution / Pesekisyon</option>
  <option>Peur / Pe</option>
  <option>Honte / Wont</option>
</select><br /><br />
Quelles possibilites avez-vous? / Ki mwayen ou genyen?: <br><p
	class="input"><textarea name="dommage2" rows="7"
	cols="30"></textarea></p><br />
Qu'est-ce qui serait la meilleure solution pour vous? / Kisa ki ta pi
	bon pou ou? : <br><p class="input"><textarea name="dommage3"
	rows="7" cols="30"></textarea></p><br />
Est-ce que vous avez une famille en province? / Eske ou gen fanmi an pwovens?: <br> <select name="province">
<option>Selectionner / Seleksyone</option>
  <option>Oui / Wi</option>
  <option>Non / Non</option>
</select><br /><br />
Fichier 1 (PDF):<br /><input name="userfile" type="file" id="userfile">
Fichier 2 (audio):<br /><input name="userfile2" type="file" id="userfile2">

<p class="button"><button name="submit" type="submit">Submit New Record</button></p>

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
