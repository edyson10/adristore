$(document).ready(function() {
    $("#formIngresarAdministrador").on('submit', function(e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos);
        $.ajax({
            url: 'vista/modulos/ajax.php',
            method: 'post',
            data: datos,
            dataType: "json",
            success: function(respuesta) {
                console.log(respuesta);
                if (respuesta["exito"]) {
                    ingresoExitoso("Inicio Sesión!", "Bienvenido a Adri Store");
                } else if (!respuesta["exito"]) {
                    respuestaError("Error!", "El Administrador no existe");
                }
            },
        });
    });
});