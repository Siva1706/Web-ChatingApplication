<?php 
    $conn = mysqli_connect("localhost","root","","chatApplication");
    if(!$conn)
    {
        echo "Database connection failed" .mysqli_connect_error();
    }
?>