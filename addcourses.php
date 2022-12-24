<?php
    

    $conn = mysqli_connect("localhost","root","","kiit");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    
    $course = $_REQUEST['course'];


    $sql = "INSERT INTO course1 VALUES ('$course')";
    $dt=mysqli_query($conn , $sql);
    if (!$dt){
        
        $message = " Error. \\n The course exits or Fill all part of the form .\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_courses.php";
    }
    else{
        $message = " Success.\\n Course Added.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "dashbord_admin.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>


