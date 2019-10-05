<?php 
	include '../controllers/common.php';
	include '../controllers/login.php';
	include '../includes/header.php';
?>
	
<div id = "content">

	<div class = "container post-container text-center">			
		<div class = "login-container">	
			<h4>Login</h4>					
			<form action="authenticate.php" method="POST">	  				  
						  
				  <div class="form-group">				
					<input type="email" name ="email" class="form-control" id="InputEmail1" placeholder="Email">
				  </div>
				  
				  <div class="form-group">				
					<input type="password" name ="password" class="form-control" id="InputPassword" placeholder="password">
				  </div>
                  <?php if(isset($_SESSION['form-error'])){ ?>
                  <div class="bg-danger">
                      <p><?= $_SESSION['form-error'] ?></p>
                  </div>
                  <?php } unset($_SESSION['form-error']);?>
				  <button type="submit" class="btn btn-flat">Submit</button>
			  
			</form>
			
		</div>
		
	</div>
</div>
	
<?php 
	include '../includes/footer.php';
?>	
	
	

