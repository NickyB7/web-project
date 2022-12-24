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
    $kcse = $_REQUEST['kcse'];
    $gender = $_REQUEST['gender'];
    $country = $_REQUEST['country'];


    $sql = "INSERT INTO courseselection VALUES ('$id', '$first_name', '$last_name', '$email', '$phone_number', '$kcse', '$gender', '$country')";
    $dt=mysqli_query($conn , $sql);
    if (!$dt){
        
        $message = " Error. \\n The user exits or Fill all part of the form .\\nTry again.";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "course_selection.php";
    }
    else{
        $message = " Success. \\n We will veiw your request in 24hr and contact you";
    
          echo "<script type='text/javascript'>alert('$message')</script>";
          include "course.php";
    }
    

    //Close  connection
    mysqli_close($conn)

   

?>


