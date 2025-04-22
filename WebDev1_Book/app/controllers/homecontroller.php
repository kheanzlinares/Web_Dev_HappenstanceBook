<?php
namespace Controllers;
use Services\BookService;


class HomeController {

    private $bookService;

    public function __construct()
    {
        $this->bookService = new BookService();
    }

    public function books()
    {
        include __DIR__ ."/../views/navigation.php";
        $books = $this->bookService->getAllBooks();
        include __DIR__ . '/../views/home.php';
    }

    public function getBookById()
    {
        if(isset($_POST['submit'])){
            $id = $_POST['bookId'];
        }
        $books = $this->bookService->getBookById($id);
        include __DIR__ .('/../views/bookdetails.php');
    }
}