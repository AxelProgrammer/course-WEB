<?php

class DB {
    private $address = '127.0.0.1';
    private $login = 'root';
    private $pass = '';
    private $db = 'ks20_test';
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

class DB2 {
    private $address = '127.0.0.1';
    private $login = 'root';
    private $pass = '';
    private $db = 'ks20_kr';
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

class DB3 {
    private $address = '127.0.0.1';
    private $login = 'root';
    private $pass = '';
    private $db = 'ks20_users';
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

    function insertUser($username, $useremail, $usermessage) {
        $this->mysql->query("INSERT INTO `users` (`name`, `email`, `message`) VALUES ('$username', '$useremail', '$usermessage')");
    }
}

$DB3 = new DB3();
$DB2 = new DB2();
$DB = new DB();
