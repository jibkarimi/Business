<?php


//Calling DB and Functions
try {
    include './database/database.php';
    include './database/employee.php';
    $db = Database::getDB();
} catch (Exception $ex) {
    echo 'Connection error; ' . $e->getMessage();
    exit();
}

class Employee {
    private $id;
    private $first_name;
    private $last_name;

    public function __construct($id, $first_name, $last_name) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function setFirstName($value) {
        $this->first_name = $value;
    }
    
        public function getLastName() {
        return $this->last_name;
    }

    public function setLastName($value) {
        $this->last_name = $value;
    }
}

$employees = EmployeeDB::getemployees();
     
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
        <h2>Employee List</h2>
        <ul>
           <?php foreach ($employees as $employee): ?> 
            <li>
                <?php echo $employee->getFirstName() . " " . $employee->getLastName(); ?>
            </li>
            <?php endforeach; ?>
        </ul>
        
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
