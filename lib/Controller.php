<?php

class Controller extends Config{
    public function __construct(){
        include_once Config::$root."/lib/Load.php";
    }
}