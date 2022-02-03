<?php

    $fName = $_POST["fName"];
    $lnam = $_POST["lName"];
    $email = $_POST["email"];
    $psw = $_POST["psw"];

    $conn = mysqli_connect("localhost:3307" , "root" , "") or die("Error: cannot connect to server");


    $db = mysqli_select_db($conn , "vapestore") or die("Error: cannot connect to Database");

    $insert = "INSERT INTO users (firstName , lastName , email , password) values ('$fName' , '$lnam' , '$email' , '$psw') ";

    $result = mysqli_query($conn , $insert);

    if($result){
        echo '<script> alert("Success! You Will be redirected to the Login Page") </script>';

    }
    else{
        echo '<script> alert("This User Is Already Exist!") </script>';
    }

    header('Location: login.php');

?>