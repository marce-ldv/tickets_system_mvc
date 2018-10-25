<?php

require "config/autoload.php";
require "config/config.php";

use config\Autoload as Autoload;
use config\Request as Request;
use config\Router as Router;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
 * Si la variable de sesión esta vacía, entonces
 * inicio la sesión...
 */

/** ESTO ES PARA CAPTURAR WARNINGS */
set_error_handler('exceptions_error_handler');

function exceptions_error_handler($severity, $message, $filename, $lineno) {
  if (error_reporting() == 0) {
    return;
  }
  if (error_reporting() & $severity) {
    throw new ErrorException($message, 0, $severity, $filename, $lineno);
  }
}


if (empty($_SESSION)) {
    session_start();

}
date_default_timezone_set('America/Argentina/Buenos_Aires');

/*
 * Si quiero ver el identificador de sesión, descomento:
 *
 * $identifcador = session_id();
 * echo "El identifcador de esta sesión es: $identifcador";
 */



Autoload::start();
Router::go(new Request());
