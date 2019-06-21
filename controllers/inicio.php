<?php 

    require_once 'common/config.php';
    require_once 'models/execute_query.class.php';
    include 'models/usuario.class.php';

    $user = new Usuario();


    $response = $user->getCurso();
    $semestres = $user ->listarSemestres();
    


    if(count($response) > 0){
    foreach($response as $col){
        
        $htmlCurso = '
        
         <hr id="linea">
         
            <h4>'.$col["CursoNombre"].'</h4>
            <h4>'.$col["CursoCodigo"].'</h4>
            <h4>'.$col["ProfesorNombre"].' '.$col["ProfesorApellido"].'</h4>    
        ';
      
    }    
        
        
    }else{
       echo '<hr id="linea">
            <h5>No se encuentra curso alguno...</h5>' ;
    }
   

$view = $path['views'].basename($_SERVER['PHP_SELF']); 
require $path['tpl'].'template.php'; 
?>