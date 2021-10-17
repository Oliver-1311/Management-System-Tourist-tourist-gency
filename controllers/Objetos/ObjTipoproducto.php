<?php 
 final class TipoProducto{    
   public static function MostrarTipoProducto($tpPrd){    
    include_once('./Funciones/Conexion.php');     
	$sql="select * from tipoproducto where tippro like '%".$tpPrd."%';";		
    $dto="<div class='widget widget-table action-table'><div class='widget-header'> <h3 style='text-align: center; color:#3E208F;'>"
    ."Lista de Tipos de Prouctos</h3></div><div class='widget-content'><table class='table table-striped table-bordered' id='tabla1'><thead><tr>"
    ."<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>N°</th>"
    ."<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>Tipo de Producto</th>"
    ."<th style='width: 11%; padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>"
    . "Gestionar</th></tr></thead><tbody>";    $cont=1;	
	$query = $base->query($sql);
    while ($valores = mysqli_fetch_array($query)) {	  	
     $dto=$dto."<tr><td style='text-align:center; font-size:14px;'>".$cont."</td><td style='text-align:left;"
     ."font-size:14px;'>".$valores[1]."</td><td class='td-actions'>   
     <a href='javascript:;'class='btn btn-info  btn-small' onclick=SeleccionaTipoProducto(".$valores[0].") title='Editar Tipo de Producto'><img src='Imagenes/Edit.png' width=70% ></a>
     <a href='javascript:;'class='btn btn-warning btn-small' onclick=EliminarTipoProducto(".$valores[0].") title='Eliminar Tipo de Producto'><img src='Imagenes/Cancel.png' width=70%>
     </a></td></tr>";$cont++;	
    }$dto=$dto."</tbody></table> </div>";echo $dto;
   }   
   
   public function CrearTipoProducto($tpprd){   
    include_once('./Funciones/Conexion.php'); 
    $res="";$sql="select * from tipoproducto where tippro='".$tpprd."';";        
	$query = $base->query($sql);
    if ($valores = mysqli_fetch_array($query)) {	  
	 echo 'El Tipo de Producto '.$tpprd." Ya existe";
	}
	else{
	 $resultInsert = mysqli_query($base,"insert into tipoproducto(tippro) values('".$tpprd."');"); 	
	 if($resultInsert){echo "El Tipo de Producto ".$tpprd." se ingreso correctamente";}
	 else{echo "Error en la BD";}
	}		
   }
   public function EditarTipoProducto($idtpprd,$tpprd){   
    include_once('./Funciones/Conexion.php');
    $sql="select * from tipoproducto where tippro='".$tpprd."' and idtipoproducto<>'".$idtpprd."';";          
	$query = $base->query($sql);
    if ($valores = mysqli_fetch_array($query)) {	  
	 echo 'El Tipo de Producto a Editar '.$tpprd." Ya existe";
	}
	else{
	 $resultUpdate = mysqli_query($base,"update tipoproducto set tippro='".$tpprd."' WHERE idtipoproducto=".$idtpprd); 	
	 if($resultUpdate){echo "Modificación correcta";}else{echo "Error en la BD";}	
	}
   }
   
   /*public static function DevolverUnidades(){
    include_once('./Funciones/Conexion.php');	
	$query = $base->query("select * from unidad;");	
    while($valores = mysqli_fetch_array($query)){			 
	 $unidades[] = array('id'=> $valores[0], 'nombre'=> $valores[1]);
	}
	$json_string = json_encode($unidades);echo $json_string;		
   }*/
   
   public static function DevolverTiposdeProducto(){
    include_once('./Funciones/Conexion.php');	
	$query = $base->query("select * from tipoproducto;");	
    while($valores = mysqli_fetch_array($query)){			 
	 $tiposproducto[] = array('id'=> $valores[0],'nombre'=> $valores[1]);
	}
	$json_string = json_encode($tiposproducto);echo $json_string;		
   }  
  
   public static function DevolverTipoProducto($idtpopr){
    include_once('./Funciones/Conexion.php'); 
    $sql="select * from tipoproducto where idtipoproducto=".$idtpopr.";";$tpopr="";      
	$query = $base->query($sql);
    if($valores = mysqli_fetch_array($query)) 
	 $tpopr=$valores[1]; 	
    echo  $tpopr;
   }   
   
   public function EliminarTipoProducto($idtpopr,$tpopr){   
    include_once('./Funciones/Conexion.php');   	 
	$sql="select * from producto where idtipoproducto='".$idtpopr."';";
	$query = $base->query($sql);
    if ($valores = mysqli_fetch_array($query))	  		
	  echo 'No se puede Eliminar el Tipo de producto: '.$tpopr.' Porque tiene Productos';	 
	else	  
	 if(mysqli_query($base,"delete from tipoproducto WHERE idtipoproducto=".$idtpopr))
	  echo "Se Eliminio el Tipo de producto ".$tpopr." correctamente";
     else echo "Error en la BD";	
   }
  }
?>
