<!DOCTYPE html>
<!-- This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.-->
<?php $ruta = 'views/marca.php';
include_once('../controllers/Objetos/Cotrolador.php'); ?>
<html>
<head>
    <?php control::CabeceraPagina() ?>
</head>
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
            <?php control::CrearMenu1(); ?>

            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 style='text-align:center;font-weight:bold;color:#091896;'>Gestión de Paquetes de Viaje</h1>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info alert-info">
                        <div class="panel-heading">
                            <h3 class="panel-title" style='text-align: center;color:#9C2F2F;font-family: "Latin Modern Roman 10";
				  font-size: 105%;'><b>Nuevo Paquete de Viaje</b></h3>
                        </div>
                        <div class="panel-body" style='background-color: #FFFAFA;'>
                            <form role="form">
                                <div class="form-group">
                                    <label style='color:blue'>Descripción*:</label>
                                    <input type="text" class="form-control" id="txdescripcionV"
                                           placeholder="Descripción...." required>
                                </div>
                                <div class="form-group">
                                    <label style='color:blue'>Fecha :</label>
                                    <input type="date" class="form-control" id="txFechaV" name="txFechaV" placeholder="Precio Sugerido" required>
                                </div>
                                <div class="form-group">
                                    <label style='color:blue'>Hora:</label>
                                    <input type="time" class="form-control" id="txHoraViaje" name="txHoraViaje" required>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-11">
                                        <label style='color:blue'>Paquete Turístico</label>
                                        <select class="form-control" id="cbPaqueteTuristico"></select>
                                    </div>

                                    <div class="form-group col-md-1"><br><br>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                id="btnPaqTuristico">
                                            ...
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label style='color:blue'>Estado: </label>
                                    <select class="form-control" id="cbEstadoViaje">
                                        <option value=0>Activo</option>
                                        <option value=1>Desactivo</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <button type="submit" class="btn btn-info" style='position: relative; left: 30px;'
                                            id='btnCrearPaqViaje'  accesskey="g"><u>G</u>uardar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


        </section>
        <!-- /.content -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info alert-info">
                    <div class="panel-heading"><h3 class="panel-title" style='color: #9C2F2F;font_weight: bold;text-align: center;
			  font-family: "Latin Modern Roman 10";font-size: 105%;'>
                            <b>Lista de Equipos o Implementos</b></h3></div>
                    <div class="panel-body" style='background-color: #FFFAFA;'>
                        <div class="form-group" style="text-align: left;">
                            <div class="col-xs-10">
                                <label style='color:blue;'>Buscar:</label><input type="text" id='txequiBuscar'
                                                                                 class="form-control input-sm"
                                                                                 size='20px'>
                            </div>
                            <table class="table table-bordered table-responsive" cellspacing="1" width="100%">
                                <thead class="table-responsive">
                                <th style='color:green;font-weight:bold;text-align:center;'>Nro</th>
                                <th style='color:green;font-weight:bold;text-align:center;'>Descripción</th>
                                <th style='color:green;font-weight:bold;text-align:center;'> Fecha</th>
                                <th style='color:green;font-weight:bold;text-align:center;'>Hora</th>
                                <th style='color:green;font-weight:bold;text-align:center;'> Paquete Turistico</th>
                                <th style='color:green;font-weight:bold;text-align:center;'> Estado</th>
                                <th style='color:green;font-weight:bold;text-align:center;'> Gestion</th>
                                </thead>
                                <tbody id='tablita'></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- Main Footer --><?php control::pieDePagina(); ?>


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

                <!--<ul class="control-sidebar-menu">
                  <li>
                    <a href="javascript:;">
                      <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                      <div class="menu-info">
                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                        <p>Will be 23 on April 24th</p>
                      </div>
                    </a>
                  </li>
                </ul> -->

                <!-- /.control-sidebar-menu -->

                <!--<h3 class="control-sidebar-heading">Tasks Progress</h3>
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
                </ul> -->
                <!-- /.control-sidebar-menu -->
            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->

            <!-- <div class="tab-pane" id="control-sidebar-settings-tab">
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
                 </div> -->
            <!-- /.form-group -->
            <!-- </form></div> -->
            <!-- /.tab-pane -->
        </div>
    </aside>


    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style='background-color:	#FFFAFA;'>
            <div class="modal-header" style="background-color:#ADDCD7">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only"
                        style="color:red; background-color: white;font-weight;:bold;">Close</span></button>
                <h4 class="modal-title" id="myModalLabel" style='text-align:center;color:#990724;font-weight:bold;'>
                    Nueva Marca</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="txtmrc" placeholder="Nueva Marca">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" accesskey='c'><u>C</u>errar</button>
                <button type="button" class="btn btn-primary" id='btnSave' accesskey='g'><u>G</u>rabar</button>
            </div>
        </div>
    </div>
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
<script src="JS_Scripts/paquete_viaje.js"></script>


</body>
</html>
