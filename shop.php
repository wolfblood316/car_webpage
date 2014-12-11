<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','adrianlandin@yahoo.com');
	define('MESSAGE_SUBJECT','** Email from my Website **');
	define('REPLY_TO', 'adrianlandin@yahoo.com');
	define('FROM_ADDRESS', 'adrianlandin@yahoo.com');
	define('REDIRECT_URL', 'www.yahoo.com');
	
	require_once('validation.php');

?>

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
  <div class="container">
      <!-- Example row of columns -->
      <div class="row">
	<div class="col-md-12" >
        <img src="images/car.jpg" alt="map" class="img-responsive"/>
        </div>
        
       
        </div>
      <div class="row">
          
        <div class="col-md-6 col-lg-6  cloum2">
          <h2> WORLDWIDE</h2>
          
<h3>We would like to hear from you.</h3>
<p>
We want our customer service to be as amazing as our cars. If you have a question, we welcome you to contact our Product Specialists or visit one of our conveniently located Tesla Stores, Galleries, or Service Centers.
 </p>
          
        </div>
        <div class="col-md-6 col-lg-6  cloum3">
          <h2>Heading</h2>
         <form class="form-horizontal">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="Email" type="text">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" placeholder="Password" type="password">
        
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
          
       </div>
          <div class="row">
	<div class="col-md-12" >
        
        </div>
        
       
        </div>
        
      </div>
<?php include('inc/footer.inc.php'); ?>
    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
      <script>
        $(document).ready(function(){
          $('#contact-form').submit(function(e){
              if($('#name').val() == '' || $('#email').val() == ''){
                alert('Please fill out both the name and email fields');
                e.preventDefault();
              }
          });
        
        });
      
      
      </script>
  </body>
</html>