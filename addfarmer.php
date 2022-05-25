<?php
 include ("connection.php");
 error_reporting(0);
?>

<html>
<head>
<title>ADD FARMER DETAILS</title>
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
	 <a href="farmer.php" class="button">Back To Farmers</a>
	<div class="box-1">
	<div class="heading-1">
	  <h1>ENTER FARMER DETAILS</h1>
	  </div>
	  
<form class="my-form" method="GET" action="#" >
	 <div>
	 FARMER ID:<input type="text" name="fid" placeholder="Enter id">
	  </div>
	   <br>
	  <div>
	  FARMER NAME:<input type="text" name="fname" placeholder="Enter name">
	  </div>
	  <br>
	  <div>
	  ADDRESS:
	    <input type="textArea" name="faddr" placeholder="Enter address">
	  </div>
	  <br>
	  <div>
	  PHONE NUMBER:
	    <input type="text" name="fph" placeholder="Enter phone no.">
	  </div>
	  <br>
	   <div>
	  FARMER ACCOUNT:
	    <input type="text" name="facc" placeholder="Enter account no.">
	  </div>
	  <br>
	  <input class="button" type="submit" name="submit" value="submit">
	 </form>
</div>
    <?php
	  
	    if($_GET['submit'])
		{
		  $fid = $_GET['fid'];
		  $fname = $_GET['fname'];
		  $faddr = $_GET['faddr'];
		  $fph = $_GET['fph']; 
		  $facc = $_GET['facc'];
		  
		  if($fid!="" && $fname!="" && $faddr!="" && $fph!="" && $facc!="" )
		  {
		    $sql = "INSERT INTO farmer VALUES('$fid','$fname','$faddr','$fph','$facc')";
			$data = mysqli_query($conn,$sql);
			
			if($data)
			{
			  echo "Inserted Successfully";
              header("refresh:1;url=farmer.php");
			}
			else
			{
			  echo "not inserted";
			}
		  }}
		  
	 
	 ?>


</body>
</html>