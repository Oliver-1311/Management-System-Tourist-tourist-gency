<!DOCTYPE html><html lang="es">
<head>
<meta charset="utf-8">

<title>Gestión de Tipos de Activos</title>
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="Imagenes/Accept.png"/>
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">  
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<link rel="stylesheet" href="dist/sweetalert.css">
<link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.css">
<style type="text/css" class="init"></style>
-->
<style > 
 
</style>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body >
    
</body>
</html>
<?php
 final class control{	 
	 public function CabeceraPagina(){
      echo'<meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Comercial System</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
      <!-- Font Awesome --><link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
      <!-- Ionicons --><link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
      <!-- Theme style --><link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
      <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
      <link rel="stylesheet" href="dist/sweetalert.css">
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">';      	  	 
	 }
	 
	 public function CrearMenu(){	 
	  echo'<ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="color:white;text-align:center;font-weight:bold;">Menu de Opciones</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active" ><a href="../index.php" style="background-color:green"><i class="fa fa-key"></i><span>Inicio</span></a></li>		
        <!--<li><a href="#"><i class="fa fa-link"></i> <span>Tablas</span></a></li> -->
        <li class="treeview">
          <a href="#"><i class="fa fa-id-card-o"></i> <span>Tablas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="views/marca.php">Marcas</a></li>
            <li><a href="views/equipo_implemento.php">Equipo_Implemeto</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#"><i class="fa fa-refresh"></i> <span>Procesos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="views/InventarioInicial.php">Inventario Inicial</a></li>
            <li><a href="views/EntregaEquipoViaje.php">Entrega equipo para viaje</a></li>
          </ul>
        </li>		
      </ul>';
	 }
	 public function CrearMenu1(){	 
	  echo'<ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="color:white;text-align:center;font-weight:bold;">Menu de Opciones</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active" ><a href="../index.php" style="background-color:green"><i class="fa fa-key"></i><span>Inicio</span></a></li>		
        <!--<li><a href="#"><i class="fa fa-link"></i> <span>Tablas</span></a></li> -->
        <li class="treeview">
          <a href="#"><i class="fa fa-id-card-o"></i> <span>Tablas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="marca.php">views/Marcas</a></li>
            <li><a href="equipo_implemento.php">Equipo_Implemeto</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#"><i class="fa fa-refresh"></i> <span>Procesos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="InventarioInicial.php">Inventario Inicial</a></li>
            <li><a href="EntregaEquipoViaje.php">Entrega equipo para viaje</a></li>
          </ul>
        </li>		
      </ul>';
	 }
	 
	 public function pieDePagina(){	 
	  echo'<footer class="main-footer"><!-- To the right --><div class="pull-right hidden-xs"><!--Anything you want -->
	  Preguntas al administrado</div><!-- Default to the left --><strong>Copyright &copy;';	
	  echo date('Y');
	  echo'<a href="https://jymsystemsoft.com/">J&M System Soft. EIRL.</a>.</strong> All rights reserved.</footer>';
	 }
	 
	 public static function LlenarCombo($nmcb,$sql,$cln){	
	  include_once('./Funciones/Conexion.php'); 	  
	  $query = $base->query($sql);
	  echo'<select id="'.$nmcb.'">';
      while($valores = mysqli_fetch_array($query)) {	  
	   echo'<option><value='.$valores[0].'>'.$valores[$cln].'</option>';
	  }
	  echo'</select>';
	 }	 
     public function BarraPrincipal(){	
         $usu="Miguel";
         echo ("<div class='navbar navbar-fixed-top'><div class='navbar-inner' style='height: auto;'>"
      . "<div class='container'><a class='btn btn-navbar' data-toggle='collapse' data-target="
      . "'.nav-collapse'><span class='icon-bar'></span><span class='icon-bar'></span><span class"
      . "='icon-bar'></span></a><a class='brand' href='MenuPrincipal.php' style='padding: 0px;'>"
      . "<img src='Imagenes/Computer.png' alt='Computadora' style='width: 32px;'> Sistema de Ventas"
      . "</a><br><div class='nav-collapse'><ul class='nav pull-right'><li class='dropdown'>"
      . "<a href='#' class='dropdown-toggle' data-toggle='dropdown'><img src='Imagenes/user_add.png'>"
      . "Usuario: ".$usu."<b class='caret'></b></a><ul class='dropdown-menu'><li><a "
      . "href='Miperfil.php'>Perfil</a></li><li><a href='cerrarsesion.php'>Cerrando");
	     //session_unset();session_destroy();
			//header ("Location: /PhpProject1/index.php");  
      echo("</a></li></ul></li></ul></div></div></div></div>");            
      //<li><a href="../../Funciones/cerrarSesion.php">Salir de la Sesion</a></li>
     }
     public function BarradeMenu(){
         echo("<div class='subnavbar'><div class='subnavbar-inner'><div class='container'><ul class='main-nav'>"
        . "<li><a href='MenuPrincipal.php'><br><img src='Imagenes/Info.png'>"
        . "<span>Inicio</span></a></li><li class='dropdown active'><a href='javascript:;'target"
        . "='_blank' class='dropdown-toggle' data-toggle='dropdown'><br><img src='Imagenes/Box.png'>"
        . "<span>Tablas Base</span></a><ul class='dropdown-menu' style='background-color: #a6e1ec'>"
        . "<li style='color: red'><a href='VtaMarcas.php'> Marcas</a></li><li><a href='VtaTipoProducto.php'>Tipo "
        . "Producto</a></li><li><a href='VtaUnidades.php'>Unidad</a></li><li><a href='VtaProductos.php'>Producto</a></li>
		</ul></li><li class='dropdown active'><a href='javascript:;'target"
        . "='_blank' class='dropdown-toggle' data-toggle='dropdown'><br><img src='Imagenes/Clientes.png'>"
        . "<span>Procesos</span></a><ul class='dropdown-menu' style='background-color: #a6e1ec'>"
        . "<li style='color: red'><a href='IngresoProductos.php'> Ingreso Productos</a></li><li><a href='#'>Venta "
        . "de Producto</a></li><li><a href='#'>Anular Comprobantes</a></li></ul></li>"                           
        . "<li class='dropdown active'><a href='javascript:;' class='dropdown-toggle' "
        . "data-toggle='dropdown'><br><img src='Imagenes/Print.png'><span>Los Reportes</span>"
        . "</a><ul class='dropdown-menu' style='background-color: #a6e1ec'><li style='color: "
        . "red'><a href='Reporte2.php'> Reporte de Marcas</a></li><li><a href='FormularioReporte.php' target='_blank'>Reporte"
        . " Ventas</a></li><li><a href=''>Reporte Producto</a></li></ul></li>"
        . "</ul>"
        . "</div></div></div>");
     }
 }
?>