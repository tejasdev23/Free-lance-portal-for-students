<!DOCTYPE html>
<html lang="en">
    
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HOME</title>
     <link rel="stylesheet" href=<?= asset('css/angular-material.css') ?> >
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet"> -->
 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


   <style type="text/css">
              
               body {
    margin-top: 50px;
    margin-bottom: 50px;
    background: none;
}
              html { 
  background: url("img/after1.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.carousel-content {
  position: absolute;
  bottom: 10%;
  left: 5%;
  z-index: 20;
  color: white;
  text-shadow: 0 1px 2px rgba(0,0,0,.6);
}
          </style>
        
          

    <link href=<?= asset("css/bootstrap.min.css") ?> rel="stylesheet">

    <link href=<?= asset("css/mystyles.css") ?> rel="stylesheet">
       <!-- jQuery -->
    <script src= <?= asset("js/jquery.js") ?> ></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?= asset("js/bootstrap.min.js") ?>></script>

   





   


 <script src=<?=asset("js/angular.min.js") ?>></script>
<script src=<?=asset('js/angular-animate.min.js') ?>></script>
        <script src=<?=asset('js/angular-aria.min.js') ?>></script>
        <script src=<?=asset('js/angular-material.min.js') ?>></script>
          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.20/angular-messages.js"></script>
        <script src=<?=asset('js/angularinit.js') ?> ></script>



</head>

    @if(Session::has('success')) 
    <div class="alert alert-success">{{ Session::get('success') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>
    
    @endif
    @if(Session::has('failure'))
    
      <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{ Session::get('failure') }}</div>
    
    @endif
<body ng-app="MyApp" >




            <!-- Navigation -->
            <nav class="navbar navbar-fixed-top" role="navigation" style="background-color:#ffffff;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navcore">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">MT</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navcore">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#recent">Recent Projects</a>
                    </li>
                    <li>
                        <a href="#contactus">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-right">
                
                <li  >
        
        

        <md-button style="display:inline-block;" class= "md-accent md-raised md-hue-5" href="/login">LOGIN</md-button>
       

        <md-button style="display:inline-block;"  class= "md-accent md-raised md-hue-5" href="/register">SIGN UP</md-button>
        
        </li>
        

                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/cover2.jpg" alt="Chania">
      <div class="carousel-content" style="position: absolute;top:220px;left:350px;"><h1>Some problem statement related stuff</h1></div>
    </div>

    <div class="item">
      <img src="img/cover3.png" alt="Chania">
    </div>

    <div class="item">
      <img src="img/cover4.jpg" alt="Bugathon">
       <div class="carousel-content" style="position: absolute;top:220px;left:350px; color: black;"><h1>BUGathon</h1></div>
    </div>

    <div class="item">
      <img src="img/captain.jpeg" alt="Defence">
       <div class="carousel-content" style="position: absolute;top:310px;left:380px;"><h1 style="color:white;"><span style="color:black" >C</span>an you build a system as secure as captain america's &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shield</h1></div
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>



       

     
 

 

    <!-- Full Width Image Header -->
<div id="fullscreen" >  

    <!-- Page Content -->
    <div class="container">
         <md-card>
    <md-card-content>
          
    <!-- First Featurette -->

        <div class="featurette" id="aboutus" >
            <img class="featurette-image img-circle img-responsive pull-right" src="img/aboutus.png" style="width:500px;height:500px">
            <h2 class="featurette-heading">ABOUT US
                <span class="text-muted"></span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
           </md-card-content>
 
    </md-card>
  
        <hr class="featurette-divider" id="recent">

        <!-- Second Featurette -->
        <!-- <div class="featurette" id="recentprojects">
            <img class="featurette-image img-circle img-responsive pull-left" src="http://placehold.it/500x500">
            <h2 class="featurette-heading">The Second Heading
                <span class="text-muted">Is Pretty Cool Too.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div> -->
        <!-- Projects Row -->
         <!-- Projects Row -->
        <h2 class="featurette-heading" id="recent">RECENT PROJECTS
                <span class="text-muted"></span>
            </h2>
            <div class="row">
<div  class="col-md-4" layout="column">
        <md-card >
         <md-card-header>
                <md-card-header-text md-theme="altTheme">
                    <span class="md-title">Android and Web Applications</span>
                    <span class="md-subhead">Barclay's</span>
                </md-card-header-text>
        </md-card-header>
            <img ng-src="img/webdroid.jpg" style="height:200px;"  class="md-card-image" >
            <md-card-title>
                <md-card-title-text>
                    <span class="md-headline"></span>
                </md-card-title-text>
            </md-card-title>
          
            <md-card-content>
                <p>
            The titles of Washed Out's breakthrough song and the first single from Paracosm share the
            two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well..
                </p>

                </md-card-content>
                <md-button data-toggle="modal" data-target="#project1">More</md-button>
        </md-card>
</div>

<div  class="col-md-4" layout="column">
        <md-card>
           <md-card-header>
                <md-card-header-text>
                    <span class="md-title">Cloud Computing</span>
                    <span class="md-subhead">Digital Ocean</span>
                </md-card-header-text>
        </md-card-header>
            <img ng-src="img/cloud.jpg" style="height:200px;" class="md-card-image" >
            <md-card-title>
                <md-card-title-text>
                    <span class="md-headline"></span>
                </md-card-title-text>
            </md-card-title>
           
            <md-card-content>
                <p>
            The titles of Washed Out's breakthrough song and the first single from Paracosm share the
            two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well...
                </p>
              
                </md-card-content>
                  <md-button ng-disabled="true">Coming soon</md-button>

        </md-card>
</div>


<div  class="col-md-4" layout="column">
        <md-card>
               <md-card-header>
                <md-card-header-text>
                    <span class="md-title">Internet Of Things</span>
                    <span class="md-subhead">IBM</span>

                </md-card-header-text>
        </md-card-header>
            <img ng-src="img/iot.jpg" style="height:200px;" class="md-card-image" >
            <md-card-title>
                <md-card-title-text>
                    <span class="md-headline"></span>
                </md-card-title-text>
            </md-card-title>
          
            <md-card-content>
                <p>
            The titles of Washed Out's breakthrough song and the first single from Paracosm share the
            two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well...
                </p>
               
                </md-card-content>
                 <md-button ng-disabled="true">Coming soon</md-button>
        </md-card>
</div>

            </div>

      <!--      
        <div class="row">

            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/cake.png" alt="" data-toggle="modal" data-target="#project1">
                </a>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/cabin.png" alt="" data-toggle="modal" data-target="#project2">
                </a>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/game.png" alt="" data-toggle="modal" data-target="#project3">
                </a>
            </div>
           
        </div>
        -->
        
      
        <hr class="featurette-divider" id="contactus">
        <md-card>
    <md-card-content>

        <!-- Third Featurette -->
        <div class="featurette"  id="map" >
            <img class="featurette-image img-circle img-responsive pull-right" src="img/LOCATION.png">
            <h2 class="featurette-heading">CONTACT US
                <span class="text-muted"></span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

       

         </md-card-content>
        </md-card>
        
        <div class="featurette">

            <div class="col-md-8 pull-right">
                <br>
                <br>

                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBkdJGwpF3awohXCT4I7NvJhGxQS32KnL8'></script>
                <div style='overflow:hidden;width:800px;height:475px' >
                    <a href='https://addmap.net/'>map generator</a> 
                    
                <div id='gmap_canvas'  style='width:780px;height:430px'>
                    
                </div>
                
                    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                </div> 

            <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=ee1ee8b2a881606570b0b797879ea34ff17654f1'></script>


            <script type='text/javascript'>function init_map()
            {var myOptions = {zoom:13,center:new google.maps.LatLng(19.1055,72.83687359999999),mapTypeId: google.maps.MapTypeId.ROADMAP};
            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
            marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.1055,72.83687359999999)});
            infowindow = new google.maps.InfoWindow({content:'<strong> Dwarkadas J. Sanghvi College Of Engineering</strong><br>Plot No.U-15, J.V.P.D. Scheme Bhaktivedanta Swami Marg, Vile Parle West Mumbai, Maharashtra 400056 India<br>4000056 mumbai<br>'});
            google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}
            google.maps.event.addDomListener(window, 'load', init_map);</script>



            </div>
            <div class="col-md-4 ">
                
               <div class="container">
                <md-card class="col-md-3">
                <md-card-header>Contact Us</md-card-header>
<form name="projectForm"  action="contact" method="POST">
 {{ csrf_field() }}
 

           
        <md-input-container >
          <label>Name</label>
          <input md-maxlength="20" required name="name" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

      

       <md-input-container class="md-block">
        <label>Email</label>
        <input required type="email" name="email" ng-model="project.clientEmail"
               minlength="10" maxlength="100" ng-pattern="/^.+@.+\..+$/" />


        <div ng-messages="projectForm.clientEmail.$error" role="alert">
          <div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">
            Your email must be between 10 and 100 characters long and look like an e-mail address.
          </div>
        </div>
      </md-input-container>



        <md-input-container class="md-block">
          <label>Message</label>
          <textarea ng-model="user.biography" md-maxlength="150" name="message" rows="5" md-select-on-focus></textarea>
        </md-input-container>
         <div>
        <md-button class="md-accent md-raised md-hue-5" type="submit" >Send</md-button>
      </div>


</form>
 </md-card>
                    </div>
                </div>
               
            </div>
        </div>
        
        <hr class="featurette-divider">
        <!-- Footer -->
        
        <footer>
            <div class="row">
                <div class="col-lg-3">
                    <p>Copyright © TP-MGR Productions</p>
                </div>
            </div>
        </footer>

</div>

</div>

    <!-- /.container -->
<!-- project1 -->
<div class="project-modal modal fade" id="project1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Theme Title</h2>
                            <hr class="star-primary">
                            <img src="img/cake.png" class="img-responsive img-centered" alt="">
                           
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- project2 -->
<div class="project-modal modal fade" id="project2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Theme Title</h2>
                            <hr class="star-primary">
                            <img src="img/cabin.png" class="img-responsive img-centered" alt="">
                           
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- project3 -->
<div class="project-modal modal fade" id="project3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Theme Title</h2>
                            <hr class="star-primary">
                            <img src="img/game.png" class="img-responsive img-centered" alt="">
                           
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>


</script>
</body>




</html>












    
