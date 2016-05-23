<?php


class Controller{
    
    public  $view;
    function __construct() {
        echo '<br/>This is base controller<br/>';
        $this->view = new view();
    }
    
}