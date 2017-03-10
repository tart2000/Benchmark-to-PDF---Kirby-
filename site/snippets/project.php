<div class="cover-img" style="background-image:url(<?php echo $p->pic() ?>)">
  <?php if ($counter !='') : ?>
    <div class="counter">
      <?php echo $counter?>
    </div>
  <?php endif ?>
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
    <strong><p><?php echo $p->typologie() ?></p></strong>
    <p><i class="fa fa-map-marker"></i><?php echo $p->ou() ?></p>
    <a href="<?php echo $p->theurl() ?>"><?php echo $p->theurl() ?></a>
  </div>
  <?php echo $p->text()->kirbytext() ?>
  <?php if ($p->retenir() != '') : ?>
    <div class="todo">
      <h3>À retenir</h3>
      <?php echo $p->retenir()->kirbytext() ?>
    </div>
  <?php endif ?>
</div> <!-- fin text-cont -->
