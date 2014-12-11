<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS CAR</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="css/wk8custom.css" rel="stylesheet" type="text/css">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 <?php include('inc/header.inc.php'); ?>
    <!--<div class="jumbotron">
      <div class="container">
       
        
      </div>
    </div>-->
      <div id="myCarousel" class="carousel slide">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src ="images/car.jpg" class="img-responsive img-center " width="100%">
      <div class="container">
        <div class="carousel-caption">
       
          
          
       
        </div>
      </div>
    </div>
    <div class="item">
      <img src="images/car4.jpg" class="img-responsive img-center "  width="100%">
      <div class="container">
        <div class="carousel-caption">
         
          
        </div>
      </div>
    </div>
    <div class="item">
      <img src="images/car3.jpg" class="img-responsive img-center"  width="100%">
      <div class="container">
        <div class="carousel-caption">
         
         
        </div>
      </div>
    </div>
  </div>
  
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>

  <div class="container">
      <!-- Example row of columns -->
      <div class="row">
	<div class="col-md-12" >
        <img src="images/car.jpg" alt="car" class="img-responsive"/>
        </div>
        
       
        </div>
      <div class="row">
          
        <div class="col-md-4 col-lg-4  cloum2">
          <h2>Heading</h2>
            <img src="images/supercharger.jpg" alt"car station" class="img-responsive"/>
          <p>
 </p>
          
        </div>
        <div class="col-md-4 col-lg-4  cloum3">
          <h2>Heading</h2>
            <img src="images/car%202.jpg" alt"car station" class="img-responsive"/>
          <p></p>
          
       </div>
        <div class="col-md-4 col-lg-4 cloum4">
          <h2>Heading</h2>
          <img src="images/car3.jpg" alt"car" class="img-responsive"/>
         
        </div>
      </div>
<?php include('inc/footer.inc.php'); ?>
    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>