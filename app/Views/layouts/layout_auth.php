<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= APP_NAME ?></title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/logos/favicon.png')?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.min.css')?>" />
</head>

<body>

    <?= $this->renderSection('content')?>
  
  <script src="<?= base_url('assets/libs/jquery/dist/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
</body>

</html>