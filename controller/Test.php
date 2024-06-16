<?php
require 'core/CJ_Controller.php';

class Test extends CJ_Controller
{
    function __construct() {
        echo 'CLASS CREATED.'.'<br>';
    }

    function hello_get(...$args) {
        echo 'Hello, World! From GET.';
    }

    function hello_post(...$args) {
        echo 'Hello, World! From POST.';
    }
}
