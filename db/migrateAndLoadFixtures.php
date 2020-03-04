<?php
require_once __DIR__ . '/../config/dbConstants.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Movie;
use Tudublin\MovieRepository;
use Tudublin\Category;
use Tudublin\CategoryRepository;

//--------- MOVIE ---------
// (1) drop then create table
$movieRepository = new MovieRepository();
$movieRepository->dropTable();
$movieRepository->createTable();

// (2) delete any existing objects
$movieRepository->deleteAll();

// (3) create objects
$m1 = new Movie();
$m1->setTitle('Jaws');
$m1->setPrice(9.99);
$m1->setCategory('horror');

$m2 = new Movie();
$m2->setTitle('Jumanji');
$m2->setPrice(9.99);
$m2->setCategory('entertainment');

$m3 = new Movie();
$m3->setTitle('Star Wars');
$m3->setPrice(19.99);
$m3->setCategory('entertainment');

$m4 = new Movie();
$m4->setTitle('Star Trek the motion picture');
$m4->setPrice(25.00);
$m4->setCategory('entertainment');

// (3) insert objects into DB
$movieRepository->create($m1);
$movieRepository->create($m2);
$movieRepository->create($m3);
$movieRepository->create($m4);

//--------- CATEGORY ---------
// (1) drop then create table
$categoryRepository = new CategoryRepository();
$categoryRepository->dropTable();
$categoryRepository->createTable();

// (2) delete any existing objects
$categoryRepository->deleteAll();

// (3) create objects
$c1 = new Category();
$c1->setName('comedy');

// (3) insert objects into DB
$categoryRepository->create($c1);

// (4) test objects are there
$categories = $categoryRepository->findAll();
print '<pre>';
var_dump($categories);
