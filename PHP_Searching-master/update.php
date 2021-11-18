<?php

    include_once('../login-form-11/funct.php');

    $updateempdata = new DB_con();

    if (isset($_POST['update'])) {
        $userid = $_GET['em_id']; 
        $em_pre = $_POST['em_pre'];
        $em_firstname = $_POST['em_firstname'];
        $em_lastname = $_POST['em_lastname'];
        $em_email = $_POST['em_email'];
        $em_phone = $_POST['em_phone'];
        $em_address = $_POST['em_address'];
        $id = $_POST['id'];

        $sql = $updateempdata->updateemp($userid, $em_pre, $em_firstname, $em_lastname, $em_email, $em_phone, $em_address, $id);
        
        if ($sql){
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.location.href='from.php'</script>";
        } else {
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='update.php'</script>";
        }
    }

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updateemp Page</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <a href="fromemp.php" class="btn btn-primary">Go back</a> 
        <hr>
        <h1 class="mt-5">Updateemp Page</h1>
        <hr>
        <?php

             $userid = $_GET['em_id'];  
             $updateempuser = new DB_con();
             $sql = $updateempuser->fetchemponerecord($userid);
            while($row = mysqli_fetch_array($sql)) {
    ?>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="mb-3">
                <label for="em_firstname" class="form-label">รหัส</label>
                <input type="text" class="form-control" name="em_firstname" 
                    value="<?php echo $row['em_id']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="em_pre" class="form-label">คำนำหน้า</label>
                <input type="text" class="form-control" name="em_pre" 
                    value="<?php echo $row['em_firstname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="em_firstname" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="em_firstname" 
                    value="<?php echo $row['em_firstname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="em_lastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="em_lastname" 
                    value="<?php echo $row['em_lastname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="em_email">อีเมล</label>
                <input type="email" class="form-control" name="em_email" 
                    value="<?php echo $row['em_email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="em_phone">โทรศัพท์</label>
                <input type="text" class="form-control" name="em_phone" 
                    value="<?php echo $row['em_phone']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="em_address">ที่อยู่</label>
                <textarea name="em_address" cols="30" rows="10" class="form-control" required><?php echo $row
                ['em_address']; ?></textarea>
            </div>
         
            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>