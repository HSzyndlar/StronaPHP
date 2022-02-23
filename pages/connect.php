<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "biblioteka";

$connection = new mysqli($serverName, $userName, $password, $dbName);

if ($connection -> connect_error)
    die("Błąd połączenia:".$connection -> connect_error);
else
   // echo "Połączyłeś się";

    ?>