<?php

class Database {
    public $connection;
    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = ('mysql:' . http_build_query($config, '', ';')); 
        // I'm using the http_build_query to get the same result but shorter
        // $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};port={$config['port']};charset={$config['charset']}";
        
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}