<?php snippet('header') ?>

<main class="main" role="main">

    <header class="wrap">
        <h1><?= $page->title()->html() ?></h1>

        <div class="intro text">
            <?= $page->text()->kirbytext() ?>
        </div>
    </header>

    <div class="wrap wide">
        <?php snippet('fabricsgallery') ?>
    </div>


    <?php
    $list = page()->children()->visible()->sortBy('sort', 'desc')->paginate(10);
    $pagination = $list->pagination();
    ?>
    <nav>
        <ul>
            <?php if ($pagination->hasPrevPage()): ?>
                <li><a href="<?php echo $pagination->prevPageURL() ?>">&larr;</a></li>
            <?php else: ?>
                <li><span>&larr;</span></li>
            <?php endif ?>
            <?php foreach ($pagination->range(10) as $r): ?>
                <li><a<?php if ($pagination->page() == $r) echo ' class="active"' ?>
                            href="<?php echo $pagination->pageURL($r) ?>"><?php echo $r ?></a></li>
            <?php endforeach ?>
            <?php if ($pagination->hasNextPage()): ?>
                <li class="last"><a href="<?php echo $pagination->nextPageURL() ?>">&rarr;</a></li>
            <?php else: ?>
                <li class="last"><span>&rarr;</span></li>
            <?php endif ?>
        </ul>
    </nav>

</main>


<?php snippet('footer') ?>