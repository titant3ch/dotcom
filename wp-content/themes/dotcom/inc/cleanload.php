<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="0;url=http://ausrcwa230/dotcom/?page_id=632">
</head>

<body>
<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Database connection starting
$con = mysql_connect("127.0.0.1", "root", "root");

if (!$con) {
$noDatabase = true;
die('Could not connect: ' . mysql_error());
}

$noDatabase = !mysql_select_db("dotcom", $con);

$query = "TRUNCATE ot_request";

$result = mysql_query($query);

mysql_close();


?>
</body>
</html>