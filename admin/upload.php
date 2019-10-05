<?php 
include '../controllers/common.php';

auth_check();
$username = $_SESSION['username'];
$userid = $_SESSION['userID'];

//if(isset($_POST) && count($_POST) > 0)

if(isset($_POST) && count($_POST) > 0){
    if(isset($_POST['title']) && isset($_POST['description'])){
        $validated = true;
    }else{
        $validated = false;
    }
    if($validated){

        //$target_dir = 'uploads/books/' . $userid . '/';
        $target_dir = 'uploads/books/';
        $target_file = $target_dir . basename($_FILES["book-img"]["name"]);
        $uploadOk = true;

        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        //If IT really a image
        if($_FILES["book-img"]["tmp_name"]){
            $check = getimagesize($_FILES["book-img"]["tmp_name"]);


            if($check !== false) {
                $message = "File is an image - " . $check["mime"] . ".";
                $uploadOk = true;
            } else {
                $message  = "File is not an image.";
                $uploadOk = false;
            }
        }
    }
    if($uploadOk){
        if (move_uploaded_file($_FILES["book-img"]["tmp_name"], $target_file)) {
            $message = "The file ". basename( $_FILES["book-img"]["name"]). " has been uploaded.";
            $uploadOk = true;
        } else {
            $message = "Sorry, there was an error uploading your file.";
            $uploadOk = false;
        }
    }

    if($uploadOk){
        $img_url =  'uploads/books/'.$_FILES["book-img"]["name"];
        $timestamp = time();
        $posted = date( 'Y-m-d h:m:s',$timestamp);

        $sql = "INSERT INTO `books` (book_title, user_id, description, book_image, published) values ('" .$_POST['title']. "','".$userid.
            "', '" .$_POST['description']. "', '".$img_url."', '".$posted."')";			

        $response = query_to_base($sql);

        if($response){
            $message = "Book uploaded";
        }else{
            $message = "Failed. Try again later";
        }
    }
}

include '../includes/header.php';
include '../includes/top-menu.php';	
?>

<div id = "content">
    <div class = "title-container text-center text-inverse">
        <h1 class="page-title">Upload your book here</h1>
        <h4 class="sub-title">@<?= $username ?></h4>
    </div>

    <div class = "container post-container">

        <?php if(isset($message)){ ?>
        <div class="alert alert-success" role="alert"><?= $message ?></div>
        <?php } ?>

        <div>
            <form method="POST" action="<?= $base_url?>admin/upload.php" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Book Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputbook3" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea id = "create-textbox" class="form-control" id="exampleTextarea" rows="6" name="description" placeholder="Write some description"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Book image</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="book-img" id = "book-img">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" class="btn btn-primary" value="Publish">
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>


<?php 
    include '../includes/footer-menu.php';
                  include '../includes/footer.php';
?>	
