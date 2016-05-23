<?php

class Bootstrap extends Controller {

    function __construct() {
        
        $url = $_GET['url'];
        $url = rtrim($url,'/');
        $url = explode('/',$url);

       // print_r($url);

        $file = 'controllers/'.$url[0].'.php';

        if (file_exists($file)) {
            require_once $file;
            $controller = new $url[0]();
            if (isset($url[1])) {
                $controller->$url[1]();
            }
            if (isset($url[2])) {
                $controller->$url[1]($url[2]);
            }
        } else {
            echo '<br/>else part';
            require_once 'controllers/errorController.php';
            $error = new errorController();
            die();
        }
        
    }

}


?>