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

    <div class = "container single-post-container">
        <div class="btn-control">
            <a class="btn btn-default" href="<?= $base_url ?>upload.php">Create New</a>
        </div>
        <?php if(isset($message)){ ?>
        <div class="alert alert-success" role="alert"><?= $message ?></div>
        <?php } ?>

        <?php if(isset($rows)) {?>
        <?php foreach($rows as $single) {?>
        <div class = "post-item col-md-12">
            <div class="single-book-img col-md-2">
                <img src = "<?=  $base_url . $single['book_image']?>" class="book-img img-responsive center-block">
            </div>
            <div class="book-details-section col-md-8">
                <h1 class = "book-title col-md-12">
                    <a href = "<?= $base_url ?>single.php?id=<?= $single['book_id']?>">
                        <?= $single['book_title'] ?>
                    </a>
                </h1>

                <div class = "book-summary"><?= substr(urldecode($single['description']), 0, 150) ?></div>
                <p class = "book-info">Posted On <?= $single['published'] ?></p>
            </div>



            <div class="editor col-md-2">
                <span class = "">
                    <a href = "<?= $base_url ?>admin/remove.php?id=<?= $single['book_id']?>">
                        <button class = "btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </a>
                </span>
                <span class = "">
                    <a href = "<?= $base_url ?>edit.php?id=<?= $single['book_id']?>">
                        <button class = "btn btn-default">Edit</button>
                    </a>
                </span>
            </div>
        </div>
        <ul class="nav nav-list">
            <!--empty horizontal-->
            <li class="divider"></li>
        </ul>
        <?php } ?>
        <?php } else { ?>
        <h2 class="text-center text-danger">Opps!!</h2>
        <h4>You haven't published any books yet. Start by uploading your book by clicking <a href="<?= $base_url ?>upload.php">here</a></h4>
        <?php } ?>

        <a class="btn btn-flat" href = "<?= $base_url ?>admin/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a>
    </div>
</div>


<?php 
    include '../includes/footer-menu.php';
           include '../includes/footer.php';
?>	