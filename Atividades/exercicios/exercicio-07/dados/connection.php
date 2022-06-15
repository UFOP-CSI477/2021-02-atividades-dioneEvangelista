<?php

$dbfile = "./db/database.sqlite";
$dbuser = "";
$dbpass = "";
$dbhost = "";

$strConnection= "sqlite:" . $dbfile;
$connection = new PDO($strConnection, $dbuser, $dbpass);

?>