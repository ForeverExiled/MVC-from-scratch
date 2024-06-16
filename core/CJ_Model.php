<?php
require __DIR__.'/database/CJ_Connection.php';

class CJ_Model
{
    private $connection;

    public function __construct() {
        echo 'CJ_Model class created <br>';
        $db = new CJ_Connection();
        $this->connection = $db->get_connection();
    }

    function create(string $table, $columns) {
        $values = implode(',', array_values($columns));
        $columns = implode(',', array_keys($columns));
        $query = "insert into $table($columns) values($values);";
        echo $query.'<br>';

        $result = $this->connection->query($query);
        if ($result) {
            return $result;
        }
        else {
            return 'Error at CJ_Model/create';
        }
    }

    function read(string $table, $columns, $filter) {
        $columns = implode(',', array_values($columns));
        $query = "select $columns from $table";
        if ($filter) {
            $query = $this->where($query, $filter);
        }
        $query .= ';';

        echo $query.'<br>';

        $result = $this->connection->query($query);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return 'Error at CJ_Model/read';
        }
    }

    function update(string $table, $entities, $filter) {
        $query = "update $table set ";
        foreach ($entities as $column => $value)

    		$query .= "$column = $value,";

    	$query=rtrim($query, ',');

        if ($filter) {
            $query = $this->where($query, $filter);
        }

        $query .= ';';
        
        echo $query.'<br>';

        $result = $this->connection->query($query);
        if ($result) {
            return $result;
        } else {
            return 'Error at CJ_Model/update';
        }
    }

    function delete(string $table, $filter) {
        $query = "delete from $table";

        if ($filter) {
            $query = $this->where($query, $filter);
        }

        $query .= ';';

        $result = $this->connection->query($query);

        if ($result) {
            return $result;
        } else {
            return 'Error at CJ_Model/delete';
        }
    }

    function where($query, $filter) {
        $query .= " where ";

        foreach ($filter as $column => $value)
    		$query .= "$column = $value AND ";

    	$query=rtrim($query, "AND ");

        return $query;
    }
}

