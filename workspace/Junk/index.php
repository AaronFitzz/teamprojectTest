<!DOCTYPE html>
<html lang="en">

<head>
<script>
	function ProcessLogin(){
	alert("The ProcessLogin function has been created");
	}
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grayscale - Free One Page Theme for Bootstrap 3</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    
    <!---google api code--->
  

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <!--<a class="navbar-brand" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Start</span> Bootstrap
                </a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a href="#about"> Log in/Sign Up</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#download">Download</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
            <div id="lsform"></div>
    </nav>


    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">SocialLink</h1>
                        <p class="intro-text">The one place to find out what's on, tailored to you.</p>



                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                
                <link href="css/style.css" rel="stylesheet">
                
            </div>
        </div>
    </section>

    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-6">
                    <div class="login">
                    	<h1>Log in</h1>
                        <form method='post' action='php/login.php'>
                        	<input type="text" name="username" placeholder="Username" required="required" />
                            <input type="password" name="password" placeholder="Password" required="required" />
                            <button type="submit" class="btn btn-primary btn-block btn-large">Log in</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="Register">
                    	<h1>Register</h1>
                        <form method='post' action='php/register1.php'>
                            <input type="text" name="fname" placeholder="First Name" required="required" />
                            <input type="text" name="lname" placeholder="Last Name" required="required" />
                            <input type="text" name="email" placeholder="Email" required="required" />
                            <input type="text" name="dob" placeholder="D.O.B" required="required" />
                            <input type="text" name="gender" placeholder="Gender" required="required" />
                        	<input type="text" name="username" placeholder="Username" required="required" />
                            <input type="password" name="password" placeholder="Password" required="required" />
                            <button type="submit" class="btn btn-primary btn-block btn-large">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-6">
                <h2>Contact SocialLink</h2>
               
            </div>
            
             <div class="col-lg-6">
                  
                <p>Feel free to get in touch using the methods below. <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>Your feedback and suggestions will help us better and improve our service!</p>
                <ul class="list-inline banner-social-buttons">
                    <li><a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li><a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
                 
            </div>
        </div>
    </section>
    
    

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    
    
    
    
 
     
    

</body>

</html>
