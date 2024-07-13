
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
     margin-left:5%; 

}
.table_border,th,tr{
    border:2px  solid gray;
     /* width:1px; */   
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
                    <th> C_Date</th>
                    <th> Booking Time</th>
                    <th> People</th>
                    <th> Booking No</th>
                    <th> Accept</th>
                    </tr>

</thead>
<?php
include("connection.php");

if(!isset($_POST['cbtn']))
{
    $sql=mysqli_query($con,"SELECT * FROM reservation WHERE accept='accept'");

    while($row=mysqli_fetch_assoc($sql))
    {
        $cu_name=$row['c_name'];
        $cu_email=$row['c_email'];
        $cu_date=$row['c_date'];
        $cu_btime=$row['book_time'];
        $cu_sp=$row['s_people'];
        $cu_bno=$row['booking_no'];
        $cu_accept=$row['accept'];

        
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
   <th>'.$cu_accept.' </th>

   </tr>
   </thead>';
    
    
   ?><?php }             }


   ?></table>
</div>
   
   </form>   
    
</body>
</html>
