<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiology clinic</title>
    <link rel="stylesheet" href="css/css2.css">
    <script src="https://kit.fontawesome.com/abe3b4ce91.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("c-header.php");?>
    <!--header end-->
    <!--home-->
    <section class="home" id="home">
        <div class="content">
            <h3>Come on, let's check on you</h3>
            <p>Health is the basis of life, so each of us must constantly examine himself to maintain his health.</p>
            <a href="#" class="btn">Make Appointment</a>
        </div>
    </section>
    <!--home end-->

    <!--about us section-->
    <section class="about" id="about">
        <h1 class="heading"> About us</h1>
        <div class="row">
            <div class="image">
                <img src="../images/rad1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Our clinic is made to keep you safe.</h3>
                <p>Health is every person's first priority,
                     and we always strive to live in the best health to carry out the tasks of life,
                      so our clinic was made for that, and that we have the latest x-ray equipment to examine our valued customers,
                       and we wish you all the best health.</p>
                <a href="../hospital/rad-abt.php" class="btn"> Read more </a>
            </div>
        </div>
    </section>
    <!--about end-->

    <!--services-->
    <section class="services" id="services">

        <h1 class="heading">Our Services</h1>

        <div class="box-container">
            <div class="box">
                <img src="../images/sche.jpg" alt="">
                <h3>Online Schedule</h3>
                <p>You can view our clinic schedule here on our website!</p>
            </div>

            <div class="box">
                <img src="../images/ray1.jpg" alt="">
                <h3>Transsectional Rays</h3>
                <p>Our clinic has the latest equipment to perform CT scans,
                     under the supervision of specialists in the work of this type of radiology.</p>
            </div>

            <div class="box">
                <img src="../images/xray.webp" alt="">
                <h3>X-ray</h3>
                <p> There is no doubt that our clinic has rooms dedicated to doing X-rays,
                     using a set of advanced equipment to make these rays for our dear customers. </p>
                
                
            </div>

            <div class="box">
                <img src="../images/mag.jpg" alt="">
                <h3>Magnetic resonance imaging</h3>
                <p> Magnetic resonance imaging is one of the most important features of our clinic,
                     because it has experts in this type of radiation,
                      and they are trained at the highest level to perform this very important type of radiation,
                       and our clinic has high-quality equipment for these rays </p>
                
                
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
                        <img src="../images/rahma (1).jpeg" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Rahma Hagag</h3>
                        <span>Specializing in making CT and X-rays</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="../images/ahmed.jpeg" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Ahmed Taher</h3>
                        <span>Specialized in magnetic resonance imaging</span>
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
                    <span class="amount">50</span>
                    <span class="duration"> /year</span>
                </div>
                <ul>
                    <li> <i class="fas fa-check"></i>CT scans </li>
                    <li> <i class="fas fa-check"></i> X-ray</li>
                    <li> <i class="fas fa-check"></i> Magnetic resonance imaging</li>
                    
                </ul>
                <a href="#" class="btn">read more </a>
            </div>

            <div class="box active">
                <h3 class="title">standard</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">100</span>
                    <span class="duration"> /year</span>
                </div>
                <ul>
                    <li> <i class="fas fa-check"></i> CT scans</li>
                    <li> <i class="fas fa-check"></i> X-ray</li>
                    <li> <i class="fas fa-check"></i> Magnetic resonance imaging</li>
                    
                </ul>
                <a href="#" class="btn">read more </a>
            </div>

            <div class="box">
                <h3 class="title">premium</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">150</span>
                    <span class="duration"> /year</span>
                </div>
                <ul>
                    <li> <i class="fas fa-check"></i> CT scans</li>
                    <li> <i class="fas fa-check"></i> X-ray</li>
                    <li> <i class="fas fa-check"></i> Magnetic resonance imaging</li>
                    
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
                    <img src="../images/ct.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">Transsectional Rays</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 10th DEC, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>CT scans use X-rays, which produce ionizing radiation.
                         Research shows that this kind of radiation may damage your DNA and lead to cancer.
                          But the risk is still very small -- your chances of developing a fatal cancer because of a CT scan are about 1 in 2,000.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/xray1.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">X-ray</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 25th JAN, 2023 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>X-rays can cause mutations in our DNA and,
                         therefore, might lead to cancer later in life.
                          For this reason, X-rays are classified as a carcinogenTrusted Source by both the World Health Organization (WHO) and the United States government.
                           However, the benefits of X-ray technology far outweigh the potential negative consequences of using them</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../images/mag1.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">Magnetic resonance imaging</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 29t MAR, 2023 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>Implanted pacemakers
                        Intracranial aneurysm clips
                        Cochlear implants
                        Certain prosthetic devices
                        Implanted drug infusion pumps
                        Neurostimulators
                        Bone-growth stimulators
                        Certain intrauterine contraceptive devices; or
                        Any other type of iron-based metal implants.</p>

                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- blog ends -->
    <!-- footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Address</h3>
                <p>AL Dokkii , Egypt</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>

            <div class="box">
                <h3>E-mail</h3>
                <a href="#" class="link">ahmedameen9001@gmail.com</a>
                <a href="#" class="link">ahmedameen9001@gmail.com</a>
            </div>

            <div class="box">
                <h3>Call us</h3>
                <p>+20 1067260165</p>
                <p>+20 1067260165</p>
            </div>

            <div class="box">
                <h3>Opening hours</h3>
                <p>monday - tuseday : 9:00 AM - 17:00 PM <br>
                    Friday : 14:00 PM - 0:00 AM
                </p>
            </div>

        </div>

        <div class="credit">created by <span>our team</span> | all rights reserved!</div>

    </section>
    <!-- footer ends -->



    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>