
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
   .ac{


  background: linear-gradient(to right, rgb(66, 135, 245,.4)
                                                 , rgba(255,0,0,.4));
}
.bc{

margin-top: -22px;
  background: linear-gradient(to right, rgb(66, 135, 245,.4)
                                                 , rgba(255,0,0,.4));
}
.navbar li:hover::after {
  transform: scale(1);
}
ul li:hover a{
  background-color: white !important;
}
ul li ul li:hover a{
  background: linear-gradient(to right, rgb(66, 135, 245,.4)
                                                 , rgba(255,0,0,.4)) !important;
 /* color: white !important;*/
}

</style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top ac">
  <div class="container-fluid">
    <div class="navbar-header">
    
          <img class="navbar-logo" src="CAPTURE.JPG" style="height: 50px; width: 50px;">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      
      <p class="navbar-brand">YANKEEZ</p>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

    <ul class="nav navbar-nav">
      <li><a href="index.php">HOME</a></li>
      <?php
      include 'connect.php';
        $cc=$connection->query("SELECT * FROM category Order by id asc");
        while($ccc=mysqli_fetch_array($cc))
        {
          $catid=$ccc['id'];
          echo "<li class='dropdown'><a href='#' data-toggle='dropdown'>".$ccc['category']."</a>
            <ul class='dropdown-menu'>";
            $sc=$connection->query("SELECT * FROM subcategory WHERE category='$catid'");
            while ($scc=mysqli_fetch_array($sc)) {
             echo " <li><a href='category.php?id=".$scc['id']."'>".$scc['sub_category']."</a></li>";
           }

           echo " </ul>
          </li>";
        }
      ?>
    </ul>



    
      <div>
          <?php
          if (isset($_SESSION['user'])) {
            $email=$_SESSION['user'];
            ?>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="Profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
            </ul>
            <?php
          }
          else
          {
          ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="user regis.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="user login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        <?php
          }
          ?>

  </div>

      




    <form class="navbar-form navbar-left" action="">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search" style="width: 300px;">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search" style="height: 20px;"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>






<nav class="navbar navbar-default navbar-fixed-top bc" style="margin-top: 60px; z-index: 2;">
  <div class="container-fluid">
    <div class="navbar-header navbar-right">

    <ul class="nav navbar-nav" style="padding-right: 16px;">
      <li><a href="mycart.php"><span class="fa fa-shopping-cart"></span> Add to cart</a></li>

    </ul>



        </div>

  </div>
</nav>




