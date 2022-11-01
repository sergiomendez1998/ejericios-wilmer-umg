<?php
include ('./actions/check-session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Registro</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-0">
                    <i class="fas fa-home"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Action
            </div>

          
            <li class="nav-item">
                <a class="nav-link" href="registrar-producto.php">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Ingreso de productos</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="mostrarRegistrosUsuarios.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Ver usuarios registrados</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="mostrarRegistrosProductos.php">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Ver Productos registrados</span></a>
            </li>

       

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    

                                <!-- show the user login -->
                                <div class="topbar-divider d-none d-sm-block"></div>
                                <a  href="index.php"> Bienvenido: <?php echo $_SESSION['username']; ?></a>

                                <div class="topbar-divider d-none d-sm-block"></div>
                                <a href="./actions/log-out.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                    
            

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

                    </ul>
                 
                </nav>
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> Registro de Sueldos</h1>
                    </div>
                
                     
                    
                    <!-- create button to calculate igss -->
                    

                    <!-- Content Row -->  
                    <form  method="POST">
                    
                        <div class="form-group">
                        <div class="col-md-8">
                            <label for="nombre-producto">Nombre Producto</label>
                            <input type="text" class="form-control" id="nombre-producto" name="nombre-producto" placeholder="Nombre Producto">
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- column -->
                            <div class="col-md-8">
                               
                            
                            <label for="precio-producto">Nombre Producto</label>
                            <input type="number" class="form-control" id="precio-producto" name="precio-producto" placeholder="Precio Producto">
                            </div>
                        </div>
                        <!-- fecha ingreso -->
                        <div class="form-group">
                        <div class="col-md-8">
                            <label for="fecha-ingreso">Fecha Ingreso</label>
                            <input type="date" class="form-control" id="fecha-ingreso" name="fecha-ingreso" placeholder="Fecha Ingreso">
                            </div>
                        </div>
                        <!-- fecha vencimiento -->
                        <div class="form-group">
                        <div class="col-md-8">
                            <label for="fecha-vencimiento">Fecha Vencimiento</label>
                            <input type="date" class="form-control" id="fecha-vencimiento" name="fecha-vencimiento" placeholder="Fecha vencimiento">
                            </div>
                        </div>
                    
                      
                        <div class="form-group">
                        <div class="col-md-8">
                            <br>
                            <input type="submit" name="registrar-producto" class="btn btn-primary" value="Guardar Registro">
                            </div>
                        </div>
                        </div>
                    </form>

                    <?php
                    include './actions/registrar-producto.php';
                    ?>
                         
                
                </div>
         

            </div>
  

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>