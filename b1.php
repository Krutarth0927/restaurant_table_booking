
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin-top:5px;
            margin-left:15%;
           
}
        
table{      
     
     font-size:24px;
     height:50%;
     width:70%;
     
}
  
.table_border,th,tr{
    border:2px  solid gray;
    text-align:center;
     /* width:1px; */   
}


        </style>
</head>
<body>
<form action="" method="Post">
    <div class="table">
        <table class="table_border" >
            <br><thead>
                <tr>
                    <th> Admin Name</th>
                    <th> Admin Password</th>
                    <th> Delete</th>
                    
                </tr>

</thead>
 
    <?php
include("connection.php");

if(!isset($_POST['adminbtn']))
{
    $sql=mysqli_query($con,"SELECT * FROM adminlogin");
    
    while($row=mysqli_fetch_assoc($sql)){
      $admin_name=$row['adminname'];
      $admin_pass=$row['password'];

echo '
 <thead>
 <tr>
    <th>'.$admin_name.'</th>
    <th>'.$admin_pass.'</th>
    <th><button type="submit" name="Delete" class="bdelete">Delete</button></th>
    
    </tr>
    </thead>';
   ?><?php }             }


?></table>

   </div>
   
</form>
</body>
</html>