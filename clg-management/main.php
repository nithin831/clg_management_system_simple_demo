<!DOCTYPE html>
<html land="en">
<head>
    <meta charset="utf-8" />
    <title>College Name</title>
    <link rel="stylesheet" href="index.css" />
    <style>
        #ps{
            color:black;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <nav class="navbar">
            <p>COLLEGE MANAGEMENT SYSTEM</p>
            <ul>
                <li><a id="ps"class="active" href="#"><b> Home </b></a></li>
                <li><?php echo '<a id="ps" href="principle_login.php"> <b>Principle Login</b></a>';?></li>
                    <li><?php echo '<a id="ps" href="student_login.php"> <b>Students Login</b></a>';?></li>
                    <li><?php echo '<a id="ps"href="admin_login.php"> <b>Teachers Login</b></a>';?></li>
            </ul>
        </nav>
        <div class="center">
            <h1> Welcome to COLLEGE MANAGEMENT SYSTEM</h1>
            <div class="buttons">
                <button><a href="abt.php"> About Us </a></button>
                <button class="btn"><a href="contact.php"> Contact Us</a> </button>
            </div>
        </div>
    </div>
</body>
</html>
