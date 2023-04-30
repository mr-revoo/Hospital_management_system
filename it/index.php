<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="login_reg-styles.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/abe3b4ce91.js"></script>
    <!-- validator.js -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/validator/13.6.0/validator.min.js"></script> -->
    <!-- jquery library -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="signup.php" id="form" method="post">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <div class="infield">
                    <input type="text" id="name" placeholder="Full Name" name="Name" required/>
                    <label for="name"></label>
                    <div class="error"></div>
                </div>
                
                <div class="infield">
                    <input type="text" id="name" placeholder="Your Age" name="age" required/>
                    <label for="age"></label>
                    <div class="error"></div>
                </div>
            
                <div class="infield">
                    <input type="email" id="email" placeholder="Email" name="Email" required/>
                    <label for="email"></label>
                    <div class="error"></div>
                </div>
                <div class="infield">
                    <input type="password" id="password" placeholder="Password" name="Password" required/>
                    <label for="password"></label>
                    <div class="error"></div>
                </div>
                <div class="infield">
                    <input type="password" id="password2" placeholder="Confirm the password" name="repass" required/>
                    <label for="password2"></label>
                    <div class="error"></div>
                </div>
                <button id="sign up" name="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-up-container">
            <form action="login.php" id="form" method="post">
                <h1>Sign in</h1>  
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <div class="infield">
                    <input type="email" placeholder="Email" name="Email" required/>
                    <label></label>
                    <div class="error"></div>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" name="Password" required/>
                    <label></label>
                    <div class="error"></div>
                </div>
                
                
                <a href="#" class="forgot">Forget your password?</a>
                <button id="sign in"name="submit2">Sign In</button>
            </form>
        </div>
        <div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button>Sign Up</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button>Sign In</button>
                </div>
            </div>
            <button id="overlayBtn"></button>
        </div>
    </div>
        <script>
        const container = document.getElementById('container');
        const overlayCon = document.getElementById('overlayCon');
        const overlayBtn = document.getElementById('overlayBtn');
        
        overlayBtn.addEventListener('click', ()=> {
            container.classList.toggle('right-panel-active');

            overlayBtn.classList.remove('btnScaled');
            window.requestAnimationFrame( ()=> {
                overlayBtn.classList.add('btnScaled');
            })
        });

    </script>
</body>
</html>