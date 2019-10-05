<?php 
	include '../controllers/common.php';
	include '../controllers/admin.php';
	
	if(isset($_SESSION['message'])){
		$message = $_SESSION['message'];	
		unset($_SESSION['message']);		
	}	
		
	include '../includes/header.php';
	include '../includes/top-menu.php';	
		
?>

<div id = "content">
	<div class = "title-container text-center text-inverse">
		<h1 class="page-title">Welcome <?= $username ?></h1>
		<h4 class="sub-title">Area For Registered User</h4>
	</div>
	
	<div class = "container post-container">
		<div class = "container post-container">
			<?php if(isset($message)){ ?>
				<div class="alert alert-success" role="alert"><?= $message ?></div>
			<?php } ?>
			
			<?php if(isset($rows)) {?>
				<?php foreach($rows as $single) {?>
					<div class = "post-item">
						<h1 class = "post-title">
							<a href = "<?= $base_url ?>single.php?id=<?= $single['book_id']?>">
								<?= $single['book_title'] ?>
							</a>
							<span class = "pull-right">
								<a href = "<?= $base_url ?>admin/delete.php?id=<?= $single['book_id']?>">
									<button class = "btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
								</a>
							</span>
							<span class = "pull-right">
								<a href = "<?= $base_url ?>admin/edit.php?id=<?= $single['book_id']?>">
									<button class = "btn btn-default">Edit</button>
								</a>
							</span>
						</h1>
						<div class = "post-summary"><?= substr(urldecode($single['description']), 0, 150) ?></div>
						<p class = "post-info">Posted On <?= $single['published'] ?></p>
					</div>
				<?php } ?>
			<?php } else { ?>
				<h4>You Have no Article. Start Writing your first article <a href = "<?= $base_url?>admin/create.php">here</a></h4>
			<?php } ?>
		</div>
		<a class="btn btn-flat" href = "<?= $base_url ?>admin/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a>
	</div>
</div>


<?php 
	include '../includes/footer-menu.php';
	include '../includes/footer.php';
?>	