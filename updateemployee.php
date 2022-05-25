<?php
 include ("connection.php");
 error_reporting(0);
?>


<html>
<head><title>UPDATE EMPLOYEE DETAILS</title>
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
	  
	  
<form class="my-form" method="POST" action="#">
	 <div>
	 EMPLOYEE ID:<input type="text" name="eid" placeholder="Enter id">
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
if(isset($_POST['submit']))
{
$eid = $_POST['eid'];
$ename = $_POST['ename'];
$eaddr = $_POST['eaddr'];
$eph = $_POST['eph'];
$eacc = $_POST['eacc'];
$esalary = $_POST['esalary'];
$sql="update employee set esalary='$salary',ename='$ename',eaddr='$eaddr',eph='$eph',eacc='$eacc' where eid='$eid'";
$ret=mysqli_query($conn,$sql);
echo $ret;
if(!$ret)
{
  die('could not update data:');
}
echo "updated successfully\n";
//header("refresh:1;url=employee.php");
mysqli_close($conn);
}

?>
</body>
</html>