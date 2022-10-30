<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Personal Information</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="index.php"><img src="img/profile.jpg"></a> 
                <h1 style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Personal <br>Information</h1>
                <div class="nav-links">
                    <ul id="MenuItems">
                        <li style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <a href="index.php">HOME</a></li>
                        <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> <a href="About Us Page.html">ABOUT</a></li>
                        <li style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <a href="Contact Us Page.html">CONTACT</a></li>
                        </ul>
                </div>
            </nav>  
            <div id="login-form" class="login-page">
                <div class="form-box">
                    <a href="login.php" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="back-btn"><p>&#8592</p></a>
                    <div class="button-box">
                        <form id="register" class="input-group-register" method="post" action="signup.inc.php">
                        <input type="text" class="input-field" placeholder="Full Name" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" name="name"required>
                        <input type="text" class="input-field" placeholder="UserName" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" name="uid" required>
                        <input type="email" class="input-field" placeholder="Email" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" name="email" required>
                        <input type="password" class="input-field" placeholder="Enter Password" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" name="password" required>
                        <input type="password" class="input-field" placeholder="Confirm Password" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" name="passwordrepeat" required>
                        <button type="submit" name="submit" class="submit-btn" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Register</button>
                    </form>
                </div>
                <div class="error-message" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <?php
                        if (isset($_GET["error"])){
                            if ($_GET["error"] == "passswordsdontmatch"){
                                echo "<p>Password Does Not Match.</p>";
                            }
                            else if ($_GET["error"] == "usernametaken"){
                                echo "<p>Username is Already Taken.</p>";
                            } else {
                                echo "<p>Registration Success</p>";
                            }
                        }
                    ?> </div>

            </div>

           
        </section>
    </body>
</html>