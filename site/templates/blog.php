<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>

      <?php
      // This page uses a separate controller to set variables, which can be used
      // within this template file. This results in less logic in your templates,
      // making them more readable. Learn more about controllers at:
      // https://getkirby.com/docs/developer-guide/advanced/controllers
      if($pagination->page() == 1):
      ?>
        <div class="intro text">
          <?= $page->textForBlog()->kirbytext() ?>
        </div>
      <?php endif ?>

      <hr />
    </header>

    <section class="wrap">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="article index">

            <header class="article-header">
              <h2 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h2>

                <date datetime="<?= $article->date('y-m-d') ?>"><?= $article->date('F jS, Y') ?></date>

            </header>

            <?php snippet('coverimageblog', $article) ?>

            <div class="text">
              <p>
                <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                <a href="<?= $article->url() ?>" class="article-more">read more</a>
              </p>
            </div>

          </article>

          <hr />

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </section>

      <?php
      $list = page()->children()->visible()->sortBy('sort', 'desc')->paginate($perpage);
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