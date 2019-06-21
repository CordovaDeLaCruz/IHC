<?php 

    require_once 'common/config.php';
    require_once 'models/execute_query.class.php';
    include 'models/usuario.class.php';

    $user = new Usuario();

    $response = $user->getTarea();
    $semestres = $user ->listarSemestres();


    foreach($response as $col){
        $estado = $col["Estado"];
        $nota = $col["Nota"];
        
        if($nota== NULL){
            $textoNota = 0;
        }else{
            $textoNota = $nota;
        }
        
        if($estado ==1){
            $texto = "Entregado";
            $idTexto = "entregado";
        }else{
             $texto = "No Entregado";
            $idTexto = "no_entregado";
        }
        
        $htmlListaTarea .='
        
        <div class="tarea">
			<div class="descrip_tarea">
				<h4>'.$col["Titulo"].'</h4>
				<p>'.$col["TareaDescripcion"].'</p>	
			</div>
			<div class="caract_tarea">
				<div class="estado">
					<div>ESTADO:</div>
					<div id="'.$idTexto.'">'.$texto.'</div>
				</div>
				<div class="nota">
					<div>NOTA:</div>
					<div>
						<div>'.$textoNota.'</div>
					</div>
				</div>	
			</div>
			
		</div>
        
        ';
    }

$view = $path['views'].basename($_SERVER['PHP_SELF']); 
require $path['tpl'].'template.php'; 
?>