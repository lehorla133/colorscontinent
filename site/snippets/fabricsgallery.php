<?php

$fabrics = page('fabrics')->children()->visible()->sortBy('sort', 'desc')->paginate(10);

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $fabrics = $fabrics->limit($limit);

?>

<div class="row">

    <div class="col-xs-6 col-md-3">

        <?php foreach($fabrics as $fabric): ?>

        <a href="<?= $fabric->url() ?>" class="thumbnail">
            <?php if($image = $fabric->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
                <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $fabric->title()->html() ?>" />
            <?php endif ?>
            <div>
                <h2><?= $fabric->number()->html() ?></h2>
                <h3><?= $fabric->title()->html() ?></h3>
            </div>
        </a>

        <?php endforeach ?>

    </div>
</div>










<?php /*if($fabrics->pagination()->hasPages()): */?><!--
    <nav class="pagination">

        <?php /*if($fabrics->pagination()->hasNextPage()): */?>
            <a class="next" href="<?php /*echo $fabrics->pagination()->nextPageURL() */?>">Older Fabrics</a>
        <?php /*endif */?>

        <?php /*if($fabrics->pagination()->hasPrevPage()): */?>
            <a class="prev" href="<?php /*echo $fabrics->pagination()->prevPageURL() */?>">Newer fabrics</a>
        <?php /*endif */?>

    </nav>
--><?php /*endif */?>
