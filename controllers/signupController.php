<?php
	if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']){
		header('location:index.php');;
	}
	
	if(isset($_POST) && count($_POST) > 0){		
				
		$validated = true;
		
		if(strlen($_POST['password']) > 6){
			if($_POST['password'] != $_POST['confirm-password']){
				$message = "Password Does not match!!";
				$validated = false;
			}
		}else{
			$message = "Password Must Be Greater than 6 character.";
			$validated = false;
		}
		
		if(!validate_email($_POST['email'])){
			$message = "Email Has Already been registered!!";
			$validated = false;
		}
		
		if($validated){
			
			$target_dir = 'uploads/';		
			$target_file = $target_dir . basename($_FILES["profile-img"]["name"]);
			$uploadOk = true;
			
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			//If IT really a image
            if($_FILES["profile-img"]["tmp_name"]){
                $check = getimagesize($_FILES["profile-img"]["tmp_name"]);


                if($check !== false) {
                    $message = "File is an image - " . $check["mime"] . ".";
                    $uploadOk = true;
                } else {
                    $message  = "File is not an image.";
                    $uploadOk = false;
                }
            }
        
			//If IT really a image
			
			
			if($uploadOk){
				if (move_uploaded_file($_FILES["profile-img"]["tmp_name"], $target_file)) {
					$message = "The file ". basename( $_FILES["profile-img"]["name"]). " has been uploaded.";
					$uploadOk = true;
				} else {
					$message = "Sorry, there was an error uploading your file.";
					$uploadOk = false;
				}
			}
			
			if($uploadOk){
				$img_url = $base_url . 'uploads/'.$_FILES["profile-img"]["name"];				
				
				$sql = "INSERT INTO `user` (user_name, email, password, photo) values ('".$_POST['username'].
					"', '" .$_POST['email']. "', '".$_POST['password']."', '".$img_url."')";			
			
				$response = query_to_base($sql);
				
				if($response){
					$message = "User Successfully Added.";
				}else{
					$message = "User add Failed. Please Try Again";
				}
			}
            if($uploadOk == false && $validated == true){
                $sql = "INSERT INTO `user` (user_name, email, password) values ('".$_POST['username'].
					"', '" .$_POST['email']. "', '".$_POST['password']."')";			
			
				$response = query_to_base($sql);
				
				if($response){
					$message = "User Successfully Added.";
				}else{
					$message = "User add Failed. Please Try Again";
				}
            }
			
		}
		
	}
	
	function validate_email($email){
		$sql = 'SELECT * FROM `user` WHERE EMAIL="' .$email. '"';
		$response = query_to_base($sql);
		
		if ($response->num_rows > 0) {
			return false;
		}else{
			return true;
		}
	}
?>