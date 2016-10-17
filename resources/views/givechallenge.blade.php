<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Give a Challenge</title>

    <!-- Custom Fonts -->
    <link href="fonts\font-awesome\css\font-awesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/give-challenge.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/mystyles.css" rel="stylesheet">

    
</head>

<body>

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
                        <a href="startprojects.html">Start Projects</a>
                    </li>
                    <li>
                        <a href="mysubmissions.html">My Submissions</a>
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
    <header class="header-image" style="  background: url('img/startyourproj.png') no-repeat center scroll;" >
        <div class="headline">
            <div class="container">
                <h1>Giving a Project-Problem Statement</h1>
                <h2 style="color:white">Will Knock Others Socks Off</h2>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

     <!--    <hr class="featurette-divider"> -->

        <!-- First Featurette -->
<!--         <div class="featurette" id="about">
            <img class="featurette-image img-circle img-responsive pull-right" src="images/download (1).jpg">
            <h2 class="featurette-heading">First Problem Statement
                <span class="text-muted">Will Catch Your Eye</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo...<a href="">click here..</a></p>
        </div>

        <hr class="featurette-divider">
 -->
        <!-- Second Featurette -->
<!--         <div class="featurette" id="services">
            <img class="featurette-image img-circle img-responsive pull-left" src="images/download (2).jpg">
            <h2 class="featurette-heading">Second Problem Statement
                <span class="text-muted">Is Pretty Cool Too.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo...<a href="">click here..</a></p>
        </div>

        <hr class="featurette-divider">
 -->
        <!-- Third Featurette -->
<!--         <div class="featurette" id="contact">
            <img class="featurette-image img-circle img-responsive pull-right" src="images/download.png">
            <h2 class="featurette-heading">Third Problem Statement
                <span class="text-muted">Will Seal the Deal.</span>
            </h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo...<a href="">click here..</a></p>
        </div>
 -->
        
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>PROJECT DETAILS</h2> 
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidatee >
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Company Name</label>
                                <input type="text"  class="form-control" style="color:#00001a" placeholder="Company Name" id="name" >
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Brief Description</label>
                                <input type="email" style="color:#00001a" class="form-control" placeholder="Email" id="email" >
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Problem Statement</label>
                                <textarea rows="5" class="form-control" placeholder="Problem Statement" id="prob" style="color:#00001a"></textarea>
                            </div>
                        </div><br>
                        <div class="row control-group">
                            <div class="form-group col-xs-12  controls">
                                <label style="font-size:20px;color:#00001a;">Type</label><br>

                                <label style="font-size:20px;color:#00001a;">
                                  <input type="checkbox" value="Android" name="type"> Android App
                                </label><br>
                                <label style="font-size:20px;color:#00001a;">
                                  <input type="checkbox" value="iOS" name="type"> iOS App
                                </label><br>
                                <label style="font-size:20px;color:#00001a;">
                                  <input type="checkbox" value="Web App" name="type" > Web App
                                </label>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg" id="post" style="background-color:#778899;border-color:#778899">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>





        <!-- <form>
            <label for="userlogo">Logo:</label>
            <input type="file" id="file" name="file" required>
            <label for="problem" class="problem">Problem Statement:</label><br>
            <textarea name="problem" id="problem"></textarea><bR>
            <input type="checkbox" name="type" value=""> <strong> Android App</strong><br>
            <input type="che$ckbox" name="type" value=""><strong> iOS App</strong><br>
            <input type="checkbox" name="type" value=""><strong> Desktop App</strong><br>
            <input type="checkbox" name="type" value=""><strong> Web-site , Full Stack Development</strong><br>
        </form>-->
        <hr class="featurette-divider"> 

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © TP-MGR Productions</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        
    $(function(){


    

        $("#post").on('click',function()
        {   var type=$("input[name='type']:checked").val();
            console.log(type);

            var url="companyname="+$('#name').val()+"&email="+$('#email').val()+"&prob="+$('#prob').val()+"&type="+type;
            console.log(url);
            $.ajax({
                url:"putproblem.php",
                type:"POST",
                data:url,
                async:false,
                success:function(response)
                {
                    alert("hurray");
                },
                error:function(response)
                {
                    console.log(response);
                    alert(response);
                }



            });


        });


    });

    </script>

</body>

</html>
