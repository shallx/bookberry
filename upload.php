<?php 
include 'controllers/common.php';

auth_check();
$username = $_SESSION['username'];
$userid = $_SESSION['userID'];


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
    $sql = "SELECT MAX(book_id) as mbook FROM `books`";
    $response = query_to_base($sql);
    if($response->num_rows > 0){
        while($row = $response->fetch_assoc()) {
            $counter = $row["mbook"];
        }
    }
    
    if(isset($_POST['check2']) == '2'){
        $val = 2;
        $sql = "INSERT INTO `catagory` (book_id,catagory_id) values ('" .$counter. "','" .$val. "')";
        $response = query_to_base($sql);
    }
    if(isset($_POST['check3']) == '3'){
        $val = 3;
        $sql = "INSERT INTO `catagory` (book_id,catagory_id) values ('" .$counter. "','" .$val. "')";
        $response = query_to_base($sql);
    }
    if(isset($_POST['check4']) == '4'){
        $val = 4;
        $sql = "INSERT INTO `catagory` (book_id,catagory_id) values ('" .$counter. "','" .$val. "')";
        $response = query_to_base($sql);
    }
    if(isset($_POST['check5']) == '5'){
        $val = 5;
        $sql = "INSERT INTO `catagory` (book_id,catagory_id) values ('" .$counter. "','" .$val. "')";
        $response = query_to_base($sql);
    }
    if(isset($_POST['check6']) == '6'){
        $val = 6;
        $sql = "INSERT INTO `catagory` (book_id,catagory_id) values ('" .$counter. "','" .$val. "')";
        $response = query_to_base($sql);
    }
    if(isset($_POST['check7']) == '7'){
        $val = 7;
        $sql = "INSERT INTO `catagory` (book_id,catagory_id) values ('" .$counter. "','" .$val. "')";
        $response = query_to_base($sql);
    }
    if(isset($_POST['check8']) == '8'){
        $val = 8;
        $sql = "INSERT INTO `catagory` (book_id,catagory_id) values ('" .$counter. "','" .$val. "')";
        $response = query_to_base($sql);
    }
    if(isset($_POST['check9']) == '9'){
        $val = 9;
        $sql = "INSERT INTO `catagory` (book_id,catagory_id) values ('" .$counter. "','" .$val. "')";
        $response = query_to_base($sql);
    }
    if(isset($_POST['check9']) == '10'){
        $val = 10;
        $sql = "INSERT INTO `catagory` (book_id,catagory_id) values ('" .$counter. "','" .$val. "')";
        $response = query_to_base($sql);
    }
    if(isset($_POST['check9']) == '1'){
        $val = 1;
        $sql = "INSERT INTO `catagory` (book_id,catagory_id) values ('" .$counter. "','" .$val. "')";
        $response = query_to_base($sql);
    }
    if(isset($_POST['check9']) == '11'){
        $val = 11;
        $sql = "INSERT INTO `catagory` (book_id,catagory_id) values ('" .$counter. "','" .$val. "')";
        $response = query_to_base($sql);
    }
}

include 'includes/header.php';
include 'includes/top-menu.php';	
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
            <form method="POST" action="<?= $base_url?>upload.php" enctype="multipart/form-data">
                
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

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="check2" value="2">
                        Adventure
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checkbox"  name="check3" value="3">
                        Romance
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="check5" value="5">
                        Biography
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="check6" value="6">
                        Fiction
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="check7" value="7">
                        Horror
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="check8" value="8">
                        Paranormal
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="check9" value="9">
                        Sci-fi
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="check10" value="10">
                        Historical
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="check1" value="1">
                        Computer
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="check11" value="11">
                        Technology
                    </label>
                </div>

            </form>
        </div>
    </div>

</div>


<?php 
    include 'includes/footer-menu.php';
                  include 'includes/footer.php';
?>	
