<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body
        {
        background-image:url('../images/homebg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body style="backdrop-filter:blur(.2rem);height:100vh">
    <?php include('header.php'); ?>
    <div align='left' style="font-weight: bold;font-family: 'Nerko One', cursive;margin-left:1.5rem;color:yellow;"><br><br><br><br>
        <h2>Chetak Courier Management Service</h2>
        <h4>The fastest courier service of India</h4><br><br>
        <h3>DBMS MINI PROJECT</h3>
        <h6>By ~ Suryansh & Utkarsh</h6>
    </div>
</body>
</html>