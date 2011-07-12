<?php
session_start();
$_SESSION = array();
if (session_id() != "" || isset($_COOKIE[session_name()]))
   setcookie(session_name(), '', time() - 2592000, '/');
session_destroy();
    header('HTTP/1.0 401 Unauthorized');
?>
<html>
<title>Secure Reporter</title>
<body>
<p>You have logged out. Please close your browser for security.</p>
<p><a href=authenticate.php>Click here</a> to log back in.</p>
</body>
</html>
