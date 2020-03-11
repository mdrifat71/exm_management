<?php

class Question extends Controller{
    
    public function __construct(){
    
    }
    
    public function default(){
        echo "this is default from question";
       
    }

    public function add(){
        $load = new Load();
        if (!empty($_POST))
        {
            $question_name = $_POST['question'];
            $question_id = md5(uniqid());
            $op_1 = $_POST['opt1'];
            $op_2 = $_POST['opt2'];
            $op_3 = $_POST['opt3'];
            $op_4 = $_POST['opt4'];
            $test_id = $_POST['test'];
            $correct_ans = $_POST['correct'];
            $question_model = $load->model('Question');
            $question_model->insert(array($question_id,$question_name,$op_1, $op_2, $op_3, $op_4, $correct_ans,$test_id));
        }
        else
        {
            
            $model = $load->model('Test');
            $data = $model->selectAll();
            $load->view('add_question',$data);
        }
    }
}