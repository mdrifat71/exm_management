<?php

class Test_Model extends Model{
    private $table = "Test";
    public function __construct(){
        parent::__construct();

    }

    public function insert($test_name){
        $test_id = md5(uniqid());
        $data = [$test_id,$test_name];
        $sql = "INSERT INTO `$this->table` (`test_id`, `test_name`, `test_date`) VALUES (?, ?, current_timestamp())";
        echo $sql;
        return Database::insert($sql,$data);
    }
}