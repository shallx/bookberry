<?php

    include '../controllers/common.php';	
	auth_check();
    unset($_SESSION['MESSAGE']);
    $cat = $_GET['cat'];
    echo $cat;

    //$sql = "SELECT books.book_id books, books.user_id,books.description,books.book_image,books.published FROM catagory, books WHERE catagory.catagory_id = " . $cat . "and books.book_id = catagory.book_id";
    $sql = "SELECT books.book_id, books.user_id, books.book_title, books.description, books.book_image, books.published FROM books INNER JOIN catagory ON books.book_id = catagory.book_id and catagory.catagory_id = " . $cat;
    $response = query_to_base($sql);
    if (mysqli_num_rows($response)==0) {
        $_SESSION['MY MESSAGE'] = "There are no books in this catagory";
        unset($_SESSION['book_rows']);
        header('location:../browse.php');
    }
    else{
        if ($response->num_rows > 0){
            //$GLOBALS['book_rows'] = $response->fetch_all($resulttype = MYSQLI_ASSOC);
            $_SESSION['book_rows']= $response->fetch_all($resulttype = MYSQLI_ASSOC);
        }
        header('location:../browse.php');
    }
    

?>