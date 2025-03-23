<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Of Patient</title>
    <link rel="stylesheet" href="nav.css">
    <style>
        body {
            margin-bottom: 80px;
        }
        .mainimge {
            position: fixed;
            z-index: -1;
            opacity: 0.88;
        }
        .logoimg {
            position: absolute;
            margin-top: 30px;
        }
        .pagename {
            font-size: 50px;
            font-weight: bolder;
        }
        .table {
            margin: auto;
            margin-top: 30px;
            border-collapse: collapse;
        }
        th {
            font-size: 25px;
            background-color: #3496ea;
            height: 50px;
            margin: 0px;
        }
        td {
            padding: 20px;
            font-size: 20px;
            text-align: center;
        }
        tr:nth-of-type(even) {
            background-color: #fff6e4;
        }
        tr:nth-of-type(odd) {
            background-color: #9e9e9e;
        }
    </style>
</head>
<body>
    <!-- <img class="mainimge" src="statusbg.jpg" alt=""> -->
    <!-- <header>
        <nav class="navbar">
            <div class="logoimg">
                <img class="logoo" src="newlogo1.png" alt="logo">
            </div>
            <div style="margin: 0px 57%;">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="doctor.php">Doctors</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="staff.php">Staff</a></li>
                    <li class="HelpLine"><a href="aboutus.php">About Us</a></li>
                </ul>
            </div>
        </nav>
    </header> -->
    
    <div class="pagename">
        <center>Contact</center>
    </div>

    <table class="table">
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Number</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
        <?php
            include('connect.php');
            $sql = "SELECT * FROM `contact` WHERE 1";
            $result = $con->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] .  "</td><td>" . $row["number"]  . "</td><td>" . $row["subject"] . "</td><td>" . $row["message"] . "</td><td>";
                }
            } else {
                echo "<tr><td colspan='6'>No results found</td></tr>";
            }
            $con->close();
        ?>
    </table>
</body>
</html>
