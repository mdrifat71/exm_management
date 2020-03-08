<?php

class Test extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function default(){
        echo "this is default";
    }

    public function all(){
        $load = new Load();
        $model = $load->model('Test');
        $data = $model->selectAll();
        $load->view('all_test', $data);
       
    }

    public function add_test(){
        $load = new Load();
        if(empty($_POST)){
            $load->view('add_test');
        }else{
            $model = $load->model('Test');
            $test_name = $_POST['test_name'];
            if($model->insert($test_name)){
                echo "success";
            }else{
                echo "failed";
            }
        }
    }
}