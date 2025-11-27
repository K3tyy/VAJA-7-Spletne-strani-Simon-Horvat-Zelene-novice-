<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? htmlspecialchars($title) : 'Zelene novice' ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
        .page-header h1 {
            color: #2e8b57; /* zelena barva kot v vzorcu */
            font-family: "Brush Script MT", cursive;
            text-align: center;
            margin-top: 20px;
        }
        .navbar-custom {
            background-color: #8bc34a; /* svetlo zelena */
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: white !important;
        }
        .navbar-custom .navbar-brand img {
            height: 30px;
            margin-right: 8px;
        }
    </style>
</head>
<body>

    <div class="page-header text-center">
        <h1>Zelene novice</h1>
    </div>

    <!-- Navigacija -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span>v sožitju z naravo</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-house-door"></i> Domov
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?stran=admin">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Glavna vsebina -->
    <div>
        <?= $content ?? '' ?>
    </div>

    <footer class="text-center py-3 border-top mt-5">
        <p class="mb-0">&copy; <?= date('Y') ?> Zelene novice</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
