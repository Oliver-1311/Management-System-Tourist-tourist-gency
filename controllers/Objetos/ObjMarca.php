<?php 
 final class Marca{    
   public static function MostrarMarca($mr){    
    include_once('../Funciones/Conexion.php');
	$sql="select * from marca where nommrc like '%".$mr."%';";		
    $dto="<div class='widget widget-table action-table'><div class='widget-header'> <h3 style='text-align: center; color:#3E208F;'>"
    ."Lista de Marcas</h3></div><div class='widget-content'><table class='table table-striped table-bordered' id='tabla1'><thead><tr>"
    ."<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>N°</th>"
    ."<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>Marca</th>"
    ."<th style='width: 11%; padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>"
    . "Gestionar</th></tr></thead><tbody>";    $cont=1;	
	$query = $base->query($sql);
    while ($valores = mysqli_fetch_array($query)) {	  
	 //$mrc=str_replace('"','', $valores[1]);
     $dto=$dto."<tr><td style='text-align:center; font-size:14px;'>".$cont."</td><td style='text-align:left;"
     ."font-size:14px;'>".$valores[1]."</td><td class='td-actions'>   
     <a href='javascript:;'class='btn btn-info  btn-small' onclick=Seleccionamarca(".$valores[0].") title='Editar Marca'><img src='Imagenes/Edit.png' width=70% ></a>
     <a href='javascript:;'class='btn btn-warning btn-small' onclick=EliminarMarca(".$valores[0].") title='Eliminar Marca'><img src='Imagenes/Cancel.png' width=70%>
     </a></td></tr>";$cont++;	
    }	
    $dto=$dto."</tbody></table> </div>";echo $dto;
   }
   
   public static function MostrarMarca1($mr){    
    include_once('Objetos/Base.php');     
	$sql="select * from marca where nommrc like '%".$mr."%' order by 2;";		
	$bas=new Base();$base=$bas->connect();    
	$dto="";$cont=1;
	$query = $base->query($sql);
	while ($valores = mysqli_fetch_array($query)) {	  
	 $dto=$dto."<tr style='text-align:center;font-size:14px;color:black;'><td >".$cont."</td><td>"
	 .$valores[1]."</td><td class='td-actions'><a href='javascript:;'class='btn btn-info  btn-small' 
	 onclick=Seleccionamarca(".$valores[0].") title='Editar Marca'><img src='../Imagenes/Edit.png' width=70% ></a>
	 <a href='javascript:;'class='btn btn-warning btn-small' onclick=EliminaMarca(".$valores[0].") title='Elimina Marca'>
	 <img src='../Imagenes/Cancel.png' width=70%>
     </a>
	 </td>";
	 $cont++;	
	}    
	echo $dto;
   }
   
   public function CrearMarca($mrc){   
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
   public function EditarMarca($idmr,$mrc){   
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
  
   public static function DevolverMarca($idmr){
    include_once('Objetos/Base.php');
    $sql="select * from marca where idmarca=".$idmr.";";$mrc="";      
	$bas=new Base();$base=$bas->connect();$query = $base->query($sql);
    if($valores = mysqli_fetch_array($query)) 
	 $mrc=$valores[1]; 	
    echo  $mrc;
   }   
   
   public static function DevolverMarcas(){
    include_once('Objetos/Base.php');$bas=new Base();$base=$bas->connect();
	$query = $base->query("select * from marca;");	
    while($valores = mysqli_fetch_array($query)){			 
	 $marcas[] = array('id'=> $valores[0], 'nombre'=> $valores[1]);
	}
	$json_string = json_encode($marcas);echo $json_string;		
   }
   
   public function EliminarMarca($idmr,$mrc){   
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
