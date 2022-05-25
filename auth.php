<?php
$dbh = mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($dbh,'dairy') or die(mysqli_error($dbh));
if(isset($_POST['eid'])){
   $eid=$_POST['eid'];
   $ename=$_POST['ename'];
   
   $sql="select * from employee where eid='".$eid."' AND ename='".$ename."' 
   limit 1";
   $result=mysqli_query($dbh,$sql);
   if(mysqli_num_rows($result)==1){
     header('Location:index.php');
	 exit();
   }
   else{
   echo "incorrect information";
   exit();
   }
}
?>
<html>
  <head>
    <title>login page</title>
	<link rel="stylesheet" type="text/css"
	 href="login.css">
	 <link rel="stylesheet" type="text/css"
	 href="home.css">
  </head>
  <body>
  <header id="main-header">
	  <div class="container">
	  <h1>DAIRY MANAGEMENT SYSTEM</h1>
	  </div>	
	</header>
	
	<div class="container">
    <div class="box-1">
    <h1>Welcome!!!</h1>
	<hr>
	 <form class="my-form" method="POST" action="#">
	 <div>
	 <label>ID:</label>
	    <input type="number" name="eid" placeholder="Enter id">
	  </div>
	   <br>
	  <div>
	  <label>NAME:</label>
	    <input type="text" name="ename" placeholder="Enter name">
	  </div>
	  <br>
	  <input class="button" type="submit" name="submit" value="LOGIN">
	 </form>
      <a href="employeereg.php">EMPLOYEE REGISTRATION</a>
     </div>
  </body>
  </html>