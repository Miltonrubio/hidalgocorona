
<?php

// define('SERVIDOR', '192.168.1.252');
// define('DATABASE', 'georgio2023');
// define('USERNAME', 'admintaller');
// define('PASSWORD', 'Taller2023');
// define('URL', 'http://tallergeorgio.hopto.org:5613/tallergeorgio/imagenes/mecanico/');
// define('URLHidalgo', '');
// define('DSN', 'mysql:host='.SERVIDOR.';dbname='.DATABASE.';charset=utf8mb4');


$servidor = gethostname();
if ($servidor == "bitalaserv05") {
  if (!defined('SERVIDOR')) define('SERVIDOR', 'localhost');
  //if (!defined('DATABASE')) define('DATABASE', 'georgio2023');
  if (!defined('DATABASE')) define('DATABASE', 'tallertemporal');
  // if (!defined('USERNAME')) define('USERNAME', 'admintaller');
  // if (!defined('PASSWORD')) define('PASSWORD', 'Taller2023');
  if (!defined('USERNAME')) define('USERNAME', 'milton');
  if (!defined('PASSWORD')) define('PASSWORD', 'Taller88');
  //  if (!defined('URL')) define('URL', 'http://192.168.1.204/tallergeorgio/imagenes/');
  if (!defined('DSN')) define('DSN', 'mysql:host=' . SERVIDOR . ';dbname=' . DATABASE . ';charset=utf8mb4');
} else {
  if (!defined('SERVIDOR')) define('SERVIDOR', '192.168.16.162');
  if (!defined('DATABASE')) define('DATABASE', 'coronahidalgo');
  if (!defined('USERNAME')) define('USERNAME', 'root');
  if (!defined('PASSWORD')) define('PASSWORD', '');
  //  if (!defined('URL')) define('URL', 'http://tallergeorgio.hopto.org:5613/tallergeorgio/imagenes/');
  if (!defined('DSN')) define('DSN', 'mysql:host=' . SERVIDOR . ';dbname=' . DATABASE . ';charset=utf8mb4');
}

?>