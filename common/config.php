<?php
error_reporting(E_ALL ^ E_NOTICE);
header("Content-type:text/html; charset=utf-8");
define("SLASH", "/");

$path = array(
    "controllers" => "controllers" . SLASH,
    "tpl" => "tpl" . SLASH,
    "views" => "views" . SLASH,
    "common" => "common" . SLASH,
    "lib" => "common" . SLASH . "lib" . SLASH
);
$contact = array(
    "msgok" => "No se pudo enviar el mensaje, intentelo de nuevo.",
    "msgerror" => "El mensaje se envio correctamente, en breve nos pondremos en contacto con usted."
);

?>