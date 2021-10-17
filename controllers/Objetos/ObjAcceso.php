<?php
  
/** To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.*/
 final class Acceso {                   
  public function Acceder($u,$p){   
    include_once('./Funciones/Conexion.php');
	 $query = $base->query("SELECT * FROM usuario  where usr='".$u."' and psw='".$p."'");     
    if($valores = mysqli_fetch_array($query)){$res="1";}else{$res="0";}		
    return $res;   
  }  
 }
?>
