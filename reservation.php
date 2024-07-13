<!-- ?php require("nav.php"); ?> -->
<?php require("nav.php");?>
<style>
nav{
display: flex;
justify-content: space-between;
margin-top:-6%;
}
</style>

<?php
include("connection.php");
if(isset($_POST['insdata'])){
    $name = $_POST['inputname'];
    $email = $_POST['inputemail'];
    $date = $_POST['inputdate'];
    $time = $_POST['inputtime'];
    $select_per = $_POST["select"];
    $uniqid = uniqid('', true);
    $hashedid = md5($uniqid);
    $result = substr($hashedid, 0, 5);
    $data = 'null';

    echo $result;
    echo $name;
    echo $date;
    // if(empty($name) || empty($email) || empty($date) || empty($time) || empty($select_per))
    // {
    //     echo "all filled must be filled";
    // }
    // else{
    //     echo "form Submited successfully";
    // }
   
    // Using mysqli_query correctly
    $query = mysqli_query($con, "INSERT INTO `reservation` (c_name, c_email, c_date, book_time, s_people, booking_no, accept) VALUES ('$name', '$email', '$date', '$time', '$select_per', '$result', '$data')");

    
    if($query) {


        echo "<script>alert('Booking Successfully Your id is $result')</script>";
    } else {
        echo "<script>alert('Error in booking')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- <link rel="stylesheet" href="reservation.css">  -->
</head>
<style>
   *{
    /* border:2px solid red; */
   }
   .note h1{
        margin:5% 20% 0% 0%;
        color:red;
    }
body{
    font-family: 'Raleway',sans-serif;
    font-weight: 500;
    color: #fff;
    letter-spacing: 1px;
    
    /* padding:10px; */
    /* background-image: url(image/slider-02.jpg);*/
    /* margin: 0; */
    
    
}
    
.container{
    margin: 10%;
    /* margin:9%; */
    height: 600px;
    margin-top: 12px;
    
    overflow: hidden; 
    box-shadow: 10px 15px 20px rgba(0, 0, 0, .1);
    display: grid;
    grid-template-columns: 40% 65%;
    border: 2px solid black;
    background-image: linear-gradient(pink,blueviolet);
    gap:10px;
}
.container-time{
    background-color: rgba(0, 0, 0, .95);
    padding: 50px;
    outline: 3px dashed #998100;
    outline-offset: -30px;
    text-align: center;
}
.heading{
    font-size: 35px;
    text-transform: uppercase;

}
.heading-days{
    color: #998100;
    font-size: 30px;    
}.heading-phone{
    font-size: 20px;

}

.container-form {
    /* padding: 10px 0px; */
    margin: 0 auto;
    color: #000;
    margin-bottom: 5px;
}
.a2{
    background-color: rgba(255, 255, 255, 0.95);
    width: 15%;
    /* color: red; */
    color: #000;
    padding: 10px 10px;
    border: none;
    font-size: 18px;
    border-radius: 5em;
}
form{
    display: grid;
    grid-gap: 20px;
}
.form p{
    font-weight: 600;
}
.form-field{
    display: flex;
    justify-content: space-between;
   
    
}
input,select{
    pad: 10px 20px;
    text-align: center;
    background-color: transparent;
    color: #000;
}
input::placeholder,select::placeholder{
color: black;
font-size: large;

}
.btn{
    background-color: rgba(0, 0, 0, .95);
    color: #fff;
    padding: 10px 20px;
    border: none;
    font-size: 18px;
    border-radius: 90px;
    -webkit-border-radius:100px;
    -moz-border-radius:100px;
    -ms-border-radius:100px;
    -o-border-radius:100px;
    box-shadow: 7px 10px 17px rgba(0, 0, 0, .1);
    cursor: pointer;
    transition: all .3s;
    -webkit-transition: all .3s;
    -moz-transition: all  .3s;
    -ms-transition:all .3s;
    -o-transition: all .3s;

}

.btn:hover{

transform: scale(1.03);
-webkit-transform: scale(1.03);
-moz-transform: scale(1.03);
-ms-transform: scale(1.03);
-o-transform: scale(1.03);
box-shadow: 10px 12px 15px rgba(0, 0, 0, .3);
}

.admin .btn{
background-color: rgba(0, 0, 0, .95);
color: #fff;
padding: 10px 20px;
border: none;
font-size: 18px;
border-radius: 90px;
-webkit-border-radius:100px;
-moz-border-radius:100px;
-ms-border-radius:100px;
-o-border-radius:100px;
box-shadow: 7px 10px 17px rgba(0, 0, 0, .1);
cursor: pointer;
transition: all .3s;
-webkit-transition: all .3s;
-moz-transition: all  .3s;
-ms-transition:all .3s;
-o-transition: all .3s;
width:26rem;
margin-top:20px;
}

.admin .btn:hover{
    transform: scale(1.03);
    -webkit-transform: scale(1.03);
    -moz-transform: scale(1.03);
    -ms-transform: scale(1.03);
    -o-transform: scale(1.03);
    box-shadow: 10px 12px 15px rgba(0, 0, 0, .3);

}
.btn a{

    color: white;
text-decoration: none;
}


/* .admin .btn a{
    color: #fff;
}
.container .container-time{
        display:grid;
}
.container .container-form {
        display:grid;
}
.btn{
    display:grid;
  
} */
</style>

<body>
<!-- ?php require("nav.php");?> -->
<!-- <div class="con1">
<div class="nav">
        </div> -->
</div>

<script>

function validateForm(){

var user=document.getElementById('user').value;

var email=document.getElementById('email').value;
 var date=document.getElementById('date').value;
 var time=document.getElementById('time').value;
//  var #=document.getElementById('#').value;
if(user==="" || email==="" || date==="" || date==="" || time===""){
    alert("All fields must be filled");
    return false;
}

if(user.length<2 || user.length > 20){
    alert("Username must be more than 2 character and less than 20");
    return false;
}
if(!/^[a-zA-Z]+$/.test(user)){
    alert("only alphabet are allowed in username");
    return false;
}

            if(email=="")
            {
                alert("email must be fill out");
                return false;
            }
            if(!email.includes("@")){
                alert("Invalid email address");
                return false;
            }
        }
</script>
<style>
   
</style>
<label for="" class="note"><h1>*Note: Booking Number Must be Noted <?php error_reporting(0); echo $result;?></h1></label>
    <div class="container">
     
        <div class="container-time">
            <h2 class="heading">Time Open</h2>
            <h3 class="heading-days">Monday-Friday</h3>
            <p>7am - 11am (breakfast)</p>
            <p>11am - 10pm (lunch/dinner)</p>

            <h3 class="heading-days">Saturday and Sunday</h3>
            <p>9am - 11am (breakfast)</p>
            <p>11am - 10pm (lunch/dinner)</p>

            <hr>

            <h4 class="heading-phone">Call Us:9484776059</h4>

            <!-- <button class="btn2"> -->
                <a href="check.php" class="a2">Check Status</a>
            <!-- </button> -->

        </div>
        <div class="container-form">
             <form action="" method="post" onsubmit="return validateForm()">
                 <h2 class="heading heading-yellow">Reservation online</h2>

        <div class="form-field">
            <p>Your Name</p>
            <input type="text" name="inputname" placeholder="Your Name"  id="user">
        </div>

        
        <div class="form-field">
            <p>Your Email</p>
            <input type="email" placeholder="Your Email" name="inputemail"  id="email">
        </div>

        
        <div class="form-field">
            <p>Date</p>
            <input type="date" name="inputdate"  id="date" min="<?php echo date("Y-m-d");?>"required>
        </div>

        
        <div class="form-field">
            <p>Time</p>
            <input type="time" name="inputtime"   id="time">
        </div>

        
        <div class="form-field">
            <p>How Many People?</p>
            <select name="select" id="#" required="required" >
            
                <option value="1">1 person </option>
                <option value="2">2 person </option>
                <option value="3">3 person </option>
                <option value="4">4 person </option>
                <option value="5">5 person </option>
                <option value="6">6 person </option>
                <option value="7">7 person </option>
                <option value="8+">8+ person </option>
</select>
        </div>

        <button class="btn" name="insdata" value="submit">Submit</button>
       
        </form>
        <div class="admin">
        <button class="btn"><a href="admin login.php">Admin login</a></button>
        </div>
    
</div>
</div>
    
</body>
</html>