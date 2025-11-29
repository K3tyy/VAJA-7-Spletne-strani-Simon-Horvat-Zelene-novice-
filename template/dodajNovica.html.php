<?php ob_start(); ?>

<?php if (!empty($success)): ?>
    <div class="alert alert-success text-center">
        <?= htmlspecialchars($success) ?>
    </div>
<?php endif; ?>

<?php if (!empty($error)): ?>
    <div class="alert alert-danger text-center">
        <?= htmlspecialchars($error) ?>
    </div>
<?php endif; ?>

<div class="container mt-5">
    <div class="page-header mb-4">
        <h1>Dodaj novico</h1>
    </div>

    <form method="post" action="index.php?stran=admin&podstran=dodajNovica">

        <div class="mb-3">
            <label for="naslov" class="form-label">Naslov</label>
            <input type="text" class="form-control" id="naslov" name="naslov" required>
        </div>

        <div class="mb-3">
            <label for="podnaslov" class="form-label">Podnaslov</label>
            <input type="text" class="form-control" id="podnaslov" name="podnaslov">
        </div>

        <div class="mb-3">
            <label for="vsebina" class="form-label">Vsebina</label>
            <textarea class="form-control" id="vsebina" name="vsebina" rows="6" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Dodaj</button>
    </form>
</div>

<?php $content = ob_get_clean(); ?>
