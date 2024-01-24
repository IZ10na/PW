<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop - Log In</title>
    <link rel="stylesheet" href="Home.css">
    <style>
        body {
            background-image: url(qeni2.jpg);
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="lg">
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
            
            <div class="valid" style="border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 1); padding-left:1%;  padding-bottom:8px;">
                
                <!-- style="margin-left:15%; margin-top:10%; margin-bottom:10%;" -->

                    <center><h2 style="color: rgb(219, 140, 195); margin-right:50% ;">Log In</h2></center>

                    <form action="loginController.php" method="post">
                        <label>Username:</label>
                        <input type="text" name="username" id="username">
                        <div class="error-message" id="emailError"></div>

                        <label>Password:</label>
                        <input type="password" name="password" id="password">
                        <div class="error-message" id="passwordError"></div>

                        <button type="submit">Submit</button>
                    </form>

                    <?php include_once 'loginController.php'; ?>
 
            </div>
        </div>

        <footer>
            <div class="fundi" style="margin-top: 22%;">
                <p style="margin-left: 1%;">Copyright 2023 Paws and Claws Company.</p>
                <p style="margin-left: 26%;"> All rights reserved <img src="copyright.png" alt="copyright" style="width: 10px; height: 10px;"></p>
                <p style="margin-left: 26%;">Designed by: Elona Hyseni and Drin Avdiaj</p>
            </div>
        </footer>
    </body>
    </html>