
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
            console.log("resultadoooodd:" + response);
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
        error: function () {
            toastr.error("Algo salió mal", "Error!");
        }
    })
});