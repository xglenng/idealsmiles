<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Precedent Dental Lab</title>

    <!-- Bootstrap -->
 <!--    <link rel="stylesheet" type="text/css" href="css\social-buttons.css">
    <link rel="stylesheet" type="text/css" href="css\font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css\font-awesome.css.min">
    <link rel="stylesheet" type="text/css" href="css\bootstrap-carousel.js">
     <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css"> -->
     <link rel="stylesheet" type="text/css" href="css\font-awesome.css">
     <link rel="stylesheet" type="text/css" href="css\social-buttons.css">
     <link rel="stylesheet" type="text/css" href="css\contact.css">
     <link rel="stylesheet" href="css\jqueryform.css" >
     <link rel="stylesheet" type="text/css" href="css\stylish.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-social.less">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jqueryform.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(40.374413, -111.719669),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

  </head>
  <body>
 

    <div class="navbar navbar-inverse">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <a class="navbar-brand" href="index.php">Precedent Dental</a>
  </div>
  <div class="navbar-collapse collapse navbar-inverse-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="viewScripts.html">Scripts</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="services.html">Our Services</a></li>       
          <li class="divider"></li>
        </ul>
      </li>
    </ul>
    
      
    <ul class="nav navbar-nav navbar-right">    

          <!-- Social Media --> 
        <a class="btn btn-social-icon btn-twitter">
         <i class="fa fa-twitter"></i>
         </a>
        <a class="btn btn-social-icon btn-instagram">
         <i class="fa fa-instagram"></i>
         </a>
        <a class="btn btn-social-icon btn-facebook">
         <i class="fa fa-facebook"></i>
         </a>
        <a class="btn btn-social-icon btn-pinterest">
         <i class="fa fa-pinterest"></i>
         </a>
    </ul>
  </div>
</div>
 
 <!-- Form -->
 <div class="container">
  <div class="row"> 
    

  <div class="col-xs-6"> <div id="container">
<!-- <h2>Contact Precedent Dental</h2> -->
<div id="form1">
<!-- Dynamic Form Div -->
</div>
</div></div>
  <div class= "col-xs-6"></div>
  <div class="col-md-4"> <div id="map-canvas"></div></div>
</div>
</div>


   <!-- footer --> 
    <!-- <div class="container" id="footer" style="margin-top:30px">
      <div class="row">
        <div class"col-xs-12 col-sm-10 col-md-10 col-lg-12" style="text-align:center">
             <p>Copyright &copy; <?=date('Y'); ?> By Precedent Dental. &nbsp;&nbsp;&nbsp;&nbsp; All Rights Reserved.</p>
         </div>

      </div>
    </div>  -->
<footer>
    <ul>
            <!-- three footer columns are here -->
      <li>
          <div class="text">
              <h4>About Precedent </h4>
              <div>It is a major concern at Precedent Dental Lab to provide our clients with the very best in service. Our customer care department is staffed by highly qualified and experienced personnel,
               to ensure that our dental lab customers get everything they need, quickly and efficiently. <a href="services.html"> Read more</a></div>
          </div>
      </li>
      <li>
          <div class="text">
              <h4>Services</h4>
              <div> ​
                <ul>
                  <li>Traditional crown and bridge</li>
                  <li>Dental Implants </li>
                  <li>Pre-case planning</li>
                  <a href="services.html"> Read more</a>
                </ul>
              </div>
                
          </div>
      </li>
      <li>   
          <div class="text">
              <h4>Contact Us</h4>              
              <div>
                <address>
                  <strong>Precedent Dental.</strong><br>
                1015 Sage Dr<br>
                Pleasent Grove, UT 84062<br>
                <abbr title="Phone">P:</abbr> (801) 604-5110
              </address>

              <address>
                <strong>Warren Glenn</strong><br>
                <a href="mailto:#">first.last@example.com</a>
              </address>
              <a href="contact.php"> Read more</a>
            </div>
          </div>
      </li>
</ul>
       <div class="bar">
    <div class="bar-wrap">
        <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">License</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">About</a></li>
        </ul>

        <div class="social">
            <a href="#" class="fb">
                <span data-icon="f" class="icon"></span>
                <span class="info">
                    <span class="follow">Become a fan Facebook</span>
                </span>
            </a>

            <a href="#" class="tw">
                <span data-icon="T" class="icon"></span>
                <span class="info">
                    <span class="follow">Follow us Twitter</span>
                </span>
            </a>

            <a href="#" class="rss">
                <span data-icon="R" class="icon"></span>
                <span class="info">
                    <span class="follow">Subscribe RSS</span>
                </span>
            </a>
        </div>
        <div class="clear"></div>
        <div class="copyright">&copy;  <?=date('Y'); ?> All Rights Reserved</div>
    </div>
</div>

    </footer>
   


  </body>
</html>
