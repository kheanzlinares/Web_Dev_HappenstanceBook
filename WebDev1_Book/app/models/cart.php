<?php
namespace Models;
use JsonSerializable;
class Cart implements JsonSerializable{
    private $cart_id;
    private $book_id;
    
    public function __construct($cart_id, $book_id){
        $this->cart_id = $cart_id;
        $this->book_id= $book_id;
    }
    public function getBookId() : int
    {
        return $this->book_id;
    }
    public function getCart_Id() : string
    {
        return $this->cart_id;
    }
    
    public function setBookId() : int
    {
        return $this->book_id;
    }
    public function setCart_Id() : string
    {
        return $this->cart_id;
    }

    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
}
