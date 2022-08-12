
<?php
$servername = "localhost";
$username = "root";
$password = "";

$db = new mysqli($servername, $username, $password);
// Create database
$sql = "CREATE DATABASE examen";
if ($db->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $db->error;
}

$db->select_db('examen');

$db->query("CREATE TABLE produse(
  id INT(11)  UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  nume  VARCHAR(255),
  categorie VARCHAR(50),
  pret_unitar  NUMERIC(8,2),
  cota_tva    INT(2) 
)");

$db->query("CREATE TABLE comenzii(
  id INT(11)  UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  client  VARCHAR(255),
  produs VARCHAR(50),
  valoare  NUMERIC(8,2),
   data DATE 
)");




$db->close();