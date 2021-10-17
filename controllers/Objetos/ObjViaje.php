<?php 
 final class Viaje{        
   public static function Mostrarviaje($vje,$opc){    
    include_once('Base.php');$bas=new Base();$base=$bas->connect();$dto="";$cont=1;
    switch($opc){
	 case 0:
	  $sql="select v.idviaje_paquete ID,(select descripcion from paquete_turistico where idpaquete_turistico
	  =v.idpaquete_turistico) Paquete,date_format(v.fecha,'%d-%m-%Y') Fecha_Viaje from viaje_paquete v 
	  where (select descripcion from paquete_turistico where idpaquete_turistico=v.idpaquete_turistico) 
	  like '%".$vje."%' order by 2;";$query = $base->query($sql);	  
	  while ($valores = mysqli_fetch_array($query)) {	  
	   $dto=$dto."<tr style='text-align:center;font-size:14px;color:black;' data-id='".$valores[0]."'><td>".$cont."</td><td>"
	   .$valores[1]."</td><td>".$valores[2]."</td><td class='td-actions'><a href='javascript:;'class='btn btn-info  btn-small' 
	   onclick=seleccionarviaje('".$cont."') title='Marcar un Viaje'><img src='../Imagenes/Edit.png' width=70% ></a>
	   <a href='javascript:;'class='btn btn-warning btn-small' onclick=DesMarcaVieje(".$cont.") title='Desmarcar'>
	   <img src='../Imagenes/Cancel.png' width=70%></a></td>";$cont++;	
	  }
      break;	 	  
	 case 1:
	  $sql="select count(*) from seleccionviaje where idviaje_paquete=".$vje.";";
	  $query = $base->query($sql);	  
	  while ($valores = mysqli_fetch_array($query)) {	  
	   $dto=$dto."".$valores[0];	
	  }
      break;	  
    }	
	echo $dto;
   }
   
   public function CrearViaje($vje){   
    include_once('Objetos/Base.php');     	
	$res="";$sql="select * from marca where nommrc='".$mrc."';";		
	$bas=new Base();$base=$bas->connect();$query = $base->query($sql);
    if ($valores = mysqli_fetch_array($query)) {	  
	 echo 'La Marca '.$mrc." Ya existe";
	}
	else{
	 $resultInsert = mysqli_query($base,"insert into marca(nommrc) values('".$mrc."');"); 	
	 if($resultInsert){echo "La Marca ".$mrc." se ingreso correctamente";}
	 else{echo "Error en la BD";}
	}		
   }
   public function EditarViaje($idvje,$vje){   
    include_once('Objetos/Base.php');     	
    $sql="select * from marca where nommrc='".$mrc."' and idmarca<>'".$idmr."';";          
	$bas=new Base();$base=$bas->connect();$query = $base->query($sql);	
    if ($valores = mysqli_fetch_array($query)) {	  
	 echo 'La Marca a Editar '.$mrc." Ya existe";
	}
	else{
	 $resultUpdate = mysqli_query($base,"update marca set nommrc='".$mrc."' WHERE idmarca=".$idmr); 	
	 if($resultUpdate){echo "Modificación correcta";}else{echo "Error en la BD";}	
	}
   }
  
   public static function DevolverViaje($idmr){
    include_once('Objetos/Base.php');
    $sql="select * from marca where idmarca=".$idmr.";";$mrc="";      
	$bas=new Base();$base=$bas->connect();$query = $base->query($sql);
    if($valores = mysqli_fetch_array($query)) 
	 $mrc=$valores[1]; 	
    echo  $mrc;
   }   
   
   public static function DevolverViajes(){
    include_once('Objetos/Base.php');$bas=new Base();$base=$bas->connect();
	$query = $base->query("select * from marca;");	
    while($valores = mysqli_fetch_array($query)){			 
	 $marcas[] = array('id'=> $valores[0], 'nombre'=> $valores[1]);
	}
	$json_string = json_encode($marcas);echo $json_string;		
   }   
   public function EliminarViaje($idvje,$vje){   
    include_once('./Funciones/Conexion.php');   	 
	$sql="select * from producto where idmarca='".$idmr."';";$query = $base->query($sql);
    if ($valores = mysqli_fetch_array($query))	  
	  echo 'No se puede Eliminar la Marca: '.$mrc.' Porque tiene Productos';	 
	else	  
	 if(mysqli_query($base,"delete from marca WHERE idmarca=".$idmr))
	  echo "Se Eliminio la marca ".$mrc." correctamente";
     else echo "Error en la BD";	
   }
  }
?>
