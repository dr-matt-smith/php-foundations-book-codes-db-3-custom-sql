<!DOCTYPE html>
<html><head><title>list page</title>
</head><body>

<h1>List of movies - less than $20.00</h1>
<ul>

<?php   foreach($movies as $movie): ?>

<li>
    title = <?= $movie->getTitle() ?>
    <br>
    price = <?= $movie->getPrice() ?>
</li>

<?php   endforeach;                 ?>
</ul>
