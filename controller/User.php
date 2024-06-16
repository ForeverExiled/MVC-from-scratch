<?php
require 'core/CJ_Controller.php';
require 'model/UserModel.php';

class User extends CJ_Controller
{
    private $model;
    
    function __construct() {
        echo 'user controller CLASS CREATED <br>';
        $this->model = new UserModel();
    }

    function hello_get() {
        echo 'Hello, World!';
    }

    function all_get() {
        $result = $this->model->get_all();
        print_r($result);
        echo json_encode($result);
    }

    function by_id_get($id) {
        $result = $this->model->get($id);
        echo json_encode($result);
    }
}
