<?php 
    $connection = mysqli_connect('localhost', 'root', 'root', 'login_App');  

    if(!$connection) {
    
        die("Database connection failed");
    }
?>