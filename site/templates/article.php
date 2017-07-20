<?php snippet('header') ?>

<main class="main" role="main">

    <article class="article single wrap">


        <header class="article-header">
            <h1><?= $page->title()->html() ?></h1>
            <date datetime="<?= $page->date('y-m-d') ?>"><?= $page->date('F jS, Y') ?></date>

            <hr/>
        </header>

        <?php snippet('coverimagearticleblog', $page) ?>

        <div class="text">
            <?= $page->text()->kirbytext() ?>
        </div>

    </article>

    <div class="comments-list">
        <?php snippet('comments-list') ?>
    </div>
    ...
    <div class="comments-form">
        <?php snippet('comments-form') ?>
    </div>
    <p>hello</p>
    <?php snippet('prevnext', ['flip' => true]) ?>

</main>


<?php snippet('footer') ?>
