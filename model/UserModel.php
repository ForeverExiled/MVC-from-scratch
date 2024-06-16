<?php
require 'core/CJ_Model.php';

class UserModel extends CJ_Model
{
    public function __construct() {
        parent::__construct();
    }

    function all() {
        return $this->read('users', ['*'], null);
    }

    function get($id) {
        return $this->read('users', ['*'], ['id' => $id]);
    }
}
