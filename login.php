<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>

    <!--    *****************    CSS STYLE    *****************    -->

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field input">
                    <label for="">Email Address</label>
                    <input name="email" type="text" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input name="password" type="password" placeholder="Enter your password">
                    <div class="when-click">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <div class="field button">
                    <input type="submit" value="Contine to chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>

</html>