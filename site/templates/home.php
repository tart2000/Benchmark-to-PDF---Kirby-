<?php snippet('header') ?>

<?php $projects = page('projects')->children()->sortBy('title','asc') ?>

<header class="page pad front">
  <h1>Fiches projet - benchmark YMCA</h1>
  <div class="">
    <?= $page->intro()->kirbytext() ?>
  </div>
  <hr>
  <?= $page->text()->kirbytext() ?>
  <img class="main-logo" src="<?php echo $site->url() ?>/assets/images/logo.png">
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
      <span class="facats">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-<?php echo $cat->fa() ?> fa-stack-1x fa-inverse"></i>
        </span>
        <span class="cat-title"><?php echo $cat->title() ?></span>
      </span>
    <?php endforeach ?>

</div>

<?php $counter = 1 ?>

<?php foreach ($projects as $p) : ?> <!-- pages projet -->
  <div class="page">
    <?php snippet('project', array('p'=>$p,'counter'=>$counter)) ?>
  </div>
  <?php $counter++ ?>
<?php endforeach ?>




<?php snippet('footer') ?>