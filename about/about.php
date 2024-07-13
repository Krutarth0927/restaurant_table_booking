<?php include("../nav.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <!-- <link rel="stylesheet" href="../about.css"> -->
    <title>about</title>
</head>
<style>
 body{
    margin: 0;
   
    padding: 0;
    /* box-sizing: border-box; */
    font-family: "Baloo 2",cursive;
    border: 1px solid transparent;

    /* background-color: red; */
}
    .container{
    margin-top:15%;
    margin:15%;
    display: flex;
    height: 600px;
    align-items: center;
    justify-content: center;
    /* margin: 10% 20%; */
    padding: 40px 47px;
    box-shadow: 10px 10px 18px -8px #aaaaaa, -10px -10px 24px #ffffff;
    width: 1000px;
    border-radius: 20px;
}

.container img{
    height: 100%;
    width: auto;
    border-radius: 20px;
}

.about_details{
    margin: 0 45px;
}

.about_details span{
    color: red;
}

.about_details h2{
    font-family: "Potta One";
    font-weight: 100;
    font-size: 26px;
    letter-spacing: 1px;
    margin-bottom: 20px;
}
.about_details p{
    color: gray;
    font-size: 15px;
}

.btn{
    margin: 15px 0;
    padding: 8px 20px;
    background-color: transparent;
    border-radius: 10px;
    border: 1px solid red;
    letter-spacing: 1px;
    color: #373737;

}
</style>
<!-- <style>

body{
    background-color: #e8f3e8;
    margin: 10%;
}

.container{
    
    display: flex;
    height: 600px;
    align-items: center;
    justify-content: center;
    margin: 4rem 18rem;
    padding: 40px 47px;
    box-shadow: 10px 10px 18px -8px #aaaaaa, -10px -10px 24px #ffffff;
    width: 1000px;
    border-radius: 20px;
}

.container img{
    height: 100%;
    width: auto;
    border-radius: 20px;
}

.about_details{
    margin: 0 45px;
}

.about_details span{
    color: red;
}

.about_details h2{
    font-family: "Potta One";
    font-weight: 100;
    font-size: 26px;
    letter-spacing: 1px;
    margin-bottom: 20px;
}
.about_details p{
    color: gray;
    font-size: 15px;
}

.btn{
    margin: 15px 0;
    padding: 8px 20px;
    background-color: transparent;
    border-radius: 10px;
    border: 1px solid red;
    letter-spacing: 1px;
    color: #373737;

}
</style> -->
<body>

    <div class="container">
        <img src="5.JPG" alt="food" >
    <div class="about_details">
        <span>About our Restaurant</span>
        <h2> We provide Good Quality Food To Your Family!</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Accusumus at doloretus reprehender it?</p>
            <br>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Possimus enim architecto quatur,nostrum et.</p>
            <button class="btn"> Learn More</button>
    </div>

    </div>
    
</body>
</html>