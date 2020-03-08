<?php

class Load extends Config{
    
    public function model($model){
        $model = $model."_Model";
        include_once Config::$root."/models/$model.php";   
        return new $model;  
    }

    public  function view($view,$data=array()){
        include_once Config::$root."/views/$view.php";
    }
}