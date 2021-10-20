/*****************Variables Globales******************/
url = "../controllers/Procesador.php";
iden = "";
$(document).ready(function (e) {
    LLenarPaquetesTuristicos();
    Mostrar("", "");
    document.getElementById('cbEstadoPaquete').selectedIndex = -1;
    $('#txequiBuscar').keyup(function (e) {
        Mostrar("", $(this).val());
    });

    $('#btnCrearASD').click(function (e) {

    });
    $('#btnMarcasio').click(function () {

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
        data: {ev: 20, eqimp: dt, opc: 0},
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

