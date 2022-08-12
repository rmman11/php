
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="icon" href="images/icon.png" />
  <meta name="keywords" content="learn web php,javascript,html,css" />
  <meta name="description" content="" />


  <title>Studiere in php</title>
  <link rel="stylesheet" href="css/style.css">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active"  href="index.php?page=list">List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="index.php?page=insert">Add in Database</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=calculeaza">Calculeaza</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">

	 <?php


$p = $_GET['page'];  

$page = "".$p.".php";  

if(file_exists($page))  
    include($page);  
elseif($p=="")  
    echo "This is Home Page";  
else  
    echo "what are you looking for! ?";  


?>




	</div>
