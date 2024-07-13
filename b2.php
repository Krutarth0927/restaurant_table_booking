
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{      
     
     font-size:24px;
     height:100%;
     width:100%;
     /* border:1px solid black; */
     margin-left:5%; 

}
.table_border,tr,th{
    border:2px  solid  black;
     width:1px;   
     text-align:center;
}
td{
    border:2px  solid  black;
}


        </style>
</head>

<body>
    
<form action="" method="Post">
    <div class="table">
        <table class="table_border">
            <br><thead>
                <tr>
                    <th> Customer Name</th>
                    <th> Customer Email</th>
                    <th> C_Date</th>
                    <th> Booking Time</th>
                    <th> People</th>
                    <th> Booking No</th>
                    <th> Accept</th>
                    <th> Reject</th>
                    <th> Delete</th>
                </tr>

</thead>
<?php
include("connection.php");

if (!isset($_POST['cbtn'])) {
    $sql = mysqli_query($con, "SELECT * FROM reservation");

    while ($row = mysqli_fetch_assoc($sql)) {
        $cu_name = $row['c_name'];
        $cu_email = $row['c_email'];
        $cu_date = $row['c_date'];
        $cu_btime = $row['book_time'];
        $cu_sp = $row['s_people'];
        $cu_bno = $row['booking_no'];

        echo '<tr>
                <td>'.$cu_name.'</td>
                <td>'.$cu_email.'</td>
                <td>'.$cu_date.'</td>
                <td>'.$cu_btime.'</td>
                <td>'.$cu_sp.'</td>
                <td>'.$cu_bno.'</td>
                <td>
                    <form method="post" action="">
                        <input type="hidden" name="reservation_id" value="'.$cu_bno.'">
                        <button type="submit" name="Accept" class="bace">Accept</button>
                    </form>
                </td>
                <td>
                    <form method="post" action="">
                        <input type="hidden" name="reservation_id" value="'.$cu_bno.'">
                        <button type="submit" name="Reject" class="brej">Reject</button>
                    </form>
                </td>
                <td>
                    <form method="post" action="">
                        <input type="hidden" name="reservation_id" value="'.$cu_bno.'">
                        <button type="submit" name="Delete" class="bdele">Delete</button>
                    </form>
                </td>
            </tr>';
    }
}
?>

</div>
</body>
</html>

<?php
include("connection.php");
if (isset($_POST['Accept'])) {
    $reservation_id = $_POST['reservation_id'];
    $query = mysqli_query($con, "UPDATE reservation SET accept = 'accept' WHERE booking_no = '$reservation_id'");
    if ($query) {
        echo '<script>alert("Reservation accepted");</script>';
    }
}

if (isset($_POST['Reject'])) {
    $reservation_id = $_POST['reservation_id'];
    $query = mysqli_query($con, "UPDATE reservation SET accept = 'reject' WHERE booking_no = '$reservation_id'");
    if ($query) {
        echo '<script>alert("Reservation rejected");</script>';
    }
}

if (isset($_POST['Delete'])) {
    $reservation_id = $_POST['reservation_id'];
    $query = mysqli_query($con, "DELETE FROM reservation WHERE booking_no = '$reservation_id'");
    if ($query) {
        echo '<script>alert("Reservation deleted");</script>';
    }
}
?>


<!-- ?php
include("connection.php");

if(!isset($_POST['cbtn']))
{
    $sql=mysqli_query($con,"SELECT * FROM reservation");

    while($row=mysqli_fetch_assoc($sql))
    {
        $cu_name=$row['c_name'];
        $cu_email=$row['c_email'];
        $cu_date=$row['c_date'];
        $cu_btime=$row['book_time'];
        $cu_sp=$row['s_people'];
        $cu_bno=$row['booking_no'];

      
echo '
<thead>
<tr>
   <th>'.$cu_name.'</th>
   <th>'.$cu_email.'</th>
   <th>'.$cu_date.'</th>
   <th>'.$cu_email.'</th>
   <th>'.$cu_btime.'</th>
   <th>'.$cu_sp.'</th>
   <th>'.$cu_bno.'</th>
   <th>
      <button type="submit" name="Accept"  class="bace">Accept</button></th>
 
   <th><button type="submit" name="Reject" class="brej">Reject</button></th>
   <th><button type="submit" name="Delete" class="bdele">Delete</button></th>
   
   </tr>
   </thead>';

    
    }             }


   ?></table>
</div>
   
   </form>   
    
</body>
</html>
?php 
include("connection.php");
if(isset($_POST['Accept'])){
    // $row1=$_POST['Accept'];
    $query=$mysqli_query($con,"INSERT INTO reservation INTO (accept) VALUES('accept')");
    if($query){
        ?><script> alert('data insert');
        </script> ?php
    }
}
?> -->
