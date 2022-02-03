<?php

    $emm = $_POST["emm"];
    $psw = $_POST["psw"];

    $conn = mysqli_connect("localhost:3307" , "root" , "") or die("Error: cannot connect to server");


    $db = mysqli_select_db($conn , "vapestore") or die("Error: cannot connect to Database");

    $login = "SELECT email,password FROM users WHERE email = '$emm' and password = '$psw'";

    $result = mysqli_query($conn , $login);

    $count = mysqli_num_rows($result);

    if($count == 1){
        session_start();
        $_SESSION["loggedUser"] = $emm; //start a session for the current user with his email


        header('Location: Home.php');
    }

    else{
        echo '<script> alert("You Will be redirected to the register Page") </script>';
        header('Location: reg.php');
    }



?>
