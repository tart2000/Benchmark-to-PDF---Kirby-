<?php foreach (page('categories')->children() as $c) : ?>
	<a href="<?php echo '/category:'.$c->uid() ?>" class="btn btn-default" type="button">
	  <?php echo $c->title() ?> <span class="badge"><?php echo page('projects')->children()->filterBy('thecat','*=',$c->uid())->count() ?></span>
	</a>
<?php endforeach ?>