
$(document).on("submit", '#form_login', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type: "POST",
        method: "POST",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        url: './Controlador/controladorUsuario.php?operador=validar_usuario',
        
        success: function (response) {
            var response = response.trim();
            switch (response) {

                case 'SUPERADMIN':
                    location.href = "./pantallaCorona.php";
                    break;
                /*
                case 'SUPERADMIN':
                    location.href = "web/pag/Recepcion.php";
                    break
                case 'RECEPCION':
                    location.href = "web/pag/Recepcion.php";
                    break
                case 'CORTES':
                    location.href = "web/pag/Valesefectivo.php";
                    break;
                    */
                case 'notfound':
                    Swal.fire({
                        icon: "error",
                        title: "Credenciales invalidas",
                        text: "Verifique el número y la contraseña",
                    });
                    break;
                case 'requerid':
                    Swal.fire({
                        icon: "warning",
                        title: "Campos faltantes",
                        text: "Es necesario que todos los campos esten llenos.",
                    });
                    break;
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            // Aquí capturas y manejas el error
            console.log("Error en la solicitud AJAX:");
            console.log("Estado de la solicitud: " + textStatus);
            console.log("Error: " + errorThrown);
            toastr.error("Algo salió mal", "Error!"); // Muestra un mensaje genérico de error
        }
    })
});