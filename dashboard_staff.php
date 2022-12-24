
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KIIT | Login</title>
	
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


		

		

	

<div class="vertical-menu" id="bar2">

  <a href="home.php" class="active">Home</a>
  <a href="dashboard_staff.php">Dashboard</a>

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
          
        </tr>
        <tr>
          <td>First_name: </td>
          
        </tr>
        <tr>
          <td>Last_name: </td>
          
        </tr>
        <tr>
          <td>National ID Number: </td>
          
        </tr>
        <tr>
          <td>Gender: </td>
          
        </tr>
        <tr>
          <td>County</td>
          
        </tr>
        <tr>
          <td>Town </td>
          
        </tr>
        
        
      </tbody>
    </table>
		
	</div>


</body>
</html>
