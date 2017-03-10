<?php snippet('header') ?>

<?php $projects = page('projects')->children()->sortBy('title','asc') ?>

<header class="page pad front">
  <h1>Fiches projet - benchmark YMCA</h1>
  <div class="">
    <?= $page->intro()->kirbytext() ?>
  </div>
  <hr>
  <?= $page->text()->kirbytext() ?>
</header>

<div class="page pad">
  <h1>Projets présentés</h1>
    <?php echo page('projects')->text()->kirbytext() ?>
    <?php $counter = 1 ?>
    <hr>
    <p>
      <?php foreach ($projects as $p) :  ?>
        <strong><?php echo $p->title() ?></strong> - p.<?php echo $counter ?> / 
        <?php $counter++ ?>
      <?php endforeach ?>
    </p>
    <hr>
    <h3>Catégories</h3>
    <?php foreach (page('categories')->children() as $cat) : ?>
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-<?php echo $cat->fa() ?> fa-stack-1x fa-inverse"></i>
      </span>
      <span class="cat-title"><?php echo $cat->title() ?></span>
    <?php endforeach ?>

</div>

<?php $counter = 1 ?>

<?php foreach ($projects as $p) : ?>
<div class="page">
  <div class="cover-img" style="background-image:url(<?php echo $p->pic() ?>)">
    <div class="counter"><?php echo $counter?></div>
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
  </div>
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
  </div>

  

</div>
<?php $counter++ ?>
<?php endforeach ?>

<div class="page pad">
  <?php echo page('home')->end()->kirbytext() ?>
</div>


<?php snippet('footer') ?>