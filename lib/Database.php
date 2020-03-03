<?php


class Database extends PDO{
    public static $connection;
    private function __construct($dsn, $user, $password){
        try{
            parent::__construct($dsn, $user, $password);
            echo "connected";
        }catch(PDOException $e){
            echo "not connected";
            print_r($e);
            exit();
        }
    }

    public static function connect($dsn, $user, $password){
        if(!self::$connection){
            return self::$connection;
        }else{
            self::$connection = new Database($dsn, $user, $password);
        }
    }


    //basic query

    public function select($query){
        $result = self::$connection -> prepare($query);
        
    }

}

