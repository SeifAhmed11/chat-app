<?php include_once "php/header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">Frist Name</label>
                        <input name="fname" type="text" placeholder="Frist Name" required>
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input name="lname" type="text" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label for="">Email Address</label>
                    <input name="email" type="text" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input name="password" type="password" placeholder="Enter new password" required>
                    <div class="when-click">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <div class="field image">
                    <label for="">Selet Img</label>
                    <input name="image" type="file" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Contine to chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>

</html>