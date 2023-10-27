<?php 
include 'config.php';
 


$username = $conn->real_escape_string($_POST['username']);
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if ($result === false) {
    die("Kueri gagal: " . $conn->error);
}

$cek = $result->num_rows;

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:main/index.php");
} else {
    header("location:index.php");
}

$conn->close();
?>


