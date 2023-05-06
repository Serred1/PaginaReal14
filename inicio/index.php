<?php
session_start();
$id_usuario_actual = $_SESSION['usuario_id'];
?>
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>inicio</title>


    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/bebe.css">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

<?php
// Hacer la consulta a la base de datos para obtener los datos del último usuario registrado
include ("../controlador/conexion.php");
$sql = "SELECT nombre, apellido FROM usuarios ORDER BY id DESC LIMIT 1";
$resultado = $conexion->query($sql);

// Verificar si la consulta fue exitosa y mostrar los datos del usuario
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $nombre = $fila["nombre"];
    $apellido = $fila["apellido"];
} else {
    echo "No se encontraron registros";
}
?>

    
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-baby-carriage"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Lactancia Materna</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Informacion Importante</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Aprender</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" style="color: black;">Multimedia</h6>
                        <a class="collapse-item" href="../datavid/videos.php">Videos</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pruebas</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" style="color: black;">Aprendizaje</h6>
                        <a class="collapse-item" href="../encuestas/quiz1.php">Encuesta Video 1</a>
                        <a class="collapse-item" href="cards.html">Encuesta Video 2</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Administrar Usuarios</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" style="color: black;">Gestion</h6>
                        <a class="collapse-item" href="../adminuser/aduser.php">Usuarios</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Inicio</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header" style="color: black;">Inicio</h6>
                        <a class="collapse-item" href="foro.php">Pantalla de Inicio</a>
                    </div>
                </div>
            </li>
           

            <!-- Divider -->
            <hr class="sidebar-divider">

        

        
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

         

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                        
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"] . " " . $_SESSION["apellido"]; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../img/programador.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                <div class="container-fluid">
                <div class="box-gray3">
                        <h1>Curso</h1>
                        <h2>Herramientas de Apoyo en la Lactancia Materna</h2>
                        <br>

                        <h3>REQUISITOS ACADÉMICOS</h3><img src="../img/graduado.jpg" alt="" class="icono1">
                        <p>Ser funcionari@ del Hospital de Quellón
                        <p>
                            <br>

                        <h3>COSTOS Y BECAS</h3><img src="../img/icono2.png" alt="" class="icono2">
                        <p>Gratuito, sin viático</p>
                        <br>

                        <h3>PROCESO DE ADMISIÓN</h3><img src="../img/notas.png" alt="" class="icono3">
                        <p>Enviar postulación a Capacitación del Hospital de Quellón</p>
                        <br>

                        <h3>MODALIDAD MIXTA</h3><img src="../img/golpe.png" alt="" class="icono4">
            
                        <br>
                        <br>
                        <h3>(Clases Online y Practico Presencial)</h3>
                        <br>
                        <h4>Clases Online</h4>
                        <br>
                        <p>Revisar todas las clases (se comprobará por vistos en videos de la plataforma).</p>
                        <p>Revisar videos y material complementario.</p>

                        <p>Dudas y consultas al Correo comitelactanciamaternahq@gmail.com.</p>

                        <p>Duracion desde el 25 de Mayo al 26 de Junio del 2023</p>

                        <br>
                        <h3>Practico Presencial</h3>
                        <br>
                        <br>
                        <p>Casos Clínicos Grupales</p>

                        <p>Prueba escrita (Nota de aprobación mayor o igual a 5,0)</p>

                        <p>Contestar encuesta de satisfacción al terminar el curso.</p>

                        <p>Practico a realizarse el 27 o 28 de Junio.</p>

                        <br>
                        <h3>CERTIFICACION</h3><img src="../img/insignia.png" alt="" class="icono5">
                        <p>Contempla 30 horas Pedagógicas: 22 Online y 8 presenciales.</p>


                    </div>
                    </div>
                </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para Irte?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona Cerrar Sesion si deseas Salir</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="../index.php">Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>