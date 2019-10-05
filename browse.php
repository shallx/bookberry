<?php 
	include 'controllers/common.php';
		
	include 'includes/header.php';
	include 'includes/top-menu.php';
    
    	if(isset($_SESSION['message'])){
            $message = $_SESSION['message'];	
            unset($_SESSION['message']);		
    }
?>

<div class="clearfix"></div>
<div id = "wrapper">
	
    <div class="container">
        <div class="filter">
            <h3>Filter by Catagory:</h3>
            <a class="btn btn-primary col-md-1 col-sm-3 col-xs-6" role= "button" href="admin/catagory.php?cat=2">Adventure</a>
            <a class="btn btn-primary col-md-1 col-sm-3 col-xs-6" role= "button" href="admin/catagory.php?cat=3">Romance</a>
            <a class="btn btn-primary col-md-1 col-sm-3 col-xs-6" role= "button" href="admin/catagory.php?cat=4">Fantasy</a>
            <a class="btn btn-primary col-md-1 col-sm-3 col-xs-6" role= "button" href="admin/catagory.php?cat=5">Biography</a>
            <a class="btn btn-primary col-md-1 col-sm-3 col-xs-6" role= "button" href="admin/catagory.php?cat=6">Fiction</a>
            <a class="btn btn-primary col-md-1 col-sm-3 col-xs-6" role= "button" href="admin/catagory.php?cat=7">Horror</a>
            <a class="btn btn-primary col-md-1 col-sm-3 col-xs-6" role= "button" href="admin/catagory.php?cat=8">Paranormal</a>
            <a class="btn btn-primary col-md-1 col-sm-3 col-xs-6" role= "button" href="admin/catagory.php?cat=9">Sci-fi</a>
            <a class="btn btn-primary col-md-1 col-sm-3 col-xs-6" role= "button" href="admin/catagory.php?cat=10">Historical</a>
            <a class="btn btn-primary col-md-1 col-sm-3 col-xs-6" role= "button" href="admin/catagory.php?cat=1">Computer</a>
            <a class="btn btn-primary col-md-1 col-sm-3 col-xs-6" role= "button" href="admin/catagory.php?cat=11">Technology</a>

        </div>
    </div>
    <?php if(isset($_SESSION['book_rows'])){ ?>
	<div class = "container post-container">
		<?php foreach($_SESSION['book_rows'] as $single) {?>
			<div class = "book-item  col-md-4 col-sm-6 col-xm-12">
                <img src="<?php echo $single['book_image']?>" class="book-img img-responsive center-block">
				<h5 class = "book-title text-center">
					<a href = "<?= $base_url ?>single.php?id=<?= $single['book_id']?>">
						<?= $single['book_title'] ?>
					</a>
				</h5>
				<p class = "post-info text-center">Posted On <?= $single['published'] ?></p>
			</div>
		<?php } ?>
	</div>
    <?php }else{?>
    <h3 class="text-center empty-book-error">There are no books in this catagory</h3>
    <?php } ?>
</div>
<div class="bugfixer"></div>

<?php 
	include 'includes/footer-menu.php';
	include 'includes/footer.php';
?>	