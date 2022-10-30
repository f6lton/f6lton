<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Personal Information</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="index.php"><img src="img/profile.jpg"></a> 
                <h1 style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Personal <br>Information</h1>
                <div class="nav-links">
                    <ul>
                        <li style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <a href="index.php">HOME</a></li>
                        <li style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"> <a href="aboutus.php">ABOUT</a></li>
                        <li style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <a href="contactus.php">CONTACT</a></li>
                        <?php
                            if (isset($_SESSION["userUId"])) {
                                echo  "<li style='font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'> <a href='users.php'>Users</a></li>";
                                echo  "<li style='font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'> <a href='messages.php'>Messages</a></li>";
                                echo  "<li style='font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'> <a href='logout.inc.php'>Log Out</a></li>";
                            }
                            else {
                                echo  "<li style='font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;'> <a href='login.php'>Log In</a></li>";
                            }
                        ?>
                        </ul>
                </div>
            </nav>
        <div class="text-box">
            <h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Hi. I am Felton Fritz Laranjo Belgera.</h1>
            <p style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">I am a degree holder in Information Technology. Studied Bachelor of Science in Information Technology at Siquijor State College I am currently seeking for a career which provides an opportunity to cultivate and enhance
                my skills.</p>
        </div>                
        </section>
    </body>
</html>