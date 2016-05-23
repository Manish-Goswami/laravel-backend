<?php

class View {

    function __construct() {
        echo "This is view class constructor";
    }
    public function render($name){
        require_once 'views/'.$name.'.php';
    }
}