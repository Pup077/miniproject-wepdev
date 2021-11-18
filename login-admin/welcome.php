<?php
    include("functions.php");
    include("connect.php");
    session_start();
    $user_data = check_login($conn);
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $user_data['user_name']; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>