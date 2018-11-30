  <!DOCTYPE html>
<html>
<head>
  <title>
    Online Library Management System
  </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <style type="text/css">
    nav
    {
      float: right;
      word-spacing: 30px;
      padding: 20px;
    }
    nav li
    {
      display: inline-block;
      line-height: 80px;
    }
  </style>
</head>


<body>
<div class="wrapper">
  <header>
    <div class="logo">
      <img  class="logoo" src="images/9.png" >
      <h2 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h2>
    </div>

    <nav>
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="books.php">BOOKS</a></li>
          <li><a href="addbooks.php">ADD_BOOKS</a></li>
        <li><a href="login.php">LOGIN</a></li>
        <li><a href="feedback.php">FEEDBACK</a></li>
      </ul>
    </nav>
  </header>
  <section  >
    <div class="sec_img">
    <br><br><br>
    <div class="box">
      <br><br><br>
      <h1 style="text-align: center; font-size: 35px"> welcom to libarary</h1><br>
      <h1 style="text-align: center;font-size: 25px;"> open at 09:00</h1>
      <h1 style="text-align: center;font-size: 25px;">close at 15:00 </h1><br>
    </div>


     <!--<div class="w3-content w3-section" style="width: 100%;">
        <img class="mySlides w3-animate-left" src="images/a.jpg" style="width: 100%;height: 100%">
        <img class="mySlides w3-animate-left" src="images/c.jpg" style="width: 100%;height: 100%">
        <img class="mySlides w3-animate-fading" src="images/d.jpg" style="width: 100%;height: 100%">
        <img class="mySlides w3-animate-fading" src="images/e.jpg" style="width: 100%;height: 100%">
      </div>-->

      <script type="text/javascript">
        var a=0;
        carousel();

        function carousel()
        {
          var i;
          var x= document.getElementsByClassName("mySlides");

          for(i=0; i<x.length; i++)
          {
            x[i].style.display="none";
          }

          a++;
          if(a > x.length) {a = 1}
          x[a-1].style.display = "block";
          setTimeout(carousel, 5000);
        }
      </script>
      <!--
                  <br><br><br>

                  <div class="box">
                      <br><br><br><br>
                      <h1 style="text-align: center; font-size: 35px;">Welcom to library</h1><br><br>
                      <h1 style="text-align: center;font-size: 25px;">Opens at: 09:00 </h1><br>
                      <h1 style="text-align: center;font-size: 25px;">Closes at: 15:00 </h1><br>
                  </div>
      -->
    </div>
  </section>
  <footer>

    <p style="color:white;text-align: center;">
      <br>
      Email:&nbsp Online.library@gmail.com <br><br>
      Mobile:&nbsp &nbsp +880171*******
    </p>

  </footer>

</div>
</body>
</html>
