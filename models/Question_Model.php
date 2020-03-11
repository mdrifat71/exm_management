<?php

class Question_Model extends Model{
    private $table = "question_table";
    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        $sql = "INSERT INTO `$this->table` (`question_id`,`question_name`, `op_1`, `op_2`, `op_3`, `op_4` ,`correct_ans`,`question_date`,`test_id`) VALUES (?, ?,?, ?, ?, ?, ?, current_timestamp(), ?)";
        return Database::insert($sql, $data);
    }

    public function selectByTest($test){
        $sql = "select * from $this->table where `test_id` = ?";
        return Database::select($sql,$test);
    }

    public function selectById($id){
        $sql = "select * from $this->table where `question_id` = ?";
        return Database::select($sql,array($id));
    }
}