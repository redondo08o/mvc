<?php

require_once __DIR__.'/../app/router/router.php';
require_once __DIR__.'/../routes/routes.php';
require_once __DIR__.'/../app/controllers/Controller.php';
require_once __DIR__.'/../app/databases/Connection.php';


$ruta = $_GET['slug'] ?? '';
$ruta = explode('/' , $ruta);

$ruta = $ruta[0] == '' ? '/' :$ruta[0]; 


Router::routing($routes,$ruta);