<?php
session_start();
if(isset($_POST ['submit'])){
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database_name');
 $con = mysqli_connect("localhost", "root", "","final") or die("connection failed");

 // get the post records
 $name = $_POST['name'];
 $email = $_POST['email'];
 $contactno = $_POST['contactno'];
 $feedback = $_POST['feedback'];
 
 // database insert SQL code
 $sql = "INSERT INTO `newtb` (`name`, `email`, `contactno`, `feedback`) VALUES ('$name', '$email', '$contactno', '$feedback')";
 
 // insert in database 
 $rslt = mysqli_query($con, $sql) or die('query failed');

        if($rslt){
           
           $alert = "<script>alert('Thank-you For Contacting Us');</script>";
           echo $alert;

        }
   
      //  else{
       //     echo "Error:" .$sql . "<br>" . mysqli_error($con);
    //}
      
}
?>

<!--HTML STARTS-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My_Meal.com</title>
    <link rel="stylesheet" href="css/style.css">
    <!--For Responsive-->
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">

</head>

<body>
    <!-- -------login page-------------------------------->

    
<!-------------------------------------- login page end ----------------------------------------->
    <nav id="navbar">
        <div id="logo">
            <img src="logo3.png" alt="MyOnlineMeal.com">
        </div>
        <ul>
            <li class="item"><a href="about-us/index.html" target="_blank">About us</a></li>
            <li class="item"><a href="#services" target="_blank">Services</a></li>
            <li class="item"><a href="order page/index.html" target="_blank">Order online</a></li>
                      <li class="item"><a href="login.html" target="_blank">Login</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary"><marquee>Welcome to Hungrs Night</h1></marquee>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis dolorum numquam minus. </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
        <!-- <button class="btn">Order Now</button> -->
    </section>

        
       <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page active"><span class=""></span></div></div></div></div>

    <section id="services-container">
        <h1 class="h-primary center">OUR SERVICES</h1>
        <div id="services">
            <div class="box">
                <img src="img/1.png" alt="">
                <h2 class="h-secondary center">Food Catering</h2>
                <p class="center">We aim at Providing the appetising decilous and professional service,that are customised to your events and gatherings.
                    We use the highest-quality ingredients and ensure that our staff follows the hygiene and sanitation
                </p>
            </div>
            <div class="box">
                <img src="img/2.png" alt="">
                <h2 class="h-secondary center">Bulk Ordering</h2>
                <p class="center">We also cater to larger gatherings and parties with a highly skilled service staff. And no compromise on the quality Bulk orders need to be taken. Well in advance,to ensure smooth flow of operations as we need to source the raw materials.
                    Customisable menu as per client's need.
                </p>
            </div>
            <div class="box">
                <img src="img/3.png" alt="">
                <h2 class="h-secondary center">Food Ordering</h2>
                <p class="center">You Can now avail our services at the touch of a button,sitting at home. We accept online orders through swiggy,zomato with in application benefits such as coupons and discounts.
                    The food is prepared under proper monitoring of hygiene and sanitation. 
                    We offer you a memorable dining experience,at your home.
                </p>
            </div>
        </div>
    </section>
    
    <!--------------------------------------------------Form---------------------------------->
    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="index.php" method="post">
                <div>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" placeholder="Enter your Name">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="Enter your E-Mail">
                <label for="text">Contact No: </label>
                <input type="phone" name="contactno" id="contactno" placeholder="Enter your contact number">
                <label for="text">Feedback: </label>
                <textarea name="feedback" id="feedback" cols="30" rows="10" placeholder="Your Feedback"></textarea>
                <button name ="submit"class="btn">Submit</button>
                </div>
              
                 
                
            </form>
      
        </div>
    </section>


   <section id="client-section">
        <marquee>
        <div id="clients">
            <div class="client-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbnWQ_L50s0inZPQGukU7F_IX9iIRdvl_8Lg&usqp=CAU" alt="Our Client">
            </div>
            <div class="client-item">
                
            </div>
          
            <div class="client-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlbb32Uklf6LLv2L94NZfydhNQfzNs-TkmlA&usqp=CAU" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2JVwR9TuUAHIwVVxH865C-krW1QTGncQ8kA&usqp=CAU" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="https://blog.qceventplanning.com/wp-content/uploads/2018/12/Event-in-post-135x135-6.jpg" alt="Our Client">
            </div>

        </div> 
        </marquee>
    </section> 




          <!-- ======= Contact Section ======= 
            
            <div class="container">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h2>Contact Us</h2>
                <input type="text" class="field" placeholder="Your Name">
                <input type="text" class="field" placeholder="Your Email">
                <input type="text" class="field" placeholder="Phone">
                <textarea placeholder="Message" class="field"></textarea>
                <button class="btn">Send</button>
            </div>
        </div>
    </div>
-->
 
            <!--========End Contact=============-->    
    <footer>
    <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
    </div>
    <ul class="icons">
        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
    </ul>
    <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#services-container">Services</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    <p>©2021 Aniket Sabharwal| All rights reserved</p>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>
