<?php 
require_once dirname(__FILE__).'/conexionBD.class.php';

/**
* Clase general que genera query: SET rows, ejecucion, etc
* Usar Para toda clase que usa consulta a la Base de Datos con procedimientos con retorno de datos
* y Set de Data IN u OUT
*/
class ExecuteQuery extends ConexionBD
{
	
	protected $returnOutput;

	function __construct($returnOutput = '')
	{
		# code...
		$this->returnOutput = $returnOutput;
	}

	# metodo que genera los campos que va a retornar de la consulta
	public function executeOutput($arrayRows)
	{
		
		# Estructura para procedimiento y ejecución
		$comaSP = '';
		$parametros_procedimiento = '';
		$procedure_name = $arrayRows['procedure-name'];
		$cantArrayParameters = count($arrayRows['rows-parameter']);

		for($i=0;$i<$cantArrayParameters;$i++){

			if($i==($cantArrayParameters-1)){
				$comaSP = '';
			}else{
				$comaSP = ',';
			}

			$parametros_procedimiento .= $arrayRows['rows-parameter'][$i].$comaSP;
		}


		$this->query = 'call '.$procedure_name.'('.$parametros_procedimiento.');';
        $result = $this->conectBD()->prepare($this->query);
        $result->execute();

        # Estructura para retorno de datos de consulta
        $coma = '';
        $camposOutput = '';
        $cantArrayRows = count($arrayRows['rows-return']);


        if($cantArrayRows==0){//recorre todo
        	$output = $result->fetchAll();
        }else if($cantArrayRows > 0){//retorna valores de campos elegidos
			for($f=0;$f<$cantArrayRows;$f++){
				if($f==($cantArrayRows-1)){
					$coma = '';
				}else{
					$coma = ',';
				}
				$camposOutput .= $arrayRows['rows-return'][$f].$coma;
			}
			$output = $this->conectBD()->query("select ".$camposOutput.";")->fetch(PDO::FETCH_ASSOC);  	
        }

		return $output;

	}

	# genera set de datos que introduce en capos de la BD
	public function setRows($arrayData)
	{

		$cantArrayRows = count($arrayData);

		for($i=0;$i<$cantArrayRows;$i++){
			if(strtoupper($arrayData[$i][2]) == 'STRING'){
				#set Rows
		        $this->query = 'set '.$arrayData[$i][0].' = "'.$arrayData[$i][1].'";';
		        $result1 = $this->conectBD()->prepare($this->query);
		        $result1->execute();

			}else if(strtoupper($arrayData[$i][2]) == 'INTEGER'){
				#set Rows
		        $this->query = 'set '.$arrayData[$i][0].' = '.$arrayData[$i][1].';';
		        $result1 = $this->conectBD()->prepare($this->query);
		        $result1->execute();
			}else if(strtoupper($arrayData[$i][2]) == 'NULL'){
				#set Rows
		        $this->query = 'set '.$arrayData[$i][0].' = "null";';
		        $result1 = $this->conectBD()->prepare($this->query);
		        $result1->execute();
			}
		}

	}

}


 ?>