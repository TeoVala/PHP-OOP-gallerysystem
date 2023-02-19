<?php

require_once ("new_config.php");
class Database {

    public $conn;
    public $db;

    function __construct(){

        // Call connection method
        $this -> db = $this->open_db_connection();
    }

    public  function open_db_connection(){

        //$this->conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        $this->conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if ($this->conn->connect_errno) {
            die("Database conn failed badly".$this->conn->connect_errno);

        }

        return $this -> conn;

    }

    public function query($sql){

        $result = $this-> db ->query($sql);

        $this ->confirm_query($result);

        return $result;

    }

    private function confirm_query($result){

        if(!$result) {

            die("Query Failed". $this-> db -> error);
        }
    }

    public function escape_string($string) {

        return $this -> db ->real_escape_string($string);


    }

    public function the_insert_id() {

        return mysqli_insert_id($this -> db);


    }

}

$database = new Database();


?>