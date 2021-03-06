<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/main.min.css') ?>

  <?= js('assets/js/vendor/jquery.min.js') ?>
  <?= js('assets/js/vendor/plugins.min.js') ?>

</head>
<body>

  <header class="header wrap wide" role="banner">
    <div class="container">


      <?php snippet('menu') ?>

    </div>
  </header>