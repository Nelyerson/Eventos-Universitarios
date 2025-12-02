<?php
require 'conexion.php';
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: inicio.php');
} else  


$username = $_SESSION['usuario'];
$privilegio = $_SESSION['privilegio'];
$query = "SELECT * FROM usuarios WHERE username= '$username'";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();

$ideb = $row ['id'];

$sql = "SELECT texto, fecha FROM noti WHERE  ide= '$ideb' AND disp= 0 AND accion= 2 ORDER BY id DESC LIMIT 5 ";
$result = $conexion->query($sql);
$rownoti = $result->fetch_assoc();




?>
    <script src="https://kit.fontawesome.com/2245d8262f.js" crossorigin="anonymous"></script>

<body>
    
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a href="homesss.php"> <img src="../assets/logo/lo3.png" alt="online degrees" style= "display: block; margin: 0 auto;" height="70"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                           
                        </li>
                       
                        
                  
                        <?php                                     
  
  if ($privilegio == 0) {
  
      ?>

      
<?php

?>
      <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-bell"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink3">
                            <div class="nav-user-info">






<span class="status"></span><span class="ml-2">Notificaciones</span>
</div>  
<?php


if ($result->num_rows > 0) {  // Verifica si hay resultados
    while ($rownoti = $result->fetch_assoc()) {
        echo "<br>";
        echo "<i class='fa-regular fa-bell'></i> <a>{$rownoti['texto']}</a>";
        echo "<h5>{$rownoti['fecha']}</h5>";
        echo "<hr>";
    }
} else {
    echo  "<div style='text-align: center;'>";
    echo "<p>No hay notificaciones</p>"; // Mensaje cuando no hay registros
}

?>

</div>
                                
                            

                        </li>
      <?php
  } elseif ($privilegio == 1) {
      // Si el privilegio es 1, mostrar otra opción o no mostrar nada
      ?>
     
      <?php
  }
  ?>
                       
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $row['foto']; ?>" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">


                                <h5 class="mb-0 text-white nav-user-name"> <?php echo $row ['username'] ; ?></h5>



                                <span class="status"></span><span class="ml-2">En linea</span>
                                </div>          
                                <a class="dropdown-item" href="Configuracion.php?id=<?php echo $ideb;?>"><i class="fa fa-sun-o"></i> Configuracion</a>
             
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Cerrar Sesion</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>


                            
                            <li class="nav-item ">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-calendar-minus-o "></i>Eventos <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                    <?php                                     
  
  if ($privilegio == 0) {
      // Si el privilegio es 0, mostrar la opción "Crear Evento"
      ?>
      <li class="nav-item">
          <a class="nav-link" href="AgregarEvento.php">Crear Evento</a>
      </li>
      <?php
  } elseif ($privilegio == 1) {
      // Si el privilegio es 1, mostrar otra opción o no mostrar nada
      ?>
      <li class="nav-item">
          <a class="nav-link" href="agregarevento2.php">Crear Eventos</a>
      </li>
      <?php
  }
  ?>
  
          

                                    <li class="nav-item">
                                            <a class="nav-link" href="homess.php">Ver eventos</a>
                                        </li>

                                        
                                       
                                    </ul>
                                </div>
                            </li>
                            <?php
require 'conexion.php';

if ($privilegio == 0) {
   
} elseif ($privilegio == 1) {
    ?>
 <li class="nav-divider">
                                Super
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fa-user-circle "></i>Usuarios <span class="badge badge-success">6</span></a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        
                                         <li class="nav-item">
                                        <a class="nav-link" href="Superanadir.php">Anadir Usuario</a>
                                        </li>

                                        </li>
                            
                                       <li class="nav-item">
                                        <a class="nav-link" href="SuperVer_Usuarios.php">Ver Usuarios</a>
                                        </li>
                                        
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11"><i class="fa-solid fa-database "></i>Base de Datos <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-11" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Operaciones</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="bita2.php">Bitacora</a>
                                        </li>

                            
                           
                                    </ul>

                                    
                                    
                                </div>
                            </li>



  <?php
}
?>
                           
                          
                           
                           <li class="nav-item d-block d-md-none">
    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" 
       data-target="#submenu-69" aria-controls="submenu-69">
       <i class="fas fa-fw fa-user"></i>Cuenta 
       <span class="badge badge-secondary">New</span>
    </a>

    <div id="submenu-69" class="collapse submenu">
        <ul class="nav flex-column">

            <?php 
            if ($privilegio == 0) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="Configuracion.php?id=<?php echo $ideb;?>">Configuracion</a>
                </li>
            <?php } elseif ($privilegio == 1) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="Añadir_Personal2.php">Añadir Personal</a>
                </li>
            <?php } ?>

            <li class="nav-item">
                <a class="nav-link" href="logout.php">Cerrar Sesion</a>
            </li>

        </ul>
    </div>
</li>


                             <li class="nav-divider">
                                Otros
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-address-card "></i>Personal <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                    <?php                                     
  
  if ($privilegio == 0) {
      // Si el privilegio es 0, mostrar la opción "Crear Evento"
      ?>
       <li class="nav-item">
                                            <a class="nav-link" href="Añadir_Personal.php">Añadir Personal</a>
                                        </li>
      <?php
  } elseif ($privilegio == 1) {
      // Si el privilegio es 1, mostrar otra opción o no mostrar nada
      ?>
        <li class="nav-item">
        <a class="nav-link" href="Añadir_Personal2.php">Añadir Personal</a>
        </li>
      <?php
  }
  ?>
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="Ver_Personal.php">Ver Personal</a>
                                        </li>
                                       
                                        
                                    </ul>
                                </div>
                            </li>




                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-inbox"></i>Estudiantes <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                    
   <?php                                     
  
  if ($privilegio == 0) {
      // Si el privilegio es 0, mostrar la opción "Crear Evento"
      ?>
       <li class="nav-item">
     <a class="nav-link" href="AgregarEstudiante.php">Añadir Estudiantes</a>
                                        </li>
      <?php
  } elseif ($privilegio == 1) {
      // Si el privilegio es 1, mostrar otra opción o no mostrar nada
      ?>
       <li class="nav-item">
                                            <a class="nav-link" href="AgregarEstudiante2.php">Añadir Estudiantes</a>
                                        </li>
      <?php
  }
  ?>
  
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="ListaDeEstudiantes.php">Ver Estudiantes</a>
                                        </li>
                            

                            
                           
                                    </ul>

                                    
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fa-solid fa-building "></i>Espacios <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                    <?php                                     
  
  if ($privilegio == 0) {
      // Si el privilegio es 0, mostrar la opción "Crear Evento"
      ?>
       <li class="nav-item">
                                            <a class="nav-link" href="Espacio1.php">Añadir Espacio de reunion</a>
                                        </li>
      <?php
  } elseif ($privilegio == 1) {
      // Si el privilegio es 1, mostrar otra opción o no mostrar nada
      ?>
       <li class="nav-item">
                                            <a class="nav-link" href="Espacio2.php">Añadir Espacio de reunion</a>
                                        </li>
      <?php
  }
  ?>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="VerEspacio.php">Ver Espacios</a>
                                        </li>
                            

 </ul>

                                    
                                </div>
                                                            </li>

                           <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-14" aria-controls="submenu-14"><i class="fa-solid fa-coins "></i>Pago <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-14" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                    <?php                                     
  
  if ($privilegio == 0) {
      // Si el privilegio es 0, mostrar la opción "Crear Evento"
      ?>
       <li class="nav-item">
                                            <a class="nav-link" href="pagar.php">Realizar Pagos</a>
                                        </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="VerpagosG.php">Ver Pagos</a>
                                        </li>

                                         <li class="nav-item">
                                            <a class="nav-link" href="Verpagos.php">Pagos Pendiente por Aprobar</a>
                                        </li>

                                          <li class="nav-item">
                                            <a class="nav-link" href="VerpagosP.php">Pagos Aprobados Estudiantes</a>
                                        </li>
                            
      <?php
  } elseif ($privilegio == 1) {
      // Si el privilegio es 1, mostrar otra opción o no mostrar nada
      ?>
       <li class="nav-item">
                                     
                                        <li class="nav-item">
                                            <a class="nav-link" href="VerpagosE.php">Ver Pagos</a>
                                        </li>

                                         <li class="nav-item">
                                            <a class="nav-link" href="VerpagosU.php">Pagos Pendiente por Aprobar</a>
                                        </li>

                                          <li class="nav-item">
                                            <a class="nav-link" href="VerpagosPU.php">Pagos Aprobados Estudiantes</a>
                                        </li>
                            
      <?php
  }
  ?>
                                        
                                    
                            

                                        
                            
                        </ul>
                    </div>
                    </li>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->