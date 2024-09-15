<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php include_once "php/header.php"; ?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
            <?php 
                    include_once "php/config.php";
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn, "SELECT * FROM users where unique_id = 100");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }else

            ?>
                <a href="user.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="image/download.png" alt="">
                    <div class="datails">
                        <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                        <p><?php echo $row['status'] ?></p>
                </div>
            </header>
            <div class="chat-box2">

            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input name="outgoing_id" type="text" value="<?php echo $_SESSION['unique_id'] ?>" hidden>
                <input name="incoming_id" type="text" value="<?php echo $user_id ?>" hidden>
                <input name="message" type="text" class="input-field" placeholder="Type a message here...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>

    <script src="javascript/chat-group.js"></script>
</body>
</html>