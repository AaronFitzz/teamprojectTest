//AZEEZ DONT TOUCH THANKS.

<?php


 $hostname = "localhost";
 $username = "x14715335";
 $password = "";
 $dbname = "SocialLink";


$name = $_POST['name'];
$email= $_POST['email'];
$message = $_POST['message'];

	

$db = new mysqli($hostname, $username, $password, $dbname);
if (mysqli_connect_errno()) {
	echo 'Error: Could not connect to database.  Please try again later.';
	exit;
}

$q1 = "SELECT userid FROM contactF where username='$name'";
$result = $db->query($q1);

if(mysqli_fetch_row($result)){
  echo "Problems";
}
else{
  $q2 = "INSERT INTO contactF (con_ID, name, email, message) VALUES ('','$name', '$email','$message')";
  //$result2 = $db->query($q2);
  //$rt = mysqli_query($db,$q2); 
  //$q2 = "INSERT INTO userinfo (username, password, fname, lname, email, dob, gender) VALUES ('$user', '$pass','$fname,'$lname','$email','$dob','$gender')";
  if ($db->query($q2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $q2 . "<br>" . $db->error;
}
	}



//$conn->close();
?>





SECOND 

<?php
    $hostname = "localhost";
    $username = "x14715335";
    $password = "";
    $dbname = "SocialLink";

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

	

    $db = new mysqli($hostname, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
    	echo 'Error: Could not connect to database.  Please try again later.';
    	exit;
    } else{
      $q2 = "INSERT INTO contactF (con_ID, name, email, message) VALUES ('','$name', '$email','$message')";
      
      if ($db->query($q2) === TRUE) {
        echo "New record created successfully";
                }
      } 

?>

lINKS FOR AUTO EMAIL

https://www.youtube.com/watch?v=6q7ndD0rt2s

link for contact form ref

https://bootstrapbay.com/blog/working-bootstrap-contact-form/
