<?php
                    // echo "hello";
require 'functions.php';
require 'Database.php';
// require 'router.php';

 
$db = new Database(); 
// $posts=  $db->query("select * from posts");
$posts=  $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);
dd($posts);

// foreach ($posts as $post){
//     echo "<li>" . $post['title'] . "</li>";
// }








//DEMO 
//connnect to mySql database
// class  Person
// {
//     public $name;
//     public $age;
    
//     public function breathe(){
//         echo "breathng";
//         echo $this->name . " is breathng";
//     }
// }

// $person = new Person();
// $person-> name =  "John Doe";
// $person-> age = 25;

// dd($person->breathe());

// dd($_SERVER);  