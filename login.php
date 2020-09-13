<!DOCTYPE html>
<html>
<head>
	<title>transparent login form</title>
	<link rel="stylesheet" type="text/css" href="loginform.css">
</head>
<body>

<div class="login-box">

	<img src="loginicon.png" class="loginicon">

	<h1>login here</h1>

	<form action="" method="POST">
<label>username</label>
	<input type="text" name="username">

	<label>password</label>
	<input type="password" name="password">
    <input type="submit" name="submit" value="Login">

    </form>
    </div>




<?php
session_start();
include("connection.php");
?>


<?php
if(isset($_POST['submit']))
{

    $user = $_POST['username'];
    $pwd = $_POST['password'];
    $query = "SELECT * FROM STUDENT WHERE  username='$user' && password='$pwd'";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    if($total == 1)
    {
        $_SESSION['username']=$user;
        header('location:home.php');
    }
    else
    {
        echo "Login Failed";
    }
}
?>


</body>
</html>