<?php
     //define variables
    $contact_name = filter_input(INPUT_POST, 'visitorName');
    $contact_email = filter_input(INPUT_POST, 'visitorEmail');
    echo $contact_name . $contact_email;
    
    //database.php file 
    include_once "database/database.php";
    include_once "database/VisitorAddRemove.php";
    // $dsn = 'mysql:host=localhost;dbname=newscontact';
    // $username = 'root';
    // $password = 'Pa$$w0rd';
    // try {
    //      $db = new PDO($dsn, $username, $password);
    //         } catch (PDOException $e) {
    //             $error_message = $e->getMessage();
    //             /* include('database_error.php'); */
    //             echo "DB Error: " . $error_message; 
    //             exit();
    //         }
            
            // Add the contact value to the database  
            $query = 'INSERT INTO newscontact
                         (visitorName, visitorEmail)
                      VALUES
                         (:visitorName, :visitorEmail)';
            $statement = $db->prepare($query);
            $statement->bindValue(':visitorName', $contact_name);
            $statement->bindValue(':visitorEmail', $contact_email);
            $statement->execute();
            $statement->closeCursor();
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MenSuit</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/news.js" async></script>
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
    
    <div>
        <h2>Thank you, <?php echo $contact_name; ?> for contacting me! I will get back to you shortly.</h2>
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
