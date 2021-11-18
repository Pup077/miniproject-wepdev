<?php
	session_start();
	include_once('funct.php');

    $userdata = new DB_god();

	if (isset($_POST['login'])) {
		$uname = $_POST['username'];
		$password = $_POST['password'];

		$result = $userdata->signin($uname, $password);
		$num = mysqli_fetch_array($result);

		if ($num > 0) {
			$_SESSION['id'] = $num['id'];
			$_SESSION['fname'] = $num['fullname'];
			echo "<script>alert('login Successful!');</script>";
            echo "<script>window.location.href='/miniprojack/index.php'</script>";
		} else {
			echo "<script>alert('Something went wrong! Please try Agine.');</script>";
            echo "<script>window.location.href='login.php'</script>";
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
    <h1 class="mb-5">Login User</h1>
    <hr>
    <form method="post">
        <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" class="form-control" id="username" name="username" onblur="checkusername
            (this.value)"> 
            <span id="usernameavailable"></span>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <a href="/miniprojack/index0.html" class="btn btn-primary">กลับ</a>
        <button type="submit" name="login" class="btn btn-primary">Login</button>
        <a href="../login-form-11/indexRel.php" class="btn btn-primary">สมัครสมาชิก</a>
    </form>
  </div>

    <script src="../js/bootstrap.min.js"></script>
</body>
</html>