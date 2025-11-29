<?php ob_start(); ?>

<div class="container mt-5">
    <div class="row">

        <!-- Levi stolpec -->
        <div class="col-md-6">
            <div class="page-header mb-4">
                <h1>Administrator</h1>
            </div>

            <ul class="list-group">
                <li class="list-group-item active">Novice</li>

                <li class="list-group-item">
                    <a href="index.php?stran=admin&podstran=dodajNovica" class="text-decoration-none">
                        Dodaj novico
                    </a>
                </li>

                <li class="list-group-item">Uredi / izbriši</li>
            </ul>
        </div>

        <!-- Desni stolpec -->
        <div class="col-md-6">
            <!-- Za prihodnjo vsebino -->
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
