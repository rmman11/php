<?php

namespace classes;

use \PDO;

class Database
{
	
   //private to use only class database

   private $localhost ="localhost";
   private $user = "root";
   private $password = "";
   private $database  ="examen";

   protected $db;


	public function __construct()
	{
	  
	  $dsn = 'mysql:host ='.$this->localhost.';dbname='.$this->database;

	  $this->db = new PDO($dsn,$this->user,$this->password);
      $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

	  return $this->db;
	}
}