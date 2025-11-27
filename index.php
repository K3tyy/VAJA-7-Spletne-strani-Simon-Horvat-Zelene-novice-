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
    