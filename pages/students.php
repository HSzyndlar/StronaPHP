<?php
require_once ("connect.php");
$sql = "select * from student";

$result = $connection -> query($sql);

if ($result->num_rows > 0){
    echo "<h2>Lista uczniów</h2>";
    echo "<table class='table'>";
    echo "<thead><tr>";
    echo "<th scope='col'>id_student</th>";
    echo "<th scope='col'>imie</th>";
    echo "<th scope='col'>nazwisko</th>";
    echo "<th scope='col'>id_wydzial</th>";
    echo "<th scope='col'>id_kierunek</th>";
    echo "<th scope='col'>nr_albumu</th>";
    echo "<th scope='col'>rok_studiow</th>";
    echo "<th scope='col'>miejscowosc</th>";
    echo "<th scope='col'>wojewodztwo</th>";
    echo "<th scope='col'>rok_urodzenia</th>";
    echo "<th scope='col'>status</th>";
    echo "</tr></thead>";
    while ($row = $result -> fetch_assoc()){

        echo "<tr>";
        echo "<td>".$row["id_student"]."</td>";
        echo "<td>".$row["imie"]."</td>";
        echo "<td>".$row["nazwisko"]."</td>";
        echo "<td>".$row["id_wydzial"]."</td>";
        echo "<td>".$row["id_kierunek"]."</td>";
        echo "<td>".$row["nr_albumu"]."</td>";
        echo "<td>".$row["rok_studiow"]."</td>";
        echo "<td>".$row["miejscowosc"]."</td>";
        echo "<td>".$row["wojewodztwo"]."</td>";
        echo "<td>".$row["rok_urodzenia"]."</td>";
        echo "<td>".$row["status"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else {
    echo "<div class='alert alert-danger' role = \"alert\">To zapytanie daje o wyników</div>";
}
