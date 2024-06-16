<?php
require 'core/CJ_Model.php';

class Test extends CJ_Model
{
    function __construct() {
        parent::__construct();
        echo 'Test Model CREATED <br>';
    }

    function say_hello($name) {
        echo 'Welcome to '.$name;
    }
}
