<?php

    include_once('../login-form-11/funct.php'); //เอาคำสั่งจากfunction

    if (isset($_GET['em_id'])) { //รับค่า user
        $userid = $_GET['em_id']; 
        $deletedata = new DB_con(); //ตั้งตัวแปรใหม่
        $sql = $deletedata->deleteemp($userid); //เข้าถึงฟังกชั่น delet และลบข้อมูล

        if ($sql){ //เช็คความถูกต้อง
            echo "<script>alert('Record Deleted Successfully!');</script>";
            echo "<script>window.location.href='from.php'</script>";
        }
    }

?>