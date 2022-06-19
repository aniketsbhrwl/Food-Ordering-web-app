<?php
session_start();
if(isset($_POST['login'])){
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database_name');
$con = mysqli_connect("localhost", "root", "","final") or die("connection failed");

 // get the post records
 
 $name= $_POST['uname'];
 $pass = $_POST['pass'];
 
 // database insert SQL code
$sql = "SELECT * FROM `users` WHERE `name`= '$name' AND `password` = '$pass'";
// echo $sql;
 // insert in database
$rslt = mysqli_query($con, $sql) or die('Refresh the page and try again');
$count = mysqli_num_rows($rslt);
if($count == 1){
  $record =  mysqli_fetch_assoc($rslt);
$alert = "<script>alert('Login Successful'); </script>";
  if($record['name'] == "admin"){
    echo $alert;
    $_SESSION['admin'] = "admin";
       header("location:showalluser.php");
  }else{
    echo $alert;
    header("location:order page/index.html");
  }


        // header('location:index.php');
}

  else{
    $alert = "<script>alert('Invalid name and Password'); window.location.href='login.html'</script>";
    echo $alert;

  }
 }
?>