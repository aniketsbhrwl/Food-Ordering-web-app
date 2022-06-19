<?php
session_start();
if(isset($_POST['signup'])){
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database_name');
$con = mysqli_connect("localhost", "root", "","final") or die("connection failed");

 // get the post records
 
 $name= $_POST['uname'];
 $pass = $_POST['pass'];
 $email = $_POST['email'];
 
 // database insert SQL code
$sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
$rslt = mysqli_query($con, $sql) or die('Refresh the page and try again');
if($rslt == true){
    ?>
    <script>
        window.alert("Signup Successfully")
    </script>
    <?php
header("location:test.php");
}
}
?>