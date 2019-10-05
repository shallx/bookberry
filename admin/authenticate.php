<?php
include '../controllers/common.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = 'SELECT * FROM `user` WHERE EMAIL="' .$email. '"';
$response = query_to_base($sql);
if($response->num_rows < 1) {
    $_SESSION['form-error'] = "There is no such email registered";
    header('location:login.php');
}
else if($response->num_rows > 0) {
	$row = $response->fetch_assoc();
	if($pass == $row['password']){
		$_SESSION['loggedIn'] = true;
		$_SESSION['userID'] = $row['user_id'];
		$_SESSION['username'] = $row['user_name'];
		header('location:index.php');
	}else{
        $_SESSION['form-error'] = "Wrong Password";
		header('location:login.php');
	}
}
else{
    $_SESSION['form-error'] = "Something went wrong";
	header('location:login.php');
}
?>