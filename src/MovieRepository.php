<?php
namespace Tudublin;

use Mattsmithdev\PdoCrudRepo\DatabaseTableRepository;
use Mattsmithdev\PdoCrudRepo\DatabaseManager;

class MovieRepository extends DatabaseTableRepository
{
    /**
     * get all movies whose price is LESS THAN the provided value
     *
     * @param $maxPrice
     *
     * @return array
     */
    public function findByPriceLessThan($maxPrice)
    {
        $db = new DatabaseManager();
        $connection = $db->getDbh();

        $sql = 'SELECT * FROM movie WHERE  (price < :price)';

        $statement = $connection->prepare($sql);
        $statement->bindParam(':price', $maxPrice);
//        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->getClassNameForDbRecords());
        $statement->setFetchMode(\PDO::FETCH_CLASS, 'Tudublin\\Movie');
        $statement->execute();

        $movies = $statement->fetchAll();

        return $movies;
    }
}
