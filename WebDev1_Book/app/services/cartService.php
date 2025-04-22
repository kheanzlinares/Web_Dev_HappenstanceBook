<?php
namespace Services;
use CartRepository;
require __DIR__ . '/../repositories/cartrepository.php';

class CartService extends CartRepository {
    
    private $bookRepo;
  
    function __construct()
    {
        $this->bookRepo = new CartRepository();
    }

    public function getAllCartItem(){
        return $this->bookRepo->getAllCartItem();
    }
}
