<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>surgery Clinic</title>
    <link rel="stylesheet" href="css/s-clinic_styles.css">
    <script src="https://kit.fontawesome.com/abe3b4ce91.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("c-header.php");?>
    <!--header end-->
    <!--home-->
    <section class="home" id="home">
        <div class="content">
            <h3>Your health is our priority</h3>
            <p>our dental health services prioritize your oral well-being. trust your experienced to guide you on your
                journey to optimal dental health.</p>
            <a href="appointment.php" class="btn" target="_blank">Make Appointment</a>
        </div>
    </section>
    <!--home end-->

    <!--about us section-->
    <section class="about" id="about">
        <h1 class="heading"> About us</h1>
        <div class="row">
            <div class="image">
                <img src="images/Abt.JPG">
            </div>
            <div class="content">
                <h3>Our clinic is made for you to be smilling all the time</h3>
                <p>located in the heart of Cairo, Egypt. Dental surgery has been in its existing location for close to
                    30 years and is proud to serve the local community, the surrounding areas and our diehard patients,
                    who travel from as far as Saudi Arabia and Kwait.</p>
                <p>We are caring and compassionate family dental practice and work hard as a team to offer you a
                    friendly and relaxing service.</p>
                <a href="../hospital/surg-abt.php" class="btn"> Read more </a>
            </div>
        </div>
    </section>
    <!--about end-->

    <!--services-->
    <section class="services" id="services">

        <h1 class="heading">Our Services</h1>

        <div class="box-container">
            <div class="box">
                <img src="images/hh.png" alt="">
                <h3>Online Schedule</h3>
                <p>All available hours and timings will be present in a well designed online schedule to ease your
                    booking process.</p>
            </div>

            <div class="box">
                <img src="images/icon.png" alt="">
                <h3>cosmetic feeling</h3>
                <p>Not only we help relief your pain, but also we make sure everything looks as perfect as it should be
                    .</p>
            </div>

            <div class="box">
                <img src="images/R.jpg" alt="">
                <h3>oral hygiene experts</h3>
                <p>We have a team of oral hygiene experts that will teach you all tips to have a healthy oral hygiene
                    and take best care of your hygiene every time you visit our clinic.</p>
            </div>
        </div>

    </section>
    <!--services end-->

    <!--Teame section-->

    <section class="team" id="team">

        <h1 class="heading"> Our Team</h1>
        <div class="swiper team-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/Sd1.JPG" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Mohamed Ahmed</h3>
                        <span>General Surgeon</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/Sd2.JPG" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>yasmin hussein</h3>
                        <span>cavity specialist</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--pricing plan-->

    <section class="pricing" id="pricing">

        <h1 class="heading">pricing plan</h1>

        <div class="box-container">

            <div class="box">
                <h3 class="title">basic</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">18</span>
                    <span class="duration"> /year</span>
                </div>
                <ul>
                    <li> <i class="fas fa-check"></i> alignment specialist</li>
                    <li> <i class="fas fa-check"></i> cavity inspection</li>
                    <li> <i class="fas fa-check"></i> cosmetic dentistry</li>
                    <li> <i class="fas fa-check"></i> oral hygiene experts</li>
                </ul>
                <a href="#" class="btn">read more </a>
            </div>

            <div class="box active">
                <h3 class="title">standard</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">30</span>
                    <span class="duration"> /year</span>
                </div>
                <ul>
                    <li> <i class="fas fa-check"></i> alignment specialist</li>
                    <li> <i class="fas fa-check"></i> cavity inspection</li>
                    <li> <i class="fas fa-check"></i> cosmetic dentistry</li>
                    <li> <i class="fas fa-check"></i> oral hygiene experts</li>
                </ul>
                <a href="#" class="btn">read more </a>
            </div>

            <div class="box">
                <h3 class="title">premium</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">50</span>
                    <span class="duration"> /year</span>
                </div>
                <ul>
                    <li> <i class="fas fa-check"></i> alignment specialist</li>
                    <li> <i class="fas fa-check"></i> cavity inspection</li>
                    <li> <i class="fas fa-check"></i> cosmetic dentistry</li>
                    <li> <i class="fas fa-check"></i> oral hygiene experts</li>
                </ul>
                <a href="#" class="btn">read more </a>
            </div>

        </div>

    </section>

    <!-- pricing plan ends -->

    <!-- blog -->

    <section class="blog" id="blog">

        <h1 class="heading">our blogs</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">oral cancer</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 04th september, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>Growth or pinkish lump in your mouth.
                        You might start to find white or reddish patches on the
                        inside of your mouth, and feel severe mouth and ear pain. </p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">tooth decay</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 04th september, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>Either continuous pain keeping you awake or occasional sharp pain without
                        an obvious cause.</p>
                    <p></p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">Gum infections</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 04th september, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>bad breath and a bad taste in the mouth.
                        your gums are shrinking.
                        your teeth becoming loose or falling out
                    </p>
                    <p></p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- blog ends -->
    <!-- footer -->
<?php include("c-footer.php"); ?>
    <!-- footer ends -->



    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>