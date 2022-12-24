<?php
    

    $conn = mysqli_connect("localhost","root","","kiit");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    

    $email = $_REQUEST['email'];

   $sql = "DELETE FROM staff WHERE email=('$email')";
  $dt=mysqli_query($conn , $sql);
   
    if (!$dt){
        
        $message = " Error. \\n Check if the database is working  .\\n The user does not exit .\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_deletestaff.php";
    }
    else{
    $message = " Success. \\n User removeed";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_deletestaff.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>
