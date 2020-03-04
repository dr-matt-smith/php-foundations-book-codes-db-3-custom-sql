<!DOCTYPE html>
<html><head><title>list page</title>
</head><body>

<h1>List of ALL movies</h1>
<ul>

<?php   foreach($movies as $movie): ?>

<li>
    title = <?= $movie->getTitle() ?>
    <br>
    price = <?= $movie->getPrice() ?>
</li>

<?php   endforeach;                 ?>
</ul>
