<?php 
                  //connect to the database, and execute a query.
class Database{
    public $connection;
    public function __construct(){
                                   // dd('hi there');
                                  //connect to Mysql database
    $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=mahammad123;charset=utf8mb4";
                                 //    $pdo = new PDO($dsn);
    $this->connection = new PDO($dsn, 'root', '', []);
        }
    public function query($query){
                
                      
                     
                                  // $statement = $pdo->prepare("select * from posts");
                        // $statement = $pdo->prepare($query);
    $statement = $this->connection->prepare($query);
    $statement->execute();
                    //    return $statement->fetchAll(PDO::FETCH_ASSOC);
    return $statement;
                                 // dd($posts); 
    }
        }
                