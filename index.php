<?php 
	include 'controllers/common.php';
		
	include 'includes/header.php';
	include 'includes/top-menu.php';
	
	$sql = "SELECT * FROM `books` ORDER BY published DESC LIMIT 10";
	$response = query_to_base($sql);
	
	if ($response->num_rows > 0) {
		$rows = $response->fetch_all($resulttype = MYSQLI_ASSOC);	
	}

?>

	
<div id = "content">
	<div class = "title-container text-center text-inverse">
		<h1 class="page-title">Library</h1>
        <div class="line"></div>
		<h4 class="sub-title">A place to buy your favourite books</h4>
	</div>
	
    <div class="container">
        <div class="title-section">
            <h3 class="text-center">LATEST BOOKS TO BUY</h3>
        </div>
    </div>
	<div class = "container post-container">
		<?php foreach($rows as $single) {?>
			<div class = "book-item  col-md-4 col-sm-6 col-xm-12">
                <img src="<?= $base_url . $single['book_image']?>" class="book-img img-responsive center-block">
				<h5 class = "book-title text-center">
					<a href = "<?= $base_url ?>single.php?id=<?= $single['book_id']?>">
						<?= $single['book_title'] ?>
					</a>
				</h5>
				<p class = "post-info text-center">Posted On <?= $single['published'] ?></p>
			</div>
		<?php } ?>
	</div>
    
    <div class="books-by-cat">
        <div class="container">
            <div class="filter">
                <h3>Slider of Books:</h3>
                                                
            </div>
            <div class="siema slider">
                <?php foreach($rows as $single) {?>
                <div class = "book-item  col-md-4 col-sm-6 col-xm-12">
                    <img src="<?= $base_url . $single['book_image']?>" class="book-img img-responsive center-block">
                    <h5 class = "book-title text-center">
                        <a href = "<?= $base_url ?>single.php?id=<?= $single['book_id']?>">
                            <?= $single['book_title'] ?>
                        </a>
                    </h5>
                    <p class = "post-info text-center">Posted On <?= $single['published'] ?></p>
                </div>
                <?php } ?>
                <!--<div><img src ="img/siema/mobile.jpg" alt="This is an image"></div>-->
            </div>
        
            
            <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            <script type="text/javascript" src="plugs/slick/slick.min.js"></script>
            
            
        </div>
    </div>
</div>
	
<?php 
	include 'includes/footer-menu.php';
	include 'includes/footer.php';
?>	
	       <script>
            $(document).ready(function(){
              $('.siema').slick({
                 dots: true,
              infinite: false,
              speed: 300,
              slidesToShow: 4,
              slidesToScroll: 4,
              arrows: true,
              responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
              ]
              });
            });

            </script>
	

