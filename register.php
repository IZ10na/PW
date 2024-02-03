<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop - Sign Up</title>
    <link rel="stylesheet" href="Home.css">
    <style>
        body{background-image: url(pets.jpg);
            background-size: cover;
            background-position: center;}
    </style>
</head>
<body>
    <div class="signup">
    <div class="Services">
        <div class="headerContainer"> 
            <div class="tab">
                <h2><img src="shop.png" alt="store" style="width: 55px; height: 45px;"> Pet Shop</h2>
                <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="services.html">About</a></li>
                    <li><a href="pets.html">Pets</a></li>
                </ul>
                <button class="btn" style="width: 227px;"><img src="telephone.png" alt="phone" style="width: 35px; height: 35px;" >(+383) 49-381-881</button>
             </div>
        </div>
        <div class="valid">
            <center><h2 style="color: rgb(139, 78, 37); margin-right: 30%;">Sign Up Below</h2></center>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        
        <input type="text" name="name" placeholder="name..."> <br><br>
        <input type="text" name="surname" placeholder="surname..."> <br><br>
        <input type="text" name="email" placeholder="email..."> <br><br>
        <input type="text" name="username" placeholder="username..."><br><br>
        <input type="text" name="password" placeholder="password..."><br><br>
        

        <input type="submit" name="registerBtn" value="register"><br><br>
    </form>

   <?php include_once 'registerController.php';?>
    
    </div>
      </div>
      
    <footer>
        <div class="fundi">
            <p style="margin-left: 1%;">Copyright 2023 Paws and Claws Company.</p>
            <p style="margin-left: 25%;"> All rights reserved <img src="copyright.png" alt="copyright" style="width: 10px; height: 10px;"></p>
            <p style="margin-left: 25%;">Designed by: Elona Hyseni and Drin Avdiaj</p>
        </div>
    </footer>
</body>
</html>