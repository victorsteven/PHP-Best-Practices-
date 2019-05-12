<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>

<a href="/about">About</a>
<a href="/contact">Contact</a>

  <ul>
    <?php foreach ($tasks as $task) : ?>
      <li>
        <?php if($task->completed) : ?>
          <strike><?=  $task->description  ?></strike>
        <?php else : ?>
        <?=  $task->description  ?>
        <?php endif; ?>
      </li>
<?php endforeach; ?>
  </ul>
</body>
</html>