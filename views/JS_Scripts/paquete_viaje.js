/*****************Variables Globales******************/
url = "../controllers/Procesador.php";
iden = "";
$(document).ready(function (e) {
    LLenarPaquetesTuristicos();
    Mostrar("", "");
    document.getElementById('cbEstadoViaje').selectedIndex = -1;
    $('#txequiBuscar').keyup(function (e) {
        Mostrar("", $(this).val());
    });

    $('#btnCrearPaqViaje').click(function (e) {
        e.preventDefault();
        if($('#txdescripcionV').val().trim().length===0){
            swal('Aviso', 'Falta  ingresar la descripción','info');$('#txdescripcionV').focus();
        }else{
            if($('#txFechaV').val().trim().length===0){
                swal('Aviso', 'Falta ingresar la fecha de viaje','info');$('#txFechaV').focus();
            }else{
                if($('#txHoraViaje').val().trim().length===0){
                    swal('Aviso', 'Falta ingresar la hora de viaje','info');$('#txHoraViaje').focus();
                }else{
                    if($('#cbPaqueteTuristico option:selected').text().trim().length===0){
                        swal('Aviso', 'Falta seleccionar el paquete turísticon','info');$('#cbPaqueteTuristico').focus();
                    }else{
                        if($('#cbEstadoViaje option:selected').text().trim().length===0){
                            swal('Aviso', 'Falta seleccionar el estado de viaje','info');$('#cbPaqueteTuristico').focus();
                        }else{

                                $.ajax({url: url, type: 'POST',data: {ev:22,dsc:$("#txdescripcionV").val(),fechaV:$("#txFechaV").val(),
                                        horaV:$("#txHoraViaje").val(),PaqT:$("#cbPaqueteTuristico option:selected").index()+1,Estd:$("#cbEstadoViaje option:selected").text()},
                                    success: function (msg) {
                                        swal("Creación",msg.trim(),"info");$("#txdescripcionV").val("");$("#txFechaV").val("");$("#txHoraViaje").val("");
                                        document.getElementById('cbPaqueteTuristico').selectedIndex=-1;
                                        document.getElementById('cbEstadoViaje').selectedIndex=-1;Mostrar("","");
                                    }, error: function (xml, msg) {}
                                });

                        }
                    }
                }
            }
        }

    });


    $('#btnPaqTuristico').click(function () {

    });

    $('#btnSave').click(function () {
        if ($('#txtmrc').val().trim().length > 0) {
            $.ajax({
                url: url, type: 'POST', data: "ev=3" + "&mrc=" + $("#txtmrc").val().trim(),
                success: function (msg) {
                    $("#txtmrc").val("");
                    swal("Creación", msg.trim(), "info");
                    LLenarPaquetesTuristicos();
                }, error: function (xml, msg) {
                }
            });
            $('#myModal').modal('hide');
        }
    });
});

function SeleccionaEquipo(id) {
    iden = id;
    $.post(url, {ev: 7, idequi: id}, function (data) {
        $('#btCrear').html('G<u>r</u>abar Cambios');
        $('#btCrear').attr("accesskey", "r");
        $("#txdescripcion").val(data.desc);
        $("#txprecio").val(data.preref);
        $("#cbtipo").val(data.tipo);
        $("#cbPaqueteTuristico").val(data.idmarca);
        $("#txdescripcion").focus();
    }, "json");
}


function Mostrar(id, dt) {
    var id = "";
    $.ajax({
        url: url, type: 'POST',
        data: {ev: 20, vje: dt, opc: 0},
        success: function (msg) {
            $("#tablita").html(msg);
        },
        error: function (xml, msg) {
            swal("Aviso", msg.trim(), "info");
        }
    });
}

function LLenarPaquetesTuristicos() {
    $("#cbPaqueteTuristico").empty();
    $.post(url, {ev: 18}, function (data) {
        data.forEach(function (paqueteturistico) {
            $('#cbPaqueteTuristico').append($('<option>', {value: paqueteturistico.id, text: paqueteturistico.nombre}));
        });
        document.getElementById('cbPaqueteTuristico').selectedIndex = -1;
        $("#txdescripcion").focus();
    }, "json");
}
