<?php

$action = filter_input(INPUT_POST, 'action');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if ($action == NULL) {
} else if (empty($username) || empty($password)) {
    header ("Location: login.php");
} else {
    header ("Location: admin.php");
}
// try {
//     include_once './database/database.php';
//     $db = Database::getDB();
// } catch (Exception $ex) {
//     echo "Connection error". $e->getMessage();
//     exit();
// }
?>


<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MenSuit</title>
    <link rel="stylesheet" href="css/style.css">
<!--    <script src="js/contact.js" async></script>-->
</head>


<body>
    <header>
        <img src="images/header.jpg" alt="headerImage">
        <nav class="navBar">
            <ul>
            <li><a href="index.html">Home</a></li>
                    <li><a href="news.html">E-Newsletter</a></li>
                    <li><a href="contactUs.html">Contact us</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="http://www.w3expressions.com/jibkarimi/portfolio/">Portfolio</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-container">

        <div class="main-bg">
            <div class="info">
                <form name='visitor' action="login.php" method="post">

                    <br><label for="user">User Name:</label><br>
                    <input type="text" name="username" id="username" placeholder="Log in Username" size="30" required><br>
                    <br>
                    <label for="pass">Password:</label><br>
                    <input type="text" name="password" id="password"  placeholder="Log in Password" size="30" required><br>
                    <input type="hidden" name="action" value="action">
                    <br>
                    <input type="submit" id="submit" value="Submit" class="btn"><br>
                    
            </div>
        </div>
    </main>

    <footer>
        <br>
        Men Suit<br>
        <a href="mailto:jibkarimi@mycwi.cc">MenSuit@example.com</a><br>
        <a href="https://www.facebook.com/" target="_blank"> <img src="images/fb.png" /></a>

        <a href="https://github.com/" target="_blank"> <img src="images/github.png" /></a>

        <a href="https://www.linkedin.com/" target="_blank"> <img src="images/linkedin.png" /></a>


    </footer>
</body>

</html>