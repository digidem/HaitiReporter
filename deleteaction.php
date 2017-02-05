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
	<div class="left">

		<h1>Delete Confirmation</h1>
<?php
require_once 'login.php';
mysql_connect(localhost, $username, $password);
 @mysql_select_db($database) or die("Unable to select database");

	  if (isset($_POST['delete']) && isset($_POST['id']))
	  {
	  $id  = get_post('id');
	  $name  = get_post('name');
	  $familyname  = get_post('familyname');
	  $query = "DELETE FROM people WHERE id='$id'";

	  if (!isset($_POST['confirm']))
	    {
echo <<<_END
<form action="deleteaction.php" method="post">
<input type="hidden" name="delete" value="yes" />
<input type="hidden" name="id" value=$id />
<input type="hidden" name="name" value=$name />
<input type="hidden" name="familyname" value=$familyname />
<input type="hidden" name="confirm" value="yes" />
<p class="button"><button name="submit" type="submit">Confirm Delete $name $familyname</button></p>
</form><br />
_END;
  }
	  if (isset($_POST['confirm']))
	  {
	  if (!mysql_query($query))	
	  echo "DELETE failed: $query<br />" .
	  mysql_error() . "<br /><br />";
	  else
	  echo "$name $familyname successfully deleted";
	  }}

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
