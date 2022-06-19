<?php
session_start();
if(!isset($_SESSION['admin'])){
  header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/journal/bootstrap.css">
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
    <title>Show User</title>
</head>
<body>

<div class="container">
<h1>Show All User</h1>
<?php
$con = mysqli_connect("localhost", "root", "","final") or die("connection failed");
 // database insert SQL code
 $sql = "SELECT * FROM `newtb`";
 // echo $sql;
  // insert in database
 $rslt = mysqli_query($con, $sql) or die('Refresh the page and try again');
 $count = mysqli_num_rows($rslt); //for rows
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SNo.</th>
      <th scope="col">Name</th>
      <th scope="col">Email-id</th>
      <th scope="col">Contact</th>
      <th scope="col">Feedback</th>
    </tr>
  </thead>
  <tbody>
 
<?php

 if($count!=0){
    $count1 = 1;
     while($res = mysqli_fetch_assoc($rslt)){
         ?>
        <tr class="table-active">
        <th scope="row"><?php echo $count1;?></th>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['email'];?></td>
        <td><?php echo $res['contactno'];?></td>
        <td><?php echo $res['feedback'];?></td>

      </tr>
      <?php
         $count1++; 
    }


 }else{
     ?>
     <script>
         window.alert("No record Found!!!")
         </script>
     <?php
 }



?>
 </tbody>
</table>
</div>
</body>
</html>