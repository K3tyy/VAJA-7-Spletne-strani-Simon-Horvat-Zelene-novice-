<?php
// privzeta stran
$stran = $_GET['stran'] ?? 'index';
$podstran = $_GET['podstran'] ?? '';

switch ($stran) {
    case 'admin':
        $title = "Administrator";

        // preverimo podstran
        switch ($podstran) {
            case 'dodajNovica':
    require "db.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $naslov = $_POST['naslov'] ?? '';
        $podnaslov = $_POST['podnaslov'] ?? '';
        $vsebina = $_POST['vsebina'] ?? '';

        if (insertNovica($naslov, $podnaslov, $vsebina)) {
            // uspešno zapisano → preusmeritev
            header("Location: index.php?stran=admin");
            exit;
        } else {
            $error = "Napaka: izpolni vsa obvezna polja!";
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

// vključimo glavni layout
include "template/layout.html.php";
?>
    