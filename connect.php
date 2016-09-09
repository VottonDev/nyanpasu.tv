<?php
require "configuration.php";

try {
    $conn = new PDO("mysql:host=" . $servername . ";dbname=". $dbname, $username, $password);
    // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   if ($devmode == 1) {
   error_reporting(E_ALL);
ini_set('display_errors', 1);
}

}


catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    error_reporting(E_ALL);
ini_set('display_errors', 1);
    }

?>
