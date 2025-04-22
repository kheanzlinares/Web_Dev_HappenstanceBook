<?php
namespace Services;
use BookRepository;
require __DIR__ . '/../repositories/bookrepository.php';

class BookService extends BookRepository {
    
    private $bookRepo;
  
    function __construct()
    {
        $this->bookRepo = new BookRepository();
    }

    public function getAllBooks(){
        return $this->bookRepo->getAllBooks();
    }

    public function getBookById($id)
    {
        return $this->bookRepo->getBookById($id);
    }
}
