<?php

session_start();
require "../Modelo/Usuario.php";

$us = new Usuario();

switch ($_REQUEST["operador"]) {
    case "validar_usuario":
        if (isset($_POST["telefono"], $_POST["clave"]) && !empty($_POST["telefono"]) && !empty($_POST["clave"])) {
            $telefonoIngresado = $_POST["telefono"];
            $password = $_POST["clave"];
            $passwordE = $us->encryption($password);
            if ($user = $us->ValidarUsuario($telefonoIngresado, $passwordE)) {
                //foreach ($user as $campos => $valor) {
                foreach ($user as $campos) {

                    //$_SESSION["user"][$campos] = $valor;
                    $_SESSION["user"]['ID_usuario'] = $campos['ID_usuario'];
                    $_SESSION["user"]['nombre'] =  $campos['nombre'];
                    $_SESSION["user"]['email'] =  $campos['email'];
                    $_SESSION["user"]['telefono'] =  $campos['telefono'];
                    $_SESSION["user"]['empresa'] =  $campos['empresa'];
                    $_SESSION["user"]['permisos'] =  $campos['permisos'];
                    $_SESSION["user"]['status_usuario'] =  $campos['status_usuario'];
                    $_SESSION["user"]['clave'] =  $campos['clave'];
                  //  $_SESSION["user"]['foto'] =  $campos['foto'];
                }
                // $response = "success";
                $response = $campos['permisos'];
            } else {
                $response = "notfound";
            }
        } else {
            $response = "requerid";
        }
        echo $response;
        break;

default:
echo "No hay opcion valida";
break;

}
