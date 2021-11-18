<?php
session_start();
include("connect.php");
include("functions.php");
error_reporting (E_ALL ^ E_NOTICE);
$error_wrong = '';

if($_SERVER['REQUEST_METHOD'] == "POST") 
{
    //something was posted
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    if(!empty($user_name) && !empty($user_password))
    {
        //read fromdatabase
        $sql = "SELECT * from tbl_admin where user_name = '$user_name' limit 1";
        $res = $conn->query($sql);
        if($res)
        {
            if($res !== false && $res->num_rows > 0)
            {
                $user_data = $res->fetch_assoc();
                if($user_data['user_password'] == $user_password)
                {
                    $_SESSION['id'] = $user_data['id'];
                    
                    header("Location: ../PHP_Searching-master/from.php");
                    die;
                }
            }
        }
        // echo "wrong username or password";
        $error_wrong = 'wrong username or password';
    }else
    {
        echo "Please enter valid info";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mb-5">Login Admin</h1>
    <hr>
    <form method="post">
        <div class="mb-3">  
            <label for="user_name" class="form-label">User Name</label>
            <input type="text" class="form-control" id="user_name" name="user_name">
        </div>
        <div class="mb-3">
            <label for="user_password" class="form-label">Password</label>
            <input type="password" class="form-control" id="user_password" name="user_password">
        </div>
            <a href="/miniprojack/index.php" class="btn btn-primary">Go back</a>
            <button type="submit" value="login" class="btn btn-primary">Login</button>
            <!-- <a href="signup.php">Click to Signup</a> -->
        </form>
        <div style = "font-size:11px; color:#cc0000; margin-top:10px">
        <?php 
            if(!isset($error)) {
                $error = $error_wrong; 
                echo $error; 
            }        
            ?>
        </div>
        </div>
				
                </div>
                   
             </div>

        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>