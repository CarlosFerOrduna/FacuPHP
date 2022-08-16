<?php

class Controller {

    public function __construct() {
        echo '<p>Base</p>';

        $this->view = new View();
    }

}
