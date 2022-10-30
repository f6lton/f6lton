<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Personal Information</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <section class="sub-header">
            <nav>
                <a href="index.php"><img src="img/profile.jpg"></a> 
                <h1 style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Personal <br>Information</h1>
                <div class="nav-links">
                    <ul>
                        <li style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <a href="index.php">HOME</a></li>
                        <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> <a href="aboutus.php">ABOUT</a></li>
                        <li style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <a href="contactus.php">CONTACT</a></li>
                        <li style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <a href="login.php">LOG IN</a></li>
                    </ul>
                </div>
            </nav>
            <h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Contact Us </h1>   
            </section>
            <div class="contact-col">
                <form method="post" action="contactus.inc.php">
                    <input type="text" placeholder="Enter Your Name" required style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" name="name">
                    <input type="email" placeholder="Enter Your Email Address" required style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" name="email">
                    <input type="text" placeholder="Enter Your Subject" required style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" name="subject">
                    <textarea rows="8" placeholder="Message" required style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" name="message"></textarea>
                    <button type="Submit" class="submit-btn" name="submit" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" name="button">Send Message</button>
                
                </form>
            </div>
    </body>
</html>

