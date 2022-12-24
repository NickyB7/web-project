<?php  
  
   $conn = mysqli_connect("localhost","root","","kiit");
    //check connection
    if ($conn == false) {
         die("Connection failed: " . mysqli_connect_error());

    }


?>
<html>
<head>
	<meta charset="utf-8">
	<title>KIIT | Unites_registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	<style>
	
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
		height: 150px;
		border-radius: 17px;
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
    font-size: 12px;
    margin-right: 16px;

  }
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
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
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
table {
        width: 100%;
        border-collapse: collapse;
      }
      table,
      th,

      thead {
        background-color: rgb(59, 89, 152);
        color: #d9dfeb;
      }
      td {
        
        height: 50px;
        width: 800px;
        margin: auto;
        color: #52593b;
        text-align: left;

      }
      th {
        text-align: center;
        height: 50px;
      }
      tbody tr:nth-child(odd) {
        background: #ffffff;
      }
      tbody tr:nth-child(even) {
        background: #f4f4f4;
      }

	#text{
		height: 40px;
		width: 300px;
		border-radius: 4px;
		border: solid 1px #aaa;
		padding: 4px;
		font-size: 14px;
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
#bar2{
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
	#bar3{
		background-color: white;
		width: 700px;
		
		font-weight: Bold;
		margin: auto;
		margin-top: 50px;
		padding: 10px;
		padding-top: 50px;
		text-align: center;
		float: center;
		border-radius: 17px;
		position: static;
	}

	
</style>
<body style="font-family: tahoma;background-color: #ccc;">

		
		<div id="bar">
          <a href="log_out.php" id="log_out">logout</a>
	     <div style="font-size: 60px; padding-left: 20px; padding-top: 10px;"><img src="log.jpg" alt="log">  KENYA INSTITUTE</div>
       

	</div>
<div class="action">
		<div class="profile" onclick="menuToggle();">
			<img src="img.jpg">
		</div>
		<div class="menu">
			<h3>Nyeri<br><span>KIIT Website Designer</span></h3>
			<ul>
				<li><img src="profile.png"><a href="#">My Profile</li>
				<li><img src="edit.png"><a href="#">Edit Profile</li>
				<li><img src="inbox.png"><a href="#">Inbox</li>
				<li><img src="setting.png"><a href="#">Settings</li>
				<li><img src="help.png"><a href="#">Help</li>
				<li><img src="logout.png"><a href="#">Logout</li>
			</ul>
		</div>
	</div>

		

		

	

<div class="vertical-menu" id="bar2">

  <a href="home.php" class="active">Home</a>
  <a href="dashboard.php">Dashboard</a>
  <a href="financials.php">Financials</a>
  <a href="academics.php">Academics</a>
  <a href="unites_registration.php">Unites Registration</a>
  <a href="resources.php">Resources</a>
  <a href="notice_bord.php">Notice Bord</a><br>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	
	<script>
	
		// Function to toggle the bar
		function geeksforgeeks() {
			var x = document.getElementById("menus");
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
		}
	</script>

	<script>
	
		// Function to toggle the plus menu into minus
		function myFunction(x) {
			x.classList.toggle("fa-minus-circle");
		}
	</script>
   <div class="container">
  <form action="insert.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">email</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="email" placeholder="Email...">
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-25">
      <label for="year">Semester</label>
    </div>
    <div class="col-75">
      <select id="Year" name="semester">
        <option value="frist">Frist Semester</option>
        <option value="second">Second Semester</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="cs">Course</label>
    </div>
    <div class="col-75">
      <select id="cs" name="course" onchange="cos('cs','unites')">
        <option value="info">---Select Course--</option>
        <option value="first">Bachor of Computer Science</option>
        <option value="second">Diploma in Information Technology</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="unites">unites</label>
    </div>
    <div class="col-75">
      <select id="unites" name="unites">
       
      </select>
    </div>
  </div>
 

<br><br><br>  
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div><br><br><br><br>
<div id="bar3">
    <table >
      <thead>
        <tr>
          <th>Users</th>
          <th>Semester</th>
          <th>Course</th>
          <th>Unites</th>
        </tr>
      </thead>
      <tbody>
        <?php 

		 $sql="SELECT * FROM unites";
		 $r=mysqli_query($conn,$sql);
		 while ($v=mysqli_fetch_assoc($r)) {
		 	echo '<tr>
		 	<td>'.$v['email'].'</td>
		 	<td>'.$v['semester'].'</td>
		 	<td>'.$v['course'].'</td>
		 	<td>'.$v['unites'].'</td>
		 	</tr>';
		 	
		 }
		 ?>
        
      </tbody>
    </table>
  </div><br><br><br><br><br>
</body>
<script>
  function cos(x,y){
  x = document.getElementById(x);
  y = document.getElementById(y);
  y.innerHTML="";

  if(x.value=="first"){
    var course= ['Database Systems','Introduction to Programming and Algorithms','Introduction to Object-Orientation','Elementary Mathematics and Decision Making'];
  }else if(x.value=="second"){
    var course= ['HIV','Principles of Computer Support and Maintenance','Network Essentials','Word Processin'];
   }
   for(data in course){
    var d=course[data];
    var option2 = document.createElement("option");
    option2.value=d;
    option2.innerHTML=d;
    y.options.add(option2);

   }
}
 
</script>
<script type="text/javascript">
	function menuToggle(){
		const toggleMenu = document.querySelector('.menu');
		toggleMenu.classList.toggle('active');
	}
</script>
<script>
  
    // Function to toggle the plus menu into minus
    function myFunction(x) {
      x.classList.toggle("fa-minus-circle");
    }
  </script>
</html>

