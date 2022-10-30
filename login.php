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
                        <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> <a href="aboutus.php">ABOUT</a></li>
                        <li style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <a href="contactus.php">CONTACT</a></li>
                        <li><button class="loginbtn" onclick="document.getElementsById('login-page').style.display='block'" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">LOG IN</button></li>
                    </ul>
                </div>
            </nav>  
            <div id="login-form" class="login-page"> 
                <div class="form-box">
                    <div class="button-box">
                        </div>
                        <form id="login" class="input-group-login" method="post" action="login.inc.php">
                            <input type="text" class="input-field" placeholder="Enter Username" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" name="uid" required>
                            <input type="password" class="input-field" placeholder="Enter Password" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" name="password" required>
                            <input type="checkbox" class="check-box" ><span style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Remember Password</span>
                            <button type="submit" name="submit" class="submit-btn" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Log In</button>
                    
                            <a href="register.php" type="link" class="link" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Create Account</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>