<!DOCTYPE html>
<html>
    <head>
        <title>Data Information</title>
        <style type="text/css">
            table {
                border-collapse: collapse;
                width: 100%;
                color: #f44336;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-size: 15px;
                text-align: Left;
            }
            th{
                background-color: #f44336;
                color: white;
            }
            tr:nth-child(even) {
            background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        </tr>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "dbpractice");
        if ($conn->connect_error){
            die("Connection Failed:". $conn->connect_error);
        }

        $sql = "SELECT userId, userName, userEmail, userUId, userPwd from users";
        $result = $conn->query($sql);

        if ($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["userId"] ."</td><td>". $row["userName"] ."</td><td>". $row["userEmail"] ."</td><td>". $row["userUId"] ."</td><td>". $row["userPwd"] ."</td></tr>";
            }
            echo "</table";
        }

        $conn-> close();
        ?>
        </table>
        <a href="admin.php" class="back-btn">BACK</a>
        <style type="text/css">
           a {
                margin-top: 50px;
                display: inline-block;
                text-decoration: none;
                color: black;
                border: 3px solid #f44336;
                padding: 10px 30px;
                font-size: 13px;
                background: #f2f2f2;
                position: center;
                color: #f44336;
            }
            a::after{
                content: '';
                width: 0%;
                height: 2px;
                background: #f44336;
                display: block;
                margin: auto;
                transition: 0.5s;
            }
            a:hover::after{
                width: 100%;
            }
        </style>
    </body>
</html>