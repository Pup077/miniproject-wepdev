<?php

function check_login($conn){
    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $sql = "SELECT * from tbl_admin where id = '$id' limit 1;";
        $res = $conn->query($sql);
        if($res !== false && $res->num_rows > 0)
        {
            $user_data = $res->fetch_assoc();
            return $user_data;
        }
    }
    //redirect to login
    header("Location: login.php");
    die;
}
