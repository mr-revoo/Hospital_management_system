<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Clinic</title>
    <script src="https://kit.fontawesome.com/abe3b4ce91.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');
        :root {
            --primary: #1f2e88;
            --secondary: #2f66d4;
            --hover: #a2d9f5;
            --black: #333;
            --white: #fff;
            --light-color: #666;
            --light-bg: #eee;
            --border: .2rem solid rgba(0, 0, 0, .1);
            --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            text-decoration: none;
            border: none;
            text-transform: capitalize;
            transition: .2s linear;
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-padding-top: 9rem;
            scroll-behavior: smooth;
        }

        html::-webkit-scrollbar {
            width: .8rem;
        }

        html::-webkit-scrollbar-track {
            background: transparent;
        }

        html::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 5rem;
        }

        section {
            padding: 5rem 7%;
        }

        .heading {
            font-size: 4rem;
            text-align: center;
            color: var(--black);
            text-transform: uppercase;
            font-weight: bolder;
            margin-bottom: 3rem;
        }


        .btn {
            margin-top: 1rem;
            display: inline-block;
            padding: 1rem 3rem;
            border-radius: .5rem;
            background: var(--primary);
            cursor: pointer;
            font-size: 1.7rem;
            color: var(--white);
        }

        section .btn {
            margin-top: 1rem;
            display: inline-block;
            padding: 1rem 3rem;
            border-radius: .5rem;
            background: var(--primary);
            cursor: pointer;
            font-size: 1.7rem;
            color: var(--white);
        }

        .btn:hover {
            background: var(--secondary);
        }

        /*header*/

        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: var(--white);
            box-shadow: var(--box-shadow);
            display: flex;
            align-items: centre;
            justify-content: space-between;
            padding: 2rem 9%;
        }

        .header .logo {
            font-size: 2.5rem;
            font-weight: bolder;
            color: var(--black);
        }

        .header .logo i {
            color: var(--primary);
            padding-right: .5rem;
        }

        .header .navbar a {
            font-size: 1.7rem;
            color: var(--black);
            margin: 0 1rem;
        }

        .header .navbar a:hover {
            color: var(--primary);
        }

        .header.btn {
            margin-top: 0;
        }

        #menu-btn {
            font-size: 2.5rem;
            cursor: pointer;
            color: var(--black);
            margin-left: 1.7rem;
            display: none;
        }


        #menu-btn:hover {
            color: var(--primary);
        }

        /*Header end*/

        /* home*/

        .home {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: url(../hospital/images/Cc.jpg) no-repeat;
            background-size: cover;
            background-position: center;
        }

        .home .content {
            max-width: 60rem;
            padding-left: 6rem;
            padding-top: 10rem;
        }

        .home .content h3 {
            font-size: 6rem;
            color: var(--black);
            line-height: 1.2;
        }

        .home .content p {
            line-height: 2;
            font-size: 1.5rem;
            color: var(--light-color);
            padding: 1rem 0;
        }

        /* home end */

        /*about us*/

        .about .row {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .about .row .image {
            flex: 1 1 40rem;
        }

        .about .row .image img {
            width: 100%;
            height: 100%;
        }

        .about .row .content {
            flex: 1 1 40rem;
        }


        .about .row .content h3 {
            color: var(--black);
            font-size: 3.5rem;
            line-height: 1.5;
        }


        .about .row .content p {
            font-size: 1.4rem;
            color: var(--light-color);
            padding: 1rem 0;
            line-height: 2;
        }

        /*about us end*/

        /* services */

        .services {
            background: var(--light-bg);
        }

        .services .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
            gap: 2rem;
        }


        .services .box-container .box {
            padding: 4rem;
            text-align: center;
            background: var(--white);
            box-shadow: var(--box-shadow);
            border-radius: 5rem;
        }

        .services .box-container .box:hover {
            background: var(--hover);
        }

        .services .box-container .box img {
            margin: 1rem 0;
            height: 10rem;
        }

        .services .box-container .box h3 {
            font-size: 2rem;
            padding: 1rem 0;
            color: var(--black);
        }

        .services .box-container .box p {
            font-size: 1.5rem;
            color: var(--light-color);
            line-height: 2;
        }

        /* services section ends */

        /*team section start*/

        .team .slide {
            text-align: center;
        }

        .team .slide .image {
            position: relative;
            overflow: hidden;
        }

        .team .slide .image .img {
            width: 100%;
        }

        .team .slide .image .share {
            padding: 2rem;
            position: absolute;
            bottom: -10rem;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, .8);
        }

        .team .slide:hover .image .share {
            bottom: 0;
        }

        .team .slide .image .share a {
            font-size: 3rem;
            margin: 0 1rem;
            color: var(--white);
        }

        .team .slide .image .share a:hover {
            color: var(--secondary);
        }

        .team .slide .content {
            display: flex;
            padding-top: 1rem;
            align-items: center;
            justify-content: space-between;
        }

        .team .slide .content h3 {
            font-size: 2rem;
            color: var(--black);
        }

        .team .slide .content span {
            font-size: 1.5rem;
            line-height: 2;
            color: var(--light-color);
        }

        /*team section end*/

        /*pricing plan*/

        .pricing {
            background: var(--light-bg);
        }

        .pricing .box-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .pricing .box-container .box {
            height: 46rem;
            width: 30rem;
            margin: 2rem 4rem;
            border-radius: 1rem;
            box-shadow: var(--box-shadow);
            text-align: center;
            overflow: hidden;
            position: relative;
            z-index: 1;
            background: var(--white);
        }

        .pricing .box-container .active {
            background: var(--hover);
        }

        .pricing .box-container .box .title {
            margin: 3rem 0;
            font-size: 2.2rem;
            color: var(--black);
            text-transform: uppercase;
        }

        .pricing .box-container .box .price {
            color: var(--primary);
            margin-bottom: 5rem;
        }

        .pricing .box-container .box .price .currency {
            font-size: 4rem;
            line-height: 3.5rem;
            font-weight: 300;
        }

        .pricing .box-container .box .price .amount {
            font-size: 5.8rem;
            line-height: 4.5rem;
            font-weight: 700;
        }

        .pricing .box-container .box .price .duration {
            font-size: 1.8rem;
            font-weight: 400;
            letter-spacing: .2rem;
        }

        .pricing .box-container .box ul li {
            text-align: left;
            font-size: 1.6rem;
            padding-left: 3.5rem;
            margin: 2rem auto;
            color: var(--light-color);
            text-transform: uppercase;
        }

        .pricing .box-container .box ul li i {
            padding: 0 1rem;
            color: var(--secondary);
        }

        /* pricing plan ends */

        /* blog */

        .blog .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
            gap: 1.5rem;
        }

        .blog .box-container .box {
            border: var(--border);
        }

        .blog .box-container .box .image {
            height: 25rem;
            width: 100%;
            overflow: hidden;
        }

        .blog .box-container .box .image img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .blog .box-container .box:hover .image img {
            transform: scale(1.2);
        }

        .blog .box-container .box .content {
            padding: 2rem 1.5rem;
        }

        .blog .box-container .box .content .link {
            display: inline-block;
            margin-bottom: 3rem;
            padding: .6rem 1.5rem;
            background: var(--primary);
            font-size: 1.4rem;
            color: var(--white);
        }

        .blog .box-container .box .content .link:hover {
            background: var(--secondary);
        }

        .blog .box-container .box .content .icons {
            padding-bottom: 1.7rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .blog .box-container .box .content .icons a {
            font-size: 1.4rem;
            color: var(--light-color);
        }

        .blog .box-container .box .content .icons a:hover {
            color: var(--primary);
        }

        .blog .box-container .box .content .icons a i {
            color: var(--primary);
            padding-right: .5rem;
        }

        .blog .box-container .box .content h3 {
            font-size: 2.2rem;
            color: var(--black);
        }

        .blog .box-container .box .content p {
            padding: 1rem 0;
            font-size: 1.4rem;
            color: var(--light-color);
            line-height: 2;
        }

        /* blog ends*/
        /* footer */

        .footer {
            text-align: center;
            background: var(--light-bg);
        }

        .footer .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
            gap: 2rem;
        }

        .footer .box-container .box h3 {
            font-size: 2.2rem;
            padding: 1rem 0;
            color: var(--secondary);
        }

        .footer .box-container .box p {
            font-size: 1.5rem;
            padding: .5rem 0;
            line-height: 2;
            color: var(--light-color);
        }

        .footer .box-container .box .share {
            margin-top: 1rem;
        }

        .footer .box-container .box .share a {
            height: 4.5rem;
            width: 4.5rem;
            background: var(--primary);
            color: var(--white);
            line-height: 4.5rem;
            border-radius: 10%;
            font-size: 1.7rem;
            margin-right: .3rem;
            text-align: center;
        }

        .footer .box-container .box .share a:hover {
            background: var(--secondary);
        }

        .footer .box-container .box .link {
            display: block;
            font-size: 1.7rem;
            line-height: 2;
            color: var(--primary);
            padding: .5rem 0;
        }

        .footer .box-container .box .link:hover {
            color: var(--hover);
        }

        .footer .credit {
            margin-top: 3rem;
            padding-top: 3rem;
            font-size: 2rem;
            text-align: center;
            text-transform: capitalize;
            color: var(--primary);
            border-top: .1rem solid var(--secondary);
        }

        .footer .credit span {
            color: var(--secondary);
        }


        /* footer ends */

        /* media queries */

        @media (max-width: 991px) {

            html {
                font-size: 55%;
            }

            .header .btn {
                display: none;
            }

            section {
                padding: 2rem;
            }

        }

        @media (max-width: 768px) {

            #menu-btn {
                display: inline-block;
            }

            #menu-btn.fa-times {
                transform: rotate(180deg);
            }

            .header .navbar {
                position: absolute;
                top: 99%;
                left: 0;
                right: 0;
                background: var(--white);
                border-top: var(--border);
                padding: 1rem 0;
                text-align: center;
                flex-flow: column;
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            }

            .header .navbar.active {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }

            .header .navbar a {
                display: block;
                padding: 1rem 0;
                font-size: 2rem;
            }

            .home {
                background-position: left;
            }

            .home .content {
                max-width: 50rem;
                padding-left: 3rem;
            }

            .home .content h3 {
                font-size: 4rem;
            }

        }

        @media(max-width:450px) {

            html {
                font-size: 50%;
            }

            .home .content h3 {
                font-size: 3rem;
            }

        }
    </style>
</head>

<body>
    <?php include("c-header.php");?>
    <!--header end-->
    <!--home-->
    </section>
    <section class="home" id="home">
        <div class="content">
            <h3>Make your smile shine</h3>
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
                <img src="images/WhatsApp Image 2023-04-18 at 5.20.40 PM (5).jpeg" alt="">
            </div>
            <div class="content">
                <h3>Our clinic is made for you to be smilling all the time</h3>
                <p>located in the heart of Cairo, Egypt. Dental surgery has been in its existing location for close to
                    30 years and is proud to serve the local community, the surrounding areas and our diehard patients,
                    who travel from as far as Saudi Arabia and Kwait.</p>
                <p>We are caring and compassionate family dental practice and work hard as a team to offer you a
                    friendly and relaxing service.</p>
                <a href="dental-about.php" class="btn"> Read more </a>
            </div>
        </div>
    </section>
    <!--about end-->

    <!--services-->
    <section class="services" id="services">

        <h1 class="heading">Our Services</h1>

        <div class="box-container">
            <div class="box">
                <img src="images/services-1.webp" alt="">
                <h3>Online Schedule</h3>
                <p>All available hours and timings will be present in a well designed online schedule to ease your
                    booking process.</p>
            </div>

            <div class="box">
                <img src="images/services-2.webp" alt="">
                <h3>cosmetic feeling</h3>
                <p>Not only we help relief your pain, but also we make sure everything looks as perfect as it should be
                    .</p>
            </div>

            <div class="box">
                <img src="images/services-3.webp" alt="">
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
                        <img src="../hospital/images/adil.jpg" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="doc1-dentist.php" class="fab fa-profile">about</a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Mohamed Ahmed</h3>
                        <span>General Surgeon</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="../hospital/images/dentist-doc2.JPG" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="doc2-dentist.php" class="fab fa-profile">about</a>
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
    <?php include("c-footer.php");?>
    
    <!-- footer ends -->



    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="../hospital/js/script.js"></script>
</body>

</html>