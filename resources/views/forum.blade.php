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
    <script src= <?= asset("js/jquery.js") ?> ></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=<?= asset("js/bootstrap.min.js") ?>></script>

   

<style type="text/css">
              
    body {
    margin-top: 50px;
    margin-bottom: 50px;
    background: none;
}

html {
  background: url("img/aww.png") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
          </style>    





   


 <script src=<?=asset("js/angular.min.js") ?>></script>
<script src=<?=asset('js/angular-animate.min.js') ?>></script>
        <script src=<?=asset('js/angular-aria.min.js') ?>></script>
        <script src=<?=asset('js/angular-material.min.js') ?>></script>
          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.20/angular-messages.js"></script>
        <script src=<?=asset('js/angularinit.js') ?> ></script>



</head>
<body ng-app="MyApp" ng-hide="false" >

<div class="container">
 <!-- Navigation -->

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

<?php 

$colors=['white','#01579B','#0277BD','#0288D1','#039BE5','#03A9F4','#29B6F6','#4FC3F7','#81D4FA','#B3E5FC
','#E1F5FE'];
//$colors=['#2196F3'];
$index=0;
?>
@forelse($questions as $question)
<!--<div class="jumbotron">
<md-card style="background-color: #342453; color:white;">
<h1>{{$question->question}}</h1>
<p>{{$question->description}}</p>
</md-card>
</div>-->
@if($index==0)

<md-card style="margin: 0px;background-color:{{$colors[$index]}};color:black; ">

@else

<md-card style="margin: 0px;background-color:{{$colors[$index]}};color:white; ">


@endif
<?php $index=($index+1)%10; ?>
        <md-card-title>
          <md-card-title-text>
            <span class="md-headline">

            @if(($index-1)==0)
            <a style="color:black;" href="/forum/question/{{$question->slug}}" >{{$question->question}} </a></span>

            @else
            <a style="color:white;" href="/forum/question/{{$question->slug}}" >{{$question->question}} </a></span>

            @endif
            <p class="text-right">By: {{$question->user->name}}</p>
            <p>{{$question->description}}</p>
          </md-card-title-text> 
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
        	<i class="glyphicon glyphicon-calendar"></i>{{$question->created_at->diffforHumans()}}
        	@if($question->replies->count() > 0)
					 
					 <li><md-button class='md-raised md-accent md-hue-0.2' href="/forum/question/{{$question->slug}}" >{{ $question->replies->count() }} comment(s) </md-button></li>
				@else
					<li><md-button  class='md-raised md-accent md-hue-0.2' href="/forum/question/{{$question->slug}}" >Be the first one to reply </md-button></li>
				@endif
        </md-card-actions>
      </md-card> 
@empty
	<p> No posts found</p>
@endforelse


 <!--<md-card>
        <md-card-title>
          <md-card-title-text>
            <span class="md-headline"><a href="/forum/question/{{$question->slug}}" >{{$question->question}} </a></span>
            <p class="text-right">By: {{$question->user->name}}</p>
            <p>{{$question->description}}</p>
          </md-card-title-text>
          
         
        </md-card-title>
        <md-card-actions layout="row" layout-align="end center">
        	<i class="glyphicon glyphicon-calendar"></i>{{$question->created_at->diffforHumans()}}
        	@if($question->replies->count() > 0)
					 
					 <li><md-button href="/forum/question/{{$question->slug}}" >{{ $question->replies->count() }} comment(s) </md-button></li>
				@else
					<li><md-button href="/forum/question/{{$question->slug}}" >Be the first one to reply </md-button></li>
				@endif
         
        </md-card-actions>
      </md-card> -->

  


</div>

<script>


</script>
</body>




</html>


