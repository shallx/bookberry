<?php

include '../controllers/common.php';

session_destroy();
header('location:'. $base_url);

?>