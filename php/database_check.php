<?php
require_once 'mysql_login.php';

$db_server = mysqli_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("Unable to connect to mysql : ".mysqli_error());
?>
<a href="index.php">Goto index</a>
