<?php
require 'core/CJ_Controller.php';
require 'model/Test.php';

class Test extends CJ_Controller
{
    private $test_model;
    
    function __construct() {
        echo 'CLASS CREATED.'.'<br>';

        $this->test_model = new TestModel();
    }

    function hello_get(...$args) {
        $this->test_model->say_hello('CJ_Model');
    }

    function hello_post(...$args) {
        echo 'Hello, World! From POST.';
    }

    function test_get() {
        $this->load_view('home', ['content' => '<h1>Hello, World!</h1>']);
    }
}
