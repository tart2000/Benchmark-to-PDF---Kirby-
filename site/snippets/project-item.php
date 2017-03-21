<a href="<?= $project->url() ?>" class="">
	<div class="col-md-4 col-sm-6">
		<div class="project-thumb" style="background-image:url(<?php echo getPostImageURL($project) ?>)">
		</div>
		<div class="thumb-meta">
	    	<h3 class=""><?= $project->title()->html() ?></h3>
	    	<p><?= $project->text()->excerpt(100) ?></p>
		</div>
	</div>
</a>