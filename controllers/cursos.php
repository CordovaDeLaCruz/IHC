<?php 
    require_once 'common/config.php';
    require_once 'models/execute_query.class.php';
    include 'models/usuario.class.php';

    $user = new Usuario();

    $response = $user->getCurso();
    $semestres = $user ->listarSemestres();
    foreach($response as $col){
        $htmlListaCurso .= '
        <div class="panel panel-primary">
            <div class="panel-heading">'.$col["CursoCodigo"].': '.strtoupper ($col["CursoNombre"]).'</div>
             <div class="panel-body">
               Profesores: '.$col["ProfesorNombre"].', '.$col["ProfesorApellido"].'
              </div>
              </div>
        ';
        
        $htmlMisCurso .= '
        <a class="hover_link" href="cursos-detalle.php">
           <div class="panel panel-default">
              <div class="panel-body">
                 '.strtoupper ($col["CursoNombre"]).'
               </div>
             </div>
         </a>
        ';
    }

 
    


$view = $path['views'].basename($_SERVER['PHP_SELF']); 
require $path['tpl'].'template.php'; 
?>