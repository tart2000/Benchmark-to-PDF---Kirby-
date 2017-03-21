<?php 

function getPostImageURL($project) {
	if ($project->pic() != '') {
		return $project->pic(); 
	} else if ($project->postImage() != '') {
		$image = $project->postImage()->toFile();
		return $image->url();
	} else if ($project->hasImages()) {
		$image = $project->images()->sortBy('sort', 'asc')->first(); 
		$thumb = $image->crop(600,250);
		return $thumb->url(); 
	}
}

?>