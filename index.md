<!-- <?php include('server.php') ?> -->

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Recurring Rebates</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom Stylesheets -->
    <link href="styles/nav_head.css" rel="stylesheet">
    <link href="styles/login_style.css" rel="stylesheet" />

    <!-- Custom JavaScript -->
    <script src="scripts/header.js"></script>

    <script src="scripts/login_buttons.js"></script>

    <!-- Icon for tab -->
    <link rel="shortcut icon" href="#">

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Scipts for Icons -->
    <script src="https://kit.fontawesome.com/8d9f47f2ed.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="design"></div>

    <!-- Navgation Bar -->
    <nav id="header" class="navbar navbar-light fixed-top">
        <a class="navbar-brand" href="index.html">Logo</a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <!-- <div class="collapse navbar-collapse" id="collapsibleNavbar"> -->
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="#">Upload Receipt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Subscription Links</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">My Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sign In</a>
            </li>
        </ul>
        <!-- </div> -->
    </nav>

    <!-- Header & Login/Regristration -->
    <div class="jumbotron">
        <div class="headerPhrase">
            <h1 class="headone">Receive Cash Back on</h1>
            <br></br>
            <h1 class="headthree">your Subscriptions</h1>
            <!-- <br></br>
            <h1 class="headtwo"></h1> -->

        </div>

        <div class="loginBox">

            <!-- Main container -->
            <div class="container" id="container">

                <!-- Sign In Container -->
                <div class="form-container sign-in-container">
                    <form class="signin_form" action="signin_signup.php" method="post">
                        <h1>Sign In</h1>

                        <input name="username" for="username" type="email" placeholder="Email" required/>
                        <input name="password_1" for="password" type="password" placeholder="Password" required/>

                        <a class="forgot" href="forgotPassword.php">Forgot Password?</a>
                        <button type="submit" name="login_user"> Login </button>
                        <!-- <p>Not a user?<a href="registration.php"><b>Register Here</b></a></p> -->
                    </form>
                </div>

                <!-- Sign Up Container -->
                <div class="form-container sign-up-container">
                    <form class="signup_form" action="signin_signup.php" method="post">
                        <h1>Create an Account</h1>
                        <!-- <?php include('errors.php') ?> -->

                        <!-- <input for="firstname" name="firstname" class="acc_fname" type="text" placeholder="First Name" required/>
                        <input for="lastname" name="lastname" class="acc_lname" type="text" placeholder="Last Name" required/>
                        <input for="username" name="username" class="user_name" type="text" placeholder="Username" required/> -->
                        <input for="email" name="email" class="acc_email" type="email" placeholder="Email" required/>
                        <input for="phone" name="phone" class="acc_phone" type="text" placeholder="Phone Number" required/>
                        <input for="password" name="password_1" class="acc_password" type="password" placeholder="Password" required/>
                        <input for="password" name="password_2" class="acc_password2" type="password" placeholder="Confirm Password" required/>


                        <button class="create_acc_button" type="submit" name="submit"> Sign Up </button>

                    </form>

                </div>



                <!-- Go To Containers -->
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-right">
                            <h1>Already have an Account?</h1>
                            <p>Welcome Back!</p>
                            <button class="ghost" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-left">
                            <h1>New Here?</h1>
                            <p>Start Earning Today!</p>
                            <button class="ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div>

            </div>

            <script src="scripts/login_buttons.js"></script>
        </div>

        <div class="headerdetails">
            <p>Earn money for having bills!</p>

        </div>
        <button class="learn"><a href="#scroll_holder">Learn More</a></button>

    </div>

    <!-- How It Works Section -->
    <section id="middle">

        <div id="scroll_holder"></div>


        <div class="works_header">
            <h1>How It Works</h1>
        </div>
        <div class="row works">
            <div class="col-sm-4 hiddentwo">
                <i class="fas fa-users"></i>
                <h3>Join For Free</h3>
                <p>Quick, easy and no personal information required.</p>
            </div>
            <div class="col-sm-4 pr-3 hiddentwo">
                <i class="fas fa-list-ul"></i>
                <h3>Use Our Links</h3>
                <p>Click on the links, found on the referral page, to sign up for your desired subscriptions and start earning cash back.</p>
            </div>
            <div class="col-sm-4 pr-5 hiddentwo">
                <i class="fas fa-receipt"></i>
                <h3>Upload Your Receipt</h3>
                <p>Confirm your subscriptions by uploading your receipts each month and watch the money flow in!</p>
            </div>
        </div>

    </section>

    <!-- Companies Offered -->
    <section class="companies">
        <div class="company_icon">
            <a class="iconone" href="#">
                <picture>
                    <img src="imgs/temp.jpg" style="border-radius: 100%; height: 80px; 
                    width: 80px; position: absolute; margin-left: 100px; top: -25px; 
                    cursor: default; z-index: 105; opacity: 1;">
                </picture>
            </a>
            <a class="icontwo" href="#">
                <picture>
                    <img class="hidden" src="imgs/temp.jpg" style="border-radius: 100%; height: 80px; 
                    width: 80px; position: absolute; top: 80px; cursor: default; z-index: 105; margin-left: 15px;">
                </picture>
            </a>
            <a class="iconthree" href="#">
                <picture>
                    <img src="imgs/temp.jpg" style="border-radius: 100%; height: 100px; 
                    width: 100px; position: absolute; margin-left: 120px; top: 230px; cursor: default; z-index: 105; opacity: 1;">
                </picture>
            </a>

            <a class="iconfour" href="#">
                <picture>
                    <img class="hidden" src="imgs/temp.jpg" style="border-radius: 100%; height: 65px; 
                    width: 65px; position: absolute; top: 310px; cursor: default; z-index: 105; margin-left: 40px;">
                </picture>
            </a>

            <a class="iconfive" href="#">
                <picture>
                    <img class="hidden" src="imgs/temp.jpg" style="border-radius: 100%; height: 65px; 
                    width: 65px; position: absolute; margin-left: 300px; top: 320px; cursor: default; z-index: 105;">
                </picture>
            </a>

            <a class="iconsix" href="#">
                <picture>
                    <img class="hidden" src="imgs/temp.jpg" style="border-radius: 100%; height: 100px; 
                    width: 100px; position: absolute; right: 125px; top: -50px; cursor: default; z-index: 105;">
                </picture>
            </a>
            <a class="iconseven" href="#">
                <picture>
                    <img src="imgs/temp.jpg" style="border-radius: 100%; height: 80px; 
                    width: 80px; position: absolute; left: 1150px; top: 93px; cursor: default; z-index: 105; opacity: 1;">
                </picture>
            </a>
            <a class="iconeight" href="#">
                <picture>
                    <img class="hidden" src="imgs/temp.jpg" style="border-radius: 100%; height: 65px; 
                    width: 65px; position: absolute; left: 1050px; top: 199px; cursor: default; z-index: 105;">
                </picture>
            </a>
            <a class="iconnine" href="#">
                <picture>
                    <img src="imgs/temp.jpg" style="border-radius: 100%; height: 80px; 
                    width: 80px; position: absolute; left: 1150px; top: 273px; cursor: default; z-index: 105; opacity: 1;">
                </picture>
            </a>

        </div>
        <div class="company_header">
            <h1>We Support a Wide Range of Services</h1>
        </div>
    </section>

    <!-- Footer PlaceHolder -->
    <footer>
        <p class="place">placeholder</p>
    </footer>

    <script src="scripts/steps_appear.js"></script>
    <script src="scripts/icons_appear.js"></script>


</body>



</html>
