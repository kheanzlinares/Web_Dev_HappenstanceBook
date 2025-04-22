<?php
namespace Controllers;
use Services\CartService;


class CartController {

    private $cartService;

    public function __construct()
    {
        $this->cartService = new CartService();
    }

    public function cart()
    {
        include __DIR__ ."/../views/navigation.php";
        $books = $this->cartService->getAllCartItem();
        include __DIR__ . '/../views/shoppingcart.php';
    }
}