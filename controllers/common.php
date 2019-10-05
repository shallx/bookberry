<?php
session_start();
$base_url = 'http://localhost/rahi/';

function auth_check(){
	if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']){
		return;
	}else{
		header('location:login.php');
	}
}

function query_to_base($query){
	//Mysql connection
	$link = mysqli_connect("localhost", "id1881724_rahi", "kuttabilai", "id1881724_bookstore");

	if (!$link) {
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		exit;
	}
	
	$result = $link->query($query);

	$link->close();
	return $result;
}

function get_user_name($id){
	
	$sql = 'SELECT * FROM `user` WHERE user_id ='.$id;
	$response = query_to_base($sql);
	
	if ($response->num_rows > 0) {
		$row = $response->fetch_assoc();
		return $row['user_name'];
	}else{
		return '';
	}
	
}

function validate_article($article){
		
	$validated = true;
	
	if(strlen($article['title']) < 10){
		$message = "Title Length Must Be Greater Then 10";
		$validated = false;
	}else if(strlen($article['details'])< 50){
		$message = "Article Details Must Be Greater Then 50";
		$validated = false;
	}		
	return $validated;
}

function get_book_list($id){
	$sql = "SELECT * FROM `books` WHERE book_id=".$id;
	$response = query_to_base($sql);
	
	if ($response->num_rows > 0) {
		$row = $response->fetch_assoc();		
		return $row;
	}else{
		return [];
	}
}

?>