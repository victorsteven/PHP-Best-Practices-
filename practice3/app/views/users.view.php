<?php require('partials/head.php')   ?>

<h1>Users All</h1>

<?php foreach ($users as $user) : ?>
  <li><?= $user->name; ?></li>
<?php endforeach ?>

<h1>Submit Your Details</h1>

<form action="/users" method="POST">

<input type="text" name="name" id="">

<button type="submit">Submit</button>

</form>

<?php require('partials/footer.php') ?>
