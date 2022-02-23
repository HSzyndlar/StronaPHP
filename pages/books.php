<?php
require_once ("connect.php");
$sql = "select * from ksiazki";

$result = $connection -> query($sql);

if ($result->num_rows > 0){
    echo "<h2>Lista książek</h2>";
    echo "<table>";
    while ($row = $result -> fetch_assoc()){

        echo "<tr><td>".$row["id_ksiazki"]."</td><td>".$row["tytul"]."</td><td>".$row["tytul"]."</td></tr>";
    }
    echo "</table>";
}
else {
    echo "<div class='alert alert-danger' role = \"alert\">To zapytanie daje o wyników</div>";
}
