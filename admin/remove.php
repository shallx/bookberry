<?php

	include '../controllers/common.php';	
	auth_check();
	
	$id = $_GET['id'];

    $sql = "SELECT * FROM `books` WHERE book_id=" .$id;	
    $response = query_to_base($sql);
    
    if($response->num_rows > 0){
        $rows = $response->fetch_all(MYSQLI_ASSOC);
    }
    foreach($rows as $single){
        $book_title = $single['book_title'];
    }
    

	$sql = "DELETE FROM `books` WHERE book_id=" .$id;	
	$response = query_to_base($sql);
	
	if($response){
		$message = "Your publisehd book '" .$book_title . "' has successfully been deleted";
	}else{
		$message = "Failed to remove. Try again later";
	}
	
	$_SESSION['message'] = $message;
	
	header('location:index.php');
	
?>