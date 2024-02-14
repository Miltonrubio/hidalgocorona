<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos.css">


    <link rel="stylesheet" href="librerias/toastr/toastr.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="librerias/sweetalert2.min.css">




</head>

<body>



    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Comentale al administrador que te registre</p>

                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form id="form_login" class="formulario__login" method="POST" >
                    <h2>Iniciar Sesión</h2>
                    <input type="text" id="telefono" name="telefono" placeholder="Ingresa tu telefono">
                    <input type="password" id="clave" name="clave"  placeholder="Contraseña">
                    <button type="submit">Entrar</button>
                </form>

                <!--Register
                    <form action="" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo">
                        <input type="text" placeholder="Correo Electronico">
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <button>Regístrarse</button>
                    </form>
                    -->
            </div>
        </div>

    </main>

    <script src="assets/js/script.js"></script>
    <script src="librerias/jquery/jquery-3.7.0.min.js"></script>
    <script src="js/login.js"></script>

    <script src="librerias/toastr/toastr.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="librerias/sweetalert2/sweetalert2.all.min.js"></script>

</body>

</html>