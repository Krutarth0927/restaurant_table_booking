<?php include("nav.php"); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="check.css">   
    <link href='https://unpkg.com/boxicon@2.1.4/css/bocicons.min.css' rel='stylesheet'>
	
    <title>Check status</title>
    <style>
        .h1{
            margin-left:-100%;
        }
        table{
          
            border-radius:4px;
            color:black;
            margin-left:-1%;
            margin-right:20%;
            border-radius:5px;
            width: 10%;
        }
        .nav{
               margin-top:-46%;
               margin-right:70%;
        }
       .check-status{
    width: 360px;   
   
    background: transparent;
        border:2px solid rgba(255, 255, 255,.2);
        backdrop-filter: blur(20px);
        box-shadow:0 0 10px rgba(0,0,0, .2);
        color:#fff;	
        border-radius:10px;
        padding:10%;
        display: flex;
        justify-content:center;
        flex-direction:column;
        /* margin-right:50%; */
        transform:translate(-120%);
        margin-top:35%;
        margin-left:-25%;
        /* margin-right:5%; */
        
}

.check-status1{
        width: 360px;                               
        color:#fff;	
        background: transparent;
        padding:10%;
        display: flex;
        justify-content:center;
        flex-direction:column;
        /* margin-right:50%; */
        transform:translate(-120%);
        font-size:20px;
        margin-left:-62%;
        
        /* margin-right:5%; */
        
}
    </style>
</head>
<body>


    <div class="nav"><?php include("nav.php"); ?></div>

    <form action="" method="Post">
        
    <div class="check-status">
        <form method="post">
        <h2>Check Status</h2>
        <div class="input-field">
            <input type="text" placeholder="BookingNo" name="BookingNo">
            <i class="fa-solid fa-user"></i>
        </div>
	    <button type="submit" name="Search" class="btn">Search</button>
        </div>
<!-- 				
<div class="table"> -->
<?php
include("connection.php");
if(isset($_POST['Search'])){
    
    echo $BookingNo1=$_POST['BookingNo'];
    $sql=mysqli_query($con,"SELECT * FROM reservation WHERE booking_no='$BookingNo1'");
    while($row=mysqli_fetch_assoc($sql)){
    $name=$row['c_name'];
    $email=$row['c_email'];
    $date=$row['c_date'];
    $book_time=$row['book_time'];
    $people=$row['s_people'];
    $ac=$row['accept']
     ?>
    

    <div class="check-status1">
<table border="1px solid white" align="center">
      <br>  <thead>
        <tr>
            <!-- <th>no</th> -->
            <th>c_name</th>
            <th>c_email</th>
            <th>c_date</th>
            <th>book_time</th>
            <th>s_people</th>
            <th>Status</th>
           
        </tr>
        </thead>
    
        <?php
echo '
 <thead>
 <tr>
     <th>'.$name.'</th>
     <th>'.$email.'</th>
     <th>'.$date.'</th>
     <th>'.$book_time.'</th>
     <th>'.$people.'</th>
     <th>'.$ac.'</th>
      </tr>
 </thead>';
 exit();
?></table><?php    }
}
?>

</form>
</div>
</body>
</html>