<?php snippet('header') ?>

<?php $projects = page('projects')->children()->limit(4) ?>
<?php snippet('carousel', array('projects'=>$projects)) ?>

<div class="container">
  <?php snippet('categories') ?>
</div>

<div class="container">
  <?php echo $page->text()->kirbytext() ?> 

<?php snippet('menu') ?>
</div>

<?php snippet('footer') ?>