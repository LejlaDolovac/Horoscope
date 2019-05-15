<?php 

class Database {
    function __construct(){
        $dsn = 'mysql:host=localhost;dbname=Horoskop;';
        $user = 'hororscope';
        $password = '123';
        try {
            $this->connection=new PDO($dsn, $user, $password);
        } catch (PDOException $e){
            throw $e;
        }
    }
}








?>