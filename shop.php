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
          <h2>Heading</h2>
          <p>
 </p>
          
        </div>
        <div class="col-md-6 col-lg-6  cloum3">
          <h2>Heading</h2>
          <form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<fieldset>
				<p>
					<label for="name">Name:</label><?php echo @$name_error; ?>
					<input type="text" id="name" name="name" value="<?php echo @$name ?>" class="required" required />
				</p>
				<p>
					<label for="email">Email:</label><?php echo @$email_error; ?>
					<input type="email" id="email" name="email" value="<?php echo @$email ?>" class="email required" required />
				</p>
				<p>
					<label for="message">Message:</label><?php echo @$message_error; ?>
					<textarea cols="45" rows="7" id="message" name="message" class="required"><?php echo @$message ?></textarea>
				</p>
				<input name="submitted" type="submit" value="Send" />
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