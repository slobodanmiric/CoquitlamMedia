<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coquitlam Media | Contact</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/manifest.json">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
   
    
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/sr_RS/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
    <nav class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="70">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand em-text" href="index.php"><span class="brand"><img class="logo" src="img/Logo-2.png" alt="logo"></span></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li class="active"><a href="contact.php">CONTACT</a></li>
            <li><a href="social-responsibility.php">WE <i class="fa fa-heart" aria-hidden="true"></i> COQUITLAM</a></li>
            <!--<li><button type="button" class="btn btn-default"><a href="social-responsibility.php"><b>WE <i class="fa fa-heart" aria-hidden="true"></i> COQUITLAM</b></a></button></li>-->
          </ul>
        </div>
      </div>
    </nav>

  
   <div class="jumbotron contactJumbo">
	  <div class="container">
	  
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                <h2><b>Contact us and see our quality and creativity!</b></h2>
                </div>
                <div class="item">
                  <h2><b>We will propose the best solution!</b></h2>
                </div>
                <div class="item">
                  <h2><b>We will listen to you and start the missing spark of your success.</b></h2>
                </div>
              </div>

            </div>
		
        
	   </div>
   </div>
   

       <section class="section-form">
           <div class="container" id="form">
            
            <div class="row">
                <form method="post" action="mailer.php" class="contact-form">
                   
                    <div class="row">
                      
                       <?php 
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-messages success\">
                                   Thank you, your message will be sent.
                               </div>";
                            }
                        
                            if($_GET['success'] == -1) {
                                echo "<div class=\"form-messages error\">
                                   Oops, something's wrong, try again.
                               </div>";
                            }
                            
                        ?>
                       
                       
                    </div>
                   
                    <div class="row">
                    <h3 class="text-center wow bounceInDown" style="padding-bottom: 40px;">Contact us, we will answer you the same day.</h3>
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <input type="text" name="name" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <input type="email" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <textarea name="message" placeholder="How can we help you?"></textarea>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row">

                        <div class="col-md-12 text-center buttonSend">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                    
                </form>
                
            </div>
            </div>
        </section>
   
  <section>
      
	<div id="map"></div>
   
   
   <section id="contact">
       <div class="container">
           <div class="row">
               <div class="col-md-2"></div>
               <div class="col-md-8 wow zoomIn">
                   <h3>When you think about what your needs are, or do not have ideas, <b>we are here to help</b>..
                   Our team will consider the options and come up with the <b>best solution</b>. We combine different approaches to technology making your project a winning combination.The essence of the presentations is the <b>preparation and collection of materials</b>, well-written texts and photos are something that is in the spotlight. <b>We are here to help</b> in the writing which is very important.</h3>
               </div>
               <div class="col-md-2"></div>
           </div>
       </div>
    </section>
    
    
    <footer>
       <div class="container">
         
          <div class="row">
               <div class="col-sm-3">
                  <h4>Adress</h4><br>
                  <ul class="list-unstyled">
                      <li>2130 Como Lake Avenue<br><br> Coquitlam BC<br><br> V3J 3R5</li><br>
                  </ul>
              </div>
              <div class="col-sm-3" style="line-height: 3;">
                  <h4>Contact</h4>
                  <ul class="list-unstyled">
                      <li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+1 604-724-7028</li>
                      <li><a href="mailto:igor@coquitlammedia.com"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;igor@coquitlammedia.com</a></li>
                      <li><a href="mailto:slobodan@coquitlammedia.com"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;slobodan@coquitlammedia.com</a></li>
                  </ul>
              </div>
              <div class="col-sm-3 fb-widget">
                 <div class="fb-page" data-href="https://www.facebook.com/coquitlammedia/?ref=aymt_homepage_panel" data-tabs="timeline" data-height="200px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/coquitlammedia/?ref=aymt_homepage_panel" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/coquitlammedia/?ref=aymt_homepage_panel">Coquitlam media</a></blockquote></div>
              </div>
              <div class="col-sm-3">
                  <a class="twitter-timeline" data-width="100%" data-height="50" href="https://twitter.com/coquitlammedia">Tweets by coquitlammedia</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
          </div>
          
          <hr>
          
           <div class="row">
               <div class="col-sm-6">
                   <p><span class="CM">Coquitlam Media </span>&copy; 2016, All Right Reserved</p>
               </div>
              
               <div class="col-sm-6 arrow">
                   <p class="text-right"><a href="#top"><span class="fa-stack fa-lg">
                      <i class="fa fa-square-o fa-stack-2x"></i>
                      <i class="fa fa-arrow-up fa-stack-1x"></i>
                    </span></a></p>
               </div>
           </div>
       </div>
   </footer>
   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmwrAbULreOyRw5k5PZEux2JccSIMo78k"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    <script src="js/gmaps.js"></script>
    <script>
      new WOW().init();
    </script>
     <script>
            var map = new GMaps({
              el: '#map',
              lat: 49.26316,
              lng: -122.83565,
              zoom: 12
            });

             map.addMarker({
              lat: 49.26316,
              lng: -122.83565,
              title: 'Coquitlam media',
              infoWindow: {
              content: '<p>Our location</p>'
            }
        }); 
      </script>

</body>
</html>