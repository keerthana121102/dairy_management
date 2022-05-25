<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>FARMER DETAILS</title>
<link rel="stylesheet" 
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
	<a class="button" href="addfarmer.php" >Add farmer details</a><br><br>
	<a class="button" href="delfarmer.php" >Delete farmer details</a><br><br>
	<div class="heading-1">
	  <h1>FARMER DETAILS</h1>
	  </div>
	  
	 
	  
	  
	<?php
	$sql = mysqli_query($conn,"select * from farmer");
     echo"<table>";
     echo"<tr> <th>FARMER ID</th> <th>NAME</th> <th>ADDRESS</th> <th>PHONE N0.</th> <th>ACCOUNT NO.</th> </tr>";
     while($arr=mysqli_fetch_row($sql))
    {
	    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td></tr>";
    }
	 ?>
	
	
</body>
</head>	