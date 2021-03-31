<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'elletblog', 'eleos@local', 'elletblog');

    //check connection
    if(!$conn) {
        echo 'Connection error' . mysqli_connect_error();
    }
?>