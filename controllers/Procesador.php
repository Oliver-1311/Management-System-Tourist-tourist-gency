<?php    
 include_once('Objetos/ObjMarca.php');include_once('Objetos/ObjEquipo_implemento.php');
 include_once('Objetos/ObjInventario.php');include_once('Objetos/ObjViaje.php');
 include_once ('Objetos/ObjPaqueteturistico.php');include_once 'Objetos/ObjPaqueteViaje.php';
$ev=$_POST['ev'];
 switch ($ev){
  case 0:{ //Acceso al Sistema       
   $rtd=Acceso::Acceder($_POST['usu'],$_POST['cl']);echo $rtd;
   break;
  }
  case 1:{//Mostrar Marcas
   Marca::MostrarMarca1($_POST['mrc']);break;      
  }   
 case 2: {//Seleccionar Marca
   Marca::DevolverMarca($_POST['idmc']);break;
  }
  case 3: {//Crear la Marca
   Marca::CrearMarca($_POST['mrc']);break;
  } 
  case 4:{ //Editar la Marca       
   Marca::EditarMarca($_POST['idmc'],$_POST['mrc']);break;
  }
  case 5:{//Mostrar Equipo Implemento
   Equipo_implemento::MostrarEquipo_implemento($_POST['eqimp'],$_POST['opc']);break;   
  }
  case 6:{//Crear el Equipo_implemento  CrearEquipo_Implemento($descrp,$prcsj,$tipo,$$idmarca)
   Equipo_implemento::CrearEquipo_Implemento($_POST['dscr'],$_POST['prcsg'],$_POST['tip'],$_POST['idmrc']);break;      
  }  
  case 7: {//Seleccionar equipo
    Equipo_implemento::DevolverEquipoProd($_POST['idequi']);break;
  }
  case 8: {//Editar equipo
    Equipo_implemento::EditarEquipo_Implemento($_POST['id'],$_POST['dscr'],$_POST['prcsg'],
	$_POST['tip'],$_POST['idmrc']);break;  
  }
  case 9: {//Editar equipo
    Inventario::CrearEquipoExistente_InvIni($_POST['id'],$_POST['ctd']);break;  
  }
  case 10: {//Estado del inventario inicial
    Inventario::Estado_InventarioInicial();break;  
  }
  case 11: {//Mostrarviaje y asignar equipos
   Viaje::Mostrarviaje($_POST['vje'],$_POST['opc']);break;  
  }
  case 12: { //Seleccionar equipos a Asignar SeleccionarEquipo_Implemento($id,$ctd,$op) 
   Equipo_implemento::SeleccionarEquipo_Implemento($_POST['idequ'],$_POST['ctd'],$_POST['op'],$_POST['idvje']);break;  
  }
  /*case 13: { //Seleccionar equipos a Asignar SeleccionarEquipo_Implemento($id,$ctd,$op) 
   Equipo_implemento::SeleccionarEquipo_Implemento($_POST['idequ'],$_POST['ctd'],$_POST['op'],$_POST['idvje']);break;  
  }  */
  case 17:{//LlenarMarcas para el producto
   Marca::DevolverMarcas();break;
  }
  case 18:{
   PaqueteTuristico::DevolverPaqueteTuristico();break;
  }
  case 19:{
   PaqueteTuristico::MostrarPaquete_turistico($_POST['paqTu'],$_POST['opc']);break;
  }
  case 20:{
   ObjPaqueteViaje::MostrarPaquete_viaje($_POST['vje'],$_POST['opc']);break;
  }
  case 21:{
   PaqueteTuristico::DevolverTipoPaqueteTuristico();break;
  }
  case 22:{
   ObjPaqueteViaje::CrearPaqueteViaje($_POST['dsc'],$_POST['fechaV'],$_POST['horaV'],$_POST['PaqT'],$_POST['Estd']);break;
  }
  case 23:{
   PaqueteTuristico::CrearPaqueteTuristico($_POST['nmbrT'],$_POST['montoT'],$_POST['estadoT'],$_POST['TipPaq']);
  }
 }

?>
