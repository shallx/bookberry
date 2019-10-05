<?php 
	include '../controllers/common.php';	
	auth_check();
	
	if(isset($_POST) && count($_POST) > 0){		
		
		$validated = validate_article($_POST);
		
		if($validated){
			$sql = "UPDATE articles SET title = '" .$_POST['title']. "', details = '" . urlencode($_POST['details']) . "' WHERE article_id=". $_POST['article_id'] ;
			$response = query_to_base($sql);
			
			if($response){
				$message = "Article Successfully Updated.";
			}else{
				$message = "Article Update Failed, Please Try Again.";
			}
			$row = get_article($_POST['article_id']);
		}
		
		
	}else{
		$id = $_GET['id'];
		$row = get_article($id);
	}
	
	include '../includes/header.php';
	include '../includes/top-menu.php';
	
?>

<div id = "content">
	<div class = "title-container text-center text-inverse">
		<h1 class="page-title">Edit Article</h1>
	</div>
	
	<div class = "container post-container">
		<?php if(isset($message)){ ?>
			<div class="alert alert-success" role="alert"><?= $message ?></div>
		<?php } ?>
			
		<form method="POST" action="<?= $base_url?>admin/edit.php">
		
			  <div class="form-group">				
				<input type="text" class="form-control" name="article_id" placeholder="Article ID" value = "<?= $row['article_id'] ?>" readonly>
			  </div>
			  <div class="form-group">				
				<input type="text" class="form-control" name="title" placeholder="Enter Title" value = "<?= $row['title'] ?>">
			  </div>			   
			  
			   <div class="form-group">				
				 <textarea id = "create-textbox" class = "form-control" name = "details" rows = "25" placeholder = "Write an Article.."><?= urldecode($row['details']) ?></textarea>
			  </div>
			  
			   <button type="submit" class="btn btn-flat">Submit</button>
		</form>
	</div>
</div>

<?php 
	include '../includes/footer-menu.php';
	include '../includes/footer.php';
?>	