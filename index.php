<?php

require 'functions.php';

$uri = $_SERVER_['REQUEST_URI'];

if($uri === '/'){
    require 'controllers/index.php';
} else if 
     ($uri === '/about'){
        require 'controllers/about.php';
     }else if($uri === '/contact'){
        require 'controllers/contact.php';
     }

// dd($_SERVER); 