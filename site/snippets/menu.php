<!--<nav class="navbar navbar-default navigation column" role="navigation">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Colors Continent</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav menu">
                <?php /*foreach($pages->visible() as $item): */?>
                    <li class="menu-item<?/*= r($item->isOpen(), ' is-active') */?>">
                        <a href="<?/*= $item->url() */?>"><?/*= $item->title()->html() */?></a>
                    </li>
                <?php /*endforeach */?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav> -->


<?php

// main menu items
$items = $pages->visible();

// only show the menu if items are available
if($items->count()):

    ?>
    <nav class="navbar navbar-default">
        <ul class="nav">
            <?php foreach($items as $item): ?>
                <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a></li>
            <?php endforeach ?>
        </ul>
    </nav>
<?php endif ?>