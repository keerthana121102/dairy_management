<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>employee registration</title>
<link rel="stylesheet" type="text/css"
	 href="add.css">
	 
</head>

<body>
<header id="main-header">
	  <div class="container">
	  <h1>DAIRY MANAGEMENT SYSTEM</h1>
	  </div>
	  
	</header>
	<br>
	<a href="employee.php" class="button">Back To employee</a>
	<div class="box-1">
	<div class="heading-1">
	  <h1>ENTER EMPLOYEE DETAILS</h1>
	  </div>
	  
	  
<form class="my-form" method="GET" action="#">
	 <div>
	 EMPLOYEE ID:<input type="number" name="eid" placeholder="Enter id">
	  </div>
	   <br>
	  <div>
	  NAME:<input type="text" name="ename" placeholder="Enter name">
	  </div>
	  <br>
	  <div>
	  ADDRESS:
	    <input type="textarea" name="eaddr" placeholder="Enter address">
	  </div>
	  <br>
	  
	  <div>
	  PHONE NO.:
	    <input class="number" type="text" name="eph" placeholder="Enter phone no.">
	  </div>
	  <br>
	  <div>
	  ACCOUNT NO.:
	    <input type="number" name="eacc" placeholder="Enter account no.">
	  </div>
	  <div>
	  <br>
	  SALARY:
	    <input type="number" name="esalary" placeholder="Enter salary">
	  </div>
	  <br>
	  <input class="button" type="submit" name="submit" value="submit">
	 </form>
	 </div>
	 
	 <?php
	  
	    if($_GET['submit'])
		{
		  $eid = $_GET['eid'];
		  $ename = $_GET['ename'];
		  $eaddr = $_GET['eaddr'];
		  $eph = $_GET['eph'];
		  $eacc= $_GET['eacc'];
		  $esalary= $_GET['esalary'];

		  
		  if($eid!="" && $ename!="" && $eaddr!="" && $eph!="" && $eacc!="" && $esalary!="")
		  {
		    $sql = "INSERT INTO employee VALUES('$eid','$ename','$eaddr','$eph','$eacc','$esalary')";
			$data = mysqli_query($conn,$sql);
			echo $data;
			if($data)
			{
			 echo "Inserted Successfully";
              header("refresh:1;url=employee.php");
			}
			else
			{
			  echo "not inserted";
			}
		  }}
		  
	 
	 ?>

</body>
</html>