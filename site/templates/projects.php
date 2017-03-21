<?php snippet('header') ?>

  <div class="container">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->text()->kirbytext() ?>
      </div>
      <hr />
    </header>
        
    <?php snippet('showcase') ?>

  </div>

<?php snippet('footer') ?>