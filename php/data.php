<?php
    while($row = mysqli_fetch_assoc($sql)){
        $sql2 = "select * from messages 
        where (incoming_msg_id = {$row['unique_id']}
        or outgoing_msg_id = {$row['unique_id']}) and 
        (incoming_msg_id = {$outgoing_id}
        or outgoing_msg_id = {$outgoing_id}) order by msg_id desc limit 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if(mysqli_num_rows($query2) > 0){
            $result = $row2['msg'];
        }
        else{
            $result = "No message available";
        }


        $msg = (strlen($result) > 28) ? substr($result, 0, 28) . '...' : $result;
        $msg = (strlen($result) > 28) ? substr($result, 0, 28) . '...' : $result;
        if ($row2 !== null && isset($row2['outgoing_msg_id'])) {
            $you = ($outgoing_id == $row2['outgoing_msg_id']) ? "You: " : "";
        } else {
            // Handle the case where $row2 is null or outgoing_msg_id is not set
            $you = ""; // Or assign a default value
        }       
        $offline = ("Offline now" == $row['status']) ? "offline" : "";

        $output .= ' 
            <a href="chat.php?user_id='.$row['unique_id'].'">
                <div class="content">
                    <img src="image/' . $row['img'] . '" alt="">
                    <div class="datails">
                        <span>' . $row['fname'] . " " . $row['lname'] . '</span>
                        <p>' . $you . $msg .'</p>
                    </div>
                </div>
                <div class="status-dot ' . $offline .'"><i class="fas fa-circle"></i></div>
            </a> 
        ';
    }
?>