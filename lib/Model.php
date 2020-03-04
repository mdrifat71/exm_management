<?php

class Model extends Config{
    public function __construct(){
        include_once "$this->root/lib/Database.php";
    }

    public function select(){
        $query = "Select * from Test";
        $result = Database::select($query);
        print_r($result);
    }
}