
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
<a href="farmer.php" class="button">Back To farmer</a>
<div class="box-1">
<div class="heading-1">
	<h1>ENTER EMPLOYEE DETAILS</h1>
	</div>

    <form class="my-form" method="GET" action="#">
	 <div>
	 FARMER ID:<input type="number" name="fid" placeholder="Enter id">
	  </div>
	   <br>
	   <input class="button" type="submit" name="submit" value="submit">
	 </form> 

 <?php
 
$sql="DELETE FROM farmer WHERE fid='$_GET[fid]'";
if(mysqli_query($conn,$sql)){
	echo "deleted successfully";
header("refresh:1;url=farmer.php");}
else
echo"not deleted";
?>
</body>
</html>
