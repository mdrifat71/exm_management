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
            $opt1 = $_POST['opt1'];
            $opt2 = $_POST['opt2'];
            $opt3 = $_POST['opt3'];
            $opt4 = $_POST['opt4'];
            $test_id = $_POST['test'];
            $correct_ans = $_POST['correct'];
            $question_model = $load->model('Question');
            
            $question_model->insert(array($question_id,$question_name,$correct_ans,$test_id));
            
            //option handelling
            $opt_model = $load->model('Opt');
            $options = array($opt1,$opt2,$opt3,$opt4);
            $i=1;
            foreach($options as $option){
                $option_id =md5(uniqid());
                $opt_model->insert(array($option_id, $option, $i, $question_id));
                $i++;
            }
            
        }
        else
        {
            
            $model = $load->model('Test');
            $data = $model->selectAll();
            $load->view('add_question',$data);
        }
    }
}