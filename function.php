<?php
   


$servername = "localhost";
$username = "root";
$password = "";

$db = new mysqli($servername, $username, $password);
$db->select_db('examen');











 function insert(){


  $nume= $_POST['nume'];
  $categorie = $_POST['categorie'];
  $cota_tva = $_POST['cota_tva'];
  $pret_unitar = $_POST['pret_unitar'];

 if (empty($_POST["nume"])) {
    $errNume = "Name is required";
  } else {
    $nume = test_input($_POST["nume"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nume)) {
      $errNume = "Only letters and white space allowed";
    }
  }

 if (empty($_POST["categorie"])) {
    $errCategorie = "Categorie is required";
  } else {
    $categorie = test_input($_POST["categorie"]);
  }


   if (empty($_POST["cota_tva"])) {
    $errCota = "Cota is required";
  } else {
    $cota_tva= test_input($_POST["cota_tva"]);
  }


$sql = "INSERT INTO produse (nume,categorie,cota_tva,pret_unitar)
VALUES ('$nume', '$categorie', '$cota_tva','$pret_unitar')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}


}

?>