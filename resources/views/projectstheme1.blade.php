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

        <style type="text/css">
              
    body {
    margin-top: 50px;
    margin-bottom: 50px;
    background: none;
}

html {
  background: url("img/backe2.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
          </style>   


</head>

<body ng-app="projects">
 

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
                <a class="navbar-brand" href="/">MT</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navcore">
                <ul class="nav navbar-nav">
                    <li >
                 <a href="/afterlogin">WELCOME   {{ Auth::user()->name }} </a>
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
    <div class="col-xs-12 ">
      <md-card >
        <md-card-title>
          <md-card-title-text>
           <span class="md-headline">COMPANY: <span id="projc0"> </span></span>
            <span class="md-headline">TITLE: <span id="proj0"> </span></span>
            <span class="md-subhead" id="projd0"></span>
          </md-card-title-text>
          <md-card-title-media>
            <div class="md-media-lg card-media">
              <img src="" id="proji0" />
            </div>
          </md-card-title-media>
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
    
        </md-card-actions>
      </md-card>
       </div>
           <div class="col-xs-12">
      <md-card >
        <md-card-title>
          <md-card-title-text>
             <span class="md-headline">COMPANY: <span id="projc1"> </span></span>
            <span class="md-headline">TITLE: <span id="proj1"> </span></span>
            <span class="md-subhead" id="projd1"></span>
          </md-card-title-text>
          <md-card-title-media>
            <div class="md-media-lg card-media">
             <img src=""  id="proji1" />
              
            </div>
          </md-card-title-media>
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
          
        </md-card-actions>
      </md-card>
       </div>

</div>
   <div class="row " >
    <div class="col-xs-12 ">
      <md-card >
        <md-card-title>
          <md-card-title-text>
             <span class="md-headline">COMPANY: <span id="projc2"> </span></span>
            <span class="md-headline">TITLE: <span id="proj2"> </span></span>
            <span class="md-subhead" id="projd2">Large</span>
          </md-card-title-text>
          <md-card-title-media>
            <div class="md-media-lg card-media">
               <img src=""  id="proji2"/>
            </div>
          </md-card-title-media>
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
         
        </md-card-actions>
      </md-card>
       </div>
           <div class="col-xs-12 ">
      <md-card >
        <md-card-title>
          <md-card-title-text>
             <span class="md-headline">COMPANY: <span id="projc3"> </span></span>
            <span class="md-headline">TITLE: <span id="proj3"> </span></span>
            <span class="md-subhead" id="projd3"> Large</span>
          </md-card-title-text>
          <md-card-title-media>
            <div class="md-media-lg card-media">
               <img src=""  id="proji3" />
            </div>
          </md-card-title-media>
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
        
        </md-card-actions>
      </md-card>
       </div>

</div>
   <div class="row " >
    <div class="col-xs-12 ">
      <md-card >
        <md-card-title>
          <md-card-title-text>
             <span class="md-headline">COMPANY: <span id="projc4"> </span></span>
            <span class="md-headline">TITLE: <span id="proj4"> </span></span>
            <span class="md-subhead" id="projd4">Large</span>
          </md-card-title-text>
          <md-card-title-media>
            <div class="md-media-lg card-media">
               <img src="" id="proji4" />
            </div>
          </md-card-title-media>
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
         
        </md-card-actions>
      </md-card>
       </div>
           <div class="col-xs-12 ">
      <md-card >
        <md-card-title>
          <md-card-title-text>
             <span class="md-headline">COMPANY: <span id="projc5"> </span></span>
            <span class="md-headline">TITLE: <span id="proj5"> </span></span>
            <span class="md-subhead" id="projd5">Large</span>
          </md-card-title-text>
          <md-card-title-media>
            <div class="md-media-lg card-media"> <img src=""  id="proji5"/></div>
          </md-card-title-media>
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
     
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
                console.log(request.response.THEME1[0].details.title);
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
  $("#projc0").html(request.response.THEME1[0].details.company);
      $("#projc1").html(request.response.THEME1[1].details.company);
         $("#projc2").html(request.response.THEME1[2].details.company);
            $("#projc3").html(request.response.THEME1[3].details.company);
               $("#projc4").html(request.response.THEME1[4].details.company);
                  $("#projc5").html(request.response.THEME1[5].details.company);
    $("#projd0").html(request.response.THEME1[0].details.Description);
      $("#projd1").html(request.response.THEME1[1].details.Description);
         $("#projd2").html(request.response.THEME1[2].details.Description);
            $("#projd3").html(request.response.THEME1[3].details.Description);
               $("#projd4").html(request.response.THEME1[4].details.Description);
                  $("#projd5").html(request.response.THEME1[5].details.Description);
     $("#proji0").attr("src", request.response.THEME1[0].details.Image);
    $("#proji1").attr("src", request.response.THEME1[1].details.Image);
       $("#proji2").attr("src", request.response.THEME1[2].details.Image);
          $("#proji3").attr("src", request.response.THEME1[3].details.Image);
              $("#proji4").attr("src", request.response.THEME1[4].details.Image);
                 $("#proji5").attr("src", request.response.THEME1[5].details.Image);
     

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
