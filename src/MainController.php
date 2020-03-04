<?php


namespace Tudublin;

class MainController
{
    private $movieRepository;
    private $categoryRepository;

    public function __construct()
    {
        $this->movieRepository = new MovieRepository();
        $this->categoryRepository = new CategoryRepository();
    }

    public function listMovies()
    {
        $movies = $this->movieRepository->findAll();

        require_once __DIR__ . '/../templates/moviesList.php';
    }

    public function listCategories()
    {
        $categories = $this->categoryRepository->findAll();

        require_once __DIR__ . '/../templates/categories.php';
    }


    public function moviesMaxPriceList()
    {
        $maxPrice = 20.00;
        $movies = $this->movieRepository->findByPriceLessThan($maxPrice);

        require_once __DIR__ . '/../templates/moviesLessThanPrice.php';
    }

}
