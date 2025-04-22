<?php
use Models\Book;
use Repositories\Repository;

class BookRepository extends Repository{

   private $connection;
   private $repo;

   public function __construct()
   {
       $this->repo = new Repository;
       $this->connection = $this->repo->dbConnect();
   }

   public function getAllBooks()
   {
        //get all books
        $stmt = $this->connection->prepare("SELECT id, book_name, category_id, `image`, `date`, author, `description`, price FROM Book");
        $stmt->execute();
        $book = array();
        foreach ($stmt as $row) {
            $book[] = array(new Book($row['id'], $row['book_name'], $row['category_id'], $row['image'], $row['date'], $row['author'], $row['description'], $row['price']));;
        }
        return $book;
   }

   public function getBookById($id)
   {
    $stmt = $this->connection->prepare("SELECT id, book_name, category_id, `image`, `date`, author, `description`, price FROM Book WHERE id = :id");
    $stmt->execute(["id"=> $id]);
    $book = array();
    while (($row = $stmt->fetch(PDO::FETCH_ASSOC))) {
        $book[] = array(new Book($row["id"], $row["book_name"], $row["category_id"], $row["image"], $row["date"], $row["author"], $row["description"], $row['price']));
    }
    return $book;
   }
}