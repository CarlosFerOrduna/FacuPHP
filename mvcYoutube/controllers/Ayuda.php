<?php

require_once 'libs/Controller.php';

class Ayuda extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->render('ayuda/index');
    }

}
