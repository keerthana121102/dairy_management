<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>EMPLOYEE DETAILS</title>
<link rel="stylesheet" type="text/css"
	 href="add1.css">
	 
</head>

<body>
    <header id="main-header">
	  <div class="container">
	  <h1>DAIRY MANAGEMENT SYSTEM</h1>
	  </div>	
	</header>
	<nav id="navbar">
	  <div class="container">
	  <ul>
	    <li><a href="index.php">Home</a></li>
		<li><a href="farmer.php">Farmer </a></li>
		<li><a href="employee.php">Employee</a></li>
		<li><a href="customer.php">Customer</a></li>
		<li><a href="dailyupdate.php">Dailyupdate</a></li>
		
	  </ul>
	  </div>
	</nav>
	<br>
	<a class="button" href="addemployee.php" >Add employee details</a>
	  <br><br>
	<a class="button" href="delemployee.php" >Delete employee details</a>
	  <br><br>
	 <a class="button" href="updateemployee.php" >Update employee details</a>
	  <br><br>  
	<div class="heading-1">
	  <h1>EMPLOYEE DETAILS</h1>
	  </div>
	  
	<?php
	$sql = mysqli_query($conn,"select * from employee");
     echo"<table>";
     echo"<tr><th>EMPLOYEE ID</th> <th>NAME</th> <th>ADDRESS</th> <th>PHONE.NO</th> <th>ACC.NO</th> <th>SALARY</th></tr>";
     while($arr=mysqli_fetch_row($sql))
    {
	    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> </tr>";
    }
	
	
	
	
	?>
</body>
</head>	