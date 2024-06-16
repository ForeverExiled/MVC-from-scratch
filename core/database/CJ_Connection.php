<?php
class CJ_Connection
{
    function __construct() {
        require 'config/database.php';
        $this->db_params = $db_params;
    }

    function get_connection() {
        $connection = new mysqli(
            $this->db_params['hostname'],
            $this->db_params['username'],
            $this->db_params['password'],
            $this->db_params['database']
        );
        if ($connection->connect_error) {
            die ("Connection failed:".$connection->connect_error);
        }
        return $connection;
    }
}
