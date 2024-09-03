<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- front links -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link 
href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;400;500;700;900&
display=swap" rel="stylesheet">
 <!--bootstrap cdn-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous">
 <!--fontawsome cdn-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
 <!--css link-->
 <link rel="stylesheet" href="css/test.css">
 <title>ALL BOOK DEMO</title>
 <style>
 body {
 background: linear-gradient(45deg,#d2001a,#7462ff,#f48e21,#23d5ab);
 background-size: 300% 300%;
 animation: color 12s ease-in-out infinite;
 }
 @keyframes color{
 0%{
 background-position: 0 50%;
 }
 50%{
 background-position: 100% 50%;
 }
 100%{
 background-position: 0 50%;
 }
 }
 </style>
</head>
<body>
 <!-- header part -->
<div class="header"> 
 <nav class="menubar">
 <h1>LIBRARY</h1>
 <ul class="navlink">
 <li class=""><a href="index.php"> HOME </a></li>
 <li><a href="all_book_demo.php">BOOKS</a></li>
 <li><a href="contact_us.php">CONTACT US</a></li>
 <li><a href="user_signin.php">Login</a></li>
 </ul>
 <ul class="navicon">
 <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
 </ul>
 </nav>
</div>
 <div class="con">
 <form action="user_signin.php" method="POST"> 
 <div class="card">
 <div class="card-img pic1">
 <img src="images/sembook1.jpg" alt="">
 </div>
 <div class="card-text">
 <input type="text" value="Software" name="book_name" readonly>
 <input type="text" value="Ronald" name="author_name" readonly>
 </div>
 <input type="text" hidden value="software" name="book_name">
 <input type="submit" name="s1" value="issue now" id="issue">
 </div>
 </form>
 <form action="user_signin.php" method="POST"> 
 <div class="card">
 <div class="card-img pic1">
 <img src="images/sembook2.jpg" alt="">
 </div>
 <div class="card-text">
 <input type="text" value="E-commerce" name="book_name" readonly>
 <input type="text" value="P.T joseph" name="author_name" readonly>
 </div>
 <input type="text" hidden value="E-commerce" name="book_name">
 <input type="submit" name="s1" value="issue now" id="issue">
 </div>
 </form>
 <form action="user_signin.php" method="POST"> 
 <div class="card">
 <div class="card-img pic1">
 <img src="images/sembook3.jpg" alt="">
 </div>
 <div class="card-text">
 <input type="text" value="MATHEMETICS" name="book_name" readonly>
 <input type="text" value="Maya" name="author_name" readonly>
 </div>
 <input type="text" hidden value="MATHEMETICS" name="book_name">
 <input type="submit" name="s1" value="issue now" id="issue">
 </div>
 </form>
 <form action="user_signin.php" method="POST"> 
 <div class="card">
 <div class="card-img pic1">
 <img src="images/sembook4.jpg" alt="">
 </div>
 <div class="card-text">
 <input type="text" value="English" name="book_name" readonly>
 <input type="text" value="Hazel" name="author_name" readonly>
 </div>
 <input type="text" hidden value="English" name="book_name">
 <input type="submit" name="s1" value="issue now" id="issue">
 </div>
 </form>
 <form action="user_signin.php" method="POST"> 
 <div class="card">
 <div class="card-img pic1">
 <img src="images/sembook5.jpg" alt="">
 </div>
 <div class="card-text">
 <input type="text" value="C++" name="book_name" readonly>
 <input type="text" value="Stephen" name="author_name" readonly>
 </div>
 <input type="text" hidden value="C++" name="book_name">
 <input type="submit" name="s1" value="issue now" id="issue">
 </div>
 </form>
 <!-- additional book -->
 <form action="user_signin.php" method="POST"> 
 <div class="card">
 <div class="card-img pic1">
 <img src="images/week-book.jpg" alt="">
 </div>
 <div class="card-text">
 <input type="text" value="Lifes Amazing Secret" name="book_name" readonly>
 <input type="text" value="Gaur Gopal Das" name="author_name" readonly>
 </div>
 <input type="text" hidden value="Lifes Amazing Secret" name="book_name">
 <input type="submit" name="s1" value="issue now" id="issue">
 
 </div>
 </form>
 <form action="user_signin.php" method="POST"> 
 <div class="card">
 <div class="card-img pic1">
 <img src="images/book1.webp" alt="">
 </div>
 <div class="card-text">
 <input type="text" value="It ends with us" name="book_name" readonly>
 <input type="text" value="Hoover" name="author_name" readonly>
 </div>
 <input type="text" hidden value="It ends with us" name="book_name">
 <input type="submit" name="s1" value="issue now" id="issue">
 </div>
 </form>
 <form action="user_signin.php" method="POST"> 
 <div class="card">
 <div class="card-img pic1">
 <img src="images/book2.webp" alt="">
 </div>
 <div class="card-text">
 <input type="text" value="The secret" name="book_name" readonly>
 <input type="text" value="Rhonda" name="author_name" readonly>
 </div>
 <input type="text" hidden value="The secret" name="book_name">
 <input type="submit" name="s1" value="issue now" id="issue">
 </div>
 </form>
 <form action="user_signin.php" method="POST"> 
 <div class="card">
 <div class="card-img pic1">
 <img src="images/book3.webp" alt="">
 </div>
 <div class="card-text">
 <input type="text" value="The midnight library" name="book_name" readonly>
 <input type="text" value="Haig" name="author_name" readonly>
 </div>
 <input type="text" hidden value="The midnight library" name="book_name">
 <input type="submit" name="s1" value="issue now" id="issue">
 </div>
 </form>
 <form action="user_signin.php" method="POST"> 
 <div class="card">
 <div class="card-img pic1">
 <img src="images/books4.webp" alt="">
 </div>
 <div class="card-text">
 <input type="text" value="It start with us" name="book_name" readonly>
 <input type="text" value="Hoover" name="author_name" readonly>
 </div>
 <input type="text" hidden value="It start with us" name="book_name">
 <input type="submit" name="s1" value="issue now" id="issue">
 
 </div>
 </form>
 </div>
</body>
</html>
 <!-- footer part -->
 <section id="footer-part">
 <footer class="footer">
 <div class="row">
 <div class="col">
 <center><h3>LINKS <div 
class="underline"><span></span></div></h3></center>
 <li ><a href="index.php">HOME</a></li>
 <li><a href="all_book_demo.php">BOOKS</a></li>
 <li><a href="contact_us.php">CONTACT US</a></li>
 </div>
 <div class="col">
 <center><h3>ADDRESS <div 
class="underline"><span></span></div></h3></center>
 <p class="address">EM-4, EM Block, Sector V, Bidhannagar </p>
 <p class="address">Kolkata, North 24 Parganas</p>
 <p class="address">West bengal, PIN 700091, India</p>
 <p class="email-id">wofbooks01@gmail.com</p>
 <h5 class="phone_no">+91-9709709701</h5>
 </div>
 <div class="col">
 <center><h3>SOCIALS <div 
class="underline"><span></span></div></h3></center>
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
 <hr>
 <p class="copyright">l i b r a r y © 2023 - All Rights Reserved</p>
 <h1 class="footer-logo">L I B R A R Y</h1>
 </footer>
 </div>
 </section>
 <!-- navbar-js -->
 <script src="js/navbar.js"></script> 
</body>
</html>