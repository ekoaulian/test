<?php

class Database
{
    private $conn;

    function __construct()
    {
        $this->getConnection();
    }

    public function getConnection()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'test_oop');

        if(mysqli_connect_error())
        {
            die("Failed to connect database : " . mysqli_connect_error() . mysqli_connect_errno());
        }
    }

    public function filterString($str)
    {
        return mysqli_real_escape_string($this->conn, $str);
    }

    public function create($table, $rows)
    {
        $fields = "";
        $data = "";
        
        foreach ($rows as $key => $value) {
            $fields .= ($fields == "") ? $key : ','.$key;
            $data .= ($data == "") ? '"'.$value.'"' : ',"'.$value.'"';
        }

        $query = "INSERT INTO ".$table." (".$fields.") VALUES (".$data.")";
        return $this->raw($query);
    }

    public function update($table, $rows, $where = null)
    {
        $set = "";
        
        foreach ($rows as $key => $value) {
            $set .= ($set == "") ? $key."='".$value."'" : ",".$key."='".$value."'";
        }

        $query = "UPDATE ".$table." SET ".$set.((trim($where) != null) ? " WHERE ".$where : "");
        return $this->raw($query);
    }

    public function delete($table, $where = null)
    {
        $query = "DELETE FROM ".$table.((trim($where) != null) ? " WHERE ".$where : "");
        return $this->raw($query);
    }

    public function get($table, $select = null, $options = null)
    {
        $query = "SELECT ".((trim($select) != null) ? $select : "*")." FROM ".$table.((trim($options) != null) ? " ".$options : "");
        $execute = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
        $data = mysqli_fetch_all($execute, MYSQLI_ASSOC);

        return $data;
    }

    public function first($table, $options = null)
    {
        $query = "SELECT * FROM ".$table.((trim($options) != null) ? " ".$options : "");
        $execute = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
        $data = mysqli_fetch_assoc($execute);
        
        return $data;
    }

    public function count($table)
    {
        $query = "SELECT * FROM ".$table;
        $execute = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
        $data = mysqli_num_rows($execute);

        return $data;
    }

    public function raw($query)
    {
        if(mysqli_query($this->conn, $query) or die(mysqli_error($this->conn)))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

$db = new Database();
$db->getConnection();