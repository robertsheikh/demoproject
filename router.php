<?php 

$routes = require('routes.php');
// database root password is mahammad 123  

     function routeToController($uri,$routes){
      if(array_key_exists($uri,$routes)){
         require $routes[$uri];
        }else{
         abort();
        }
     }

     function abort ($code = 404){
      http_response_code($code);
      // echo "Sorry Not Found";
      require 'views/{code}.php';
      die();
     }

$uri =parse_url( $_SERVER['REQUEST_URI'])['path']; 

 routeToController($uri,$routes);