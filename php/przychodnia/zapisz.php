<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //echo rand();
    $i = $_POST['imie'];
    $n = $_POST['nazwisko'];
    $d = $_POST['data_ur'];
    $p = $_POST['plec'];
    $baza = new mysqli('localhost','root','', 'przychodnia');
    $sql = "INSERT INTO p (imie, nazwisko) VALUES ('{$i}', '{$n}')";
    echo $sql;
    $baza->query($sql);
    $baza->close();
    header("location:index_1.php");
} else {
    echo "brak danych";
}