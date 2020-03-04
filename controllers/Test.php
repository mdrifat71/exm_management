<?php

class Test extends Controller{
    public function __construct(){
        //parent::__construct();
    }

    public function default(){
        echo "this is default";
    }

    public function all(){
        $model = new Load();
        $model = $model->model('Test');
        
    }
}