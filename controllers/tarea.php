<?php 


require_once 'common/config.php';
    require_once 'models/execute_query.class.php';
    include 'models/usuario.class.php';

    $user = new Usuario();

    $semestres = $user ->listarSemestres();
$view = $path['views'].basename($_SERVER['PHP_SELF']); 
require $path['tpl'].'template.php'; 
?>