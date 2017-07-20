<?php

$products = page('products')->children()->visible();

if(isset($limit)) $products = $products->limit($limit);

?>

<ul class="showcase grid gutter-1">

    <?php foreach($products as $finishedproducts): ?>

        <li class="showcase-item column">
            <a href="<?= $finishedproducts->url() ?>" class="showcase-link">
                <?php if($image = $finishedproducts->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
                    <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $finishedproducts->title()->html() ?>" class="showcase-image" />
                <?php endif ?>
                <div class="showcase-caption">
                    <h3 class="showcase-title"><?= $finishedproducts->title()->html() ?></h3>
                </div>
            </a>
        </li>

    <?php endforeach ?>

</ul>