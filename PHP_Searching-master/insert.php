<?php

    include_once('../login-form-11/funct.php');

    $insertempdata = new DB_con();

    if (isset($_POST['insert'])) {
        $em_id = $_POST['em_id'];
        $em_pre = $_POST['em_pre'];
        $em_firstname = $_POST['em_firstname'];
        $em_lastname = $_POST['em_lastname'];
        $em_email = $_POST['em_email'];
        $em_phone = $_POST['em_phone'];
        $em_address = $_POST['em_address'];
        $id = $_POST['id'];


        $sql = $insertempdata->insertemp($em_id, $em_pre, $em_firstname, $em_lastname, $em_email, $em_phone, $em_address, $id);

        if ($sql){
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='/miniprojack/PHP_Searching-master'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertemp Page</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>

    <div class="container">
        <a href="/miniprojack/PHP_Searching-master" class="btn btn-primary">Go back</a>
        <hr>
        <h1 class="mt-5">จองวัคซีน</h1>
        <hr>
        <form action="" method="post">
                    <div class="mb-3">
                <label for="em_id" class="form-label">รหัส</label>
                <input type="text" class="form-control" name="em_id" required>
            </div>
            <div class="mb-3">
                <label for="em_pre" class="form-label">คำนำหน้า</label>
                <input type="text" class="form-control" name="em_pre" required>
            </div>
            <div class="mb-3">
                <label for="em_firstname" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="em_firstname" required>
            </div>
            <div class="mb-3">
                <label for="em_lastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="em_lastname" required>
            </div>
            <div class="mb-3">
                <label for="em_email">อีเมล</label>
                <input type="email" class="form-control" name="em_email" required>
            </div>
            <div class="mb-3">
                <label for="em_phone">โทรศัพท์</label>
                <input type="text" class="form-control" name="em_phone" required>
            </div>
            <div class="mb-3">
                <label for="em_address">ที่อยู่</label>
                <textarea name="address" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="id">ลำดับจังหวัด 1-20 </label>
                <input type="text" class="form-control" name="id" required>
            <br><button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
    </div>

    <script src="../js/bootstrap.min.js"></script>
</body>
</html>