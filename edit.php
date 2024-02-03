<?php
$userId = $_GET['id'];
include_once 'userRepository.php';

$userRepository = new UserRepository();
$user = $userRepository->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="home.css">
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
    <h2 style="color:ivory; margin-left:5%; background-color: rgb(0, 100, 100); border-radius: 6px; width:7%; padding-left:10px">Edit User</h2>
    <form action="" method="post" style="margin-left:1%; width:22%;">
        <input type="text" name="id" value="<?= $user['id'] ?>" readonly> <br> <br>
        <input type="text" name="name" value="<?= $user['name'] ?>"> <br> <br>
        <input type="text" name="surname" value="<?= $user['surname'] ?>"> <br> <br>
        <input type="text" name="email" value="<?= $user['email'] ?>"> <br> <br>
        <input type="text" name="username" value="<?= $user['username'] ?>"> <br> <br>
        <input type="text" name="password" value="<?= $user['password'] ?>"> <br> <br>

        <input type="submit" name="editBtn" value="Save"> <br> <br>
    </form>

    <footer>
        <div class="fundi" style="margin-top: 3%;">
            <p style="margin-left: 1%;">Copyright 2023 Paws and Claws Company.</p>
            <p style="margin-left: 26%;"> All rights reserved <img src="copyright.png" alt="copyright" style="width: 10px; height: 10px;"></p>
            <p style="margin-left: 26%;">Designed by: Elona Hyseni and Drin Avdiaj</p>
        </div>
    </footer>
</body>
</html>

<?php
if (isset($_POST['editBtn'])) {
    $id = $user['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userRepository->updateUser($id, $name, $surname, $email, $username, $password);
    header("location: dashboard.php");
}
?>
