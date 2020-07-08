<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>LogIn/Registration</title>

    <link href="custom.css" rel="stylesheet" />
</head>
<body>

    <!-- Main container -->
    <div class="container" id="container"> 

        <!-- <div class="header">
            <h2>Login</h2>
        </div> -->

        <!-- Sign Up Container -->
        <div class="form-container sign-up-container">
            <form class="signup_form" action="signin_signup.php" method="post">
                <h1>Create Account</h1>
                <?php include('errors.php') ?>
                
                <input for="firstname" name="firstname" class="acc_fname" type="text" placeholder="First Name" required/>
                <input for="lastname" name="lastname" class="acc_lname" type="text" placeholder="Last Name" required/>
                <input for="username" name="username" class="user_name" type="text" placeholder="Username" required/>
                <input for="email" name="email" class="acc_email" type="email" placeholder="Email" required/>
                <input for="phone" name="phone" class="acc_phone" type="text" placeholder="Phone Number" required/>
                <input for="password" name="password_1" class="acc_password" type="password" placeholder="Password" required/>
                <input for="password" name="password_2" class="acc_password2" type="password" placeholder="Confirm Password" required/>


                <button class="create_acc_button" type="submit" name="submit"> Sign Up </button>
            
            </form>

        </div>

        <!-- Sign In Container -->
        <div class="form-container sign-in-container">
            <form action="signin_signup.php" method="post">
                <h1>Sign In</h1>

                <input name="username" for="username" type="email" placeholder="Email" required/>
                <input name="password_1" for="password" type="password" placeholder="Password" required/>

                <a class="forgot" href="forgotPassword.php">Forgot Password?</a>
                <button type="submit" name="login_user"> Login </button>
                <!-- <p>Not a user?<a href="registration.php"><b>Register Here</b></a></p> -->
            </form>
        </div>

        <!-- Go To Containers -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Already have an Account?</h1>
                    <p>Welcome Back!</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your Personal Details and Start your Journey With Us!</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    
    </div>

    <script src="buttons.js"></script>
</body>
</html>