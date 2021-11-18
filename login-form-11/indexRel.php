<?php
    include_once('funct.php');

    $userdata = new DB_god();

    if (isset($_POST['submit'])) {
        $fname = $_POST['fullname'];
        $uname = $_POST['username'];
        $uemail = $_POST['email'];
        $password = $_POST['password'];

        $sql = $userdata->registration($fname, $uname, $uemail, $password);

        if ($sql) {
            echo "<script>alert('Registor Successful!');</script>";
            echo "<script>window.location.href='login.php'</script>";
        } else {
            echo "<script>alert('Samething went wrong! Please try ageain.');</script>";
            echo "<script>window.location.href='indexlogin.php'</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <h1 class="mb-5">Register Page</h1>
    <hr>
    <form method="post">
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="username" name="fullname">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" class="form-control" id="username" name="username" onblur="checkusername
            (this.value)"> 
            <span id="usernameavailable"></span>
        </div>
        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-success">Register</button>
    </form>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
	  function checkusername(val) {
		  $.ajax({
			  type: 'POST',
			  url: 'checkuser_available.php',
			  data: 'username='+val,
			  success: function(data) {
				  $('#usernameavailable').html(data);
			  }
		  });
	  }
  </script>

    <script src="../js/bootstrap.min.js"></script>
</body>
</html>