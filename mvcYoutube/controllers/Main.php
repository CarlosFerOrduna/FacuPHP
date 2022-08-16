<?php

require_once 'libs/Controller.php';

class Main extends Controller{

    public function __construct() {
        parent::__construct();
        $this->view->render('main/index');
        echo '<p>Main</p>';
    }

    public function saludo() {

        echo '<p>saludo</p>';
    }

}
