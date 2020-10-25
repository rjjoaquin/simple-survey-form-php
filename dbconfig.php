<?php

// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','testflaskuser');
define('DB_PASS','12345678');
define('DB_NAME','testflasksurvey');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}