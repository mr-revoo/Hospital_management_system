<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Clinic</title>
    <link rel="stylesheet" href="../hospital/css/emergency_styles.css">
    <script src="https://kit.fontawesome.com/abe3b4ce91.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />


</head>

<body>
    <?php include("c-header.php");?>
    <!--header end-->
    <!--home-->
    <section class="home" id="home">
        <div class="content">
            <h3>Let the doctor handle it</h3>
            <p>We Have A Range Of Services From Basic First Aid And General Outpatient Services To Sophisticated Surgical And Medical Emergencies.</p>
            <a href="appointment.php" class="btn">Make Appointment</a>
        </div>
    </section>
    <!--home end-->
    <!--about us section-->
    <section class="about" id="about">
        <h1 class="heading"> About us</h1>
        <div class="row">
            <div class="image">
                <img src="../hospital/images/Doctors.jpg" alt="">
            </div>
            <div class="content">
                <h3>Our clinic is made for instant treatment</h3>
                <p>Located In The Heart Of Cairo, Egypt. Emergency Services Has Been In Its Existing Location For Close To 30 Years And Is Proud To Serve The Local Comminty,The Surrounding Areas And Our Diehard Patients, Who Travel From As Far As Saudi Arabia And Kwait. </p>
                <p>The ER Is located on the ground floor with easy patient and ambulance access.</p>
                <a href="../hospital/emerg-abt.php" class="btn"> Read more </a>
            </div>
        </div>
    </section>
    <!--about end-->
    <!--services-->
    <section class="services" id="services">

        <h1 class="heading">Our Services</h1>

        <div class="box-container">
            <div class="box">
                <img src="../hospital/images/online schedule.png" alt="">
                <h3>Online Schedule</h3>
                <p>All Avalible Hours And Timings Will Be Present In A Well Designed Online Schedule To Ease Your Booking Process.</p>
            </div>

            <div class="box">
                <img src="../hospital/images/ER icon.png" alt="">
                <h3>Cosmetic Feeling</h3>
                <p>Not Only We Treat You But Also We Make Sure Everything Looks As Perfect As It Should Be.</p>
            </div>

            <div class="box">
                <img src="../hospital/images/Rash.png" alt="">
                <h3>Emergency Services Experts</h3>
                <p>We Have A Team Of Emergency Experts That Will Take Best Care Of You As Soon As You Arrive.</p>
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
                        <img src="images/merna.jpg" alt="" />
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="../hospital/doc1-em-prof.php" class="fab fa-profile">about</a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Mayada Hossam</h3>
                        <span>General Surgeon</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/mona.jpg" alt="" />
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="../hospital/doc2-em-prof.php" class="fab fa-profile">about</a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Merna Ali</h3>
                        <span>General Surgeon</span>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
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
                    <span class="amount">15</span>
                    <span class="duration"> /year</span>
                </div>
                <ul>
                    <li> <i class="fas fa-check"></i> X-rays</li>
                    <li> <i class="fas fa-check"></i> blood analysis</li>
                    <li> <i class="fas fa-check"></i> CT scans</li>
                    <!--<li> <i class="fas fa-check"></i> oral hygiene experts</li>-->
                </ul>
                <a href="#" class="btn">read more </a>
            </div>

            <div class="box active">
                <h3 class="title">standard</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">25</span>
                    <span class="duration"> /year</span>
                </div>
                <ul>
                    <li> <i class="fas fa-check"></i> X-rays</li>
                    <li> <i class="fas fa-check"></i> blood analysis</li>
                    <li> <i class="fas fa-check"></i> CT scans</li>
                    <!--<li> <i class="fas fa-check"></i> oral hygiene experts</li>-->
                </ul>
                <a href="#" class="btn">read more </a>
            </div>

            <div class="box">
                <h3 class="title">premium</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">40</span>
                    <span class="duration"> /year</span>
                </div>
                <ul>
                    <li> <i class="fas fa-check"></i> X-rays</li>
                    <li> <i class="fas fa-check"></i> blood analysis</li>
                    <li> <i class="fas fa-check"></i> CT scans</li>
                    <!--<li> <i class="fas fa-check"></i> oral hygiene experts</li>-->
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
                    <img src="../hospital/images/bone.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">Broken Bones and Sprains</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 04th september, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>there may be swelling, bruising or tenderness around the injured area. you may feel pain when you put weight on the injury, touch it, press it, or move it. the injured part may look deformed – in severe breaks, the broken bone may be poking through the skin .</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../hospital/images/skin.png" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">Skin Infections</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 04th september, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>Common symptoms include redness of the skin and a rash. You may also experience other symptoms, such as itching, pain, and tenderness. See a doctor if you have pus-filled blisters or a skin infection that doesn't improve or gets progressively worse. Skin infections can spread beyond the skin and into the bloodstream.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="../hospital/images/lung.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">Upper Respiratory Infections</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 04th september, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>The most common upper respiratory infection is a cold, which often presents with a sore throat. A cold is a different condition than influenza and pneumonia, which are lower respiratory tract illnesses.</p>
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
                <h3>address</h3>
                <p>Cairo , Egypt.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>

            <div class="box">
                <h3>e-mail</h3>
                <a href="#" class="link">judy0zox@gmail.com</a>
                <a href="#" class="link">zoxjudy@gmail.com</a>
            </div>

            <div class="box">
                <h3>call us</h3>
                <p>+20 1111004446</p>
                <p>+20 1150489680</p>
            </div>

            <div class="box">
                <h3>opening hours</h3>
                <p>
                    24 Hours A Week
                </p>
            </div>

        </div>

        <div class="credit">created by <span>our team</span> | all rights reserved!</div>

    </section>
    <!-- footer ends -->





    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="../hospital/js/script.js"></script>
</body>

</html>