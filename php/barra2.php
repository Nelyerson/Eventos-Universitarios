<?php
require 'conexion.php';
session_start();

if (!isset($_SESSION['dni'])) {
    header('Location: inicio.php');
} else  


$dni = $_SESSION['dni'];
$query = "SELECT * FROM estudiantes WHERE dni= '$dni'";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();

$ideb = $row ['ide'];

$sql = "SELECT texto, fecha FROM noti WHERE  ide= '$ideb' AND disp= 0 AND accion = 1  ORDER BY id DESC LIMIT 5 ";
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
                <a class="navbar-brand" href="homestwo.php">Eventos</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                           
                        </li>
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
                        
                      
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $row['foto']; ?>" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">
<?php echo $row ['nombres'] ; ?></h5>
                                    <span class="status"></span><span class="ml-2">En linea</span>
                                </div>
                               
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
                      <ul class="navbar-nav flex-column mr-auto">
                           
                           
                           
                            <li class="nav-divider">
                                Pases
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Personal <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                        <a class="nav-link" href="pases.php">Ver mis pases</a>
                                        </li>
                                       
                                       
                            
                             </ul>

                                    
                                </div>
                                                            </li>

                           <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11"><i class="fa-solid fa-building "></i>Pago <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-11" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

       <li class="nav-item">
                                            <a class="nav-link" href="pagarE.php">Realizar Pagos</a>
                                        </li>
                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="VerpagosEE.php">Ver Pagos</a>
                                        </li>

                                        
                            

                            
                            
                        </ul>


                        <li class="nav-item d-block d-md-none">
    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" 
       data-target="#submenu-69" aria-controls="submenu-69">
       <i class="fas fa-fw fa-address-card"></i>Cuenta 
       <span class="badge badge-secondary">New</span>
    </a>

    <div id="submenu-69" class="collapse submenu">
        <ul class="nav flex-column">

            
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Cerrar Sesion</a>
            </li>

        </ul>
    </div>
</li>

                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->