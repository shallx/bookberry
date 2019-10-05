<?php

auth_check();
$username = $_SESSION['username'];
$userID = $_SESSION['userID'];
	
$sql = "SELECT * FROM `books` WHERE user_id=" .$userID. " ORDER BY published DESC LIMIT 10";
$response = query_to_base($sql);

if ($response->num_rows > 0) {
	$rows = $response->fetch_all($resulttype = MYSQLI_ASSOC);	
}

?>