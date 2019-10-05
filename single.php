<?php 
	include 'controllers/common.php';
		
	include 'includes/header.php';
	include 'includes/top-menu.php';
	
	$id = $_GET['id'];
	$row = get_book_list($id);
    static $cart_counter = 0;
?>

<div id = "content">
	<!--<div class = "title-container text-center text-inverse">
				
	</div>-->
	
	<div class = "container single-post-container">
        <div class="col-sm-5 col-xs-12">
            <img src = "<?= $row['book_image']?>" class="book-img img-responsive center-block">
            <div class="button-wrapper">
                <div class="pager cart-out" role="group" aria-label="...">
                    <a class="btn btn-success" role="button" href="<?php setcookie($id, $cart_counter++, time() + 3000) ?>">Add to Cart</a>
                    <a class="btn btn-success" role="button" href="#">Checkout</a>
                </div>
            </div>
            
        </div>
        <div class="col-sm-7 col-xs-12">
            <h1><?= $row['book_title'] ?></h1>
            <div class = "author">By <b><?= get_user_name($row['user_id']) ?></b><span class = "pull-right"><?= $row['published'] ?></span></div>
            <div class = "details text-justify"><?= urldecode($row['description']) ?></div>
        </div>
		
	</div>
    <!--  <h3><?php echo $_COOKIE[$id]?></h3>  -->
	
</div>

<?php 
	include 'includes/footer-menu.php';
	include 'includes/footer.php';
?>	