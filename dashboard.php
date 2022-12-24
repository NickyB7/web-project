
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KIIT | dashboard</title>
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
      #{

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
			<h3>Some Famous<br><span>Website Designer</span></h3>
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

</div>

	
	<div id="bar3">
		

	<table>
      <thead>
        <tr>
          <th>Basic Information</th>
        </tr>
      </thead>
      <tbody>
      	<tr>
          <td>Email: </td>
          <td><?php  
           $conn = mysqli_connect("localhost","root","","kiit");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT email FROM student";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {
            	echo  $row["email"];
           }
       ?></td>
        </tr>
        <tr>
          <td>Registration Number: </td>
           <td><?php  
           $conn = mysqli_connect("localhost","root","","kiit");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT reg_no FROM student";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {
            	echo  $row["reg_no"];
           }
       ?></td>
        </tr>
        <tr>
          <td>Name: </td>
          <td><?php  
           $conn = mysqli_connect("localhost","root","","kiit");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT * FROM student";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {
            	echo  $row["first_name"] . $row["last_name"];
           }
       ?></td>
        </tr>
        <tr>
          <td>National ID Number: </td>
          <td><?php  
           $conn = mysqli_connect("localhost","root","","kiit");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT id FROM student";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {
            	echo  $row["id"];
           }
       ?></td>
        </tr>
        <tr>
          <td>KCSE Index Number: </td>
          <td><?php  
           $conn = mysqli_connect("localhost","root","","kiit");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT kcse FROM student";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {
            	echo  $row["kcse"];
           }
       ?></td>
        </tr><tr>
          <td>Gender: </td>
          <td><?php  
           $conn = mysqli_connect("localhost","root","","kiit");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT gender FROM student";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {
            	echo  $row["gender"];
           }
       ?></td>
        </tr>
        
        
      </tbody>
      <thead>
        <tr>
          <th>Contact Information</th>
        </tr>
      </thead>
      <tbody>
      	<tr>
          <td>Phone number: </td>
          <td><?php  
           $conn = mysqli_connect("localhost","root","","kiit");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT phone_number FROM student";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {
            	echo  $row["phone_number"];
           }
       ?></td>
        </tr>
        <tr>
          <td>Town: </td>
          <td><?php  
           $conn = mysqli_connect("localhost","root","","kiit");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT town FROM student";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {
            	echo  $row["town"];
           }
       ?></td>
        </tr>
        <tr>
          <td>Postal Address: </td>
          <td><?php  
           $conn = mysqli_connect("localhost","root","","kiit");
           if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                       }
           $sql = "SELECT postal_address FROM student";
           $result = mysqli_query($conn,$sql);
           
           while ($row = mysqli_fetch_assoc($result)) 
            {
            	echo  $row["postal_address"];
           }
       ?></td>
        </tr>
      	
      </tbody>
    </table>
		
	</div>


</body>
<script type="text/javascript">
	function menuToggle(){
		const toggleMenu = document.querySelector('.menu');
		toggleMenu.classList.toggle('active');
	}
</script>
</html>
