<?php require("nav.php");
require("connection.php");
// error_reporting(0);
if(isset($_POST['submit'])){
echo $name=$_POST['name'];
echo $email=$_POST['email'];
echo $msg=$_POST['msg'];
// INSERT INTO `contact_us`( `fullname1`, `fullemail`, `msg`) VALUES (''$name'','$email','$msg')
$query = mysqli_query($con, "INSERT INTO `con_us` (fullname, fullemail, msg) VALUES ('$name', '$email', '$msg')");

// $q=mysqli_query($con,"INSERT INTO `con_us`( `fullname1`, `fullemail`, `msg`) VALUES ('$name','$email','$msg')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact/style1.css">
    <title>Contact Us</title>
</head>
<style>
    h2{
        margin:10%;
    }
</style>
<body>
    <form action="" method="POST">
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
           
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <div class="text">
                            <h3>Address</h3>
                            <p>87 Sugar Camp Road,<br>BharatNagar,Bhavnagar<br>55060</p>
                        </div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>948-477-6059</p>
                        </div>
                        
                        <div class="text">
                        <h3>Email</h3>    
                            <p>bhattkrutarth897@gmail.com</p>
                        </div>
                    </div>

                    
                </div>
                <div class="contactForm">
                    <form>
                        <h2>Send Message</h2>
                            <div class="inputbox">
                            <label>Full Name</label>
                                <input type="text" name="name" required="required">
                               
                            </div>
                            <div class="inputbox">
                            <label>Email</label>
                                <input type="text" name="email" required="required">
                       
                            </div>
                            <div class="inputbox">
                            <label>Type Your Message......!</label>
                                <textarea name="msg"></textarea>
                              
                            </div>
                            <div class="inputbox">
                                <input type="submit" name="submit" value="Send">
                            </div>
                    </form>
                </div>

            </div>

        </div>

    </section>
    </form>
</body>
</html>