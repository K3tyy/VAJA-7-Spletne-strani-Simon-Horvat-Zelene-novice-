<?php

$host = "mysql-novice.alwaysdata.net";
$user = "novice";
$pass = "Trav4J3Ze1ena.";
$db   = "novice_baza";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Povezava ni uspela: " . mysqli_connect_error());
}

/**
 * Funkcija za dodajanje novice v bazo
 */
function insertNovica($naslov, $podnaslov, $vsebina) {
    global $conn;

    // preverimo prazna polja
    if (empty($naslov) || empty($vsebina)) {
        return false;
    }

    // datum in čas
    $ustvarjeno = date("Y-m-d H:i:s");

    // priprava SQL
    $stmt = mysqli_prepare(
        $conn,
        "INSERT INTO novica (naslov, podnaslov, vsebina, ustvarjeno, posodobljeno)
         VALUES (?, ?, ?, ?, NULL)"
    );

    mysqli_stmt_bind_param($stmt, "ssss", $naslov, $podnaslov, $vsebina, $ustvarjeno);
    $rezultat = mysqli_stmt_execute($stmt);

    return $rezultat;
}

