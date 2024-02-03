<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Home.css">
    <style>
        body {
            background-color: rgb(22, 146, 189);
        }
    </style>
</head>
<body>
    <div class="headerContainer">
            <div class="tab">
                <h2><img src="shop.png" alt="store" style="width: 55px; height: 45px;"> Pet Shop</h2>
                <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="services.html">Services</a></a></li>
                    <li><a href="services.html">About</a></li>
                    <li><a href="pets.html">Pets</a></li>
                </ul>
                <button class="btn" style="width: 227px;"><img src="telephone.png" alt="phone" style="width: 35px; height: 35px;" >(+383) 49-381-881</button> 
            </div>
        </div>
        <h1 style="color:ivory; margin-left:14%; background-color: rgb(0, 100, 100); border-radius: 10px; width:18%; padding-left:7px" >Admin Dashboard</h1>

    <table style="box-shadow: 30px 45px 60px;margin-top: 2%; font-size:20px;" border="1" >
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>SURNAME</th>
                 <th>EMAIL</th>
                 <th>USERNAME</th>
                 <th>PASSWORD</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             
             <?php
             include_once 'userRepository.php';

             $userRepository = new UserRepository();
             $users = $userRepository->getAllUsers();

             foreach ($users as $user) {
             echo "
                <tr>
                    <td>{$user['id']}</td>
                    <td>{$user['name']}</td>
                    <td>{$user['surname']}</td>
                    <td>{$user['email']}</td>
                    <td>{$user['username']}</td>
                    <td>{$user['password']}</td>
                    <td><a href='edit.php?id={$user['id']}'>Edit</a></td>
                    <td><a href='delete.php?id={$user['id']}'>Delete</a></td>
                </tr>
                ";
             }
            ?>

    </table>
    <footer>
            <div class="fundi" style="margin-top: 10%;">
                <p style="margin-left: 1%;">Copyright 2023 Paws and Claws Company.</p>
                <p style="margin-left: 26%;"> All rights reserved <img src="copyright.png" alt="copyright" style="width: 10px; height: 10px;"></p>
                <p style="margin-left: 26%;">Designed by: Elona Hyseni and Drin Avdiaj</p>
            </div>
        </footer>
</body>
</html>