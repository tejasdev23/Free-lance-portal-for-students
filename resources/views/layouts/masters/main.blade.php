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

   





   


 <script src="js/angular.min.js"></script>
<script src='js/angular-animate.min.js'></script>
        <script src='js/angular-aria.min.js'></script>
        <script src='js/angular-material.min.js'></script>
          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.20/angular-messages.js"></script>
        <script src='js/angularinit.js' ></script>



</head>
<body ng-app="MyApp" ng-hide="false" >

@yield('page-content')



</body>




</html>
