<?php

//https://www.youtube.com/watch?v=DYzQpofY_II de studiat
//progrm care calculeaza cu tva si fara tva,discount produsele

//si afiseaza anumite valori
//pret fara tva
//tva
//discount
//pret final cu tva

$error='';

$errNumar='';
$errCategorie= '';
$errPret = '';

$pret_fara_tva=0;
$pret_cu_tva = 0;
$discount = 0;
$valoare_discount = 0;
$tva =0;
$valoare_tva = 0;

$numar_produse = $categorie = $pret_unitar= '';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $numar_produse = (int)$_POST['numar_produse'];
  $categorie = $_POST['categorie_produse'];
  $pret_unitar = (float)$_POST['pret_unitar'];



  if (empty($_POST["numar_produse"])) {
    $errNumar = "Numar is required";
  } else {
    $numar_produse = test_input($_POST["numar_produse"]);
  }



    if (empty($_POST["pret_unitar"])) {
    $errPret = "Pret is required";
  } else {
    $pret_unitar = test_input($_POST["pret_unitar"]);
  }


  $pret_fara_tva = $numar_produse * $pret_unitar;

  switch ($categorie) {
      case 'alimente':

          $tva = 9;

          if($numar_produse > 50){
            
            $discount = 5;
           
          }

          if($numar_produse > 200){
            
            $discount = 15;
           
          }

          break;

        case 'electrocasnice':
          $tva =15;
          if($numar_produse > 100){
            
            $discount = 10;
           
          }

          break;

        case 'altele':
          $tva = 19;

            if($numar_produse > 500){
            
            $discount = 20;
           
          }

          break;  
 
  }

  $valoare_tva = $tva/100*$pret_fara_tva;

  $pret_cu_tva = $pret_fara_tva + $valoare_tva;
  if (isset($discount)){
  $valoare_discount = $discount/100*$pret_cu_tva;
}


    }


?>



<form role="form" id="form" method="post" action="index.php?page=calculeaza"  class="form-control">
<div class="form-group">
<label for="Numar produse" class="col-sm-3 control-label">Numar produse</label>
<div class="col-sm-6">
<input type="text" name="numar_produse" id="numar_produse" class="form-control" value="">
 <span class="error">* <?php echo $errNumar;?></span>
</div>
</div>
<div class="form-group">
<label for="categorie_produse">Categorie</label>
<select name="categorie_produse" id="categorie_produse">
<option value="alimente">Alimente</option>
<option value="electrocasnice">Eletrocasnice</option>
<option value="altele">Altele</option>
</select>
 <span class="error">* <?php echo $errCategorie;?></span>
</div>

 <div class="form-group">
    <label for="pret_unitar">Pret unitar</label>
    <input type="text" name="pret_unitar" id="pret_unitar" class="form-control" value="">
     <span class="error">* <?php echo $errPret;?></span>
      
</div>
           



        <input class="btn btn-primary" type="submit" value="Calculeaza" name="Calculeaza" >

</form>

<?php if($pret_fara_tva) { ?>
    <p>Pret fara tva :<?= number_format($pret_fara_tva,2,'.',',');?> RON</p>
<p>TVA(<?=$tva?> %) :<?= number_format($valoare_tva,2,'.',',');?>RON</p>
<?php if($discount){?>
    <p>Discount (<?= $discount;?>%):<?= number_format($valoare_discount,2,'.',',');?>RON</p>
<?php }?>
<p>Pret final cu tva <?= number_format($pret_cu_tva-$valoare_discount,2,'.',',');?> RON</p>
<?php }?>



