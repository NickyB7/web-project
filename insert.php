<?php
    

    $conn = mysqli_connect("localhost","root","","kiit");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    
    
    $email = $_REQUEST['email'];
    $semester = $_REQUEST['semester'];
    $course = $_REQUEST['course'];
    $unites = $_REQUEST['unites'];


    $sql = "INSERT INTO unites VALUES ('$email', '$semester', '$course','$unites')";
    $dt=mysqli_query($conn , $sql);
    if (!$dt){
        
        $message = " Error. \\n The user exits or Fill all part of the form .\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "sign_up.php";
    }
    else{
        $message = "Susses.\\n";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "unites_registration.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>


