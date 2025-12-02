<?php
require 'conexion.php';
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: ../iniciarsesionn.html');
} else  


$username = $_SESSION['usuario'];
$query = "SELECT * FROM usuarios WHERE username= '$username'";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();
?>
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
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
                <a class="navbar-brand" href="Superhomess.php">Eventos</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                           
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notificaciones</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                           
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">Todas Las notificaciones</a></div>
                                </li>
                            </ul>
                        </li>
                      
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">


                                <h5 class="mb-0 text-white nav-user-name"> <?php echo $row ['username'] ; ?></h5>



                                <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Cuenta</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Configuracion</a>
                                <a class="dropdown-item" href="iniciar.php"><i class="fas fa-power-off mr-2"></i>Cerrar Sesion</a>
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
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa-solid fa-calendar-days"></i>Eventos <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        
                                       <li class="nav-item">
                                            <a class="nav-link" href="SuperAgregarEvento.php">Crear Evento</a>
                                        </li>
                                        

                                        
                                    </ul>
                                </div>
                            </li>
                          
                           
                            <li class="nav-divider">
                                Otros
                    




                                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fa-solid fa-user"></i>Usuarios <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                    </li>
                            
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
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-inbox"></i>Personal <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="SuperAñadir_Personal.php">Añadir Personal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="SuperVer_Personal.php">Ver Personal</a>
                                        </li>
                                       
                                        
                                    </ul>
                                </div>
                            </li>
                            

                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fa-solid fa-school"></i>Estudiantes <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="SuperAgregarEstudiante.php">Añadir Estudiantes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="SuperListaDeEstudiantes.php">Ver Estudiantes</a>
                                        </li>
                            

                            
                           
                                    </ul>

                                    
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fa-solid fa-handshake"></i>Espacios <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="SuperEspacio.php">Añadir Espacio de reunion</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="SuperVerEspacio.php">Ver Espacios</a>
                                        </li>
                            

                            
                           
                                    </ul>

                                    <li class="nav-item">
                                <a class="nav-link" href="index.php" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11"><i class="fa-solid fa-handshake"></i>Base de Datos <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-11" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Operaciones</a>
                                        </li>

                            
                           
                                    </ul>

                                    
                                    
                                </div>
                            </li>

                            
                        </ul>
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