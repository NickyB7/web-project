<?php
    

    $conn = mysqli_connect("localhost","root","","kiit");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    
    $country = $_REQUEST['country'];

    $sql = "INSERT INTO region VALUES ('$country')";

    if (mysqli_query($conn , $sql)){
    	echo  include 'region.php';
    }
    else{
    	
    	echo "Error" .  include 'region.php' ;
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>

