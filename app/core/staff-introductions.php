<?php 
include 'database.php';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_safehaven';

$db = new db($dbhost, $dbuser, $dbpass, $dbname);

$users = $db->query('SELECT * FROM user')->fetchAll();