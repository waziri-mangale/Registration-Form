<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $lang = $_POST['lang'];
    $password = $_POST['password'];

    $con =new mysqli ('localhost','root','','formdb2');
if($con){
    $sql="insert into formtb2(fname,mname,lname,age,mobile,email,gender,lang,password)
    values('$fname','$mname','$lname','$age','$mobile','$email','$gender','$lang','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
      echo 'Thank You For Registering With Us...! We Value Your Privacy and 
      Your Personal Details Will Always Remain Confidential..100%';
    }
 }else{
     die(mysqli_error($con));
 }
 
 }

?>