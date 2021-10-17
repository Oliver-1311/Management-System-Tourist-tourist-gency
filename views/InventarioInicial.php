<!DOCTYPE html>
<!-- This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.-->
<?php $ruta='views/marca.php';include_once('../controllers/Objetos/Cotrolador.php'); ?>
<html>
 <head> <?php control::CabeceraPagina() ?></head>
 
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
      <h1 style='text-align:center;font-weight:bold;color:#091896;'>Gestión del Inventario Inicial</h1>      
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <!--------------------------
        | Your Page Content Here |
        -------------------------->	
      <!-- /.content -->
	  <div class="row">
	    <div class="col-md-12">
		
            <div class="panel panel-info alert-info">
              <div class="panel-heading">
			   <h3 class="panel-title" style='text-align:center;font-weight:bold;color:#9C2F2F;font-size:120%;font-family: times new roman'>
			   Lista de Equipos o Implementos
			   </h3>
			  </div>
			  
              <div class="panel-body" style='background-color: #FFFAFA;'>			    			   
                <div class="form-group" style="text-align: left;">				 
				  <div class="col-xs-10">
                   <label style='color:blue;'>Buscar:</label><input type="text" id='txequiBuscar' class="form-control input-sm" size='20px'>               
				  </div>
				  
				  <table class="table table-bordered table-responsive" cellspacing="1" width="100%">
                   <thead class="table-responsive"><th style='color:green;font-weight:bold;text-align:center;'>Nro</th>
				   <th style='color:green;font-weight:bold;text-align:center;'>Descripción</th>
				   <th style='color:green;font-weight:bold;text-align:center;'> Tipo</th>
				   <th style='color:green;font-weight:bold;text-align:center;'>Precio</th>
				   <th style='color:green;font-weight:bold;text-align:center;'>Cantidad</th></thead>
                   <tbody id='tablita'></tbody>
                  </table>				
				  
                </div>
              </div>
			 
            </div>
			
          </div>	  
	  </div>
	</section>  
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer --><?php control::pieDePagina();?>
</div>





<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style='background-color:	#FFFAFA;'>
      <div class="modal-header" style="background-color:#ADDCD7">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only" 
		style="color:red; background-color: white;font-weight;:bold;">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" style='text-align:center;color:#990724;font-weight:bold;'>Nueva Marca</h4>
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
	 
 <script>	  
  /*****************Variables Globales******************/
  url="../controllers/Procesador.php";iden="";    
  $(document).ready(function (e) {
   Mostrar("","");
   $('#txequiBuscar').keyup(function(e){Mostrar("",$(this).val());});
   
   //$("tbody").on('keyup','.editable',function(event){
    $("tbody").on('keypress','.editable',function(e){	         
	  var trs=$(this).closest('tr');			
      var cantidad=trs.find('input[type="text"]').val();
	  
	  if((e.which == 13) && (cantidad>0)){
		
		$.post(url,{ev:10},function(data){      
		 if(data.esta=='Inicial'){
		  $.ajax({url: url, type: 'POST',data: {ev:9,id:trs.data('id'),ctd:cantidad},
           success: function (msg) {Mostrar("","");}, error: function (xml, msg) {}                                                          
          });	 
		 }
		 else{
		  swal('Aviso','El inventario inicial esta cerrado ','info');       						 
		  Mostrar("","");
		 }
         		 
		},"json");
	   
	   
	   /*$.ajax({url: url, type: 'POST',data: {ev:9,id:trs.data('id'),ctd:cantidad},
         success: function (msg) {Mostrar("","");}, error: function (xml, msg) {}                                                          
       });			  */
	   
      }			
	  
   });
	   
  /*$('input[type="text').on('keypress', function (e) {
         var id=$(this).data('id');
         var val=$(this).val();
         if(e.which === 13){
            alert(val);
         }
   });	   **/
   
   $('#btCrear').click(function(e){
	if($('#txdescripcion').val().trim().length==0){
     swal('Aviso','Falta ingresar la descripción','info');
	 $('#txdescripcion').focus();		 
	}
 	else{
     if($('#txprecio').val().trim().length==0){
	  swal('Aviso','Falta ingresar el precio','info');$('#txprecio').focus();
	 }
 	 else{
	  if($("#cbtipo option:selected").text().trim().length==0){
	   swal('Aviso','Falta seleccionar el tipo','info');$('#cbtipo').focus(); 
	  }
 	  else{
	   if($("#cbMarca option:selected").text().trim().length==0){
	    swal('Aviso','Falta seleccionar la marca','info');$('#cbMarca').focus();
	   }
 	   else{             
        if(iden.length===0){         
		 $.ajax({url: url, type: 'POST',data: {ev:6,dscr:$("#txdescripcion").val(),prcsg:$("#txprecio").val(),
		 tip:$("#cbtipo option:selected").text(),idmrc:$("#cbMarca").val()},
          success: function (msg) {
		   swal("Creación",msg.trim(),"info");$("#txdescripcion").val("");$("#txprecio").val("");
		   document.getElementById('cbtipo').selectedIndex=-1; 
		   document.getElementById('cbMarca').selectedIndex=-1;Mostrar("","");
          }, error: function (xml, msg) {}                                                          
         }); 		 		 		 
		} 		
        else{			
	     $.ajax({url: url, type: 'POST',data: {ev:8,id:iden,dscr:$("#txdescripcion").val(),prcsg:$("#txprecio").val(),
		 tip:$("#cbtipo option:selected").text(),idmrc:$("#cbMarca").val()},
          success: function (msg) {
		   swal("Edición",msg.trim(),"info");$("#txdescripcion").val("");$("#txprecio").val("");
		   $('#btCrear').html('<u>G</u>rabar');
		   document.getElementById('cbtipo').selectedIndex=-1; 
		   document.getElementById('cbMarca').selectedIndex=-1; Mostrar("","");iden="";
          }, error: function (xml, msg) {}                                                          
         });		 
		 
        }
		
	   }	  
	  }	 
	 }		
	} 
	e.preventDefault(); 
   });
   
   $('#btnMarca').click(function(){	
    $('#txtmrc').val('');$('#myModal').modal('show');
   });
   
   $('#btnSave').click(function(){
    if($('#txtmrc').val().trim().length>0){		
	 $.ajax({url: url, type: 'POST',data: "ev=3" + "&mrc=" + $("#txtmrc").val().trim(),
       success: function (msg) {
        $("#txtmrc").val("");
	    swal("Creación",msg.trim(),"info");LlenarMarcas();
       }, error: function (xml, msg) {}                                                          
      }); $('#myModal').modal('hide');    		
    }   		 	
   });         
   
  });
  
   
  
 </script>
 
  <script>       
  
   function Mostrar(id,dt){var id="";
     $.ajax({url: url, type: 'POST',
       data: {ev:5,eqimp:dt,opc:1},
      success: function (msg) {       
       $("#tablita").html(msg);
      },
      error: function (xml, msg) {
       swal("Aviso",msg.trim(),"info");  
      }
     });  
    }
	
  </script>
  
</body>
</html>