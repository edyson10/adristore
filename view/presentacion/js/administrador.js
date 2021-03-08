$(document).ready(function () {
    $("#formIngresarAdministrador").on('submit', function (e) {
        e.preventDefault();
        $('#formIngresarAdministrador').validate({
            rules: {
                ingresarCorreoAdministrador: { required: true },
                ingresarContraseniaAdministrador: { required: true }
            }, messages: {
                ingresarCorreoAdministrador: { required: "Debe de completar los campos." },
                ingresarContraseniaAdministrador: { required: "Debe de completar los campos." }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
            submitHandler: function () {
                var datos = {
                    ingresarCorreoAdministrador: $("#ingresarCorreoAdministrador").val(),
                    ingresarContraseniaAdministrador: $("#ingresarContraseniaAdministrador").val()
                }
                console.log(datos);
                $.ajax({
                    url: 'model/login.php',
                    method: 'post',
                    data: datos,
                    dataType: "json",
                    type: 'POST',
                    beforeSend: function () {
                        respuestaInfoEspera("Iniciando sesión... ¡Espere por favor!");
                    },
                    success: function (data) {
                        console.log(data);
                        if (data.respuesta == 'exito') {
                            ingresoExitoso("Inicio Sesión!", "Bienvenido a Adri Store");
                            setTimeout(function () {
                                location.reload();
                            }, 1000);
                        } else if (data.respuesta == 'error') {
                            respuestaError("Error!", "Usuario, contraseña incorrectos");
                        } else if (data.respuesta == 'estado') {
                            respuestaError("Error!", "No tiene acceso al panel administrativo.");
                        }
                    },
                });
            }
        });
    });
});