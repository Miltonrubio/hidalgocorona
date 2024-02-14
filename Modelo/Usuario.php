<?
define('METHOD', 'AES-256-CBC');
define('SECRET_KEY', '$CARLOS@2016');
define('SECRET_IV', '101712');

require "../config/Conexion.php";


class Usuario
{

    public $cnx;

    function __construct()
    {
        $this->cnx = Conexion::ConectarDB();
        //$this->cnx= new PDO('mysql:host=localhost; dbname=georgio', 'root', '1234'); 
    }

    function ListarUsuarios()
    {
        //$query = "SELECT * FROM adm_usuarios WHERE estado='activo' and tipo = 'user'";
        $query = "SELECT * FROM usuarios where status_usuario = 1 ";
        $result = $this->cnx->prepare($query);
        if ($result->execute()) {
            if ($result->rowCount() > 0) {
                while ($fila = $result->fetch(PDO::FETCH_ASSOC)) {
                    $datos[] = $fila;
                }
                return $datos;
            } else {
                echo "";
            }
        }
        return false;
    }



    function ValidarUsuario($email, $pass)
    {
        $query = "SELECT * from usuarios WHERE telefono = ? AND clave = ? LIMIT 1";
        // echo "octubre:".$query."*****".$email;
        $result = $this->cnx->prepare($query);
        $result->bindParam(1, $email);
        $result->bindParam(2, $pass);
        $result->execute();
        //$result->get_result();
        $fila = $result->fetchAll();

        if ($result) {
            return $fila;
        } else {

            return false;
        }





        /*
        $contra = "";
        foreach ($fila as $row) {
            //echo $row['nombre']."<br />\n";
            $contra = $row['password'];
        }
        //echo $pass ."==". $contra;
        //echo $fila["password"];
        if ($pass == $contra) {
            // echo "aqui";
            //echo "octubre3:".$fila["password"];
            return $fila;
        } else {
            // echo "no son iguales";
        }
        */
    }



    function encryption($string)
    {
        $output = FALSE;
        $key = hash('sha256', SECRET_KEY);
        $iv = substr(hash('sha256', SECRET_IV), 0, 16);
        $output = openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output = base64_encode($output);
        return $output;
    }

    public static function decryption($string)
    {
        $key = hash('sha256', SECRET_KEY);
        $iv = substr(hash('sha256', SECRET_IV), 0, 16);
        $output = openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }



    function ObtenerPassword($idusuario)
    {
        //$query = "SELECT * FROM usuarios WHERE idusuario = ? ";
        $query = "SELECT * FROM adm_usuarios WHERE idusuario = ? ";
        $result = $this->cnx->prepare($query);
        $result->bindParam(1, $idusuario);
        $result->execute();
        $fila = $result->fetch();

        return $fila["password"];
    }
}
