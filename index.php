<?php
require 'controllers/Controller.php';
require 'router/router.php';

$controller = new Controller();
$router = new router();

$router->get('/','list');
$router->post('/create','create');
$router->delete('/delete','delete');
$router->get('/view','view');
$router->patch('/edit','edit');



$router->routecheck();

