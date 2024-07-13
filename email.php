<?php

session_start();
include('connection.php');

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
// require_once('email.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 1: Collect the email value
    $email = $_POST["email"];
$sql = mysqli_query($con,"SELECT * FROM adminlogin WHERE email = '$email'");


// Step 4: If the email is found in the database, redirect to the next page
if ($sql->num_rows > 0) {
    // Email found, redirect to the next page
    header("Location: fpass.php");
    exit();
} else {
    echo "Email not found in the database";
    // You may want to add additional handling, such as displaying an error message.
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>email</title>
    <style>
* {
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Poppins",sans-serif;
    }
    
    body {
    display:flex;
    justify-content: center;
    align-items:center;
    min-height:100vh;
    /* background-image:linear-gradient(to right,purple,royalblue); */
    background-image: url('text/1.jpg');
    /*background-image: url('i2.jpg');*/
    background-size:cover;
    background-position:center;
    }
.email_ve{
    width:420px;
    background: transparent;
    border:2px solid rgba(255, 255, 255,.2);
    backdrop-filter: blur(20px);
    box-shadow:0 0 10px rgba(0,0,0, .2);
    color:#000;	
    border-radius:10px;
    padding:30px 40px;
    margin-bottom:10%;
    
}

.email_ve h2{
    font-size:26px;
    text-align: center;
}


.email_ve .input-field{
   width:100%;
   height:50px;
   margin:30px 0;
}


.email_ve input{
    width:100%;
    height:100%;
    background:transparent;
    border:none;
    outline:none;
    border:2px solid rgba( 255, 255, 255, .2);
    border-radius:40px;
    font-size:16px;
    color:#000;
    padding: 20px 45px 20px 20px;
    }
     
    .input-field  input::placeholder {
    color:#000;
    }

.email_ve .vbtn{
    width:100%;
            height:45px;
            background:#fff;
            border:none;
            outline:none;
            border-radius:40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor:pointer;
            font-size:16px;
            color: #333
            font-weight=600;
}


        </style>
</head>
<body>
    <script>

        function validateForm(){
        var email=document.getElementById('email').value;

        if(email==""){
            alert(" field is Complete");
    return false;
        }
    }
        </script>
    
<div class="email_ve">
		<form method="POST" onsubmit="return validateForm()">
			<h2>Email Verify</h2>
			
			<div class="input-field">
				<input type="email" placeholder="Email" name="email" id="email" >
			</div>
			
			
					<button class="vbtn" name="vbtn">Submit</button>
				</div>
		</form>
	</div>	
    
    
</body>
</html>