$(document).ready(function () {
    $("#formIngresarAdministrador").on('submit', function (e) {
        e.preventDefault();
        var datos = $(this).serializeArray();
        console.log(datos)
        $.ajax({
            url: 'model/login.php',
            method: 'post',
            data: datos,
            dataType: "json",
            type: 'POST',
            success: function (data) {
                console.log(data);
                if (data.respuesta == 'exito') {
                    ingresoExitoso("Inicio Sesión!", "Bienvenido a Adri Store");
                    setTimeout(function () {
                        window.location.href = "Administrador";
                    }, 1000);
                } else if (data.respuesta == 'error') {
                    respuestaError("Error!", "Usuario, contraseña incorrectos");
                } else if (data.respuesta == 'estado') {
                    respuestaError("Error!", "No tiene acceso al panel administrativo.");
                }
            },
        });
    });
});