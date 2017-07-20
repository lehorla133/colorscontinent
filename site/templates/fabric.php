<?php snippet('header') ?>

    <main class="main" role="main">


            <h1><?= $page->title()->html() ?></h1>
            <h2>Number of the fabric : <?= $page->number()->html() ?></h2>


        <div class="text wrap">


            <?= $page->text()->kirbytext() ?>

            <?php

            foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
                <figure>
                    <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
                </figure>
            <?php endforeach ?>

        </div>


        <?php snippet('prevnext') ?>

    </main>

<?php snippet('footer') ?>