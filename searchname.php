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

            <h1>Search Results</h1>
        </div>
    </div>
<div id="panel">
  <div class="right">

<?php
require_once 'login.php';

  // Get the search variable from URL

  $var = @$_GET['q'] ;
  $s = @$_GET['s'];
  $trimmed = trim($var); //trim whitespace from the stored variable
// $trimmed = mysql_real_escape_string($trimmed); //prevent SQL injection attack
// rows to return
$limit=100; 

// check for an empty string and display a message.
if ($trimmed == "")
  {
    echo "<h4>Resilta entwouvab</h4>"; // Result not found
    echo "<p><a href=search.php>Eseye Ankò</a></p>"; // Search again
    echo "<p>You left the search box empty.</p>";
echo <<<_END
</div>
    </div>
    <div class="divider"></div>

	<div class="footer">
<p><a href="http://digital-democracy.org"> Digital Democracy</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons License</a>.<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a>
	</div>

</div>

</body>
</html>
_END;
exit;
  }
require_once 'login.php';
 mysql_connect(localhost, $username, $password);
 @mysql_select_db($database) or die("Unable to select database");

// establish permissions for user logged in
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysql_query($query) or die("Couldn't execute query");
$row = mysql_fetch_array($result);
$deletepeople	= $row['deletepeople'];
$deleteusers	= $row['deleteusers'];
 
// Build SQL Query  
$query = "select * from people where name like \"%$trimmed%\" "; 
// EDIT HERE and specify your table and field names for the SQL query

 $numresults=mysql_query($query);
 $numrows=mysql_num_rows($numresults);

// If we have no results, offer a google search as an alternative

if ($numrows == 0)
  {
    echo "<h4>Resilta entwouvab</h4>"; // Result not found
    echo "<p><a href=search.php>Eseye Ankò</a></p>"; // Search again
}

// next determine if s has been passed to script, if not use 0
  if (empty($s)) {
  $s=0;
  }

// get results
  $query .= " limit $s,$limit";
  $result = mysql_query($query) or die("Couldn't execute query");

// display what the person searched for
echo "<p>You searched the first name field for: &quot;" . $var . "&quot;</p><br />";

// begin to show results set
$count = 1 + $s ;

// now you can display the results returned
  while ($row= mysql_fetch_array($result)) {
  $title = $row["name"] . " " . $row["familyname"];
$name = $row["name"];
$familyname = $row["familyname"];
$birthday = $row["birthday"];
$birthmonth = $row["birthmonth"];
$birthyear = $row["birthyear"];
$id = $row["id"];
  echo "<fieldset><legend><h1>$count.)&nbsp;$title ($birthmonth/$birthday/$birthyear)</h1></legend> " ;
if($deletepeople==1 || $deleteusers==1)
{
	  echo <<<_END
<table border=0>
  <tr>

<td>
<form action="view.php" method="post">
<input type="hidden" name="view" value="yes" />
<input type="hidden" name="id" value=$id />
<p class="button"><button name="submit" type="submit">Revize</button></p>
</form>
</td>

<td>
<form action="update.php" method="post">
<input type="hidden" name="update" value="yes" />
<input type="hidden" name="id" value=$id />
<p class="button"><button name="Update" type="submit">Modifye</button></p>
</form>
</td>

<td>
<form action="deleteaction.php" method="post">
<input type="hidden" name="delete" value="yes" />
<input type="hidden" name="id" value=$id />
<input type="hidden" name="name" value=$name />
<input type="hidden" name="familyname" value=$familyname />
<p class="button"><button name="delete" type="submit">Efase</button></p>
</form>
</td>

</tr></table><br /></fieldset><br /><br />
_END;
}
else
{
	  echo <<<_END
<table border=0>
  <tr>

<td>
<form action="view.php" method="post">
<input type="hidden" name="view" value="yes" />
<input type="hidden" name="id" value=$id />
<p class="button"><button name="submit" type="submit">Revize</button></p>
</form>
</td>

</tr></table><br /></fieldset><br /><br />
_END;
}
 $count++ ;
  }

$currPage = (($s/$limit) + 1);

//break before paging
  echo "<br />";

  // next we need to do the links to other results
  if ($s>=1) { // bypass PREV link if s is 0
  $prevs=($s-$limit);
  print "&nbsp;<a href=\"$PHP_SELF?s=$prevs&q=$var\">&lt;&lt; 
  Précédent</a>&nbsp&nbsp;"; // Previous = Précédent
  }

// calculate number of pages needing links
  $pages=intval($numrows/$limit);

// $pages now contains int of pages needed unless there is a remainder from division

  if ($numrows%$limit) {
  // has remainder so add one page
  $pages++;
  }

// check to see if last page
  if (!((($s+$limit)/$limit)==$pages) && $pages!=1) {

  // not last page so give NEXT link
  $news=$s+$limit;
  if($numrows!=0)
    echo "&nbsp;<a href=\"$PHP_SELF?s=$news&q=$var\">Suivant &gt;&gt;</a>"; // Suivant = Next
  }

$a = $s + ($limit) ;
  if ($a > $numrows) { $a = $numrows ; }
  $b = $s + 1 ;
if ($a !== 0)
  echo "<p>Résultats $b à $a de $numrows</p>";
  
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
