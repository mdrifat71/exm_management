<?php

class Question extends Controller{
    public function __construct(){
        //echo "this is from question controller";
    }
    
    public function default(){
        echo "this is default from question";
        echo $this->root;
    }
}