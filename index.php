<?php
include_once 'lib/Controller.php';
include_once 'lib/Model.php';
include_once 'lib/Database.php';


spl_autoload_register(function($controller){
    $path = "controllers/";
    $ext = ".php";
    $full_path = $path.$controller.$ext;
    include_once $full_path;
});


if(isset($_GET['url'])){
    $url = $_GET['url'];
    $url = rtrim($url,'/');
    $url = explode("/", $url);
    $url[0] = ucfirst($url[0]);
    if(file_exists("controllers/$url[0].php")){
        if(class_exists($url[0])){
            $controller = new $url[0];
        }else{
            echo "class not exist";
        }
    }else{
        echo "file not exist";
    }
}