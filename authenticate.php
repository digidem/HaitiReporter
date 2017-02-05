<?php // authenticate.php
require_once 'login.php';
$db_server = mysql_connect($hostname, $username, $password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($database)
or die("Unable to select database: " . mysql_error());

if (isset($_SERVER['PHP_AUTH_USER']) &&
    isset($_SERVER['PHP_AUTH_PW']))
  {
    $un_temp = mysql_entities_fix_string($_SERVER['PHP_AUTH_USER']);
    $pw_temp = mysql_entities_fix_string($_SERVER['PHP_AUTH_PW']);

    $query = "SELECT * FROM users WHERE username='$un_temp'";
    $result = mysql_query($query);
    if (!$result) die("Database access failed: " . mysql_error());
    elseif (mysql_num_rows($result))
      {
	$row = mysql_fetch_array($result);
	$salt1 = "Y25*$";
	$salt2 = "rf@!";
	$token = hash( "sha256", "$salt1$pw_temp$salt2");

	if ($token == $row["password"])
	  {
	    session_start();
	    $_SESSION['username'] = $un_temp;
	    $_SESSION['password'] = $pw_temp;
		header("Location: index.php");
	    echo '<b>' . $row["username"] . '</b> is now logged in.';
	    die ("<p><a href=index.php>Click here to use Reporter</a></p>");
	  }
	else die("Invalid username/password combination");
      }
    else die("Invalid username/password combination");
  }
else
  {
    header('WWW-Authenticate: Basic realm="Restricted Section"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Please enter username and password");
  }

function mysql_entities_fix_string($string)
{
  return htmlentities(mysql_fix_string($string));
}

function mysql_fix_string($string)
{
  if (get_magic_quotes_gpc()) $string = stripslashes($string);
  return mysql_real_escape_string($string);
}