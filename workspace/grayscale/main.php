 <?php
session_start();
?>
<<!DOCTYPE html>
<html lang="en">

<head>
    	<!--<script type="text/javascript" src="js/load.js"></script>-->
    	
<!--ChatBro-->    	
<script id="chatBroEmbedCode">
/* Chatbro Widget Embed Code Start */
function ChatbroLoader(chats,async) {async=async!==false;var params={embedChatsParameters:chats instanceof Array?chats:[chats],needLoadCode:typeof Chatbro==='undefined'};var xhr=new XMLHttpRequest();xhr.withCredentials = true;xhr.onload=function(){eval(xhr.responseText)};xhr.onerror=function(){console.error('Chatbro loading error')};xhr.open('POST','//www.chatbro.com/embed_chats/',async);xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');xhr.send('parameters='+encodeURIComponent(JSON.stringify(params)))}
/* Chatbro Widget Embed Code End */
ChatbroLoader({encodedChatId: '758S'});
</script>
    	
    	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

     Bootstrap Core CSS 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

     Custom CSS 
    <link href="css/shop-homepage.css" rel="stylesheet">
	<link href="css/grayscale.css" rel="stylesheet">

     HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries 
     WARNING: Respond.js doesn't work if you view the page via file:// 
    [if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Fonts -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/style.css">
  <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="https://www.google.com/jsapi"></script>
  <script src="js/directions-map.js"></script>
  

	<!--how to create login/signup slider: http://jsfiddle.net/hungerpain/eK8X5/7/-->
	
	<!-- google map api code-->
	

<title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      /*#map {*/
      /*  height: 100%;*/
      /*}*/
      /* Optional: Makes the sample page fill the window. */
      /*html, body {*/
      /*  height: 100%;*/
      /*  margin: 0;*/
      /*  padding: 0;*/
      /*}*/
      
    </style>
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
                <a class="navbar-brand" href="#">Welcome <?php echo $_SESSION['user'];?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php">Log Out</a>
                    </li>
                    <li class="page-scroll">
                        <a href="account.php">Account</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<br />
<br />
<br />
<div class="row">
    <div class="col-md-12 col-xs-12">
        <div id="eventDet1" class="col-md-2"onclick="hideEventMsg();">
        </div>
        <div id="eventDet" class="col-md-8 col-s-8 col-xs-12 col-md-offset-2"style="overflow:scroll;"><h4 onclick="hideEventMsg();" style="float:right;cursor:pointer;">X</h4>
        <br /><br />
        <br />
            
            <div id="eventDetMain" class="col-lg-5 col-sm-5 col-md-5 col-s-5 col-xs-12">
               
            
            
            </div>
            <div class="col-lg-7 col-sm-7 col-md-7 col-s-7 col-xs-7">
            
            <div id="map"></div>
	        <div id="method"></div>
    	        
            </div>
        </div>
            </div>
    </div>
    <div id="eventDet2" class="col-md-2 col-md-offset-10"onclick="hideEventMsg();">    
    </div>
</div>
<br />
<br />

    <!-- Page Content -->
    <div style="position:relative;"class="container">
<!--Event stuff-->

        <div class="row">

            <div class="col-md-3">
                <h3 style="color:white">SocialLink</h3>
                <div class="list-group">
                    <a href="#" class="list-group-item">Latest</a>
                    <a href="#" class="list-group-item" onclick="trending();">Trending</a>
                    <a href="#" class="list-group-item">Near Me</a>
                </div>
				<div class="list-group">
                    <a href="#" class="list-group-item">Filter By:</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/night1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/night2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/night3.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">      

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        
                        <div class="thumbnail" name="Cork" onclick"myMapLoad();">
                            <img src="img/nighticon1.jpg" onclick="showEventMsg();hideDiv();">
                              
<!--event code 1-->                            
                            <div class="caption">
                                
                                <h4 style="margin:0 0 8px;" class="pull-right">FREE</h4>
                                <h4 style="margin:0;"><a onclick="checkUserIdExists();"href="#">Whelans</a></h4>
                                <form method='post' id="theForm2" action='php/addCheckIn.php'>
                                    <input type='hidden' name = 'eventID' value='1'>
                                    <h4>
                                        <button type="submit" id="addCheck" class="pull-left btn btn-success">Check In</button>
                                        <div class="pull-right" name="checkIn" id="checkInHere"></div>
                                        <img class="pull-right" style="height:20px;width:20px;" src="img/LiveIcon.gif">
                                    </h4>
                                </form>
                                <br /><hr />
                                <p>Live music till late!</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
<!--event code 2-->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail" onclick='changeImage("img/nighticon4.jpg");'>
                            <img class="IMGEV"src="img/nighticon4.jpg" alt="" onclick="showEventMsg();hideDiv();">
                            <div class="caption">
                                <h4 class="pull-right">FREE</h4>
                                <h4><a href="#">Maguires</a>
                                </h4>
                                <p>Thirsty thursdays €3 pints</p>
							    <br />
								<p>LIVE: 58 users</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
<!--event code 3-->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/nighticon2.jpg" alt="" onclick="showEventMsg();hideDiv();">
                            <div class="caption">
                                <h4 class="pull-right">€30</h4>
                                <h4><a href="#">UFC @ Doyle's</a>
                                </h4>
                                <p>UFC 205 Tonight!</p>
								<br />
								<p>LIVE: 56 users</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
<!--event code 4-->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/nighticon6.jpg" alt="" onclick="showEventMsg();hideDiv();">
                            <div class="caption">
                                <h4 class="pull-right">FREE</h4>
                                <h4><a href="#">The Temple Bar</a>
                                </h4>
                                <p>Student Specials all night</p>
                                <br />
                                <p>LIVE: 50 users</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
<!--event code 5-->
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/nighticon5.jpg" alt=""  onclick="showEventMsg();hideDiv();">
                            <div class="caption">
                                <h4 class="pull-right">€10</h4>
                                <h4><a href="#">O'Reilly's</a>
                                </h4>
                                <p>Country music night</p>
                                <br />
                                <p>LIVE: 38 users</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
<!--event code 6-->					
					<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="img/nighticon3.jpg" alt="" onclick="showEventMsg();hideDiv();">
                            <div class="caption">
                                <h4 class="pull-right">€5</h4>
                                <h4><a href="#">Mick's</a>
                                </h4>
                                <p>€2 Heineken Bottles</p>
                                <br />
                                <p>LIVE: 20 users</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--<div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>-->

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

   <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
          <div class="row">
                <div class="col-lg-12">
        
         <!--   <div id="method"></div>-->
        	<!--<div id="map"></div>-->
	        <!--<div id="route"></div>-->
            
            
            
            
            <div class="row">
                <div class="col-lg-12">
                    <div id="chatbro"></div>
                </div>
            </div>
        </footer>
        
        
     <!---google map api code--->
    
	
	
	<p><h6>Copyright &copy; SocialLink 2016</h6></p>
	
	</footer>
    
	
<script type="text/javascript"  async defer src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBhnoA0x7UWJdoHBvpgxsg2d-uk0t7Qm6E&amp;sensor=false&amp;callback=directions_init"></script>


        
     
        
     <!---google map api code--->
     <!---https://developers.google.com/maps/documentation/javascript/geolocation-->
    <!-- <div id="map"></div>-->
    <!--<script>-->
    

      <!--function initMap() {-->
        <!--var map = new google.maps.Map(document.getElementById('map'), {-->
        <!--  center: {lat: 53.4129, lng:8.2439},-->
        <!--  zoom: 13-->
      <!--  });-->
      <!--  var infoWindow = new google.maps.InfoWindow({map: map});-->

  
    <!--    if (navigator.geolocation) {-->
    <!--      navigator.geolocation.getCurrentPosition(function(position) {-->
    <!--        var pos = {-->
    <!--          lat: position.coords.latitude,-->
    <!--          lng: position.coords.longitude-->
    <!--        };-->

    <!--        infoWindow.setPosition(pos);-->
    <!--        infoWindow.setContent("Loaction found");-->
    <!--        map.setCenter(pos);-->
    <!--      }, function() {-->
    <!--        handleLocationError(true, infoWindow, map.getCenter());-->
    <!--      });-->
    <!--    } else {-->
        
    <!--      handleLocationError(false, infoWindow, map.getCenter());-->
    <!--    }-->
    <!--  }-->

    <!--  function handleLocationError(browserHasGeolocation, infoWindow, pos) {-->
    <!--    infoWindow.setPosition(pos);-->
    <!--    infoWindow.setContent(browserHasGeolocation ?-->
    <!--                          'Error: The Geolocation service failed.' :-->
    <!--                          'Error: Your browser doesn\'t support geolocation.');-->
    <!--  }-->
    <!--</script>-->
  
   
    <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAfZjtKUE2KzNh4hFyP_xwvnLAsVb5CrQ&callback=initMap&callback=initMap"></script>-->
     <!--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBhnoA0x7UWJdoHBvpgxsg2d-uk0t7Qm6E&amp;sensor=false&amp;callback=directions_init"></script>-->


    </div>
    <!-- /.container -->
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/grayscale.js"></script>
    
    <!-- Core JavaScript Files -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    
    
        <!--Google Map API-->
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="js/directions-map.js"></script>
    
    
    
    
    
   

</body>

</html>
