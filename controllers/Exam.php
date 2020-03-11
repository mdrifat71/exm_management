<?php

class Exam extends Controller{
    public function __construct(){
       
    }

    public function take($test){
        $load = new Load();
        
        $question_model = $load->model('Question');
        $data = $question_model->selectByTest($test);
        $load->view("exm", $data);
    }
}