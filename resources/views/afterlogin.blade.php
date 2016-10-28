
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

    <link href=<?= asset("css/bootstrap.min.css") ?> rel="stylesheet">
    

    <link href=<?= asset("css/mystyles.css") ?> rel="stylesheet">
       <!-- jQuery -->
    <script src=<?= asset("js/jquery.js") ?>></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?= asset("js/bootstrap.min.js") ?>></script>
     <link rel="stylesheet" href=<?= asset('css/angular-material.css') ?> >
     <script src="js/angular.min.js"></script>
<script src='js/angular-animate.min.js'></script>
        <script src='js/angular-aria.min.js'></script>
        <script src='js/angular-material.min.js'></script>
       

<style type="text/css">
              
    body {
    margin-top: 50px;
    margin-bottom: 50px;
    background: none;
}

html {
  background: url("img/post.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
          </style>    


</head>

<body ng-app="loginapp">  

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navcore">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MT</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navcore">
                <ul class="nav navbar-nav">
                    <li style="margin-top:15px; color:white;">
                     WELCOME   {{ Auth::user()->name }}
                    </li>
                    <li>
                        <a href="mysubmissions">My submissions</a>
                    </li>

                    <li>
                        <a href="givechallenge">Give a Challenge</a>
                    </li>
                    <li>
                        <a href="startprojects">Solve a Challenge</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                     <li><a href="/forum" >Discussion Forum</a>  </li>
                    <li><a href="/postaquestion" >Post a Question </a>  </li>
                        <li><a href="#"><img src="img/notify.png" style="width:50px;" /></a></li> 
                        <li>
                        <div class="dropdown">
                            <a   class=" dropdown-toggle"   data-toggle="dropdown" >
                                <img style="margin-top:15px;width:50px;" id="profile" class="img-circle" src="img/businessman.png" />
                            </a> 
                            <ul class="dropdown-menu">
                                
                                <li><a href="#">Edit profile</a></li>
                                <li><a href="logout" >Logout</a></li>
                            </ul>

                        </div>
                        </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>
    <br>
    <br>
    <!-- Full Width Image Header -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <div >
            <div class="container" style="margin-right:150px;" >
            <div class="col-lg-3 col-lg-offset-1">
            <a href="mysubmissions"><img class="img-circle img-responsive " src="img/submissions.png">
            </a>
            <h2><p style="text-align: center;color:white;">My submissions</p></h2>
            </div>

            <div class="col-lg-3 col-lg-offset-1">
            <a href="givechallenge"><img class="img-circle img-responsive " src="img/solve.png"> </a>
           <h2>  <p style="text-align: center;color:white;">Give a challenge</p> </h2>
            </div>

            <div class=" col-lg-3 col-lg-offset-1">
            <a href="startprojects"><img  class="img-circle img-responsive" src="img/givechallenge.png"></a>
             <h2> <p style="text-align: center;color:white;">Start a Project</p></h2>
            </div>
            </div>
        </div>

<br>
<br>
<br>
<br>
<br>

        <div class="container">

        <h1 style="color:white;">Popular projects</h1>

        <!-- Projects Row -->
        <div class="row">
      <div class="col-md-4 portfolio-item">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
  <div class="flipper">
    <div class="front"  style=" background: url(img/cake.png) center no-repeat;">
     <!-- <span class="name">David Walsh</span>-->

    </div>
    <div class="back" style=" background: url(img/FLIGHT.png) center no-repeat;" >
     <br>
     <br>
     <br>

     
      <h1><a href="projectstheme1"><p style="text-align:center;">Read more</p> </a></h1>
    </div>
  </div>
</div>
            </div>




   <div class="col-md-4 portfolio-item">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
  <div class="flipper">
    <div class="front"  style=" background: url(img/FLIGHT.png) center no-repeat;">
     <!-- <span class="name">David Walsh</span>-->

    </div>
    <div class="back" style="background: url(img/cake.png) center no-repeat;">
      
     
      <p></p>
    </div>
  </div>
</div>
            </div>
           
       
        
        <div class="col-md-4 portfolio-item">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
  <div class="flipper">
    <div class="front" style=" background: url(http://placehold.it/750x450) center no-repeat;">
     <!-- <span class="name">David Walsh</span>-->

    </div>
    <div class="back" >
      
     
      <p></p>
    </div>
  </div>
</div>
            </div>
         <!-- /.row -->

      <p style="color:white">.</p>  <hr >
            <div class="col-md-4 portfolio-item">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
  <div class="flipper">
    <div class="front" style=" background: url(http://placehold.it/750x450) center no-repeat;">
     <!-- <span class="name">David Walsh</span>-->

    </div>
    <div class="back" >
      
     
      <p></p>
    </div>
  </div>
</div>
            </div>


    <div class="col-md-4 portfolio-item">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
  <div class="flipper">
    <div class="front" style=" background: url(http://placehold.it/750x450) center no-repeat;">
     <!-- <span class="name">David Walsh</span>-->

    </div>
    <div class="back" >
      
     
      <p></p>
    </div>
  </div>
</div>
            </div>


                <div class="col-md-4 portfolio-item">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
  <div class="flipper">
    <div class="front" style=" background: url(http://placehold.it/750x450) center no-repeat;">
     <!-- <span class="name">David Walsh</span>-->

    </div>
    <div class="back" >
      
     
      <p></p>
    </div>
  </div>
</div>
            </div>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

  

    <!-- Page Content -->
  

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © TP-MGR Productions</p>
                </div>
            </div>
        </footer>
</div>
    </div>
    
    <!-- /.container -->
<script>

var loginapp=angular.module('loginapp',['ngMaterial']).run(function(){

                console.log("thank you DAD");
            });


</script>
  

</body>

























</html>
