<?php
    

    $conn = mysqli_connect("localhost","root","","kiit");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $query = "SELECT * FROM staff WHERE email = '". mysqli_real_escape_string($conn,$email) ."' AND password = '". mysqli_real_escape_string($conn,$password) ."' ";
    $result = mysqli_query($conn,$query);


    if (mysqli_num_rows($result) == 1) 
    {
        header("location:dashboard_staff.php"); //Pass, do something
    } 
    else {
          $message = "Incorrect Username and/or Password .\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "staffportal.php";


}
    

    //Close  connection
    mysqli_close($conn)

 

?>


