<?php

class SwitchRouter {
    public function route($uri, $method, $body, $path) {    
        // using a simple switch statement to route URL's to controller methods
        $uri = trim($uri, '/');

        if (empty($uri)) {
            $uri = 'home';
        }
        switch($uri) {

            case 'home': 
                require_once('/app/controllers/homecontroller.php');
                $controller = new Controllers\HomeController();
                $controller->books();
                break;

            case 'book':
                require_once('/app/controllers/homecontroller.php');
                $controller = new Controllers\HomeController();
                $controller->getBookById();
                break;

            case 'shoppingcart':
                require_once('/app/controllers/cartcontroller.php');
                $controller = new Controllers\CartController();
                $controller->cart();
                break;

            case 'login':
                require_once('/app/controllers/usercontroller.php');
                $controller = new Controllers\UserController();
                $controller->login();
                break;

            case 'register':
                require_once('/app/controllers/usercontroller.php');
                $controller = new Controllers\UserController();
                $controller->register();
                break;

            case 'profile':
                require_once('/app/controllers/usercontroller.php');
                $controller = new Controllers\UserController();
                $controller->profile();
                break;

            case 'updateUserName':
                require_once('/app/controllers/usercontroller.php');
                $controller = new Controllers\UserController();
                $controller->updateUserName();
                break;

            case 'deleteUser':
                require_once('/app/controllers/usercontroller.php');
                $controller = new Controllers\UserController();
                $controller->deleteUser();
                break;
    
            default:
            http_response_code(404);
            break;
            }
        }
    }