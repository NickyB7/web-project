<?php
   


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KIIT | Add admin</title>
	
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
	#login_button{
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
          <a href="sign_up.php" id="login_button">Signup</a>
	     <a href="log_in.php" id="login_button">Login</a>

	     <div style="font-size: 60px;"><img src="log.jpg" alt="log">  KENYA INSTITUTE</div>
       <div><br>
        <a href="home.php" id="menu">Home Page</a>
        <a href="course.php" id="menu">Course</a>
        <a href="studentportal.php" id="menu">Student Portal</a>
        <a href="staffportal.php" id="menu">Staff Portal</a>
        <a href="admintrater.php" id="menu">Admintrater Page</a>
        <a href="about.php" id="menu">About</a>

      </div>

	</div>
	</div>
	<div id="bar2">
		
<form class="pure-form" action="addadmin.php" method="post">
    <fieldset style="border-radius: 20px;">
        <legend>Kenya Institute</legend>
        
 
  
	   <input type="email" id="text" name="email" placeholder="Email" required="email"><br><br>
	   
	   
        <input type="password" name="password" placeholder="Password" id="password" required="password"><br><br>
        <input type="password" placeholder="Confirm Password" id="confirm_password" required="confirm_password"><br><br>
        <input type="reset" value="Reset Signup Form"  style="background-color: #42b72a;color: white; font-size: 16px; width: 160px;
	  text-align: center;
		padding: 10px;
		border-radius: 5px;
		margin-right: 16px;" /><br><br><br><br>
        <button type="submit" class="pure-button pure-button-primary" id="button">Add admin</button>
    </fieldset>
</form>	
		
	</div>
	<script type="text/javascript">

		var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password"),email = document.getElementById("email");


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

