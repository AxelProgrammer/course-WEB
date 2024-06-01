<?php

class DBVALUE {
    private $address = '127.0.0.1';
    private $login = 'root';
    private $pass = '';
    private $db = 'obj';
    private $mysql;

    function __construct() {
        $this->mysql = new mysqli($this->address, $this->login, $this->pass, $this->db);
    }

    function selectAll ($table) {
        $dbObj = $this->mysql->query('SELECT * FROM ' . $table);

        $result = [];
        while ($row = $dbObj->fetch_assoc()) {
            $result[] = $row;
        }

        return $result;
    }

}

$DBVALUE = new DBVALUE();
