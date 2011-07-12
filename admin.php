<?php
session_start();

if (!isset($_SESSION['username']))
{
echo "Please <a href=authenticate.php>click here</a> to log in.";
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
if($deleteusers==1)
{
echo <<<_END
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
	  <p>Use this page to edit Haiti Reporter usernames, passwords and
	  privilege levels. This page is for superusers only.</p>
	</div>
</div>
<div id="panel">
  <div class="right">
	  
<form name="form" action="adduser.php" method="post">
		<h1>Add New User</h1><br />
Username:  <p class="input"><input type="text" name="username"></p>
Password:  <p class="input"><input type="password" name="password"></p>
Retype Password:  <p class="input"><input type="password" name="password2"></p>
    <br />Check all that apply:<br />

	<label for="deletepeople"><input type="checkbox"  class
	="checkbox" name="deletepeople" value="1" />Update and Delete
	records</label><br />
	<label for="deleteusers"><input type="checkbox"  class
	="checkbox" name="deleteusers" value="1" />Superuser
	(Create and Manage users)</label><br />
    <p class="button"><button name="submit" type="submit">Add New User</button></p>
</form>
<br />
	  	<h1>Change Password</h1>
<form name="form" action="changepassword.php" method="post">
Username:  <p class="input"><input type="text" name="username"></p>
New Password:  <p class="input"><input type="password" name="password"></p>
Retype New Password:  <p class="input"><input type="password" name="password2"></p>
    <p class="button"><button name="submit" type="submit">Change Password</button></p>
</form>    <br />
		<h1>Delete User</h1>
<form name="form" action="deleteuser.php" method="post">
Username:  <p class="input"><input type="text" name="username"></p>
    <p class="button"><button name="submit" type="submit">Delete User</button></p>
</form>    <br />
		<h1>Edit User</h1>
<form name="form" action="edituser.php" method="post">

    Username:  <p class="input"><input type="text" name="username"></p>
    <br />Check all that apply:<br />
	<label for="deletepeople"><input type="checkbox"  class
	="checkbox" name="deletepeople" value="1" />Update and Delete
	records</label><br />
	<label for="deleteusers"><input type="checkbox"  class
	="checkbox" name="deleteusers" value="1" />Superuser
	(Create and Manage users)</label><br />
    <p class="button"><button name="submit" type="submit">Edit User</button></p>
</form>
<br />

    </div>
    </div>
	<div id="footer">
<p><a href="http://digital-democracy.org"> Digital Democracy</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons License</a>.<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a>
	</div>



<a href=logout.php>Log Out</a>

</body>
</html>
_END;
} 
else 
{
echo <<<_END
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
			<h1>Secure Haiti Reporter Password Change</h1>
		</div>

		<div id="menu">
		  <ul>
		    <li><a href="./index.php">Akey (Home)</a></li>
			<li><a href="insertform.php">Nouvo Dosye (Insert New)</a></li>
			<li><a href="search.php">Rechèch (Search)</a></li>
			<li><a href="monthlyform.php">Monthly Report</a></li>
			<li class="selected"><a href="admin.php">Admin</a></li>
		</ul>
		</div>


		<div id="content">
			<div class="article">
			  <p>Use this page to change your password.</p>
			</div>
		</div>
		<div id="panel">
		  <div class="right">

			  	<h1>Change Password</h1>
		<form name="form" action="changepassword.php" method="post">
		<class="input"><input type="hidden" name="username" value=$username>
		New Password:  <p class="input"><input type="password" name="password"></p>
		    <p class="button"><button name="submit" type="submit">Change Password</button></p>
		</form>    <br />
		    </div>
		    </div>
			<div id="footer">
			<p><a href="http://digital-democracy.org"> Digital Democracy</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons License</a>.<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/80x15.png" /></a>
			</div>



		<a href=logout.php>Log Out</a>

		</body>
		</html>

_END;
}
?>
