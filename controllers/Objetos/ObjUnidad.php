<?php 
 final class Unidad{    
   public static function MostrarUnidad($und){    
    include_once('./Funciones/Conexion.php');     
	$sql="select * from unidad where nomund like '%".$und."%';";		
    $dto="<div class='widget widget-table action-table'><div class='widget-header'> <h3 style='text-align: center; color:#3E208F;'>"
    ."Lista de Tipos de Prouctos</h3></div><div class='widget-content'><table class='table table-striped table-bordered' id='tabla1'><thead><tr>"
    ."<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>N°</th>"
    ."<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>Unidad</th>"
	."<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;width:170px;'>Abreviatura</th>"
    ."<th style='width: 11%; padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>"
    . "Gestionar</th></tr></thead><tbody>";    $cont=1;	
	$query = $base->query($sql);
    while ($valores = mysqli_fetch_array($query)) {	  	
     $dto=$dto."<tr><td style='text-align:center; font-size:14px;'>".$cont."</td><td style='text-align:left;"
     ."font-size:14px;'>".$valores[1]."</td><td style='text-align:center;"."font-size:14px;'>".$valores[2]."</td>
	 <td class='td-actions'><a href='javascript:;'class='btn btn-info  btn-small' onclick=SeleccionaUnidad("
	 .$valores[0].") title='Editar Unidad'><img src='Imagenes/Edit.png' width=70% ></a><a href='javascript:;'class='
	 btn btn-warning btn-small' onclick=EliminarUnidad(".$valores[0].") title='Eliminar Unidad'><img src='Imagenes/Cancel.png' width=70%>
     </a></td></tr>";$cont++;	
    }$dto=$dto."</tbody></table> </div>";echo $dto;
   }   
   
   public function CrearUnidad($und,$abv){   
    include_once('./Funciones/Conexion.php'); 
    $res="";$sql="select * from unidad where nomund='".$und."';";$query = $base->query($sql);
    if ($valores = mysqli_fetch_array($query)){echo 'La unidad '.$und." Ya existe";}
	else{
	 $resultInsert = mysqli_query($base,"insert into unidad(nomund,abrund) values('".$und."','".$abv."');"); 	
	 if($resultInsert){echo "La Unidad ".$und." se ingreso correctamente";}
	 else{echo "Error en la BD";}
	}		
   }
   public function EditarUnidad($idund,$und,$abv){   
    include_once('./Funciones/Conexion.php');
    $sql="select * from unidad where nomund='".$und."' and idunidad<>'".$idund."';";          
	$query = $base->query($sql);
    if ($valores = mysqli_fetch_array($query)) {	  
	 echo 'La Unidad a Editar '.$und." Ya existe";
	}
	else{
	 $resultUpdate = mysqli_query($base,"update unidad set nomund='".$und."',abrund='".$abv."' WHERE idunidad=".$idund); 	
	 if($resultUpdate){echo "Modificación correcta";}else{echo "Error en la BD";}	
	}
   }  
   public static function DevolverUnidad($idund){
    include_once('./Funciones/Conexion.php');$sql="select * from unidad where idunidad=".$idund.";";
	$query = $base->query($sql);
    if($valores = mysqli_fetch_array($query)){
	 echo json_encode(array('und'=>$valores[1],'abv'=>$valores[2]));  
	}  
   }   
   public static function DevolverUnidades(){
    include_once('./Funciones/Conexion.php');	
	$query = $base->query("select * from unidad;");	
    while($valores = mysqli_fetch_array($query)){			 
	 $unidades[] = array('id'=> $valores[0], 'nombre'=> $valores[1]);
	}
	$json_string = json_encode($unidades);echo $json_string;		
   }
   
   public function EliminarUnidad($idund,$und){   
    include_once('./Funciones/Conexion.php');   	 
	$sql="select * from producto where idtunidad='".$idund."';";
	$query = $base->query($sql);
    if ($valores = mysqli_fetch_array($query))	  		
	  echo 'No se puede Eliminar la unidad: '.$und.' Porque tiene Productos';	 
	else	  
	 if(mysqli_query($base,"delete from unidad WHERE idunidad=".$idund))
	  echo "Se Eliminio la unidad ".$und." correctamente";
     else echo "Error en la BD";	
   }
  }
?>
