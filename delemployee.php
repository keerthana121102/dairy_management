
<?php
 include ("connection.php");
 error_reporting(0);
 ?>
 <html>
 <head>
 <title>delete employee details</title>  
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
	   <input class="button" type="submit" name="submit" value="submit">
	 </form> 

<?php
$sql="DELETE FROM employee WHERE eid=22";
$data=mysqli_query($conn,$sql);
echo $data;
if($data)
{	
//	echo $data;
echo "deleted successfully";
//header("refresh:1;url=employee.php");
}
else
echo "not deleted";
?>
</body>
</html>
