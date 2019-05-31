<?php
$fac=$cur=$men=$calific=$calend=0;

switch (basename($_SERVER['PHP_SELF'])) {
    case "inicio.php": 
      $fac='active'; 
    break;
    case "cursos.php": 
      $cur='active'; 
    break;
    case "mensajes.php": 
      $men='active'; 
    break;
    case "calificaciones.php": 
      $calific='active'; 
    break;
    case "calendario.php": 
      $calend='active'; 
    break;
} 
?>
   

   
<header class="col-xs-12">
    <div class="contenedor_header col-xs-12">
        <div class="logo col-xs-4 col-sm-2 col-md-4 hidden-xs hidden-sm">
            <img class="img-responsive block-center" src="app/img/logo_pc.png" alt="">
        </div>
        <div class="logo_movil col-xs-4 col-sm-2 col-md-4 visible-xs visible-sm">
            <img class="img-responsive block-center" src="app/img/logo_movil.png" alt="">
        </div>
        <div class="opciones_header col-xs-8 col-sm-10 col-md-8">
            <nav class="menu">
                <li class="opc_link">
                    <select class="form-control">
                      <option checked>SEMESTRES</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
               </li>
               <li class="opc_link">
                   <select class="">
                      <option checked>Español</option>
                      <option>Ingles</option>
                    </select>
               </li>
               <li class="opc_link">
                   <button>
                       <img class=" block-center" src="app/img/email.png" alt="">
                   </button>
               </li>
                <li class="opc_link">
                   <button>
                       <i class="material-icons md-36" style="font-size:40px; color:white;">person</i>
                        <!-- <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:30px;color:white"></span> -->
                       <!-- <img class=" block-center" src="app/img/user1.png" alt=""> -->
                   </button>
               </li>
                <li class="opc_link">
                    <button class="btn_menu">
                        <div class="linea1"></div>
                        <div class="linea2"></div>
                        <div class="linea3"></div>
                   </button>
               </li>
            </nav>
        </div>

    </div>

</header>
<div class="header_opciones col-xs-12">
    <div class="container">
       <nav>
           <li><a class="<?= $fac; ?>" href="inicio.php">Mi Facultad</a></li>
           <li><a class="<?= $cur; ?>" href="cursos.php">Mis Cursos</a></li>
           <li><a class="<?= $men; ?>" href="mensajes.php">Mis Mensajes</a></li>
           <li><a class="<?= $calific; ?>" href="calificaciones.php">Mis Calificaciones</a></li>
           <li><a class="<?= $calend; ?>" href="calendario.php">Calendario</a></li>
       </nav> 
    </div>
</div>






<div class="menu_opc_movil">
    <div class="cont_opc_movil">
        <li><a href="perfil.php">Mi Perfil</a></li>
         <li><a href="calendario.php">Calendario</a></li>
          <li><a href="mensajes.php">Mensajes</a></li>
         <li><a href="calificaciones.php">Calificaciones</a></li>
         <div class="cont_button_cerrar">
             <a href="login.php">
                 <button>Cerrar Sesión</button>
             </a>
         </div>
    </div>
</div>