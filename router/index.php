<?php

include_once 'Router.php';
include_once 'Request.php';

$router = new Router(new Request);


// $router->get('/a',function(){
//     return 'right';
// });

$router->get('/', function() {
    return <<<HTML
    <h1>Hello world</h1>
  HTML;
  });
