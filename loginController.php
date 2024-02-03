<?php

include_once 'databaseConnection.php'; 

class UserRepository {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUserByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM user WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

$dbConnection = new DatabaseConenction();
$db = $dbConnection->startConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
    $password = isset($_POST["password"]) ? trim($_POST["password"]) : "";

    $errors = array(); 

    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (!empty($errors)) {
        header("Location: login.html?error=" . urlencode(implode("<br>", $errors)));
        exit();
    }

    $userRepository = new UserRepository($db);
    $user = $userRepository->getUserByUsername($username);

    //login per admin 1
    if ($username === "IZ1" && $password === "drin123") {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }

    //login per admin 2
    if ($username === "ona" && $password === "elona123") {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }


    if ($user) {
        $storedPassword = $user["password"] ?? "";
    
        
        if ($password === $storedPassword) {
            header("Location: home.html");
            echo "<script> alert('User has logged in successfully!'); </script>";
            exit();
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }
    

    $db = null;
}
?>
