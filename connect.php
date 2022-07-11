<?php
require "configuration.php";

try {
    $conn = new PDO("mysql:host=" . $servername . ";dbname=". $dbname, $username, $password);
    // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   if ($devmode == 1) {
   ini_set('error_reporting', 0);
   ini_set('display_errors', 0);
}

}


catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    ini_set('error_reporting', 0);
    ini_set('display_errors', 0);
    }

?>
