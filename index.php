<?php
require "db.php"; // MORA BITI NA VRHU !!!

$stran    = $_GET['stran']    ?? 'index';
$podstran = $_GET['podstran'] ?? '';

switch ($stran) {

    case 'admin':
        $title = "Administrator";

        switch ($podstran) {

            case 'dodajNovica':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    $naslov    = $_POST['naslov']    ?? '';
                    $podnaslov = $_POST['podnaslov'] ?? '';
                    $vsebina   = $_POST['vsebina']   ?? '';

                    if (insertNovica($naslov, $podnaslov, $vsebina)) {
                        $success = "Novica je bila uspešno dodana.";
                    } else {
                        $error = "Prišlo je do napake. Novica ni bila dodana.";
                    }
                }
                include "template/dodajNovica.html.php";
                break;

            default:
                include "template/admin.html.php";
                break;
        }
        break;

    default:
        $title = "Zelene novice";
        include "template/index.html.php";
        break;
}

include "template/layout.html.php";
