<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Start Projects</title>

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




</head>

<body ng-app="projects">
 

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="mysubmissions.html">My Submissions</a>
                    </li>
                    <li>
                        <a href="givechallenge.html">Give a Challenge</a>
                    </li>
                    <li>
                        <a href="index.html#about">About Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Width Image Header -->
    <header class="header-image" style=" background: url('img/startyourproj.png') no-repeat center scroll; ">
        <div class="headline">
            <div class="container">
                <h1>PROJECT LIST</h1>
                <h2></h2>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container"  ng-controller="projCtrl">
    <div class="row " >
    <div class="col-xs-12 col-lg-6">
      <md-card >
        <md-card-title>
          <md-card-title-text>
            <span class="md-headline">TITLE: <span id="proj0"> </span></span>
            <span class="md-subhead">Large</span>
          </md-card-title-text>
          <md-card-title-media>
            <div class="md-media-lg card-media"></div>
          </md-card-title-media>
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
          <md-button>Action 1</md-button>
          <md-button>Action 2</md-button>
        </md-card-actions>
      </md-card>
       </div>
           <div class="col-xs-12 col-lg-6">
      <md-card >
        <md-card-title>
          <md-card-title-text>
            <span class="md-headline">TITLE: <span id="proj1"> </span></span>
            <span class="md-subhead">Large</span>
          </md-card-title-text>
          <md-card-title-media>
            <div class="md-media-lg card-media"></div>
          </md-card-title-media>
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
          <md-button>Action 1</md-button>
          <md-button>Action 2</md-button>
        </md-card-actions>
      </md-card>
       </div>

</div>
   <div class="row " >
    <div class="col-xs-12 col-lg-6">
      <md-card >
        <md-card-title>
          <md-card-title-text>
            <span class="md-headline">TITLE: <span id="proj2"> </span></span>
            <span class="md-subhead">Large</span>
          </md-card-title-text>
          <md-card-title-media>
            <div class="md-media-lg card-media"></div>
          </md-card-title-media>
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
          <md-button>Action 1</md-button>
          <md-button>Action 2</md-button>
        </md-card-actions>
      </md-card>
       </div>
           <div class="col-xs-12 col-lg-6">
      <md-card >
        <md-card-title>
          <md-card-title-text>
            <span class="md-headline">TITLE: <span id="proj3"> </span></span>
            <span class="md-subhead">Large</span>
          </md-card-title-text>
          <md-card-title-media>
            <div class="md-media-lg card-media"></div>
          </md-card-title-media>
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
          <md-button>Action 1</md-button>
          <md-button>Action 2</md-button>
        </md-card-actions>
      </md-card>
       </div>

</div>
   <div class="row " >
    <div class="col-xs-12 col-lg-6">
      <md-card >
        <md-card-title>
          <md-card-title-text>
            <span class="md-headline">TITLE: <span id="proj4"> </span></span>
            <span class="md-subhead">Large</span>
          </md-card-title-text>
          <md-card-title-media>
            <div class="md-media-lg card-media"></div>
          </md-card-title-media>
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
          <md-button>Action 1</md-button>
          <md-button>Action 2</md-button>
        </md-card-actions>
      </md-card>
       </div>
           <div class="col-xs-12 col-lg-6">
      <md-card >
        <md-card-title>
          <md-card-title-text>
            <span class="md-headline">CTITLE: <span id="proj5"> </span></span>
            <span class="md-subhead">Large</span>
          </md-card-title-text>
          <md-card-title-media>
            <div class="md-media-lg card-media"> <img src="img/cake.png" /></div>
          </md-card-title-media>
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
          <md-button>Action 1</md-button>
          <md-button>Action 2</md-button>
        </md-card-actions>
      </md-card>
       </div>

</div>
    </div>
    <!-- /.container -->
       <script>
  


 var  projects=angular.module('projects', ['ngMaterial']).run(function(){

                console.log("thank you MOM");
            });
 projects.controller('projCtrl',['$scope','$window',function($scope,$window){
    var x=getJSON('get','apis/projectss.json');
   

 }]);


        </script>
       

   <script >
  
      
   var x;
           
        var getJSON=function(method,url){
          var data;
            var request =new XMLHttpRequest();
            request.open(method,url,true);
            request.responseType='json';
            request.onload=function()
            {   
                var status=request.status;
                if(status==200)
                {
                    console.log('connected to the json file#abhitohpartyshuruhuiihai');
                   // console.log(request.response.THEME1[0]);   
      //             console.log(request.response.THEME1[0].details.title);
               //    $('proj0').innerHTML='hello' ;//request.response.THEME1[0].details.title;
              
                }
                else
                {

                }

    x=request.response;
    //console.log(x);
   //    document.getElementById("proj0").innerHTML=request.response.THEME1[0].details.title;
   $("#proj0").html(request.response.THEME1[0].details.title);
      $("#proj1").html(request.response.THEME1[1].details.title);
         $("#proj2").html(request.response.THEME1[2].details.title);
            $("#proj3").html(request.response.THEME1[3].details.title);
               $("#proj4").html(request.response.THEME1[4].details.title);
                  $("#proj5").html(request.response.THEME1[5].details.title);

   

            };
            request.send();
         //   console.log(data);
         //  var theme1=request.response.THEME1[0];
       //      console.log(theme1);
          

      
        };
        
 



/*var projCtrl=projects.controller('projects',['$scope','$window',function()
{

}]);
*/

    
        //console.log(json.THEME1[0].details.title);
 


        </script>

</body>

</html>
