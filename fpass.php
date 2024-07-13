

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fstyle.css">
    <title>Forgot password</title>
</head>
<body>
<script>

        function validateForm(){
        var aname=document.getElementById('aname').value;
		var npass=document.getElementById('npass').value;
		var cpass=document.getElementById('cpass').value;

		// var npass=/^(?=.*[a-z])(?=.*[A-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
		// if(npass.text(npass)){
		// 	return true;
		// }
		// else{
		// 	alert("Password must be contain at least 8 char");
		// 	return flase;
		// }

		
	
        if(aname=="" || npass=="" || cpass==""){
            alert(" All fields must be filled");
    return false;
        }
	
		
if(aname.length<2 || aname.length > 20){
    alert("Adminame must be more than 2 character and less than 20");
    return false;
}
if(!/^[a-zA-Z]+$/.test(aname)){
    alert("only alphabet valid");
    return false;
}

if(npass.length<8){
			alert("Password must be contain at least 8 char");
			return false;
		}
		 if(!npass.match(/[A-Z]+/)||!npass.match(/[a-z]+/)||!napss.match(/[0-9]+/)||!npass.match(/[!@#$%^&*()-_=+]+/)){
			alert("Password must be contain at least use in Special character and  symbol and  character");
			return false;
		}
		// return true;

    }
        </script>
<div class="forgot-pass">
		<form method="POST" onsubmit="return validateForm()">
			<h2>Forgotten Password</h2>
			<div class="input-field">
				<input type="text" placeholder="Admin Name" name="AdminName" id="aname">
				
				<i class="fa-solid fa-user"></i>
			</div>
			<div class="input-field">
				<input type="password" placeholder="New Password" name="NewPassword" id="npass">
			</div>
			
            <div class="input-field">
				<input type="password" placeholder="Confirm Password" name="ConfirmPassword"  id="cpass">
			</div>
			
					<button class="fbtn" name="fbtn">Register</a></button>
				</div>
		</form>
	</div>	
    
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['fbtn'])){

    $uppass = $_POST['NewPassword'];
	$cmpass=$_POST['ConfirmPassword'];
	if($uppass != $cmpass){
		echo 'not match';
	}
else{
	$query = mysqli_query($con, "UPDATE adminlogin SET password='$uppass'");
	if($query){
        echo "updated";
		header('location:admin login.php');
    }
}
   
}
?>

