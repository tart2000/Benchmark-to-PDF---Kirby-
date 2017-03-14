
<!-- Carousel ================================================== -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $counter = 0 ?>
    <?php foreach ($projects as $p) : ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $counter ?>" class="<?php e($counter == 0,'active') ?>"></li>
      <?php $counter++ ?>
    <?php endforeach ?>
  </ol>

  <div class="carousel-inner" role="listbox">
    <?php $counter = 0 ?>
    <?php foreach ($projects as $p) : ?>
      <div class="item <?php e($counter == 0,'active') ?>" style="background-image:url('<?php echo $p->pic() ?>')">
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo $p->title() ?></h1>
            <p><?php echo $p->text()->excerpt(200) ?></p>
            <p><a class="btn btn-lg btn-primary" href="<?php echo $p->theurl() ?>" role="button">Lien</a></p>
          </div>
        </div>
      </div>
      <?php $counter++ ?>
    <?php endforeach ?>
  </div>

  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div><!-- /.carousel -->