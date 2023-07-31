<?php
session_start();
include("connect.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password) && !is_numeric($email)){
        $sql = "select * from where email = $email limit 1";
        $result=mysqli_query($con,$sql);
        if($result){
            if($result && mysqli_num_rows($result)>0){
                $user_data = mysqli_fetch_assoc($user_data);

                if($user_data['password']==$password){
                    header("location: welcome.php");
                    die;
                }
            }
        }
        echo "Incorrect Login Details";
    }
    else{
        echo "Incorrect Login Details"; 
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="main">
    <div class="Login">
        <h2>Login</h2>
        <form id="Sign-up" action="connect.php" method="POST">
            <label>Email : </label>
            <br>
            <input type="text" name="email" id="name" placeholder="Enter Your Email">
            <br><br>
            <label>Password : </label>
            <br>
            <input type="text" name="password" id="name" placeholder="Enter Strong Password">
            <br><br>
            <input type="submit" name="submit" id="submit" value="submit">
        </form>
        <p>Don't Have Account? <a href="index.php">Register Here</a></p>
</html>