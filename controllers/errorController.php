<?php


class errorController extends Controller {

    function __construct() {
        echo '<br/>Entered file is not found.';
        //die();
        parent::__construct();
        $this->view->render('error/error');
    }
    
}