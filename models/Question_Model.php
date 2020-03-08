<?php

class Question_Model extends Model{
    private $table = "question_table";
    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        $sql = "INSERT INTO `$this->table` (`question_id`,`question_name`,`correct_ans`,`question_date`,`test_id`) VALUES (?, ?, ?, current_timestamp(), ?)";
        return Database::insert($sql, $data);
    }
}