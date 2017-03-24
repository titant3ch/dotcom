<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta http-equiv="refresh" content="0;url=http://ausrcwa230/dotcom/?page_id=632">
  <title>Requesting..</title>
</head>
<body>

<?php

  require "usertest.php";

  error_reporting(E_ALL);

  date_default_timezone_set('America/Chicago');

  $con = mysql_connect("127.0.0.1", "root", "root");

  if (!$con) {
    $noDatabase = true;
    die('Could not connect: ' . mysql_error());
  }

  $noDatabase = !mysql_select_db("dotcom", $con);

  if (isset($_POST['slot_number'])){
    
    $sql = 'CREATE TABLE IF NOT EXISTS `ot_request` (`id` int(11) NOT NULL AUTO_INCREMENT, `Agent` text NOT NULL, `SlotNumber` text NOT NULL, `Host` text NOT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1';
    mysql_query($sql, $con);
  }

  $slot = $_POST['slot_number'];
  $user = strtolower($user);
  $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
  $hostname = strtolower($hostname);

  $sql = "INSERT INTO ot_request (Agent, SlotNumber, Host) VALUES (
    '" . mysql_real_escape_string($user, $con) . "',
    '" . mysql_real_escape_string($slot, $con) . "',
    '" . mysql_real_escape_string($hostname, $con) . "'
    )";
  mysql_query($sql, $con);

?>

</body>
</html>