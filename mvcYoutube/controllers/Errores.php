<?php

require_once 'libs/Controller.php';

class Errores extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->render('error/index');
        echo 'Error';
    }

}
