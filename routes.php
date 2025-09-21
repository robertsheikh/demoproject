<?php 
// Route 1st method 
return   [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/notes/create' => 'controllers/note-create.php',
    '/contact' => 'controllers/contact.php',
   
];


   

// Route 2nd method 
// if($uri === '/'){ 
//     require 'controllers/index.php';
// } else if 
//      ($uri === '/about'){
//         require 'controllers/about.php';
//      }else if($uri === '/contact'){
//         require 'controllers/contact.php';
//      }

