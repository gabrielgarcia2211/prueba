
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  
  
  
  
  
  
  
  <title>Director Agroindustrial</title>
  <!-- Favicon -->
  <!--<link rel="icon" href="<?php echo constant('URL') ?>public/assets/img/brand/favicon.png" type="image/png">-->
  <link rel="shortcut icon" href="<?php echo constant('URL')?>public/img/agro.png" />
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/css/argon.css?v=1.2.0" type="text/css">
  
  <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/director/estiloAdm.css">
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="<?php echo constant('URL') ?>public/assets/img/ufps/logo-horizontal.jpg" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="">
              <i class="fas fa-home"></i>
                <span class="nav-link-text">Principal</span>
              </a>
            </li>
            <li class="nav-item">
              <a onclick="loadCa()" class="nav-link" id="cargaEstudiantes" href="#">
              <i class="fas fa-users"></i>
                <span class="nav-link-text">Cargar estudiantes</span>
              </a>
            </li>
            <li class="nav-item">
              <a onclick="loadLi()" class="nav-link" href="#">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Lista de estudiantes</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a onclick="loadTe()" class="nav-link" href="#">
              <i class="fas fa-file-upload"></i>
                <span class="nav-link-text">Subir tesis de grado</span>
              </a>
            </li>
            <li class="nav-item">
              <a onclick="loadSe()" class="nav-link" href="#">
              <i class="fas fa-envelope"></i>
                <span class="nav-link-text">Envío de correos electronicos</span>
              </a>
            </li>
            <li class="nav-item">
              <a onclick="loadPr()" class="nav-link" href="#">
              <i class="fas fa-pen"></i>
                <span class="nav-link-text">Pruebas de estado</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Paginas institucionales</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://ww2.ufps.edu.co/" target="_blank">
              <i class="fas fa-university"></i>
                <span class="nav-link-text">UFPS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://divisist2.ufps.edu.co/" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Divisist 2.0</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://uvirtual.cloud.ufps.edu.co/" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">U virtual UFPS</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center    ml-md-auto " >

          <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?php echo constant('URL') ?>public/assets/img/ufps/logo_agroindustrial.png">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Administrador Agroindustrial</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0 ">
           
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo constant('URL') ?>loginControl/cerrarSesionAdministrativo" role="button">
                <i class="ni ni-button-power"></i>
              </a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Sistema de Control Egresados</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!-- <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">N° de estudiantes</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo  count($this->cantidad)?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                      <i class="fas fa-graduation-cap"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">N° de empresas</h5>
                      <span class="h2 font-weight-bold mb-0">0</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                      <i class="fas fa-building"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Documentos subidos</h5>
                      <span class="h2 font-weight-bold mb-0">0</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                      <i class="fas fa-file-pdf"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Fecha</h5>
                      <span class="h2 font-weight-bold mb-0"><?=date('d/m/y');?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="fas fa-table"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6" id="contenedor">
    
      <div id="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="card">
              <div class="card-header border-0">
                <div class="row align-items-center">
                  <div class="col">
                    <h3 class="mb-0">Estudiantes sin tesis</h3>
                  </div>
                  <div class="col text-right">
                    <a href="#!" class="btn btn-sm btn-primary">Ver todo</a>
                  </div>
                </div>
              </div>
              <div class="table-responsive" style="margin-bottom:20px">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellidos</th>
                      <th scope="col">N° Documentos</th>
                    </tr>
                  </thead>
                  <?php for ($m=0; $m < count($this->datos) ; $m++):?>
                  <tbody>
                    <tr>
                      <th scope="row">
                       <?php echo $this->datos[$m]['nombres']?>
                      </th>
                      <td>
                      <?php echo $this->datos[$m]['apellidos']?>
                      </td>
                      <td>
                      <?php echo $this->datos[$m]['codigoEstudiante']?>
                      </td>
                    </tr>
                    <?php endfor; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
<div class="main-footer">
  
            <footer class="footer pt-0 container main-footer" style="padding-left: 25%">
              <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                  <div class="copyright text-center  text-lg-left  text-muted">
                    &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Universidad Francisco de Paula Santander</a>
                  </div>
                </div>
                
                    <div class="col-lg-6">
                      <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                          <a href="" class="nav-link" target="_blank">UFPS Tic's</a>
                        </li>
                        <li class="nav-item">
                          <a href="" class="nav-link" target="_blank">Sobre
                            nosotros</a>
                        </li>
                        <li class="nav-item">
                          <a href="" class="nav-link" target="_blank">Paginas</a>
                        </li>
                          
                      </ul>
                    </div>
              </div>
            </footer>

</div>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/js/director/main.js"></script>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo constant('URL') ?>public/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?php echo constant('URL') ?>public/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo constant('URL') ?>public/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo constant('URL') ?>public/assets/js/argon.js?v=1.2.0"></script>

  
</body>

</html>