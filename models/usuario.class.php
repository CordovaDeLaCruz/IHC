<?php

/**
* Clase para Usuarios 
*/
class Usuario extends ExecuteQuery{   

 public function listarSemestres()
	{
        $arrayData =  array(
        );


        # método de ejecucion de SET
        $this->setRows($arrayData);

        // FIN SET ROWS

        // EJECUCION Y SALIDA DE DATOS
        $data = array(
            "procedure-name"=>"sp_get_semestres"
            ,"rows-parameter"=>array(
            )
            ,"rows-return"=>array(
                
            )
        );

        # método de ejecucion y salida de datos
        $output = $this->executeOutput($data);

         foreach($output as $col){
         
		    if($mesSelected==$i){
        		$selected = 'selected';
        	}else{
        		$selected = '';
        	}
        	
			$htmlOption .= '<option value="'.$col["idSemestre"].'" '.$selected.'>'.$col["SemestreNombre"].'</option>';
        
        }
		

		return $htmlOption;

	}   
    
    
    
        public function getUser($userEmail,$userPassword){

        // SET COLUMNAS
        $arrayData =  array(
			 array("@v_email",$userEmail,"STRING")
            ,array("@v_password",$userPassword,"STRING")
            
        );


        # método de ejecucion de SET
        $this->setRows($arrayData);

        // FIN SET ROWS

        // EJECUCION Y SALIDA DE DATOS
        $data = array(
            "procedure-name"=>"sp_user_login"
            ,"rows-parameter"=>array(
                "@v_email"
                ,"@v_password"
                
                
            )
            ,"rows-return"=>array(
                
            )
        );

        # método de ejecucion y salida de datos
        $output = $this->executeOutput($data);

        if($output[0]["result"]==1){
            $response = 1;
        }else{
            $response = 0;
        }
        return $response;
            
        }
    
    
    public function getCurso(){
        $idUsuario = 1;
        
          // SET COLUMNAS
        $arrayData =  array(
			 array("@v_id_user",$idUsuario,"INTEGER")        
        );


        # método de ejecucion de SET
        $this->setRows($arrayData);

        // FIN SET ROWS

        // EJECUCION Y SALIDA DE DATOS
        $data = array(
            "procedure-name"=>"sp_select_cursos"
            ,"rows-parameter"=>array(
                "@v_id_user" 
                
            )
            ,"rows-return"=>array(
                
            )
        );

        # método de ejecucion y salida de datos
        $output = $this->executeOutput($data);

        return $output;
        
        
    }

    public function getTarea(){
        $idUsuario = 1;
        
          // SET COLUMNAS
        $arrayData =  array(
			 array("@v_id_user",$idUsuario,"INTEGER")        
        );
  

        # método de ejecucion de SET
        $this->setRows($arrayData);

        // FIN SET ROWS

        // EJECUCION Y SALIDA DE DATOS
        $data = array(
            "procedure-name"=>"sp_get_tareas"
            ,"rows-parameter"=>array(
                "@v_id_user" 
                
            )
            ,"rows-return"=>array(
                
            )
        );

        # método de ejecucion y salida de datos
        $output = $this->executeOutput($data);

        return $output;
        
        
    }


} 




?>