
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KIIT | Course Page</title>
	
</head>
<style type="text/css">

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

	#bar2{
		margin: auto;
		margin-top: 50px;
		padding: 10px;
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
	#menu{
    color: #d9dfeb;
    font-size: 17px;
    margin-right: 16px;
    text-decoration: none;

  }
  #button{
		background-color:  rgb(59, 89, 152);
		width: 80px;
	  text-align: center;
		padding: 7px;
		border-radius: 4px;
		margin-right: 16px;
		float: center;
		color: white;
		font-size: 14px;
		text-decoration: none;
	}
	* {
  box-sizing: border-box;
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

  <div style="background:white;border:rgb(59, 89, 152) 3px SOLID;
         border-radius:20px;  margin-top: 50px;color:rgb(59, 89, 152);">
         <center>  
      <marquee direction="right" behavior="alternate"  >  
          Courses we offer!!!.................Courses we offer!!!................Courses we offer!!!..............<br>
      </marquee>
         
  </div>

        
           <div  id="bar2" style="float: center; width: 700px; text-align: left;padding-top: 50px;">
               
               <h1 style="font-size: 15px; color:rgb(59, 89, 152);">Courses offered at Kenya Institute of Information and Technology Nyeri Campus</h1>
               <br><br><br>
               
               
               
        
      	<table style="border-radius:10px; margin-left:10px;border:rgb(59, 89, 152) 3px SOLID;">
      <thead>
        <tr>
          <th>Courses offered</th>

        </tr>
      </thead>
      <tbody>
      	<tr>
          <td>Certificate in Software Engineering(Software Engineering)
          	<div style="float:right;"><a href="course_selection.php" id="button">Register Courses</a></div></td>
        </tr>
        <tr>
          <td>Diploma in Project Management(Project Management)
          	<div style="float:right;"><a href="course_selection.php" id="button">Register Courses</a></div></td>
        </tr>
        <tr>
          <td>Certificate in Information Communication Technology(ICT)
          <div style="float:right;"><a href="course_selection.php" id="button">Register Courses</a></div></td>
        </tr>
        
        <tr>
          <td>Cisco Certified Network Associate 4(CCNA 4)
          <div style="float:right;"><a href="course_selection.php" id="button">Register Courses</a></div></td>
        </tr>
        <tr>
          <td>Cisco Certified Network Associate 3(CCNA 3)
          <div style="float:right;"><a href="course_selection.php" id="button">Register Courses</a></div></td>
        </tr>
        
        	<tr>
          <td>Cisco Certified Network Associate 2(CCNA 2)
          <div style="float:right;"><a href="course_selection.php" id="button">Register Courses</a></div></td>
        </tr>
        <tr>
          <td>Cisco Certified Network Associate 1(CCNA 1)
          <div style="float:right;"><a href="course_selection.php" id="button">Register Courses</a></div></td>
        </tr>
        <tr>
          <td>Computer Studies (Computer Application)
          <div style="float:right;"><a href="course_selection.php" id="button">Register Courses</a></div></td>
        </tr>
        <tr>
          <td>Cisco IT Essentials(CISCO)
          	<div style="float:right;"><a href="course_selection.php" id="button">Register Courses</a></div>
          </td>

        </tr>
        <tr>
          <td>Diploma in Business Administraton(Business Administration)
          <div style="float:right;"><a href="course_selection.php" id="button">Register Courses</a></div></td>
        </tr>
        <tr>
          <td>Diploma in Information Communiction Technology(ICT)
          <div style="float:right;"><a href="course_selection.php" id="button">Register Courses</a></div></td>
        </tr>
      </tbody>
      
    </table><br><br><br><br><br><br>
      <img src="ll.jpg" width="250" height="200"><br><br>
        </div>

</Body>   
</Html> 



