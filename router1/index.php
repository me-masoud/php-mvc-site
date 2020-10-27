<?php

include_once 'Request.php';
include_once 'Router.php';

$router = new Router(new Request);

$router->get('/', function() {
  return 'aaa';
});


$router->get('/profile', function($request) {
  return 'hi';
});

$router->post('/data', function($request) {

  return json_encode($request->getBody());
});