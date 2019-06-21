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
    case "cursos-detalle.php": 
      $cur='active'; 
    break;
    case "tarea.php": 
      $cur='active'; 
    break;
    case "tarea-detalle.php": 
      $cur='active'; 
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
                <li class="opc_link hidden-xs">
                    <select class="form-control">
                      <option checked disabled>SEMESTRES</option>
                      <?php echo $semestres;?>
                    </select>
               </li>
               <li class="opc_link ">
                   <?php 
                      if($site['lang'] == 'es'){
                          $es_activo = "idiomaActivo";
                        }
                      if ($site['lang'] == 'en') {
                          $en_activo = "idiomaActivo";
                      }
                    ?>
                      
                   
                    <a class="hIdiomaActivo" href="inicio.php?lang=es"><span class=" <?= $es_activo; ?> h-hover-idioma h-hover-idioma1">Es </span><span class="h-slash"> / </span>  </a><a class="h-idiomaActivo" href="inicio.php?lang=en"> <span class="<?= $en_activo; ?> h-hover-idioma h-hover-idioma2"> En</span></a>
               </li>
               <li class="opc_link hidden-xs">
                   <button>
                       <img class=" block-center" src="app/img/email.png" alt="">
                   </button>
               </li>
                <li class="opc_link hidden-xs">
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
           <li><a class="<?= $fac; ?>" href="inicio.php"><?=$lang["menu"][0] ?></a></li>
           <li><a class="<?= $cur; ?>" href="cursos.php"><?=$lang["menu"][1] ?></a></li>
           <li><a class="<?= $men; ?>" href="mensajes.php"><?=$lang["menu"][2] ?></a></li>
           <li><a class="<?= $calific; ?>" href="calificaciones.php"><?=$lang["menu"][3] ?></a></li>
           <li><a class="<?= $calend; ?>" href="calendario.php"><?=$lang["menu"][4] ?></a></li>
       </nav> 
    </div>
</div>






<div class="menu_opc_movil">
    <div class="cont_opc_movil">
        <li><a href="#">Mi Perfil</a></li>
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