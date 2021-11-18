<?php

    session_start();

    if ($_SESSION['id'] == "") {
        header("location: /miniprojack/login-admin/login.php");
    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fromemp Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="#" class="navbar-brand">วัคซีน COVID-19</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">หน้าแรก</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">เกี่ยวกับ</a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <li><a class="dropdown-item" href="#">ข้อมูลวัคซีน</a></li>
                         <li><a class="dropdown-item" href="#">COVID-19</a></li>
                         <li><a class="dropdown-item" href="#">ผลข้างเคียงวัคซีน</a></li>
                         </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">บริการ</a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <li><a class="dropdown-item" href="./api.php">รายงาน COVID-19 รายวัน</a></li>
                         <li><a class="dropdown-item" href="./PHP_Searching-master">ค้าหาสถานที่ฉีดวัคซีน</a></li>
                         <li><a class="dropdown-item" href="./map.html">แผนที่แหล่งฉีดวัคซีน</a></li>
                         </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ติดต่อ</a>
                    </li>
                    <li class="nav-item">
                        <a href="/miniprojack/login-admin/logout.php" class="btn btn-danger">logout</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="container">
    <hr>
    <h1 class="mt-5 text-black">รายชื่อจอง</h1>    
    <table id="mytable" class="table table-bordered table-striped table-hover table-secondary">
        <thead>
            <th width="4%" class="bg-primary text-white">รหัส</th>
            <th width="5%" class="bg-primary text-white">คำนำหน้า</th>
            <th width="7%"class="bg-primary text-white">ชื่อ</th>
            <th width="7%"class="bg-primary text-white">นามสกุล</th>
            <th width="7%"class="bg-primary text-white">อีเมล</th>
            <th width="7%"class="bg-primary text-white">เบอร์โทร</th>
            <th width="10%"class="bg-primary text-white">ที่อยู่</th>
            <th width="2%"class="bg-primary text-white">ลำดับ</th>
            <th width="2%"class="bg-primary text-white">Edit</th>
            <th width="2%"class="bg-primary text-white">Delete</th>
        </thead>

        <tbody>
            <?php

                include_once('../login-form-11/funct.php');
                $fetchempdata = new DB_con();
                $sql = $fetchempdata->fetchempdata();
                while($row = mysqli_fetch_array($sql)) {
                        
              ?>

                    <tr>
                        <td><?php echo $row['em_id']; ?></td>
                        <td><?php echo $row['em_pre']; ?></td>
                        <td><?php echo $row['em_firstname']; ?></td>
                        <td><?php echo $row['em_lastname']; ?></td>
                        <td><?php echo $row['em_email']; ?></td>
                        <td><?php echo $row['em_phone']; ?></td>
                        <td><?php echo $row['em_address']; ?></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><a href="update.php?em_id=<?php echo $row['em_id']; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?em_id=<?php echo $row['em_id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

              <?php


                    }
              ?>
        </tbody>
    </table>
    </div>

    
        <!-- Footer -->
        <footer class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-muted">&copy; MilerDev 2020. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>


<?php

}
 ?>