<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->titleContact()->html() ?></h1>
      <div class="intro text">
        <?= $page->introTextContact()->kirbytext() ?>
      </div>
    </header>

      <?php snippet('contactform') ?>

    
  </main>

<?php snippet('footer') ?>