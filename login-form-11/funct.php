<?php

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'my_searching');

    class DB_GOD {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbgod = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect,error();
            }
        }

        public function usernameavailable($uname) {
            $checkuser = mysqli_query($this->dbgod, "SELECT username FROM tbl_user WHERE username = 
            '$uname'");
            return $checkuser;
        }

        public function registration($fname, $uname, $uemail, $password) {
            $reg = mysqli_query($this->dbgod, "INSERT INTO tbl_user(fullname, username, useremail, password) 
            VALUES('$fname', '$uname', '$uemail', '$password')");
            return $reg;
        }

        public function signin($uname, $password) {
            $signinquery = mysqli_query($this->dbgod, "SELECT id, fullname FROM tbl_user WHERE username = 
            '$uname' AND password = '$password'");
            return $signinquery;
        }
    }

class DB_con {

    function __construct() {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbcon = $conn;
    
        if (mysqli_connect_errno()) {
            echo "Failed connect to MySQL : " . mysqli_connect_error();
        }
    }
    
    public function insertemp($em_id, $em_pre, $em_firstname, $em_lastname, $em_email, $em_phone, $em_address, $id) {
        $result = mysqli_query($this->dbcon, "INSERT INTO tbemp (em_id, em_pre, em_firstname, em_lastname, em_email, em_phone, em_address, id) 
        VALUES('$em_id', '$em_pre', '$em_firstname', '$em_lastname', '$em_email', '$em_phone', '$em_address', $id)");
        return $result;
    }
    
    public function fetchempdata() {
        $result = mysqli_query($this->dbcon, "SELECT * FROM tbemp");
        return $result;
    }
    
    public function fetchemponerecord($userid) {
        $result = mysqli_query($this->dbcon, "SELECT * FROM tbemp WHERE em_id = '$userid'");       
        return $result;
    }    
    
    public function updateemp($em_id, $em_pre, $em_firstname, $em_lastname, $em_email, $em_phone, $em_address, $id) {
        $result = mysqli_query($this->dbcon, "UPDATE tbemp SET 
            em_id = '$em_id',
            em_pre = '$em_pre',
            em_firstname = '$em_firstname',
            em_lastname = '$em_lastname',
            em_email = '$em_email',
            em_phone = '$em_phone',
            em_address = '$em_address'
            WHERE  id = $id
        ");
        return $result;
    }
    
    public function deleteemp($userid) {
        $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tbemp WHERE em_id = '$userid'");
        return $deleterecord;
    }
    
    }
    
?>