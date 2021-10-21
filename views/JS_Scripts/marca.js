/*****************Variables Globales******************/
url = "../controllers/Procesador.php";
iden = "";

$(document).ready(function (e) {
    Mostrar("", "");
    $("#txmrcBuscar").keyup(function (e) {
        Mostrar("", $(this).val());
    });

    $('#btCrear').click(function (e) {
        e.preventDefault();
        if ($("#txmarca").val().trim().length === 0) {
            swal("Aviso", "Faltan datos de la Marca", "info");
            $("#txmarca").focus();
        } else {
            if (iden.length === 0) {
                $.ajax({
                    url: url, type: 'POST', data: "ev=3" + "&mrc=" + $("#txmarca").val().trim(),
                    success: function (msg) {
                        $("#txmarca").val("");
                        swal("Creación", msg.trim(), "info");
                        Mostrar("", "");
                    }, error: function (xml, msg) {
                    }
                });
            } else {
                $.ajax({
                    url: url, type: 'POST', data: {ev: 4, idmc: iden, mrc: $('#txmarca').val()},
                    success: function (msg) {
                        Mostrar("", "");
                        swal("Aviso", msg.trim(), "info");
                        iden = "";
                        $('#txmarca').val('');
                        $('#btCrear').text('Grabar');
                    }, error: function (xml, msg) {
                    }
                });
            }
        }
    });
});

function Mostrar(id, dt) {
    var id = "";
    $.ajax({
        url: url, type: 'POST',
        data: "ev=1" + "&idmr=" + id + "&mrc=" + dt,
        success: function (msg) {
            $("#tablita").html(msg);
        },
        error: function (xml, msg) {
            swal("Aviso", msg.trim(), "info");
        }
    });
}

function Seleccionamarca(id) {
    iden = id;
    $.ajax({
        url: url, type: 'POST', data: "ev=2 &idmc=" + id,
        success: function (msg) {
            $('#btCrear').text('Grabar Cambios');
            $("#txmarca").val(msg.trim());
            $("#txmarca").focus()
        }, error: function (xml, msg) {
        }
    });
}