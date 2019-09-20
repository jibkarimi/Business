
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
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="http://www.w3expressions.com/jibkarimi/portfolio/">Portfolio</a></li>
            </ul>
        </nav>
    </header>

  <?php 
  global $db;
   include_once "database/database.php";
   include_once "database/VisitorAddRemove.php";
   //$db = Database::getDB();
   if (!is_object($db)){
       $message = "We are experiencing technical difficulties. Please check back later.";
   } else {
       $visitorName = add_visitor ($visitorName, $visitor_email, $visitorPhone, $suitType, $heardVia, $mailMe, $comment);
       if ($visitorName == 1) {
           $message = "Unable to add to database. Please check back later.";
       } else{
           $message = "Thank you, $visitorName, for contacting me! I will get back to you shortly.";
       }
   }
  ?>
  <h2><?php echo $message ?></h2>

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