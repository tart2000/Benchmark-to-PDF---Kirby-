<?php

$projects = page('projects')->children()->visible()->paginate(30);
$pagination = $projects->pagination();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<div class="row">
  <?php foreach($projects as $project): ?>
    <?php snippet('project-item', array('project'=>$project)) ?>
  <?php endforeach ?>
</div>

<div class="row center">
  <nav aria-label="Page navigation">
    <ul class="pagination">

      <?php if($pagination->hasPrevPage()): ?>
        <li><a href="<?php echo $pagination->prevPageURL() ?>">&laquo;</a></li>
      <?php else: ?>
        <li class="disabled"><span>&laquo;</span></li>
      <?php endif ?>

      <?php foreach($pagination->range(10) as $r): ?>
        <li<?php if($pagination->page() == $r) echo ' class="active"' ?>>
          <a href="<?php echo $pagination->pageURL($r) ?>">
            <?php echo $r ?>
          </a>
        </li>
      <?php endforeach ?>

      <?php if($pagination->hasNextPage()): ?>
        <li class=""><a href="<?php echo $pagination->nextPageURL() ?>">&raquo;</a></li>
      <?php else: ?>
        <li class="disabled"><span>&raquo;</span></li>
      <?php endif ?>
    </ul>
  </nav>
</div>