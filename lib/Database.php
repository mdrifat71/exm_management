<?php

class Database extends Config{
    public static $connection;
    private function __construct($dsn, $user, $password){
        try{
            new PDO($dsn, $user, $password);
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
            return self::$connection;
            echo "connected";
            exit();
        }
    }


    //basic query

    public function select($query,$data = array()){
        $stmt = self::$connection->prepare($query);
        if(!empty($data)){
            $result = $stmt->execute($data);
        }else{
            $result = $stmt->execute();
        }
        return $result->fetchAll();
    }

}

