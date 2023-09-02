<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Principle Login</title>
        <link rel="stylesheet" href="principle_login.css">
    </head>
    <body>

        <form class="box" action="" method="post">
            <h1> Login </h1>
            <input type="text" name="email" placeholder="Principle ID">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="login">
        </form><br>
        <?php
             session_start();
             $email = "";
             $name = "";
             if(isset($_POST['submit'])){
                 $connection = mysqli_connect("localhost","root","");
                 $db = mysqli_select_db($connection,"sms");
                 $query = "select * from login where email = '$_POST[email]'";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                     if($row['email'] == $_POST['email']){
                         if($row['password'] == $_POST['password']){
                             $_SESSION['email'] = $row['email'];
                             $_SESSION['name'] = $row['name'];
                             header("Location: principle_dashboard.php");
                         }
                         else{
                             echo "Please Check your details";
                         }
                        }
                 }
             }
        ?>
    </body>
</html>