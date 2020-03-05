<?php

class Model extends Config{
    public function __construct(){
        include_once "$this->root/lib/Database.php";
        $dsn = "mysql:localhost;exm_management";
        $user ='root';
        $password = '';
        Database::connect($dsn , $user , $password);
    }

    public function selectAll(){
        $query = "Select * from Test";
        $result = Database::select($query);
        return $result;
    }
}