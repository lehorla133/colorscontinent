<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/bootstrap/css/bootstrap-theme.min.css') ?>
  <?= css('assets/bootstrap/css/bootstrap.min.css') ?>

  <?= js('assets/js/jquery-3.2.1.min.js') ?>
  <?= js('assets/bootstrap/js/bootstrap.min.js') ?>

</head>
<body>

  <header class="header wrap wide" role="banner">
    <div class="grid">



      <?php snippet('menu') ?>

    </div>
  </header>