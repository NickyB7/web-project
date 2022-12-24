<?php
   


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KIIT | Add Staff</title>
	
</head>
<style type="text/css">

	
		/* Navigation bar styling */
		.menu-list {
			max-width: 100%;
			margin: auto;
			height: 100%;
			color: black;
			background-color: white;
			border-radius: 10px;
		}
	
		/* logo, navigation menu styling */
		.geeks {
			overflow: hidden;
			background-color: rgb(59, 89, 152);
			position: relative;

		}
	
		/* styling navigation menu */
		.geeks #menus {
			display: none;
		}
	
		/* link specific styling */
		.geeks a {
			text-decoration: none;
			color: white;
			padding: 14px 16px;
			font-size: 16px;
			display: block;
			height: 20px;
		}
	
		/* navigation toggle menu styling */
		.geeks a.icon {
			display: block;
			position: absolute;
			right: 1;
			top: 0;
		}
	
		/* hover effect on navigation logo and menu */
		.geeks a:hover {
			color: #d9dfeb;

		}
		#bar{
		
		background-color: rgb(59, 89, 152);
		color: #d9dfeb;
		font-size: 30px;
		padding: 4px;
	}
	#log_out{
		background-color: #42b72a;
		width: 80px;
	  text-align: center;
		padding: 7px;
		border-radius: 4px;
		margin-right: 16px;
		float: right;
		color: white;
		font-size: 20px;
		text-decoration: none;
	}
	#menu{
    color: #d9dfeb;
    font-size: 17px;
    margin-right: 16px;
    text-decoration: none;
  }


	#text{
		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #aaa;
		padding: 4px;
		font-size: 14px;
	}
	#button{
		width: 300px;
		height: 40px;
		border-radius: 4px;
		border: none;
		background-color: rgb(59, 89, 152);
		color: white;
	}
	#password{
		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #aaa;
		padding: 4px;
		font-size: 14px;
	}
	#confirm_password{
		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #aaa;
		padding: 4px;
		font-size: 14px;
	}
	#bar2{
		margin: auto;
		margin-top: 50px;
		padding: 10px;
		padding-top: 50px;
    width: 600px;
		text-align: center;
		float: center;
		border-radius: 17px;
		
		background-color: white;
		position: relative;
	}
	#bar3{
		margin: auto;
		margin-top: 50px;
		padding: 10px;
		padding-top: 50px;

		text-align: center;
		float: left;
		border-radius: 17px;
		
		background-color: white;
		position: relative;
		

	}
	#selects{
		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #aaa;
		padding: 4px;
		font-size: 14px;
	}
	* {
  box-sizing: border-box;
}
	.vertical-menu {
  width: 250px;
  


}

.vertical-menu a {
  background-color: white;
  color: black;
  font-size: 12px;
  display:block;
  padding: 12px;text-align: left;

  text-decoration: none;

}

.vertical-menu a:hover {
	height: 80px;
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}

input[type=text], select, textarea {
  width: 40%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  font-size: 14px;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
  
  }

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: center;
  width: 100%;
  margin-top: 6px;
}

.col-75 {
  float: center;
  width: 100%;
  margin-right: 25px;
  margin-bottom: 20px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 100%) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 6px;
  }
}

</style>
<body style="font-family: tahoma;background-color: #e9ebee;">
	<div id="bar">
		
		<div id="bar">
          <a href="log_out.php" id="log_out">logout</a>

	     <div style="font-size: 60px;"><img src="log.jpg" alt="log">  KENYA INSTITUTE</div>
       <div class="vertical-menu" id="bar3">

  <a href="home.php" class="active">Home</a>
  <a href="dashbord_admin.php">dashbord</a><br>
</div>

	</div>
	</div>
	<div id="bar2">
		
<form class="pure-form" action="addstaff.php" method="post">
    <fieldset style="border-radius: 20px;">
        <legend>Add Staff Kenya Institute</legend>
        <input type="number" id="text" name="id" placeholder="Id" required="id"><br><br>
        <input type="text" id="text" name="first_name" placeholder="First_name" required="first_name"><br><br>
	   <input type="text" id="text" name="last_name" placeholder="Sure_name" required="last_name"><br><br>
	   
     
  
	   <input type="email" id="text" name="email" placeholder="Email" required="email"><br><br>
	   <input type="number" id="text" name="phone_number" placeholder="Phone Number" required="id"><br><br>
	   <div class="col-75"style=" padding-right: 120px;">
	   	      <select id="test" name="gender" onchange="cos('cs','unites')" >
	   	      	   <option value="info" style="font-size: 14px;">--- Select Gender ---</option>
	   	      	   <option style="font-size: 14px;">Male</option>
	   	      	   <option style="font-size: 14px;">Female</option>
	   	      </select>
	   	
	   </div>
	   <div  class="col-75" style=" padding-right: 120px;">
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
    </div>
    <input type="text" id="text" name="town" placeholder="Town" required="town"><br><br>
        
        <input type="password" name="password" placeholder="Password" id="password" required="password"><br><br>
        <input type="password" placeholder="Confirm Password" id="confirm_password" required="confirm_password"><br><br>
        <input type="reset" value="Reset Signup Form"  style="background-color: #42b72a;color: white; font-size: 16px; width: 160px;
	  text-align: center;
		padding: 10px;
		border-radius: 5px;
		margin-right: 16px;" /><br><br><br><br>
        <button type="submit" class="pure-button pure-button-primary" id="button">submite</button>
    </fieldset>
</form>	
		
	</div>
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

