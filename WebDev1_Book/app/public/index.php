<?php
require_once('/app/routers/switchrouter.php');
require_once('/app/vendor/autoload.php');

$uri = trim($_SERVER['REQUEST_URI'], '/');
$method = $_SERVER['REQUEST_METHOD'];
$path = explode('/',$uri);

if(count($path)>1){
$uri = $path[0];
$path = $path[1];
} else {
    $path = null;
}
$router = new SwitchRouter();
$router->route($uri,
$method,
strcasecmp($method,'post')==0
? file_get_contents('php://input'): null,
$path
);
