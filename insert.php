<?php

include_once 'autoload.php';

use classes\Test;

$test =new Test();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   //insert into database
   $test->insert();
}

?>
<form  method="post" action="index.php?page=insert"  class="form-control">
<div class="form-group">
<label for="Numar produse" class="col-sm-3 control-label">Nume</label>
<div class="col-sm-6">
<input type="text" name="nume" id="nume" class="form-control" value="" required>
</div>
</div>
<div class="form-group">
<label for="categorie">Categorie</label>
<select name="categorie" id="categorie">
<option value="alimente">Alimente</option>
<option value="electrocasnice">Eletrocasnice</option>
<option value="altele">Altele</option>
</select>
</div>

 <div class="form-group">
    <label for="cota_tva">Cota Tva</label>
    <input type="text" name="cota_tva" id="cota_tva" class="form-control" value="" required>
      
</div>
        

 <div class="form-group">
    <label for="pret_unitar">Pret unitar</label>
    <input type="text" name="pret_unitar" id="pret_unitar" class="form-control" required>
     
</div>  

        <input class="btn btn-primary" type="submit" value="Adauga" name="Adauga" >

</form>

