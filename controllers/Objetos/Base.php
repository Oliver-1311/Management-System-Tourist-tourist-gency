<?php
 class Base{
     private $host;private $db;private $user;private $password;private $charset;
     public function __construct(){
      $this->host="localhost";$this->db="bd_Turismo";
      $this->user="root";$this->password="";$this->charset="utf8mb4";
     }
	 
     function connect(){
        /*try{
            return new PDO('mysql:host=localhost;dbname='.$this->bd,$this->user,$this->password);
		   
        }
        catch(Exception $e){echo"<script>alert('Ocurrio un error al conectarse')</script>".$e.getMessage();}*/
		
	   $base = new mysqli($this->host,$this->user,$this->password,$this->db,3308);
       if ($base->connect_errno) {
        echo "Fallo al conectar a MySQL: (".$base->connect_errno.") ".$base->connect_error;
       }
	   return $base;
     }
 }

?>