<?php

use Models\Cart;
use Repositories\Repository;

class CartRepository extends Repository{

   private $connection;
   private $repo;

   public function __construct()
   {
       $this->repo = new Repository;
       $this->connection = $this->repo->dbConnect();
   }

   public function getAllCartItem()
   {
        //get all books
        $stmt = $this->connection->prepare("SELECT id, book_name, category_id, `image`, `date`, author, `description` FROM Book");
        $stmt->execute();
        $book = array();
        // foreach ($stmt as $row) {
        //     $book[] = array(new Cart($row['id'], $row['book_name'], $row['category_id'], $row['image'], $row['date'], $row['author'], $row['description']));;
        // }
        return $book;
   }
}