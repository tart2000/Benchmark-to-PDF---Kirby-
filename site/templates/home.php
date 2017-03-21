<?php snippet('header') ?>

<header class="page front" 
  <?php if ($page->hasImages()) : ?>
    style="background-image:url('<?php echo $page->images()->first()->url() ?>')"
  <?php endif ?>
  >
  <h1><?php echo $page->intro() ?></h1>
  <hr>
  <?= $page->text()->kirbytext() ?>
  <img class="main-logo" src="<?php echo $site->url() ?>/assets/images/logo.png">
</header>

<?php foreach ($site->pages()->visible() as $pa) : ?>
  <?php if ($pa->template()=='projects') : ?>
    <div class="page pad">
      <h1><?php echo $pa->title() ?></h1>
        <?php echo $pa->text()->kirbytext() ?>
    </div>
    <?php foreach ($pa->children() as $p) : ?> <!-- pages projet -->
      <div class="page project">
        <?php snippet('project', array('p'=>$p)) ?>
      </div>
    <?php endforeach ?>

  <?php else : ?>
    <div class="page pad">
      <?php echo $pa->text()->kirbytext() ?>
    </div>
  <?php endif ?>


<?php endforeach ?>








<?php snippet('footer') ?>