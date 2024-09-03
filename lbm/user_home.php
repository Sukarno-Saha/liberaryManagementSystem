<?php
include('connect.php');
$email=$_SESSION['email'];
$sql="select * from user where email='$email'";
$res=mysqli_query($conn,$sql);
if($res)
{
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$img=$row['img'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- front links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;400;500;700;900&
display=swap" rel="stylesheet">
    <!--bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--bootstap icon cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
    <!--fontawsome cdn-->
    <!--fontawsome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css link-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carosolstyle.css">
    <style>
        #navbarDropdownMenuLink {
            color: white;
        }

        #navbarDropdownMenuLink:hover {
            color: black;
        }

        #profile-img {
            border-radius: 50%;
            border: 2px solid black;
            width: 25px;
            height: 25px;
            margin-right: 10px;
        }
    </style>
    <title>USER HOME</title>
</head>

<body>
    <div class="header">
        <nav class="menubar">
            <h1>LIBRARY</h1>
            <ul class="navlink">
                <li class=""><a href="user_home.php"> HOME </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        BOOKS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="all_book.php">ALL BOOKS</a></li>
                        <li><a class="dropdown-item" href="sem_book.php">SEMESTER BOOKS</a></li>
                    </ul>
                </li>
                <li><a href="user_issued_book.php">Your Issued book</a></li>
                <li><a href="contact_us.php">CONTACT US</a></li>
                <li><a href="profile.php"><img src="<?php echo $img ?>" id="profile-img">
                        <?php 
echo $name?>
                    </a></li>
                <li><a href="index.php">LOGOUT</a></li>
            </ul>
            <ul class="navicon">
                <i class="fa-solid fa-bars" style="color: #ffffff;"></i>

            </ul>
        </nav>
        <div class="front">
            <div class="centerlogo">
                <h1>LIBRARY</h1>
                <a href="all_book.php"><button>Explore Now </button></a>
            </div>
        </div>
    </div>
    <!--about part-->
    <section id="about">
        <div class="about-left-col">
            <img src="images/about.png">
        </div>
        <div class="about-right-col">
            <div class="about-text">
                <h1 class="about1">About Us</h1>
                <p>The film concerns the relationship between Louis, a painter suffering from
                    Alzheimer's, and his wife Michelle. At first, Louis seems merely forgetful, but as the film
                    progresses his dementia becomes apparent.[1] The viewer experiences much of this from
                    Louis' point of view; objects melt and shape shift in his hand. When Louis encounters other
                    characters, such as the doctor Michelle takes him to,</p>
                <h5>..............Choose the right path towards Success</h4>
            </div>
        </div>
    </section>
    <!-----Features part------>>
    <section id="feature">
        <div class="feature-row">
            <div class="feature-col">
                <img src="images/pic-1.png">
                <h4>Learn Anywhere</h4>
                <P>Switch between your phone , tablet or mobile</P>
            </div>
            <div class="feature-col">
                <img src="images/pic2.png">
                <h4>1000+ Trusted User</h4>
                <p>We have so many users who trust us </p>
            </div>
            <div class="feature-col">
                <img src="images/pic3.png">
                <h4>500+ Books</h4>
                <p>all types of book are available in our library </p>
            </div>
        </div>
    </section>
    <!------week book------>
    <!-- <section id="week-Book">
        <h1 class="most-read"> <u>MOST READ BOOK OF THE WEEK</u></h1>
        <div class="week-Book-left-col">
            <div class="week-Book-Text">
                <h1>LIFE'S AMAZING SECRETS</h1>
                <h2>.......written By Garu Gopal Das</h2>
                <p>Stop going through life <br> Start growing through life!</p>
                <p>While navigating their way through Mumbai's horrendous traffic Gaur Gopal
                    Das and his wealthy young friend Harry get talking delving into concepts ranging from the
                    human condition to finding one's purpose in life and the key to lasting happiness.</p>
                <p>Whether you are looking at strengthening your relationships discovering your
                    true potential understanding how to do well at work or even how you can give back to the
                    world Gaur Gopal Das takes us on an unforgettable journey with his precious insights on
                    these areas of life.</p>
                <p>Das is one of the most popular and sought-after monks and life coaches in the
                    world having shared his wisdom with millions. His debut book Life's Amazing Secrets distils
                    his experiences and lessons about life into a light-hearted thought-provoking book that will
                    help you align yourself with the life you want to live.</p>
            </div>
        </div>
        <div class="week-Book-right-col">
            <img src="images/week-book.jpg" alt="">
        </div>
    </section> -->


    <div class="container-carosol">
            <div class="carousol">
                <!-- listitems -->
                <div class="list">
                    <div class="item" style="background-color:rgb(0, 195, 255) ;">
                        <img src="img/55648816.webp" alt="">
                        <div class="content">
                            <h1>The Bullet</h1>
                            <h2>Iris Johansen</h2>
                            <h3>June 2021</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tempore excepturi,
                                voluptate dolore, aliquid beatae itaque distinctio eveniet explicabo consequatur dolores
                                sapiente recusandae officiis maiores nostrum ex laudantium fugit? Repellat reiciendis
                                soluta voluptates amet, error itaque perferendis quibusdam consectetur molestias! Ea
                                tempore assumenda officia harum. Totam consectetur harum similique dolorum nam ad nobis
                                repudiandae officia maiores voluptate ratione, quam beatae dolores, et laudantium nulla
                                aperiam nesciunt alias praesentium commodi vel id accusantium cumque quasi? Voluptas
                                doloribus illum quaerat ex, eum dolorum vitae nihil error repudiandae. Voluptatum,
                                recusandae porro laborum ipsa voluptates nam blanditiis, ullam itaque possimus animi
                                eaque alias eos!</p>

                            <!-- <button><a href="">Read more</a></button> -->
                            <button class="button-48" role="button"><span class="text">Button 48</span></button>

                        </div>

                    </div>
                    <div class="item" style="background-color:pink ;">
                        <img src="img/book1.webp" alt="">
                        <div class="content">
                            <h1>The Bullet</h1>
                            <h2>Iris Johansen</h2>
                            <h3>June 2021</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium veritatis totam ut
                                magnam magni, optio maxime veniam fugiat enim, dolore et vitae sit, doloribus ea
                                exercitationem alias cupiditate quibusdam! Nisi fugiat nemo autem nesciunt, itaque
                                voluptatem harum est excepturi animi labore odio incidunt aliquam architecto accusamus
                                exercitationem veritatis, voluptatibus earum molestiae similique esse ut. Expedita
                                maxime soluta sit iure in recusandae magni molestiae error a, voluptas delectus
                                doloribus vero repellat, harum laudantium vel! Ipsa ut quasi incidunt quod at adipisci
                                iste tempore temporibus sit saepe, ducimus dolorem dolorum reprehenderit facilis eveniet
                                eos debitis consequuntur error impedit! Necessitatibus soluta similique numquam.</p>
                            <!-- <button>Read more</button> -->
                            <button class="button-48" role="button"><span class="text">Button 48</span></button>

                        </div>

                    </div>
                    <div class="item" style="background-color: rgb(255, 153, 0);">
                        <img src="img/book2.webp" alt="">
                        <div class="content">
                            <h1>The Bullet</h1>
                            <h2>Iris Johansen</h2>
                            <h3>June 2021</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero ab facilis vel, totam
                                asperiores quidem odit autem maiores perferendis delectus unde nihil. Quia vitae
                                suscipit architecto dolore qui odio aliquam blanditiis voluptas in a modi at aperiam,
                                nulla dolor delectus veniam illo iure hic quis, totam fugiat repellendus aut excepturi?
                                Sunt autem culpa illum iure pariatur. Beatae praesentium iusto consequatur repudiandae,
                                nisi qui nemo magni dolore dignissimos, vitae quam suscipit nam voluptates numquam quia
                                quisquam quidem sapiente quos ut quod optio! Nobis eveniet dolore, voluptatem repellat
                                magnam sit repudiandae? Officia excepturi doloribus maxime obcaecati dolores quia, dolor
                                fugit quae similique.</p>
                            <!-- <button>Read more</button> -->
                            <button class="button-48" role="button"><span class="text">Button 48</span></button>

                        </div>

                    </div>
                    <div class="item" style="background-color:rgb(0, 255, 0) ;">
                        <img src="img/book3.webp" alt="">
                        <div class="content">
                            <h1>The Bullet</h1>
                            <h2>Iris Johansen</h2>
                            <h3>June 2021</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, facere voluptas
                                illum, at modi quas quam, molestias repudiandae maiores excepturi eius distinctio. Ut,
                                ratione molestias ducimus autem culpa vitae, dolore esse corrupti assumenda molestiae
                                architecto repellat veniam accusantium excepturi libero? In, ipsam cumque esse nulla
                                perferendis laudantium rerum aut adipisci reiciendis, hic natus blanditiis dicta? Quas
                                dignissimos molestias natus totam cum perspiciatis beatae animi harum officia quae,
                                velit dolorem doloribus, ipsam recusandae dolorum, illum laudantium rem. Ea culpa
                                distinctio earum officiis, veritatis laborum nostrum, mollitia neque cum accusantium rem
                                placeat id dolor aliquam reiciendis incidunt obcaecati sint numquam. Harum, recusandae!
                            </p>
                            <!-- <button>Read more</button> -->
                            <button class="button-48" role="button"><span class="text">Button 48</span></button>

                        </div>

                    </div>
                    <div class="item" style="background-color:yellow ;">
                        <img src="img/books4.webp" alt="">
                        <div class="content">
                            <h1>The Bullet</h1>
                            <h2>Iris Johansen</h2>
                            <h3>June 2021</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium magnam nihil quia et
                                sed, iste repellat. Nesciunt totam, cum repellat nobis minima aspernatur qui atque, iste
                                earum, facere in enim. Quos necessitatibus distinctio doloribus minima ratione nihil
                                soluta alias accusantium cumque, voluptatum praesentium, aliquam reprehenderit dicta
                                eligendi atque mollitia quibusdam quia aperiam unde vero, dolorum tenetur quam odio?
                                Laborum quam voluptatum veritatis eligendi vel sit nesciunt voluptatibus esse, repellat
                                consequatur. Autem repellendus, nisi, corporis accusantium dicta ex consectetur amet qui
                                porro maiores natus vero odio. Eaque unde dicta repellat error vitae blanditiis libero.
                                Fuga quae veritatis nisi dolore. Voluptas, saepe.</p>
                            <button class="button-48" role="button"><span class="text">Button 48</span></button>

                        </div>

                    </div>
                </div>
                <!-- buttom thumbanili tems -->
                <div class="thumbnail">
                    <div class="items">
                        <div class="card">
                            <div class="card-details">
                                <img src="img/55648816.webp" alt="">
                            </div>
                            <button class="card-button">More info</button>
                        </div>
                    </div>
                    <div class="items">
                        <div class="card">
                            <div class="card-details">
                                <img src="img/book1.webp" alt="">
                            </div>
                            <button class="card-button">More info</button>
                        </div>
                    </div>
                    <div class="items">
                        <div class="card">
                            <div class="card-details">
                                <img src="img/book2.webp" alt="">
                            </div>
                            <button class="card-button">More info</button>
                        </div>
                    </div>
                    <div class="items">
                        <div class="card">
                            <div class="card-details">
                                <img src="img/book3.webp" alt="">
                            </div>
                            <button class="card-button">More info</button>
                        </div>
                    </div>
                    <div class="items">
                        <div class="card">
                            <div class="card-details">
                                <img src="img/books4.webp" alt="">
                            </div>
                            <button class="card-button">More info</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <!-- footer part -->
    <section id="footer-part">
        <footer class="footer">
            <div class="row">
                <div class="col">
                    <center>
                        <h3>LINKS <div class="underline"><span></span></div>
                        </h3>
                    </center>
                    <li><a href="user_home.php">HOME</a></li>
                    <li><a href="all_book.php">BOOKS</a></li>
                    <li><a href="contact_us.php">CONTACT US</a></li>
                </div>
                <div class="col">
                    <center>
                        <h3>ADDRESS <div class="underline"><span></span></div>
                        </h3>
                    </center>
                    <p class="address">EM-4, EM Block, Sector V, Bidhannagar </p>
                    <p class="address">Kolkata, North 24 Parganas</p>
                    <p class="address">West bengal, PIN 700091, India</p>
                    <p class="email-id">wofbooks01@gmail.com</p>
                    <h5 class="phone_no">+91-9709709701</h5>
                </div>
                <div class="col">
                    <center>
                        <h3>SOCIALS <div class="underline"><span></span></div>
                        </h3>
                    </center>
                    <div class="social-icons">
                        <a href="#" class=fi target="_blank">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class=fi target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="#" class=fi target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class=fi target="_blank">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- navbarjs -->
    <script src="js/navbar.js"></script>
    <script src="js/carosolscript.js"></script>
</body>

</html>