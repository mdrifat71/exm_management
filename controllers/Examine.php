<?php
class Examine extends Controller{
    public function check(){
        if(isset($_GET['question_id']) and isset($_GET['ans'])){
            $id = $_GET['question_id'];
            $ans = $_GET['ans'];
            $load = new Load();
            $question_model = $load->model('Question');
            $result = $question_model->selectById($id);
            if($result[0]['correct_ans'] == $ans){
                echo "correct ans";
            }else{
                echo "correct ans is ".$result[0]['op_'.$result[0]['correct_ans']];
            }
        }
    }
}