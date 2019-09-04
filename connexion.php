 <?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "php_infanterie";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    $conn ->query("SET NAMES 'utf8'");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 
