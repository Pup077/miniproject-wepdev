<?php 
    //เชื่อมต่อฐานข้อมูล
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'my_searching');

class DB_con {

function __construct() {
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    $this->dbple = $conn;

    if (mysqli_connect_errno()) {
        echo "Failed connect to MySQL : " . mysqli_connect_error();
    }
}

public function insertemp($em_id, $em_firstname, $em_lastname, $em_email, $em_phone, $em_address, $id) {
    $result = mysqli_query($this->dbple, "INSERT INTO tbemp(em_id, em_firstname, em_lastname, em_email, em_phone, em_address, id) 
    VALUES('$em_id', '$em_firstname', '$em_lastname', '$em_email', '$em_phone', '$em_address', '$id')");
    return $result;
}

public function fetchempdata() {
    $result = mysqli_query($this->dbple, "SELECT * FROM tbemp");
    return $result;
}

public function fetchemponerecord($userid) {
    $result = mysqli_query($this->dbple, "SELECT * FROM tbemp WHERE em_id = '$userid'");       
    return $result;
}    

public function updateemp($em_id, $em_firstname, $em_lastname, $em_email, $em_phone, $em_address, $id, $userid) {
    $result = mysqli_query($this->dbple, "UPDATE tbemp SET 
        em_id = '$em_id',
        em_firstname = '$em_firstname',
        em_lastname = '$em_lastname',
        em_email = '$em_email',
        em_phone = '$em_phone',
        em_address = '$em_address',
        id = '$id'
        WHERE em_id = '$userid'
    ");
    return $result;
}

public function deleteemp($userid) {
    $deleterecord = mysqli_query($this->dbple, "DELETE FROM tbemp WHERE em_id = '$userid'");
    return $deleterecord;
}

}

?>