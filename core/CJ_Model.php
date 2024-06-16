<?php
require __DIR__.'/database/CJ_Connection.php';

class CJ_Model
{
    public function __construct() {
        echo 'CJ_Model class created <br>';
        $db = new CJ_Connection();
        $this->connection = $db->get_connection();
    }

    function create(string $table, $insert_data) {
        
    }

    function read(string $table, $args, $filter) {
        
    }

    function update(string $table, $entity, $filter) {
        
    }

    function delete(string $table, $filter) {
        
    }

    function where($sql, $filter) {
        
    }
}

