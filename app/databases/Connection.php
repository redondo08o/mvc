<?php

class Connection{
    private $connection;
    private $user = 'root';
    private $password = '';
    private $host = 'mysql:host=localhost;dbname=bd_sena';

    private $option =[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    public function __construct(){
        try{
            $this->connection = new PDO($this->host , $this->user  , $this->password ,$this->option);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getConnection(){
        return $this->connection;
    }
}

