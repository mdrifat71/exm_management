<?php

class Load extends Config{
    
    public function model($model){
        include_once "$this->root/models/$model.php";
        return new $model;
    }

    public  function load_view($view,$data=array()){
        include_once "$this->root/views/$view.php";
    }
}