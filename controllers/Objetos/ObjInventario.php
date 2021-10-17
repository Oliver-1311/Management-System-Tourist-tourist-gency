<?php 
 final class Inventario{
   public function CrearEquipoExistente_InvIni($idequi,$ctdd){       
	include_once('Base.php');
	$sql="call CreaExistenteInicial('".$idequi."','".$ctdd."');";   	
	$bas=new Base();$base=$bas->connect();$query = $base->query($sql);    		
	echo "Insercion correcta";
   }
   public function Estado_InventarioInicial(){
	include_once('Objetos/Base.php');
    $sql="select observ from pedido where idpedido=1";	 	
	$bas=new Base();$base=$bas->connect();$query = $base->query($sql);    
    if($valores = mysqli_fetch_array($query)){ 
	 echo json_encode(array('esta'=>$valores[0]));
		}   
   }
  }
?>
