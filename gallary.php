<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Gallary</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
.nav{
    border:5px solid transparent;
    
}
h1{
    font-weight: normal;
    font-size: 45px;
    position: relative;
    margin: 80px 0;
    text-align: center;
    font-style: bold;
    margin-top: 150px;
}
h1::before{
    content: '';
    position: absolute;
    width: 100px;
    height: 3px;
    background-color: crimson;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    animation: animate 4s linear infinite;
}

@keyframes animate{
    0%{
        width: 100px;
    }
    50%{
        width: 250px;
    }
    100%{
        width: 100px;
    }
}

.photo-gallery{
    width: 90%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(4,1fr);
    grid-gap: 20px;
}
.pic{
    position: relative;
    height: 230px;
    border-radius: 10px;
    box-shadow: 3px 3px 5px lightgray;
    cursor: pointer;
}

.pic img{
width: 100%;
height: 100%;
border-radius: 10px;
}

.pic::before{
    content: "FOOD GALLERY";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color:white;
    font-size: 25px;
    font-weight:bold;
    width: 100%;
    margin-top: -100px;
    opacity: 0;
    transition: .3s;
    transition-delay: .2s;
    text-align: center;
    z-index: 999;
}

.pic:after{

    content: '';
    position: absolute;
    width: 100%;
    bottom: 0;
    left: 0;
    border-radius: 10px;
    height: 0;
    background-color: rgba(0, 0, 0, .4);
    transition: .3s;
}
.pic:hover::after{
    height: 100%;
}
.pic:hover::before{
    margin-top: 0;
    opacity: 1;
}
</style>
<body>
    <div class="nav">
    <?php require("nav.php"); ?>
    </div>
    <h1> Food Gallery</h1>

    <div class="photo-gallery">
        <div class="pic food1">
            <img src="gallary/1pic.jpg">
        </div>
        <div class="pic food2">
            <img src="gallary/2pic.jpg">
        </div>
        <div class="pic food3">
            <img src="gallary/3pic.jpg">
        </div>
        <div class="pic food4">
            <img src="gallary/4pic.jpg">
        </div>
        <div class="pic food5">
            <img src="gallary/5pic.jpg">
        </div>
        <div class="pic food6">
            <img src="gallary/6pic.jpg">
        </div>
        <div class="pic food1">
            <img src="gallary/7pic.png">
        </div>
        <div class="pic food2">
            <img src="gallary/8.jpg">
        </div>
        <div class="pic food3">
            <img src="gallary/9.jpg">
        </div>
        <div class="pic food4">
            <img src="gallary/10.jpg">
        </div>
        <div class="pic food5">
            <img src="gallary/11.jpg">
        </div>
        <div class="pic food6">
            <img src="gallary/12.jpg">
        </div>
        <div class="pic food1">
            <img src="gallary/13.jpg">
        </div>
        <div class="pic food2">
            <img src="gallary/14.jpg">
        </div>
        <div class="pic food3">
            <img src="gallary/15.jpg">
        </div>
        <div class="pic food4">
            <img src="gallary/16.jpg">
        </div>
        <div class="pic food5">
            <img src="gallary/5pic.jpg">
        </div>
        <div class="pic food6">
            <img src="gallary/6pic.jpg">
        </div>
        <div class="pic food1">
            <img src="gallary/1pic.jpg">
        </div>
        <div class="pic food2">
            <img src="gallary/2pic.jpg">
        </div>
    </div>
    
</body>
</html>