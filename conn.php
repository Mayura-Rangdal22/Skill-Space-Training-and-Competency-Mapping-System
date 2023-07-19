<?php 
  
  $servername ="localhost";
  $username ="root";
  $password ="";
  $dbname="skillspace";

try {
  $conn = new PDO("mysql:host=$servername;dbname=skillspace","root","sarasaeed");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  
} 
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>
