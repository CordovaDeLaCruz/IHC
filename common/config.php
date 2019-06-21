<?php
error_reporting(E_ALL ^ E_NOTICE);
header("Content-type:text/html; charset=utf-8");
define("SLASH", "/");
define("SLASH_SUP", "../");
define('URL',basename($_SERVER['REQUEST_URI']));

define('HOST', '142.93.198.115:6767');
define('DATA_BASE', 'ihc');
define('USER_DB', 'test-user');
define('PASS_DB', 'test2019');

//Configuracion de HEAD
$site = array(
    "charset" => "UTF-8"
    ,"lang" => "es"
    ,"name" => "Aula Virtual FISI"//titulo de página
    ,"keywords" => "" // palabras claves - head
    ,"description" => "" // descripcion - head
    ,"index" => "off" // valores off/on para que la web indexe en los buscadores
);


//configuracion de idioma para link de catálogo

if($_GET['prod']){
    $prod='?prod='.$_GET['prod'];
}else{
    $prod='';
}
if($_GET['cat']){
    $cat='?cat='.$_GET['cat'];
}else{
    $cat='';
}

//configuracion de idioma

if(IsSet($_GET['lang'])){//segun la variable lang se envia cookie
    $site['lang']=$_GET['lang'];
    setcookie("lang",$site["lang"],time()+86400);
    header("Location: ".basename($_SERVER['PHP_SELF']).$cat.$prod); // $cat y $prod son variables condicionadas y definidas arriba
}else{
    if(IsSet($_COOKIE['lang'])){
        $site['lang']=$_COOKIE['lang'];
    }
}

//path de rutas(no se usan todas)
$path = array(
    "controllers" => "controllers" . SLASH,
    "css" => "app/css" . SLASH,
    "img" => "app/img" . SLASH,
    "js" => "app/js" . SLASH,
    "module" => "module" . SLASH,
    "tpl" => "tpl" . SLASH,
    "views" => "views" . SLASH,
    "common" => "common" . SLASH,
    "lib" => "common" . SLASH . "lib" . SLASH,
    "lang" => "common" . SLASH . "lang" . SLASH
);


//Mensajes de contáctenos
$contact = array(
    "msgok" => "No se pudo enviar el mensaje, intentelo de nuevo."
    ,"msgerror" => "El mensaje se envio correctamente, en breve nos pondremos en contacto con usted."
);




if (!isset($_POST['nombre'])) {
  include $path['lang'] . 'lang_' . $site['lang'] . '.php';
}


?>