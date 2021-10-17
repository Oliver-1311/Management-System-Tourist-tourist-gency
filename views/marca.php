<!DOCTYPE html>
<!-- This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.-->
<?php
 $ruta='views/marca.php';
 include_once('../controllers/Objetos/Cotrolador.php'); 
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Comercial System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="dist/sweetalert.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="./" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SALES</b>Store</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a> 
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/miki.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Miguel Silva</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header" style='background-color:#58090F'>
                <img src="dist/img/miki.png" class="img-circle" alt="User Image">
                <p> Miguel Silva - Web Developer</p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style='color:blue;background-color:#58090F'>

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style='background-color:red'>

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/miki.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Miguel Silva</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form" style='background-color:orange'>
        <div class="input-group" style='background-color:orange'>
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
			  <i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
	  <?php control::CrearMenu1();?>
      
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style='text-align:center;font-weight:bold;color:#091896;'>Gestión de Marcas</h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
		
	<div class="row">
        	<div class="col-md-5">
        		<div class="panel panel-info alert-info">
        		 <div class="panel-heading"><h3 class="panel-title" style='text-align: center;color:#9C2F2F;font-family: "Latin Modern Roman 10";
				  font-size: 105%;'><b>Nueva Marca</b></h3>
				 </div>
                   <div class="panel-body" style='background-color: #FFFAFA;'>
                    <form role="form">
                     <div class="form-group">
                      <label for="exampleInputDescripci1">Marca*:</label>
                      <!--<input type="text" class="form-control" id="txmarca" placeholder="Ingrese la marca" ng-model="facultad"> -->
					  <input type="text" class="form-control" id="txmarca" placeholder="Ingrese la marca">
                     </div>
					 <button type="submit" class="btn btn-info" id='btCrear' accesskey="g"><u>G</u>uardar</button> 
                     <!--<button type="submit" class="btn btn-info" ng-click="create()">Guardar</button> -->
                    </form>
                   </div>
                </div>
        	</div>
			<div class="col-md-7">
             <div class="panel panel-info alert-info">
              <div class="panel-heading"><h3 class="panel-title" style='color: #9C2F2F;font_weight: bold;text-align: center;
			  font-family: "Latin Modern Roman 10";font-size: 105%;'>
			  <b>Lista de Marcas</b></h3></div>
               <div class="panel-body" style='background-color: #FFFAFA;'>			    			   
                <div class="form-group" style="text-align: left;">
				 
				 <div class="col-xs-10">
                  <label style='color:blue;'>Buscar:</label><input type="text" id='txmrcBuscar' class="form-control input-sm" size='20px'>               
				 </div>
				 
				<table class="table table-bordered table-responsive" cellspacing="1" width="100%">
                 <thead><th style='color:green;font-weight:bold;text-align:center;'>Nro</th><th style='color:green;font-weight:bold;text-align:center;'>Marca</th>
				 <th style='color:green;font-weight:bold;text-align:center;'> Gestión</th></thead>
                 <tbody id='tablita'></tbody>
                </table>
				
              </div>
             </div>
            </div>
      </div>			

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer --><?php control::pieDePagina();?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <!--<h3 class="control-sidebar-heading">Recent Activity</h3> -->
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p style='color:blue;'>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/sweetalert-dev.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
	 
 <script>	  
  /*****************Variables Globales******************/
  url="../controllers/Procesador.php";iden="";  
  
  $(document).ready(function (e) {
   Mostrar("","");
   $("#txmrcBuscar").keyup(function (e) {Mostrar("",$(this).val());});
   
   $('#btCrear').click(function(e){        
    e.preventDefault();   
    if($("#txmarca").val().trim().length===0){
     swal("Aviso","Faltan datos de la Marca","info");$("#txmarca").focus();            
    } 
    else{
	 if(iden.length===0){
      $.ajax({url: url, type: 'POST',data: "ev=3" + "&mrc=" + $("#txmarca").val().trim(),
       success: function (msg) {
        $("#txmarca").val("");
	    swal("Creación",msg.trim(),"info");                
	    Mostrar("","");
       }, error: function (xml, msg) {}                                                          
      });      	  
     }		 
     else{		 
       $.ajax({url: url,type: 'POST',data: {ev:4,idmc:iden,mrc:$('#txmarca').val()},
        success: function (msg) {               		 
         Mostrar("","");swal("Aviso",msg.trim(),"info");
		 iden="";$('#txmarca').val('');$('#btCrear').text('Grabar');
        }, error: function (xml, msg) {}                                                                    
       });
	 }	 
    }	   
   });               
  });
  function Mostrar(id,dt){var id="";
     $.ajax({url: url, type: 'POST',
       data: "ev=1" + "&idmr=" + id + "&mrc="+dt,
      success: function (msg) {       
       $("#tablita").html(msg);
      },
      error: function (xml, msg) {
       swal("Aviso",msg.trim(),"info");  
      }
     });  
    }
	
	function Seleccionamarca(id){
	  iden=id;	  
	  $.ajax({url: url,type: 'POST',data: "ev=2 &idmc="+id,
           success: function (msg) {          
            $('#btCrear').text('Grabar Cambios');			
            $("#txmarca").val(msg.trim());       
			$("#txmarca").focus()                                                                                    
           }, error: function (xml, msg) {}                                                                    
         });
	}
 </script>
</body>
</html>