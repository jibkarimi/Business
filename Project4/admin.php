<?php
{
    include_once "database/database.php";
    include_once "database/VisitorAddRemove.php";

            
            // setting action variable for  action input
            $action = filter_input(INPUT_POST, 'action');
            if ($action == NULL) {
                $action = 'list_visitors';
            }
            if ($action == 'list_visitors'){
               
                $query = 'SELECT * from visitor
                     ORDER BY Name';
                $statement = $db->prepare($query);
                $statement->execute();
                $visitors = $statement->fetchAll();
                $statement->closeCursor();                        
            } else if ($action == 'delete_visitor') {
                $visitor_id = filter_input(INPUT_POST, 'visitorID', FILTER_VALIDATE_INT);
                $query = 'DELETE from visitor 
                          WHERE visitorID = :visitorID';
                $statement = $db->prepare($query);
                $statement->bindValue(':visitorID', $visitor_id);
                $statement->execute();
                $statement->closeCursor();
                header("Location: admin.php");         
            }            
}
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MenSuit</title>
    <link rel="stylesheet" href="css/style.css">
<!--    <script src="js/news.js" async></script>-->
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
 
    
<main>
    
    <!--Creating TH name for db-->
    <h2>Administration</h2>
            <table>
            <tr>
                <th>Visitor Name</th>
                <th>E-mail</th>
                <th >Phone</th>
                <th>Suit Type</th>
                <th>Heard Via</th>
                <th>Brochure</th>
                <th >Visitor Msg</th>
                <th >Delete</th>   
            </tr>
            
            <!--calling insert info with db table-->
            <?php foreach ($visitors as $visitor) : ?>
            <tr>
                <td><?php echo $visitor['Name']; ?></td> 
                <td><?php echo $visitor['email']; ?></td>
                <td><?php echo $visitor['phone']; ?></td>
                <td><?php echo $visitor['suit']; ?></td>
                <td><?php echo $visitor['heardVia']; ?></td>
                <td><?php echo $visitor['mailMe']; ?></td>
                <td><?php echo $visitor['comment']; ?></td>
                
                <!--delete button for db table -->
                <td><form action="admin.php" method="post">
                    <input type="hidden" name="action" value="delete_visitor"> 
                    <input type="hidden" name="visitorID"
                           value="<?php echo $visitor['visitorID']; ?>">
                    
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
    
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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
