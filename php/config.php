<?php
    $conn = mysqli_connect("localhost", "root", "", "chat");
    if(!$conn)
        echo "not Database connected" . mysqli_connect_error;
?>