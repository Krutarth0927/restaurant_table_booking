<?php
require("connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatibale" content="IE=edge">
	<meta name="viewport" contant="widh=device-width,
	initial-scale=1.0">
	<title>ADMIN LOGIN FORM </title>
	<link rel="stylesheet" type="text/css" href="text/mycss.css">
	<link href='https://unpkg.com/boxicon@2.1.4/css/bocicons.min.css' rel='stylesheet'>
	
</head>
<body>

<script>

	function validateForm(){

		var aname=document.getElementById('aname').value;
 var apassword=document.getElementById('apassword').value;
	if(aname==="" || apassword===""){
    alert("All fields must be filled");
    return false;
}
	}
	</script>
	<div class="login-form">
		<form method="POST" onsubmit="return validateForm()">
			<h2>ADMIN LOGIN PANEL</h2>
			<div class="input-field">
				<input type="text" placeholder="Admin Name" name="AdminName" id="aname">
				
				<i class="fa-solid fa-user"></i>
			</div>
			<div class="input-field">
				<input type="password" placeholder="Password" name="AdminPassword" id="apassword">
			</div>
			
			<div  class="extra">
				
				<a href="email.php">Forgot password?</a>
				
			</div>
					<button type="submit" name="Signin" class="btn">Sign In</button>
				</div>
		</form>
	</div>	
			
		
	<?php	
		if(isset($_POST['Signin']))
		{
			$adname=$_POST['AdminName'];
			$adpass=$_POST['AdminPassword'];
			// echo $query;
			$query="SELECT * FROM `adminlogin` WHERE `adminname`='$adname' AND `password`='$adpass'";
			// print_r($query);
			$result=mysqli_query($con,$query);
			if(mysqli_num_rows($result)==1)
			{
				session_start();
				$_SESSION['AdminLoginId']=$_POST['AdminName'];
				header("location:admin panel.php");
			}
			else
			{
				echo "<script>alert('Incoorect Password')</script>";
			}
		}	

		?>
		

</body>


</html>
