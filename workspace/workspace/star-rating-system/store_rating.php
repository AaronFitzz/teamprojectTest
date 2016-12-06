
<!--  http://blog.hackerkernel.com/2015/11/01/star-rating-system-in-php-mysql-jquery/ -->


<?php

	   $hostname = "localhost";
		 $username = "x14715335";
		 $password = "";
		 $dbname = "SocialLink";
		 
		 $star_index = $_POST['star'];
		 $product_id = $_POST['$product_id'];
		 
		  $db = new mysqli($hostname, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
    	echo 'Error: Could not connect to database.  Please try again later.';
    	exit;
    } 
		
		 
	
    
		
	if(isset($_POST['star'])){
		$star = htmlentities($_POST['star']);
		//valid star id array
		$valid_star = array('1','2','3','4','5');

		//show a error message if some hacker (Noobs) try to change the star id
		if(!in_array($star, $valid_star)){
			echo "<b class='r'>Don't change anything you.</b>";
			exit();
		}

		// STORE THE RATING INTO DATABASE
		 
		$q1 = "INSERT INTO `SocialLink`.`starRating` (`star_index` ,`product_id` ) VALUES ('$star_index', '$product_id')";

		
		mysqli_query($db, $q1);
		mysqli_close($db);
      
      //$q2 = "INSERT INTO starRating (id, star_index, product_id) VALUES ('','$star_index', '$product_id')";
    
		
		
		// Display the result
		echo "<b class='g'>Thanks! You rated this product {$star} Stars.</b>";
	}
?>