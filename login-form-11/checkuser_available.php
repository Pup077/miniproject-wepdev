<?php

    include_once('funct.php');

    $usernamecheck = new DB_god();


    $uname = $_POST['username'];

    $sql = $usernamecheck->usernameavailable($uname);

    $num = mysqli_num_rows($sql);

    if ($num > 0) {
        echo "<span style='color: red;'>Usernaem already associated with another account.</span>";
        echo "<script>$('#submit').prop('disabled', true);</script>";
    } else {
        echo "<span style='color: green;'>Usernaem available for registration.</span>";
        echo "<script>$('#submit').prop('disabled', false);</script>";
    }

?>