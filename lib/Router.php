<?php 

class Router extends Config{
    
    private $url;
    private $controller ;
    public function __construct($url){
        $data = array_slice($url, 2, count($url) - 2);
        $url[0] = ucwords($url[0]);
        $controller_path = Config::$root."/controllers/".$url[0].".php";  //this->root comes from Config

        if (file_exists($controller_path)){
            if (class_exists($url[0])){
                $this->controller = new $url[0];
                if (!empty($url[1])){
                    if(method_exists($this->controller,$url[1])){
                        $this->controller->{$url[1]}($data);   
                    }else{
                        $this->controller->default();
                    }
                }else{
                    $this->controller->default();
                }
                exit(); //if class is founded then function will terminate
            }
        }else{
            echo "file not found";
        }
        //this block will execute if class not found
        $this->controller = new Home;
        $this->controller->default();
    }

}