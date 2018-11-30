<?php
include "connection.php";
include "navbar.php";

?>
<!--<!DOCTYPE html>
<html>
<head>

    <title>Student Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
<header style="height: 100px" >
    <div class="logo">

        <h2 style="color: white; font-size: 25px;line-height: 80px;margin-top: 20px;word-spacing: ">ONLINE LIBRARY MANAGEMENT SYSTEM</h2>
    </div>



    <nav>
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="">BOOKS</a></li>
            <li><a href="login.html">LOGIN</a></li>
            <li><a href="registration.html">REGISTARATION</a></li>
            <li><a href="">FEEDBACK</a></li>
        </ul>
    </nav>
</header>
<section>
    <div class="log_img">
        <br> <br><br>
        <div class="box1" >
            <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1><br>
            <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
            <form name="login" action="" method="">
                <br><br>
                <div class="login">
                    <input type="text" name="username" placeholder="Username" required=""> <br><br>
                    <input type="password" name="password" placeholder="Password" required=""> <br><br>
                    <button>Login</button></div>
            </form>
            <p style="color: white; padding-left: 15px;">
                <br><br>
                <a style="color:white;" href="">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                New to this website?<a style="color: white;" href="registration.html">Sign Up</a>
            </p>
        </div>
    </div>
</section>
<footer>

    <p style="color:white;text-align: center;">
        <br>
        Email:&nbsp Online.library@gmail.com <br><br>
        Mobile:&nbsp &nbsp +880171*******
    </p>

    </footer>
</body>
</html>-->

<!--<!DOCTYPE html>
<html>
<head>

    <title>Student Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<header style="height: 90px;">

    <div class="logo">
        <h1 style="color: white; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    </div>

    <nav>
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="">BOOKS</a></li>
            <li><a href="login.html">LOGIN</a></li>
            <li><a href="">ADMIN_LOGIN</a></li>
            <li><a href="">FEEDBACK</a></li>
        </ul>
    </nav>
</header>
<section>
    <div class="log_img">
        <br>
        <div class="box1">
            <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1>
            <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
            <form  name="login" action="" method="">

                <div class="login">
                    <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
                    <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
                    <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">
                </div>

                <p style="color: white; padding-left: 15px;">
                    <br><br>
                    <a style="color:white;" href="">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    New to this website?<a style="color: white;" href="registration.html">Sign Up</a>
                </p>
            </form>
        </div>
    </div>
</section>
<footer>

    <p style="color:white;text-align: center;">
        <br>
        Email:&nbsp Online.library@gmail.com <br><br>
        Mobile:&nbsp &nbsp +880171*******
    </p>

</footer>

</body>
</html>-->

<!DOCTYPE html>
<html>
<head>

    <title>Student Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        section
        {
            margin-top: -20px;
        }
    </style>
</head>
<body>


<section>
    <div class="log_img">
        <br>
        <div class="box1">
            <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1>
            <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
            <form  name="login" action="" method="post">

                <div class="login">
                    <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
                    <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
                    <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">
                </div>

                <p style="color: white; padding-left: 15px;">
                    <br><br>
                    <a style="color:white;" href="">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    New to this website?<a style="color: white;" href="registration.html">Sign Up</a>
                </p>
            </form>
        </div>
    </div>
</section>
<?php

if(isset($_POST['submit']))
{
    $count=0;
    $res = mysqli_query($db,"SELECT * FROM `user` WHERE username='$_POST[username]' && password='$_POST[password]';");
    $count=mysqli_num_rows($res);

    if($count==0)
    {
        ?>
        <!--
        <script type="text/javascript">
          alert("The username and password doesn't match.");
        </script>
        -->
        <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
        </div>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
            window.location="index.php"
        </script>
        <?php
    }
}

?>
<footer>

    <p style="color:white;text-align: center;">
        <br>
        Email:&nbsp Online.library@gmail.com <br><br>
        Mobile:&nbsp &nbsp +880171*******
    </p>

</footer>
</body>
</html>