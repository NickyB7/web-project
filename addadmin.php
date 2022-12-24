<?php
    

    $conn = mysqli_connect("localhost","root","","kiit");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $sql = "INSERT INTO admin VALUES ('$email', '$password')";
    $dt=mysqli_query($conn , $sql);
    if (!$dt){
        $message = " Error. \\n The user exits or Fill all part of the form .\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_admin.php";
            }
    else{
        header("location:admintrater.php");
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>


