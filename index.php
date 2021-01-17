<?php
session_start();
?>
<head>
  <title>home</title>
  <link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="../dist/css/swiper.min.css">
 <link rel="stylesheet" type="text/css" href="swiper.min.css"> --> 
 <link rel="stylesheet" href="swiper.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
  body {

      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
      position: relative;
      height: 300px;
    }
    body, html {
  height: 100%;
}
    .swiper-container {
      margin-top: 10px;
      /*border:2px solid blue;*/
      /*background-image: radial-gradient(white,grey,grey,grey,blue);*/
      width: 100%;
      height: 420px;
      padding-top: 50px;
      padding-bottom: 50px;
      margin-top: 0px; 
      background-image: url(bp6.jpeg); 
      background-size: 100% 100%
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }
  .a
  {
    height:500px;
    /*border: solid black 1px;*/
    background-color: #ded9de;
    background-image: url(bp6.jpeg);
    background-repeat: no-repeat;
  background-size: 100% 100%;

  }
  m li a{
    text-decoration: none;
    color:red;
  }
  .parallax {
  /* The image used */
  background-image: url('bp3.jpg');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  /* background-size: 100% 100%;*/
}
.b
{
  /*margin-top: 100px;*/
  /*top: 200px;*/
  padding-top: 150px;
  font-family: "Times New Roman", Times,serif;
  font-size: 200px;
  color: #c1f587;
}
@media only screen and (max-width:970px)
{.b{
padding-top: 150px;
  font-family: "Times New Roman", Times,serif;
  font-size: 100px;
  color: #c1f587;
}}
@media only screen and (max-width:760px)
{ .b{
padding-top: 150px;
  font-family: "Times New Roman", Times,serif;
  font-size: 50px;
  color: #c1f587;
}}
.c
{
   padding-top: 200px;
  font-family: "Times New Roman", Times,serif;
  font-size: 100px; 
  color: #de554b;
}
@media only screen and (max-width:970px)
{.c{
padding-top: 150px;
  font-family: "Times New Roman", Times,serif;
  font-size: 70px;
  color: #de554b;
}}
@media only screen and (max-width:760px)
{ .c{
padding-top: 150px;
  font-family: "Times New Roman", Times,serif;
  font-size: 50px;
  color: #de554b;
}}
.d
{
  height:100px;
  background-color: #252526;
}
a
{
  color: white;
}
.e
{
   font-family: "Times New Roman", Times,serif;
  color:white;
   margin-top: 40px;
   font-size:10px;
}
@media only screen and (max-width:970px)
{.e{

  font-family: "Times New Roman", Times,serif;
  margin-top: 40px;
  font-size: 5px;
  color: white;
}}
@media only screen and (max-width:760px)
{ .e{

  font-family: "Times New Roman", Times,serif;
  margin-top: 40px;
  font-size: 5px;
  color: white;
}}
</style>
</head>
<body>


<?php
include 'header.php';

?>

<div class="parallax col-lg-12 col-md-12 col-s-12 col-xs-12" style="margin-top: 110px;"><p align="center" class="b">BE YOU!!!</p></div>
<div class="swiper-container col-lg-12 col-md-12 col-s-12 col-xs-12">
    <div class="swiper-wrapper">
      <a href=""><div class="swiper-slide" style="background-image:url(i3.jpg); background-size:100% 100%;"></div></a>
      <div class="swiper-slide" style="background-image:url(i4.jpg); background-size:100% 100%;"></div>
      <div class="swiper-slide" style="background-image:url(i5.jpg); background-size:100% 100%;"></div>
      <div class="swiper-slide" style="background-image:url(i6.jpg); background-size:100% 100%;"></div>
      <div class="swiper-slide" style="background-image:url(i7.jpg); background-size:100% 100%;"></div>
      <div class="swiper-slide" style="background-image:url(i8.jpg); background-size:100% 100%;"></div>
      <div class="swiper-slide" style="background-image:url(i9.jpg); background-size:100% 100%;"></div>
      <div class="swiper-slide" style="background-image:url(i10.jpg); background-size:100% 100%;"></div>
      <div class="swiper-slide" style="background-image:url(i11.jpg); background-size:100% 100%;"></div>
      <div class="swiper-slide" style="background-image:url(i12.jpg); background-size:100% 100%;"></div>
    </div>
    <div class="swiper-pagination col-lg-12 col-md-12 col-s-12 col-xs-12"></div>
  </div>
  <script src="../dist/js/swiper.min.js"></script>
  <script type="text/javascript" src="swiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
  <div class="parallax col-lg-12 col-md-12 col-sm-12 col-xs-12"><p align="center" class=c>FIND YOUR OWN STYLE!!!</p></div>
  <div class="swiper-container" style="width: 100%;
      padding-left: 10px;
      height: 50%;
      background-color: white;
      margin-left: 0px;
      z-index: 0;">
    <div class="swiper-wrapper">


      <div style="margin-top: -60px; margin-left: 500px; position: absolute; font-size: 50px; color: blue;">Women&nbsp&nbspsection</div>


      <div class="swiper-slide" style="background-image: url(photo2/wg5.1.jpeg);
      width: 100%;
      height: 100%;
      background-size: 50% 100%;
      background-repeat: no-repeat;">
        <div class="text" style="margin-top: 60%; color:black;"></div>
      </div>
      <div class="swiper-slide" style="background-image: url(photo2/wg5.1.jpeg);
      width: 100%;
      height: 100%;
      background-size: 50% 100%;
      background-repeat: no-repeat;"></div>
      <div class="swiper-slide" style="background-image: url(photo2/wg5.1.jpeg);
      width: 100%;
      height: 100%;
      background-size: 50% 100%;
      background-repeat: no-repeat;"></div>
      <div class="swiper-slide" style="background-image: url(photo2/wg5.1.jpeg);
      width: 100%;
      height: 100%;
      background-size: 50% 100%;
      background-repeat: no-repeat;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>


  <!-- Swiper JS -->
  <script src="swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 5,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>

  <br>

  <div class="swiper-container" style="width: 100%;
      padding-left: 10px;
      height: 50%;
      background-color: white;
      margin-left: 0px;
      z-index: 0;">
    <div class="swiper-wrapper">

      <div style="margin-top: -60px; margin-left: 500px; position: absolute; font-size: 50px; color: blue;">Men&nbsp&nbspsection</div>
      


      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;">
        <div class="text" style="margin-top: 60%; color:black;"></div>
      </div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>


  <!-- Swiper JS -->
  <script src="swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 5,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>


<br>

  <div class="swiper-container" style="width: 100%;
      padding-left: 10px;
      height: 50%;
      background-color: white;
      margin-left: 0px;
      z-index: 0;">
    <div class="swiper-wrapper">


      <div style="margin-top: -60px; margin-left: 500px; position: absolute; font-size: 50px; color: blue;">Kids&nbsp&nbspsection</div>


      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;">
        <div class="text" style="margin-top: 60%; color:black;"></div>
      </div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
      <div class="swiper-slide" style="background-image: url(i2.jpg); background-repeat: no-repeat;
      width: 100%;
      height: 100%;
  
      background-position: center;"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>


  <!-- Swiper JS -->
  <script src="swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 5,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>


  
  <div class="parallax col-lg-12 col-md-12 col-s-12 col-xs-12"></div>

<?php
include 'footer.php';

?>
</body>
</html>