<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn, "SELECT * FROM users where not (unique_id = {$outgoing_id}) and not (unique_id = 100)");
    $output = "";

    if(mysqli_num_rows($sql) == 1){
        $output .="No users are available to chat";
    }
    elseif(mysqli_num_rows($sql) > 0){
        include "data.php";
    }
    echo $output;


?>