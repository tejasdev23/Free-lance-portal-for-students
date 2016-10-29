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

   
<style type="text/css">
              
               body {
    margin-top: 50px;
    margin-bottom: 50px;
    background: none;
}
              html { 
  background: url("img/mysub.png") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
          </style>




   


 <script src="js/angular.min.js"></script>
<script src='js/angular-animate.min.js'></script>
        <script src='js/angular-aria.min.js'></script>
        <script src='js/angular-material.min.js'></script>
     
       <script src='js/angularinit.js' ></script> 
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.20/angular-messages.js"></script>



</head>

<body ng-app="MyApp">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: white;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navcore">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">MT</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navcore">
                <ul class="nav navbar-nav">
                    <li >
                    <a href="/afterlogin" > WELCOME   {{ Auth::user()->name }} </a>
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
                        <li><a href="#"><img src="img/notify.png" style="width:30px;" /></a></li> 
                        <li>
                        <div class="dropdown">
                            <a   class=" dropdown-toggle"   data-toggle="dropdown" >
                                <img style="margin-top:15px;width:30px;" id="profile" class="img-circle" src="img/businessman.png" />
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
    <!-- Page Content -->
    <div class="container" style="color:white;">

        <!-- /.row -->

        <!-- <hr> -->

        <!-- Project Four -->
        <!-- <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Four</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div> -->
        <!-- /.row -->

        <!-- <hr> -->

        <!-- Project Five -->
        <!-- <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Five</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident ex quisquam hic odio repellendus atque porro distinctio quae id laboriosam facilis dolorum.</p>
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div> -->
        <!-- /.row -->

        <!-- <hr> -->

        <!-- Pagination -->
        <!-- <div class="row text-center">
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
        </div> -->
        <!-- /.row -->

        <div class="container">
        <div class="col-md-4">
        </div>
                <md-card class="col-md-4">
                <md-card-header>Contact Us</md-card-header>
<form name="submitForm"  action="upload" method="POST">
 {{ csrf_field() }}
 

           
        <md-input-container >
          <label>{{Auth::user()->name}}</label>
          <input  md-no-asterisk disabled required name="name" ng-model="project.clientName">
          <div ng-messages="projectForm.clientName.$error">
            <div ng-message="required">This is required.</div>
          </div>
        </md-input-container>

      

       <md-input-container class="md-block">
        <label>{{Auth::user()->email}}</label>
        <input required type="email" md-no-asterisk disabled name="email" ng-model="project.clientEmail"
               minlength="10" maxlength="100" ng-pattern="/^.+@.+\..+$/" />


        <div ng-messages="projectForm.clientEmail.$error" role="alert">
          <div ng-message-exp="['required', 'minlength', 'maxlength', 'pattern']">
            Your email must be between 10 and 100 characters long and look like an e-mail address.
          </div>
        </div>
      </md-input-container>
        <md-input-container>
        <input type="file" name="file">

        </md-input-container>


         <div>
        <md-button class="md-accent md-raised md-hue-5" type="submit" >Upload your project</md-button>
      </div>


</form>
 </md-card>
                    </div>


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © TP-MGR Productions</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
