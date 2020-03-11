<?php

class Database extends Config{
    public static $connection;

    public static function connect($dsn, $user, $password){
       try{
           self::$connection = new PDO($dsn, $user, $password);
           self::$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           self::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
       }catch(PDOException $e){
            echo "<pre>";
            print_r($e);
            echo "</pre>";
       }
        
    }


    //basic query

    public function select($query,$data = array()){
        $stmt = self::$connection->prepare($query);
        if(!empty($data)){
             $stmt->execute($data);
        }else{
             $stmt->execute();
        }
        return $result = $stmt->fetchAll();
    }

    public function insert($sql,$data = NULL){
        $stmt = self::$connection->prepare($sql);
        if($data != NULL){
            print_r($data);
            return $stmt->execute($data);
        }else{
            return  $stmt->execute();
        }
        
    }

}

