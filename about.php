
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KIIT | About Page</title>
	
</head>
<style type="text/css">
	<style>
	   table {
	   	  border-radius: 10px;
	   	  float: left;
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
        
        height: 20px;

        padding-left: 6px;
        width: 250px;
     
        margin: auto;
        color: #52593b;
        text-align: left;

      }
      th {
        text-align: center;
        height: 20px;
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
          You are at KENYA INSTITUTE Site!!!..... The Place You Need to be!!!......<br>
      </marquee>
         
  </div>

        


          <div id="bar2" style="float: left; width: 400px; margin-left: 50px;"> 
          	<p style="font-size: 20px;color:rgb(59, 89, 152);font-size: 15px;">Our Location!</p><center >  
          <marquee direction="right" behavior="alternate">  
                   
                  <img src="image1.jpg" width="250" height="200" >
           </marquee> </center> </div>


           <div id="bar2" style="float: right; width: 400px; margin-right: 50px;"> 
           	<p style="font-size: 20px;color:rgb(59, 89, 152);font-size: 15px;">Our Class!</p><center >  
                 <marquee direction="right" behavior="alternate">  
                      
                       <img src="class.jpg" width="250" height="200" >
                       
                  </marquee> </center> <br><br>
                <center >  
                 <marquee direction="left" behavior="alternate">  
                       <img src="ll.jpg" width="250" height="200">
                  </marquee> </center>
                </div>


           <div  id="bar2" style="float: center; width: 650px; text-align: left;padding-top: 50px;">
               
               <h1 style="font-size: 15px; color:rgb(59, 89, 152);">Kenya Intitute of Information and Technology Nyeri Campus details </h1>
               <p style="font-size: 12px">Join Users  at Kenya Institute of Technology Nyeri<br></p><br><br><br>
        <table style="border-radius:10px; margin-left:10px;border:rgb(59, 89, 152) 3px SOLID;">
      <thead>
        <tr>
          <th>Campus details</th>
        </tr>
      </thead>
      <tbody>
      	<tr>
          <td>Address: </td>
          <td>Nyeri </td>
          
        </tr>
        <tr>
          <td>Location: </td>
          <td>Nyeri </td>
          
        </tr>
        <tr>
          <td>Telephone Number: </td>
          <td>+254720035181 </td>

        </tr>
        
        <tr>
          <td>Email Address:</td>
          
        </tr>
        <tr>
          <td>College Website: </td>
          <td>www.kiit.ac.ke </td>
          
        </tr>
        <tr>
          <td>Category: </td>
          <td>Information Technology </td>
          
        </tr>

      </tbody>
      
    </table><br><br><br><br>

    <h1 style="font-size: 15px; color:rgb(59, 89, 152);">
    	About Kenya Institute of Information and Technology Nyeri Campus
    </h1>
    <p style="">The Kenya Institute of Information and Technology was established as an ICT training centre, with the name Ciscom College of Technology and Business Studies committed to turning information communication Technology into value for the benefit of its clients, its people and society.</p>
    <p>The college was later changed to KIIT for strategic reason so as to reach potential students in Kenya.</p>
    <p>KIIT is professionally managed by a team of qualified Management Staffs and competent Tutors who have accumulated a wealth of experiences as ICT lecturers and other courses.</p>
    <p>We offer both in-house training and external training and assist organizations to impact employees with necessary Information Communication Technology skills needed to install appropriate Information system. We have a team of dedicated professionals who are adaptable and able to cope with varying situations and circumstances. The team is change oriented individuals who are adaptable to varying working environments.</p>
   <br><br>
    <h1 style="font-size: 15px; color:rgb(59, 89, 152);">Our Vision</h1>
     <p>We aim at being the best in the development, service delivery and implementation of Information Communication Technology.</p>
     <br><br><h1 style="font-size: 15px; color:rgb(59, 89, 152);">Mission</h1>
      <p>To offer quality Information Communication Technology solutions to our clients in order to enable them manage their resources more effectively and to maximize their profits through Embracing ICT.</p>
     <br><br><h1 style="font-size: 15px; color:rgb(59, 89, 152);">Core Values</h1>
     <p>• Integrity<br>
        • Customer Focus<br>
        • Honesty<br>
        • Team Work<br>
        • Competence<br>
        • Professionalism<br>
        • Credibility and Commitment to work</p>
     </div>

</Body>   
</Html> 

