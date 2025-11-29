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

    if (empty($naslov) || empty($vsebina)) {
        return false;
    }

    $slug = createSlug($naslov);
    $ustvarjeno = date("Y-m-d H:i:s");

    $stmt = mysqli_prepare(
        $conn,
        "INSERT INTO novica (naslov, slug, podnaslov, vsebina, ustvarjeno, posodobljeno)
         VALUES (?, ?, ?, ?, ?, NULL)"
    );

    mysqli_stmt_bind_param($stmt, "sssss", $naslov, $slug, $podnaslov, $vsebina, $ustvarjeno);

    return mysqli_stmt_execute($stmt);
}

function createSlug($text) {
    // 1. pretvorimo v male črke
    $text = strtolower($text);

    // 2. šumnike pretvorimo
    $text = str_replace(
        ['č', 'š', 'ž', 'ć', 'đ'],
        ['c', 's', 'z', 'c', 'd'],
        $text
    );

    // 3. vse, kar ni črka ali številka, zamenjamo z -
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);

    // 4. odstranimo - na začetku ali koncu
    $text = trim($text, '-');

    return $text;
}

