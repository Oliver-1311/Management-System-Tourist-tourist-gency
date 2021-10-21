/*****************Variables Globales******************/
url="../controllers/Procesador.php";iden="";

$(document).ready(function (e) {
    LLenarTipoPaquetesTuristicos();
    document.getElementById('cbEstadoPaquete').selectedIndex = -1;
    Mostrar("","");
    $("#txmrcBuscar").keyup(function (e) {Mostrar("",$(this).val());});

    $('#btCrear').click(function(e){
        e.preventDefault();
      if($('#txnombreP').val().trim().length===0){
          swal('Aviso', 'Falta ingresar el nombre del paquete','info')
      }else{
          if($('#txmontoP').val().trim().length===0){
              swal('Aviso', 'Falta ingresar el monto','info')
          }else{
              if($('#cbEstadoPaquete option:selected').text().trim().length===0){
                  swal('Aviso', 'Falta seleccionar el estado del paquete','info')
              }else{
                  if($('#cbTipoPaquete option:selected').text().trim().length===0){
                      swal('Aviso', 'Falta seleccionar el Tipo de Paquete','info')
                  }else{
                      $.ajax({url: url, type: 'POST',data: {ev:23,nmbrT:$("#txnombreP").val(),montoT:$("#txmontoP").val(),
                           estadoT:$("#cbEstadoPaquete option:selected").text(),TipPaq:$("#cbTipoPaquete option:selected").index()+1},
                          success: function (msg) {
                              swal("Creación",msg.trim(),"info");$("#txnombreP").val("");$("#txmontoP").val("");
                              document.getElementById('cbEstadoPaquete').selectedIndex=-1;
                              document.getElementById('cbTipoPaquete').selectedIndex=-1;Mostrar("","");
                          }, error: function (xml, msg) {}
                      });
                  }
              }
          }
      }
    });
});
function Mostrar(id, dt) {
    var id = "";
    $.ajax({
        url: url, type: 'POST',
        data: {ev:19, paqTu: dt, opc: 0},
        success: function (msg) {
            $("#tablita").html(msg);
        },
        error: function (xml, msg) {
            swal("Aviso", msg.trim(), "info");
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
function LLenarTipoPaquetesTuristicos() {
    $("#cbTipoPaquete").empty();
    $.post(url, {ev:21}, function (data) {
        data.forEach(function (tipoPaquete) {
            $('#cbTipoPaquete').append($('<option>', {value: tipoPaquete.id, text: tipoPaquete.nombre}));
        });
        document.getElementById('cbTipoPaquete').selectedIndex = -1;
        $("#txdescripcion").focus();
    }, "json");
}
