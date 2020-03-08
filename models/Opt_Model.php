<?php

class Opt_Model extends Model{
    private $table = "opt_tbl";
    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        $sql = "INSERT INTO `$this->table` (`option_id`,`option_name`,`opt_number`,`question_id`) values (?,?,?,?)";
        return Database::insert($sql, $data);
    }
}