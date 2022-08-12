<?php

include_once 'autoload.php';


use classes\Test;

$test =new Test();


$categorie = $test->getCategories();

//apleam functia de verificare
$test->dd($categorie);
?>