<?php?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body style="font-family: tahoma;background-color: #e9ebee;">
		
<form class="pure-form" action="addstudent.php" method="post">

        <input type="number" id="text" name="id" placeholder="Id" required="id"><br><br>
        <input type="text" id="text" name="first_name" placeholder="First_name" required="first_name"><br><br>
	   <input type="text" id="text" name="last_name" placeholder="Sure_name" required="last_name"><br><br>
	   
     
  
	   <input type="email" id="text" name="email" placeholder="Email" required="email"><br><br>
	   <input type="number" id="text" name="reg_no" placeholder="Reg Number" required="id"><br><br>


      <select id="test" name="kcse" onchange="cos('cs','unites')" required="kcse">
        <option value="info" style="font-size: 14px;">--- Select KCSE GRADE  ---</option>
        <option style="font-size: 14px;"><?php  
           $conn = mysqli_connect("localhost","root","","kiit");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT * FROM grade";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {
            	echo "<option>"  . $row["grade"] ."<br>". "</option>";
           }
       ?></option>
       
      </select>


	   <input type="number" id="text" name="phone_number" placeholder="Phone Number" required="id"><br><br>

	   	      <select id="test" name="gender" onchange="cos('cs','unites')" >
	   	      	   <option value="info" style="font-size: 14px;">--- Select Gender ---</option>
	   	      	   <option style="font-size: 14px;">Male</option>
	   	      	   <option style="font-size: 14px;">Female</option>
	   	      </select>
	   	


      <select id="test" name="country" onchange="cos('cs','unites')" required="country">
        <option value="info" style="font-size: 14px;">--- Select Country ---</option>
        <option style="font-size: 14px;"><?php  
           $conn = mysqli_connect("localhost","root","","kiit");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT * FROM region";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {
            	echo "<option>"  . $row["country"] ."<br>". "</option>";
           }
       ?></option>
       
      </select>


    <input type="text" id="text" name="town" placeholder="Town" required="town"><br><br>
    <input type="text" id="text" name="postal_address" placeholder="Postal Address" required="postal_address"><br><br>
    <input type="number" id="text" name="fees" placeholder="fees" required="id"><br><br>
    <input type="password" name="password" placeholder="Password" id="password" required="password"><br><br>
        <input type="password" placeholder="Confirm Password" id="confirm_password" required="confirm_password"><br><br>    
        <input type="reset" value="Reset  Form"  style="background-color: #42b72a;color: white; font-size: 16px; width: 160px;
	  text-align: center;
		padding: 10px;
		border-radius: 5px;
		margin-right: 16px;" /><br><br><br><br>
        <button type="submit" class="pure-button pure-button-primary" id="button">Submit</button>

</form>	
		

	<script type="text/javascript">

		var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password"),email = document.getElementById("email"), first_name = document.getElementById("frist_name"), last_name = document.getElementById("last_name"), country = document.getElementById("country");
		function validatePassword(){
           	if(password.value != confirm_password.value) {
           		confirm_password.setCustomValidity("Passwords Don't Match");
           	}
           	else {
           		confirm_password.setCustomValidity('');
           	}
           }
email.onchange = validateEmail;
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
	</script>
</body>
</html>