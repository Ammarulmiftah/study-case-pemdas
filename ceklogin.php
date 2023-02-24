<?php
    $user = $_POST['username'];
    $pass = $_POST['password']; 

    if ($user == "user" && $pass == "smkn2bjm") {
        # code...
        header("location: dashboard.php");
    }else{
        echo("Gagal");
    }

?>