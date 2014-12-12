<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','adrianlandin@yahoo.com');
	define('MESSAGE_SUBJECT','** Email from my Website **');
	define('REPLY_TO', 'adrianlandin@yahoo.com');
	define('FROM_ADDRESS', 'adrianlandin@yahoo.com');
	define('REDIRECT_URL', 'http://wolfblood316.aisites.com/car_webpage/index.php');
	
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
    <link href="css/wk8custom.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <style>
        body{
            background: url("images/bg.png") repeat;
            
        }</style>
  <body id="contact">
 <?php include('inc/header.inc.php'); ?>
   
  <div class="container">
      <!-- Example row of columns -->
      <div class="row">
	<div class="col-md-12" >
        <img src="images/car.jpg" alt="map" class="img-responsive"/>
        </div>
        
       
        </div>
      <div class="row">
            
            <div class="col-md-8">
                
                <iframe scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed" frameborder="0" height="400px" width="100%"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    3481 Melrose Place<br>Beverly Hills, CA 90210<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (123) 456-7890</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
          <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="sentMessage" id="contact-form" novalidate="">
                    <fieldset>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input class="required" id="name" required="" data-validation-required-message="Please enter your name." type="text">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input class="required" id="phone" required="" data-validation-required-message="Please enter your phone number." type="tel">
                        <div class="help-block"></div></div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="email">Email Address:</label>
                            <input class="email required" id="email" required="" data-validation-required-message="Please enter your email address." type="email">
                        <div class="help-block"></div></div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="message">Message:</label>
                            <textarea rows="10" cols="100" class="required" id="message" required="" data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        <div class="help-block"></div></div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary" value="send" name="submitted">Send Message</button>
                        </fieldset>
                </form>
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