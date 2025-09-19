<?php 
// database root password is mahammad 123  
$uri =parse_url( $_SERVER['REQUEST_URI'])['path'];


// Route 1st method 
// if($uri === '/'){
//     require 'controllers/index.php';
// } else if 
//      ($uri === '/about'){
//         require 'controllers/about.php';
//      }else if($uri === '/contact'){
//         require 'controllers/contact.php';
//      }


// Route 2nd method 
     $routes = [
      '/' => 'controllers/index.php',
      '/about' => 'controllers/about.php',
      '/notes' => 'controllers/notes.php',
      '/note' => 'controllers/note.php',
      '/contact' => 'controllers/contact.php',
     ];

   
     

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

   routeToController($uri,$routes);