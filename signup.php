<?php 
	include 'controllers/common.php';
	include 'controllers/signupController.php';
	
	
	include 'includes/header.php';
	include 'includes/top-menu.php';	
?>

<div id = "content">
	<div class = "title-container text-center text-inverse">
		<h1 class="page-title">Library</h1>
		<h4 class="sub-title">Are you a writer!! Sign Up Today..</h4>
	</div>
	
	<div class = "container post-container">
        <h3>Signup Form:</h3>
		<?php if(isset($message)){ ?>
			<div class="alert alert-success" role="alert"><?= $message ?></div>
		<?php } ?>
		
		<form method="POST" action="<?= $base_url?>signup.php" enctype="multipart/form-data">
		
		  <div class="form-group">				
			<input type="text" class="form-control" name="username" placeholder="Username" required>
		  </div>

		  <div class="form-group">				
			<input type="email" class="form-control" name="email" placeholder="Email" required>
		  </div>

		  <div class="form-group">				
			<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
		  </div>

		  <div class="form-group">				
			<input type="password" class="form-control" name="confirm-password" placeholder="Confirm Password" required>
	      </div>

		  <div class="form-group">
			Choose Your Profile Image: 
			<input type="file" class="form-control" name="profile-img" id = "profile-img">
		  </div>		  
		  
		  <button type="submit" class="btn btn-flat">Submit</button>
		  
		</form>
	</div>
</div>

<?php 
	include 'includes/footer-menu.php';
	include 'includes/footer.php';
?>	