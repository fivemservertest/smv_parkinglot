<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'smv');

class DB_con {

    function __construct() {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbcon = $conn;

        if (mysqli_connect_error()) {
            echo "Failed to connect to MySQL :" . mysqli_connect_error();
        }
    }
    public function insert( $firstname, $lastname, $phonenumber, $arrivaltime, $departuretime, $reason) {
        $result = mysqli_quert ($this->dbcon, "INSERT INTO parkinglot(firstname, lastname, phonenumber, arrivaltime, departuretime, reason) 
        VALUES('$firstname', '$lastname', '$phonenumber', '$arrivaltime', '$departuretime', '$reason')");
        return $result;
    }


    public function fetchdata() {
        $result = mysqli_query($this->dbcon, "SELECT * FROM parkinglot");
        return $result;
    }

    public function delete($reqid) {

        $deleterecord = mysqli_query($this->dbcon, "DELETE FROM parkinglot where id = '$reqid'");
        return $deleterecord;
    }
}

?>