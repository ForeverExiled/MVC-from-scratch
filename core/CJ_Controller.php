<?php
class CJ_Controller
{
    function __construct() {
        echo 'CJ_Controller created.';
    }

    function load_view($view, $args) {
        foreach ($args as $name => $value) {
            $$name = $value;
        }
        require 'view/'.$view.'.php';
    }
}
