<?php snippet('header') ?>

<main class="main" role="main">


    <?php
    $coverHome = $page->coverHome()->toFile();
    if ($coverHome):
        ?>
        <div>
            <img src="<?= $coverHome->url() ?>" alt="<?= $page->title()->html() ?>">
        </div>
    <?php endif ?>

    <div>
        <h1><?= $page->titleWelcome()->html() ?></h1>
        <p><?= $page->introText()->kirbytext() ?></p>
    </div>

    <div>
        <h2><?= $page->titleLastFabrics()->html() ?></h2>
        <?php snippet('fabricsgallery', ['limit' => 3]) ?>
    </div>


    <div>
        <h2><?= $page->titleLastProducts()->html() ?></h2>
        <!-- a faire -->
        <!-- ////////// -->
        <?php /*snippet('fabricsgallery', ['limit' => 3]) */ ?>
        <!-- ////////// -->
        <!-- ////////// -->
    </div>


    <div>
        <h2><?= $page->titleOurHistory()->html() ?></h2>
        <p><?= $page->textOurHistory()->kirbytext() ?></p>
        <button>more</button>
    </div>

    <div>
        <h2><?= $page->titleLastBlogPost()->html() ?></h2>
        <!-- a faire -->
        <!-- ////////// -->
        <?php /*snippet('fabricsgallery', ['limit' => 3]) */ ?>
        <!-- ////////// -->
        <!-- ////////// -->
    </div>



</main>


<?php snippet('footer') ?>


<!--
Comment faire un bouton avec un lien
<p class="projects-section-more"><a href="<? /*= page('projects')->url() */ ?>" class="btn">show all projects &hellip;</a></p>
-->