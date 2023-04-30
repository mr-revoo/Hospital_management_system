<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Clinic About</title>
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
        .home {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: url(../hospital/images/dental_a.jpg) no-repeat;
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
    </style>
</head>
<body>
    <?php include("c-header.php");?>

    </section>
    <section class="home" id="home">
        <div class="content">
            <h3>Make your smile shine</h3>
            <p>our dental health services prioritize your oral well-being. trust your experienced to guide you on your
                journey to optimal dental health.</p>
            <a href="dental_clinic.php" class="btn" target="_blank">Back To Clinic</a>
        </div>
    </section>
</body>
<?php include("c-footer.php");?>
</html>