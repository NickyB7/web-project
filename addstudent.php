<?php
    

    $conn = mysqli_connect("localhost","root","","kiit");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }
    
    $id = $_REQUEST['id'];
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $phone_number = $_REQUEST['phone_number'];
    $gender = $_REQUEST['gender'];
    $country = $_REQUEST['country'];
    $kcse = $_REQUEST['kcse'];
    $password = $_REQUEST['password'];
    $sql = "INSERT INTO student VALUES ('$id', '$first_name', '$last_name', '$email', '$phone_number', '$gender', '$country', '$kcse','$password')";
    $dt=mysqli_query($conn , $sql);
    if (!$dt){
        
        $message = " Error. \\n The user exits or Fill all part of the form .\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "add_student.php";
    }
    else{
        $message = "Susses";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "dashbord_admin.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>


