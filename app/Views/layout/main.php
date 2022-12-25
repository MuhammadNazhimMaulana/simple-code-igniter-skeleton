<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
    <!-- Adding Navbar -->
    <?= $this->include('layout/partials/navbar') ?>

    <!-- Section -->
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Script -->
    <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
</body>
</html>