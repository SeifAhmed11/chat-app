<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php include_once "php/header.php"; ?>

<body>
    <div class="wrapper">
        <section class="users">
            <header>
            <?php 
                    include_once "php/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM users where unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
            ?>
                <div class="content">
                    <img src="image/<?php echo $row['img'] ?>" alt="">
                    <div class="datails">
                        <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>"class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list2">
                <a href="chat-group.php?user_id=100">
                    <div class="content">
                        <img src="image/download.png" alt="">
                        <div class="datails">
                            <span>General group world</span>
                            <p>join</p>
                        </div>
                    </div>
                    <div class="status-dot ' . $offline .'"><i class="fas fa-circle"></i></div>
                </a> 
            </div>
            
            <div class="users-list">
            </div>
        </section>
    </div>

    <script src="javascript/users.js"></script>
</body>
</html>