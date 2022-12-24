<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Makes_entery</title>
</head>
<body>
    <div style=" margin-top: 200px;">
    <form action="save.php" method="post">
        <p>Region Entery</p>
        <p><label for="country">country  </label>
            <input type="text" name="country" size="40"></p>
            
            <input type="submit"><br><br><br>
       
       <?php  
           $conn = mysqli_connect("localhost","root","","kiit");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT * FROM region";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {echo "country:    "  . $row["country"] ."<br>"."<br>";
           }
       ?>
    </form>
   </div>
</body>
</html>
