<?php
    

    $conn = mysqli_connect("localhost","root","","kiit");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $gender = $_REQUEST['gender'];
    $country = $_REQUEST['country'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $sql = "INSERT INTO sign_up VALUES ('$first_name', '$last_name', '$gender','$country', '$email', '$password')";
    $dt=mysqli_query($conn , $sql);
    if (!$dt){
        
        $message = " Error. \\n The user exits or Fill all part of the form .\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "sign_up.php";
    }
    else{
        header("location:log_in.php");
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>


