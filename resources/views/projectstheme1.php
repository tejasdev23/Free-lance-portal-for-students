<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projects</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link href="css/mystyles.css" rel="stylesheet">
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
  background: url("img/black.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
          </style>   


</head>

<body ng-app="projects">
 

   
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
                    <a href="/afterlogin" > WELCOME  <?php echo Auth::user()->name  ?> </a>
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

    <!-- Full Width Image Header -->
   <!-- <header class="header-image" style=" background: url('img/startyourproj.png') no-repeat center scroll; ">
        <div class="headline">
            <div class="container">
                <h1>PROJECT LIST</h1>
                <h2></h2>
            </div>
        </div>
    </header>
    -->
    <br>
    <br>
    <br>
    <!-- Page Content -->
    <div class="container"  ng-controller="projCtrl">
    <div class="row " >
    <div class="col-xs-6 " ng-repeat="x in projects">
           <md-card >
         <md-card-header>
                <md-card-header-text md-theme="altTheme">
                    <span class="md-title">{{x.details.company}}</span>
                    <span class="md-subhead">{{x.details.title}}</span>
                </md-card-header-text>
        </md-card-header>
            <img ng-src={{x.details.Image}} class="md-card-image" >
            <md-card-title>
                <md-card-title-text>
                    <span class="md-headline"></span>
                </md-card-title-text>
            </md-card-title>
          
            <md-card-content>
                <p>
            {{x.details.Description}}
                </p>

                </md-card-content>
                
        </md-card>

       </div>
         
</div>
    </div>
    <!-- /.container -->
       <script>
  


 var  projects=angular.module('projects', ['ngMaterial']).run(function(){

                console.log("thank you MOM");
            });
projects.controller('projCtrl', function($scope, $http) {
    $http.get("apis/projectss.json").then(function(response) {
        $scope.myData = response.data;
        console.log($scope.myData.THEME1.projects);
        $scope.projects=$scope.myData.THEME1.projects;
    });
});


        </script>
       



</body>

</html>
