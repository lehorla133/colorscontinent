<?php snippet('header') ?>

    <main class="main" role="main">

        <div class="wrap">


            <?php
            // suppose the filename is stored in a field called cover_image
            $imageCoverCompany = $page->coverCompany()->toFile();

            // always check if the image exists!
            if ($imageCoverCompany):
                ?>
                <div>
                    <img src="<?= $imageCoverCompany->url() ?>" alt="<?= $page->title()->html() ?>">
                </div>
            <?php endif ?>


            <div>
                <h1>
                    <?= $page->titleCompany()->html() ?>
                </h1>
                <p>
                    <?= $page->textCompany()->kirbytext() ?>
                </p>
            </div>

            <div>
                <h1>
                    <?= $page->titleFabrics()->html() ?>
                </h1>


                <?php
                // suppose the filename is stored in a field called cover_image
                $imageCoverFabrics = $page->coverFabrics()->toFile();

                // always check if the image exists!
                if ($imageCoverFabrics):
                    ?>
                    <div>
                        <img src="<?= $imageCoverFabrics->url() ?>" alt="<?= $page->title()->html() ?>">
                    </div>
                <?php endif ?>


                <div>
                    <h2>
                        <?= $page->titleColorMeanings()->html() ?>
                    </h2>
                    <p>
                        <?= $page->textColorMeanings()->kirbytext() ?>
                    </p>
                    <h2>
                        <?= $page->titleMaintenanceProducts()->html() ?>
                    </h2>
                    <p>
                        <?= $page->textMaintenanceProducts()->kirbytext() ?>
                    </p>
                </div>
            </div>
            <div>
                <h1>
                    <?= $page->titleTeam()->html() ?>
                </h1>
            </div>


        </div>

        <section class="team wrap wide">

            <ul class="team-list grid gutter-1">
                <?php foreach ($page->children()->visible() as $member): ?>
                    <li class="team-item column">
                        <?php
                        // suppose the filename is stored in a field called cover_image
                        $imageMemberTeam = $member->image();

                        // always check if the image exists!
                        if ($imageMemberTeam):
                            ?>

                            <figure class="team-portrait">
                                <img src="<?= $imageMemberTeam->url() ?>"
                                     alt="Portrait of <?= $member->title()->html() ?>"/>
                            </figure>

                        <?php endif ?>


                        <div class="team-info">
                            <h3 class="team-name"><?= $member->title()->html() ?></h3>
                            <p class="team-position"><?= $member->position()->html() ?></p>
                            <div class="team-about text">
                                <?= $member->about()->kirbytext() ?>
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </section>
    </main>
<?php snippet('footer') ?>