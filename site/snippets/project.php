<?php 
  if ($p->pic() !='') {
    $image = $p->pic();
  } else if ($p->hasImages()) {
    $image = $p->images()->first()->url(); 
  }
    
?>

<div class="cover-img" style="background-image:url(<?php echo $image ?>)">
  <?php if ($p->thecat() != '') : ?>
    <div class="cats">
      <?php foreach ($p->thecat()->split() as $thecat) : ?> <!-- liste des catégories -->
        <?php $cat = $pages->find('categories/' . $thecat) ?>
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-<?php echo $cat->fa() ?> fa-stack-1x fa-inverse"></i>
        </span>
      <?php endforeach ?>
    </div>
  <?php endif ?>
</div> <!-- fin container image -->

<div class="text-cont">
  <?php if ($p->logo() != '') : ?>
    <img class="logo" src="<?php echo $p->logo() ?>">
  <?php endif ?>
  <h1><?php echo $p->title() ?></h1>
  <div class="meta">
    <?php if ($p->typologie() != '') : ?>
      <strong><p><?php echo $p->typologie() ?></p></strong>
    <?php endif ?>
    <?php if ($p->qui() != '') : ?>
      <p><i class="fa fa-user"></i> <?php echo $p->qui() ?></p>
    <?php endif ?>
    <?php if ($p->ou() != '') : ?>
      <p><i class="fa fa-map-marker"></i> <?php echo $p->ou() ?></p>
    <?php endif ?>
    <?php if ($p->theurl() != '') : ?>
      <a href="<?php echo $p->theurl() ?>"><?php echo $p->theurl() ?></a>
    <?php endif ?>
  </div>
  <?php echo $p->text()->kirbytext() ?>
  <?php if ($p->retenir() != '') : ?>
    <div class="todo">
      <h3>À retenir</h3>
      <?php echo $p->retenir()->kirbytext() ?>
    </div>
  <?php endif ?>
</div> <!-- fin text-cont -->
