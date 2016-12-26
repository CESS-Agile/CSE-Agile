<?php

session_start();

session_destroy();

echo "<script>window.open('http://localhost/agile2/home.php','_self')</script>";

?>