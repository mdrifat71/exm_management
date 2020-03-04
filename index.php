<?php
include_once 'lib/Config.php';
include_once 'lib/Controller.php';
include_once '/lib/Model.php';
include_once 'lib/Database.php';
include_once 'lib/Load.php';
include_once 'lib/Router.php';

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
    $url[0] = empty($url) ? 'Home' : $url[0];
    
    new Router($url);
}

