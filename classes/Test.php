<?php

namespace classes;
use \PDO;

class Test extends Database{


	public function getCategories()
	{

      $sql = "Select * From produse";

      $query = $this->db->query($sql);

      return $query->fetchAll();
	}

  function v_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


public function insert(){



  $nume= v_input($_POST['nume']);
  $categorie = v_input($_POST['categorie']);
  $cota_tva = v_input($_POST['cota_tva']);
  $pret_unitar = v_input($_POST['pret_unitar']);




   $time = date('Y-m-d H:i:s');
   $sql = 'INSERT INTO produse SET  nume =:nume, categorie =:categorie,
   cota_tva =:cota_tva,pret_unitar =:pret_unitar';
   $query = $this->db->prepare($sql);
   $query->bindParam(':nume' ,$nume,PDO::PARAM_STR);
   $query->bindParam(':categorie',$categorie,PDO::PARAM_STR);
   $query->bindParam(':cota_tva',$cota_tva,PDO::PARAM_STR);
   $query->bindParam(':pret_unitar',$pret_unitar,PDO::PARAM_STR);
  
   $query->execute();

  echo "New record created successfully";



}




public function update($id){


   $time = date('Y-m-d H:i:s');
   $sql = 'UPDATE  companies SET  name =:name, description =:description,created_at =:created_at WHERE id =:id';
   $query = $this->db->prepare($sql);
   $query->bindParam(':name' ,$this->name);
   $query->bindParam(':description',$this->description);
   $query->bindParam(':created_at',$time);
   $query->bindParam(':id',$id,PDO::PARAM_INT);
   $query->execute();

}

public function delete(){
//delete


  $sql = 'DELETE FROM companies WHERE id = : id';
  $query = $this-db->prepare($sql);
  $query->bindParam(':id',$id);
  $query->execute();

}


	function dd($text){

    echo '<pre>';
    print_r($text);
    echo '</pre>';     



  }
}