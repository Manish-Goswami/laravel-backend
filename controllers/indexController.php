<?php
class indexController extends Controller {

    
    function __construct($arg = '') {
        echo 'I am index controller';
        echo '<br/>';
        parent::__construct();
        echo $arg;
    }
    public function emp($arg = 'Default'){
        echo '<br/> This is EMP function here.';
        echo '<br/>';
        $this->view->render('emp/emp');
    }
    
    public function count(){
        echo '<br/>Errror func.';
        $this->view->render('emp/emp');
    }
    
}