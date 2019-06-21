<?php 
    require_once 'common/config.php';
    require_once 'models/execute_query.class.php';
    include 'models/usuario.class.php';


    $user = new Usuario();


    if(isset($_POST['acceder']) and $_POST['acceder']==1){
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $getUser = $user->getUser($email,$password);
        
        if($getUser==1){
            $msg = '
			<div class="bg-primary alert-success text-center">
				Bienvenido(a)
			</div><br>
		      ';
            
            echo '
            
            <script>
						document.location="inicio.php";
                    </script>
            ';
            
        }else{
            $msg = '
			<div class="bg-danger alert-danger text-center">
				El usuario o contraseña que ingresaste es incorrecto.
			</div><br>
		      ';
        }
        
    }
    

    



$view = $path['views'].basename($_SERVER['PHP_SELF']); 
require $path['tpl'].'login.php'; 
?>