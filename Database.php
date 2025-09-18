<?php 
class Database{
    public $connection;
    public function __construct($config, $username='root', $password='mahammad123')
        {
                       //1st method    
    $dsn = ('mysql:' . http_build_query($config, '',';'));
                       //2nd method
    // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};password={$config['password']};charset={$config['charset']}";
    $this->connection = new PDO($dsn, $username, $password, [
        PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
    ]);
}
    public function query($query, $params = []){
                
    $statement = $this->connection->prepare($query);
    $statement->execute($params);
    return $statement;
    }
        }
                