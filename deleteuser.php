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
	<h1>Haiti Reporter Admin Console</h1>
</div>

<div id="menu">
  <ul>
    <li><a href="./index.php">Akey</a></li>
	<li><a href="insertform.php">Nouvo Dosye</a></li>
	<li><a href="search.php">Rechèch</a></li>
	<li><a href="monthlyform.php">Rapò Mansyèl</a></li>
	<li class="selected"><a href="admin.php">Admin</a></li>
</ul>
</div>
<div id="content">
	<div class="article">
		<h1>Delete User Tool</h1>
		<div class="divider"></div>



<?php
require_once 'login.php';

mysql_connect(localhost, $username, $password);
@mysql_select_db($database) or die("Unable to select database");

$username = sanitizeMySQL($_POST['username']);

if ($username=='root')
	{
echo "cannot delete <b>root</b><br />";
	exit;
	}
$query = "DELETE FROM users WHERE username='$username'";

$result = mysql_query($query);

if (!$result)	
echo "DELETE failed: $query<br />" .
mysql_error() . "<br /><br />";
else
echo "<b>$username</b> deleted <br />";
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
$var = sanitizeString($var); 
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