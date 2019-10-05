<?php 

    if(isset($_SESSION['loggedIn'])){
        $value = "LOGOUT";
    }else{
        $value = "LOGIN";
    }
?>
<header>
	<nav class="navbar navbar-inverse">		
	  <div class="container"> 
		
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#simple-blog-menu" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		
		  <a class="navbar-brand" href="<?= $base_url ?>"><h2 class="navbar-header-title"><i class="fa fa-codepen"></i>Bookberry</h2></a>
          <!--<i class="fa fa-home" aria-hidden="true"></i>-->
		</div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="simple-blog-menu">
		
			<ul class="nav navbar-nav navbar-right menu-nav">
			  <li class="active"><a href="<?= $base_url ?>">Home</a></li>
			  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EBOOK </a>
                  <ul class="dropdown-menu">
                    <li><a href="<?= $base_url ?>admin/catagory.php?cat=2">Adventure</a></li>
                    <li><a href="<?= $base_url ?>admin/catagory.php?cat=3">Romance</a></li>
                    <li><a href="<?= $base_url ?>admin/catagory.php?cat=4">Fantasy</a></li>
                    <li><a href="<?= $base_url ?>admin/catagory.php?cat=5">Biography</a></li>
                    <li><a href="<?= $base_url ?>admin/catagory.php?cat=6">Fiction</a></li>
                    <li><a href="<?= $base_url ?>admin/catagory.php?cat=7">Horror</a></li>
                    <li><a href="<?= $base_url ?>admin/catagory.php?cat=8">Paranormal</a></li>
                    <li><a href="<?= $base_url ?>admin/catagory.php?cat=9">Sci-fi</a></li>
                    <li><a href="<?= $base_url ?>admin/catagory.php?cat=10">Historical</a></li>
                    <li><a href="<?= $base_url ?>admin/catagory.php?cat=1">Computer</a></li>
                    <li><a href="<?= $base_url ?>admin/catagory.php?cat=11">Technology</a></li>

                    <li role="separator" class="divider"></li>
                    <li><a href="<?= $base_url ?>admin/catagory.php?cat=2">Browse</a></li>
                  </ul>
              </li>
			  <li><a href="<?= $base_url ?>admin">Admin Panel</a></li>
              <?php if(isset($_SESSION['loggedIn'])){ ?>
                <li><a href="<?= $base_url?>admin/logout.php"><?= $value ?></a></li>
                  			  
              <?php }else{ ?>
                <li><a href="<?= $base_url ?>admin/login.php"><?= $value ?></a></li>
                <li><a href="<?= $base_url?>signup.php">Register here</a></li> 
              <?php } ?>
			</ul>
		</div>
		
	  </div>		  
	</nav>
</header>