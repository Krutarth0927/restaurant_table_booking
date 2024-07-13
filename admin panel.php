
<?php
require("connection.php");
?>
<?php
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
    header("location: admin login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="card.css">
    <style>
        body{
            margin:0px;
        }
   div.header{
        font-family:poppins;
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:0px 60px;
        background-color:grey;
    }
    div.header button{
        background-color:#f0f0f0;
        font-size:16px;
        font-weight:550;
        padding:8px 12px;
        border:2px solid black;
        border-radius:5px;
    }
    .main{
      
flex-flow: row wrap;
     margin:10%;
     margin-Top:2%;
        display: flex;

       
    }

    </style>

</head>
<body>
    <div class="header">
    <h1>Welcom to Admin Panel - <?php echo $_SESSION['AdminLoginId']?></h1>
    <form method="POST">
    <button name="Logout">log out</button>
    </form>
</div>
<?php
if(isset($_POST['Logout']))
{
    session_unset();
    // sesstion_destory();
    header("location:main.html");
}

?>
<div class="main">
<div class="row m-auto">
    <div class="col-lg-3 col-md-6">
    <div class="panel-card bg-primary-2">
        <div class="panel-card-header bg-primary-2 text-white">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class="huge">
                    <?php
                     $query=mysqli_query($con,"SELECT * FROM `adminlogin`");
                    //  echo "count($query)";
                     $num=mysqli_num_rows($query);
                     echo "$num";
                    
                     ?>
                     </div>

                    <div> Admin </div>
                </div>
                <div class="col text-right mt-0-7">
                    <i class="far fa-user fa-4x text-white icon"></i>
                </div>
            </div>
        </div>
        <div class="panel-card-footer bg-primary-dark cl-white text-center">
            <a href="b1.php" name="adminbtn">
                <span>View details</span>
                <span><i class="fa fa-arrow-circle-right"></i></span>
</a>
</div>
</div>
</div>
</div>


<div class="row m-auto">
    <div class="col-lg-3 col-md-6">
    <div class="panel-card bg-primary-4">
        <div class="panel-card-header bg-primary-4 text-white">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class="huge">
                    <?php
                     $query=mysqli_query($con,"SELECT * FROM `reservation`");
                    //  echo "count($query)";
                     $num=mysqli_num_rows($query);
                     echo "$num";
                    
                     ?>
                    </div>
                    <div> All Booking</div>
                </div>
                <div class="col text-right mt-0-7">
                    <i class="far fa-user fa-4x text-white icon"></i>
                </div>
            </div>
        </div>
        <div class="panel-card-footer bg-primary-dark cl-white text-center">
            <a href="b2.php" name="cbtn">
                <span>View details</span>
                <span><i class="fa fa-arrow-circle-right"></i></span>
</a>
</div>
</div>
</div>
</div>

<div class="row m-auto">
    <div class="col-lg-3 col-md-6">
    <div class="panel-card bg-primary-5" >
        <div class="panel-card-header bg-primary-5 text-white">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class="huge">
                    <?php
                     $query=mysqli_query($con,"SELECT * FROM `reservation` where accept='accept'");
                    //  echo "count($query)";
                     $num=mysqli_num_rows($query);
                     echo "$num";
                    
                     ?>
                    </div>
                    <div> Accept Booking</div>
                </div>
                <div class="col text-right mt-0-7">
                    <i class="far fa-user fa-4x text-white icon"></i>
                </div>
            </div>
        </div>
        <div class="panel-card-footer bg-primary-dark cl-white text-center">
            <a href="b3.php">
                <span>View details</span>
                <span><i class="fa fa-arrow-circle-right"></i></span>
</a>
</div>
</div>
</div>
</div>
<div class="row m-auto" >
    <div class="col-lg-3 col-md-6" >
    <div class="panel-card bg-primary-3" >
        <div class="panel-card-header bg-primary-3 text-white"style="background-color:blue" >
            <div class="row d-flex justify-content-center" >
                <div class="col" >
                    <div class="huge">
                    <?php
                     $query=mysqli_query($con,"SELECT * FROM `reservation` where accept='reject'");
                    //  echo "count($query)";
                     $num=mysqli_num_rows($query);
                     echo "$num";
                    
                     ?>
                    </div>
                    <div> Reject Booking</div>
                </div>
                <div class="col text-right mt-0-7">
                    <i class="far fa-user fa-4x text-white icon"></i>
                </div>
            </div>
        </div>
        <div class="panel-card-footer bg-primary-dark cl-white text-center">
            <a href="b4.php">
                <span>View details</span>
                <span><i class="fa fa-arrow-circle-right"></i></span>
</a>
</div>
</div>
</div>
</div>




</body>
</html>