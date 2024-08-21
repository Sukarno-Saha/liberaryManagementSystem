<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--bootstrap cdn-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous">
 <!--fontawsome cdn-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/6.4.0/css/all.min.css" integrity="sha512-
iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNB
vH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!--css link-->
 <title>Contact Form</title>
 <link rel="stylesheet" href="css/contact.css">
 <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
 <script src="https://kit.fontawesome.com/99435d5e02.js"></script>
 </head>
 <body>
 <!-- header part -->
<div class="header"> 
 <nav class="menubar">
 <h1>LIBRARY</h1>
 <ul class="navicon">
 <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
 </ul>
 </nav>
</div>
 <div class="container">
 <div class="form">
 <div class="contact-info">
 <h3 class="title">Let's get in touch</h3>
 <p class="text">
 You can contact us through our official email or contact number. Our team is highly 
active for 24/7 and will get in touch with you in no time.
 </p>
 <div class="info">
 <div class="information">
 <img src="images/img/location.png" class="icon" alt="" />
 <p>EM-4, EM Block, Sector V, Bidhannagar Kolkata, North 24 ParganasWest bengal, 
PIN 700091, India</p>
 </div>
 <div class="information">
 <img src="images/img/email.png" class="icon" alt="" />
 <p>wofbooks01@gmail.com</p>
 </div>
 <div class="information">
 <img src="images/img/phone.png" class="icon" alt="" />
 <p>+91-9709709701</p>
 </div>
 </div>
 <div class="social-media">
 <p>Connect with us :</p>
 <div class="social-icons">
 <a href="#" class= fi target="_blank">
 <i class="fa-brands fa-facebook"></i>
 </a>
 <a href="#" class= fi target="_blank" >
 <i class="fa-brands fa-linkedin"></i>
 </a>
 <a href="#" class= fi target="_blank" >
 <i class="fa-brands fa-twitter"></i>
 </a>
 <a href="#" class= fi target="_blank" >
 <i class="fa-brands fa-instagram"></i>
 </a>
 </div>
 </div>
 </div>
 <div class="contact-form">
 <span class="circle one"></span>
 <span class="circle two"></span>
 <form action="" method="POST">
 <h3 class="title">Contact us</h3>
 <div class="input-container">
 <input type="text" name="name" class="input" />
 <label for="">Username</label>
 <span>Username</span>
 </div>
 <div class="input-container">
 <input type="email" name="email" class="input" />
 <label for="">Email</label>
 <span>Email</span>
 </div>
 <div class="input-container">
 <input type="tel" name="phone" class="input" />
 <label for="">Phone</label>
 <span>Phone</span>
 </div>
 <div class="input-container textarea">
 <textarea name="message" class="input"></textarea>
 <label for="">Message</label>
 <span>Message</span>
 </div>
 <input type="submit" value="Send" class="btn" name="send" />
 </form>
 </div>
 </div>
 </div>
 <hr>
 <p class="copyright">L I B E R A R Y © 2023 - All Rights Reserved</p>
 <script src="js/contact.js"></script>
 </body>
</html>

<?php
if(isset($_POST['send']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$sql="INSERT INTO `contact`(`fname`, `email`, `ph_no`, `message`) VALUES ('$name','$email','$phone','$message')";
$res=mysqli_query($conn,$sql);
if($res)
{
    $_SESSION['status']="Records Added Successfully";
    header('Location:contact_us_next.php');
}
else
{
    $_SESSION['status']="Records Not Added ";
    alert('Error! please try again');
    header('Location:contact_us.php');  
}
}
?>