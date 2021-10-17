<?php 
 final class Producto{    
   public static function MostrarProducto($Prd){    
    echo'<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
    include_once('./Funciones/Conexion.php');     	
    $sql="select p.idproducto,concat_ws(' ',tp.tippro,.p.nomprod,mc.nommrc,ud.nomund) Producto,p.prec Precio,p.stkmin,p.stkmax 
	from producto p inner join tipoproducto tp on tp.idtipoproducto=p.idtipoproducto inner join marca mc on mc.idmarca=p.idmarca 
	inner join unidad ud on ud.idunidad=p.idunidad where p.nomprod like '%".$Prd."%' or mc.nommrc like '%".$Prd."%' or tp.tippro like '%".$Prd."%';";	
	
    $dto="<div class='widget widget-table action-table'><div class='widget-header'> <h3 style='text-align: center; color:#3E208F;'>"
    ."Lista de Tipos de Prouctos</h3></div><div class='widget-content'><table class='table table-striped table-bordered' id='tabla1'><thead><tr>"
    ."<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>N°</th>"
    ."<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>Producto</th>"
	."<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>Precio</th>"
	."<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>StkMinimo</th>"
	."<th style='padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>StkMaximo</th>"
    ."<th style='width: 11%; padding:4px; text-align:center; font-size:14px; border-top: 1px solid #dddddd;color: blue;'>"
    . "Gestionar</th></tr></thead><tbody>";    $cont=1;$query = $base->query($sql);
    while ($valores = mysqli_fetch_array($query)) {	  	
     $dto=$dto."<tr><td style='text-align:center; font-size:14px;'>".$cont."</td><td style='text-align:left;font-size:14px;'>".$valores[1]
	 ."</td><td style='text-align:left;font-size:14px;text-align: center;'>".$valores[2]."</td><td style='text-align:left;font-size:14px;
	 text-align: center;text-align: center;'>".$valores[3]."</td><td style='text-align:left;font-size:14px;text-align: center;'>".$valores[4].
	 "</td><td class='td-actions'><a href='javascript:;'class='btn btn-info  btn-small' 
	 onclick=SeleccionaProducto(".$valores[0].") title='Editar Producto'><img src='Imagenes/Edit.png' width=70% ></a>
     <a href='javascript:;'class='btn btn-warning btn-small' onclick=EliminarProducto(".$valores[0].") title='Eliminar Producto'><img 
	 src='Imagenes/Cancel.png' width=70%></a></td></tr>";$cont++;	
    }$dto=$dto."</tbody></table> </div>";echo $dto;
   }   
   
   public function CrearProducto($nomprod,$idmarca,$idtipoproducto,$prec,$stkmin,$stkmax,$idunidad){   
    include_once('./Funciones/Conexion.php'); $nomprod = str_replace("'", '\\\'', $nomprod );	
	$nomprod = html_entity_decode($nomprod, ENT_QUOTES | ENT_HTML401, "UTF-8");	
    $res="";$sql="select * from producto where nomprod='".$nomprod."' and idmarca='".$idmarca.
	"' and idtipoproducto='".$idtipoproducto."' and idunidad='".$idunidad."';";        
	$query = $base->query($sql);
    if ($valores = mysqli_fetch_array($query)) {	  
	 echo 'El Producto '.$nomprod." Ya existe";
	}
	else{
	 $resultInsert = mysqli_query($base,"insert into producto(nomprod,idmarca,idtipoproducto,prec,stkmin,stkmax,idunidad) 
	 values('".$nomprod."','".$idmarca."','".$idtipoproducto."','".$prec."','".$stkmin."','".$stkmax."','".$idunidad."');"); 	
	 if($resultInsert){echo "El Producto ".$nomprod." se ingreso correctamente";}
	 else{echo "Error en la BD";}
	}		
   }
   
   /*
   EditarProducto($_POST['idproducto'],$_POST['nomprod'],$_POST['idmarca'],$_POST['idtipoproducto']
   ,$_POST['prec'],$_POST['stkmin'],$_POST['stkmax'],$_POST['idunidad'])
   */
   
   public function EditarProducto($idproducto,$nomprod,$idmarca,$idtipoproducto,$prec,$stkmin,$stkmax,$idunidad){   
    include_once('./Funciones/Conexion.php'); $nomprod = str_replace("'", '\\\'', $nomprod );	
	$nomprod = html_entity_decode($nomprod, ENT_QUOTES | ENT_HTML401, "UTF-8");	
    include_once('./Funciones/Conexion.php');
    $sql="select * from producto where nomprod='".$nomprod."' and idproducto<>'".$idproducto."';";          
	$query = $base->query($sql);
    if ($valores = mysqli_fetch_array($query)) {	  
	 echo 'El Tipo de Producto a Editar '.$tpprd." Ya existe";
	}
	else{
	 $resultUpdate = mysqli_query($base,"update producto set nomprod='".$nomprod."',idmarca='".$idmarca.
	 "',idtipoproducto='".$idtipoproducto."',prec='".$prec."',stkmin='".$stkmin."',stkmax='"
	 .$stkmax."',idunidad='".$idunidad."' WHERE idproducto=".$idproducto); 	
	 if($resultUpdate){echo "Modificación correcta";}else{echo "Error en la BD";}	
	}
   }
  
   public static function DevolverProducto($idprdt){
    include_once('./Funciones/Conexion.php'); 
    $sql="select p.idproducto,p.nomprod,tp.idtipoproducto,mc.idmarca,ud.idunidad,p.prec Precio,p.stkmin,p.stkmax 
	from producto p inner join tipoproducto tp on tp.idtipoproducto=p.idtipoproducto inner join marca mc on 
	mc.idmarca=p.idmarca inner join unidad ud on ud.idunidad=p.idunidad where p.idproducto=".$idprdt.";";	 
	$query = $base->query($sql);
    if($valores = mysqli_fetch_array($query)){ 
	 $productos[]=array('prd'=>$valores[1],'idtipoproducto'=>$valores[2],'idmarca'=>$valores[3],'idunidad'=>$valores[4],'prec'=>$valores[5],'stkmin'=>$valores[6],'stkmax'=>$valores[7]);	
    }
	$json_string = json_encode($productos);echo $json_string;		
	 
   }   
   
   public function EliminarProducto($idtpopr,$tpopr){   
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
