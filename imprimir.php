<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.gif">
    <link rel="icon" type="image/png" href="img/favicon.gif">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilos.css">
    <title>
        WebFuas
    </title>
</head>

<body class="g-sidenav-show bg-gray-100">
    <div id="printArea" class="print-only">
        <span id="printDNI1" class="print-data print-pos-dni1"></span>
        <span id="printDNI2" class="print-data print-pos-dni2"></span>
        <span id="printApellidoPaterno" class="print-data print-pos-apellido-paterno"></span>
        <span id="printApellidoMaterno" class="print-data print-pos-apellido-materno"></span>
        <span id="printPrimerNombre" class="print-data print-pos-primer-nombre"></span>
        <span id="printSegundoNombre" class="print-data print-pos-segundo-nombre"></span>
        <span id="printFechaNacimiento" class="print-data print-pos-fecha-nacimiento"></span>
        <span id="printHistoriaClinica" class="print-data print-pos-historia-clinica"></span>
    </div>
    <div class="min-height-300 bg-dark position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
                <img src="img/logo-ct-dark.gif" width="26px" height="26px" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Web Fuas</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="imprimir.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-printer-fill text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Imprimir</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="control_fuas.php">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-ui-checks text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Control de Fuas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../pages/rtl.html">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-graph-up-arrow text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Reporte Detallado</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../pages/virtual-reality.html">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Virtual Reality</span>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Páginas de Cuentas</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../pages/profile.html">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Perfil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../pages/sign-in.html">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Cerrar Sesión</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../pages/sign-up.html">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-collection text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Crear Cuenta</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer mx-3 ">
            <div class="card card-plain shadow-none" id="sidenavCard">
                <img class="w-50 mx-auto" src="img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
                <div class="card-body text-center p-3 w-100 pt-0">
                    <div class="docs-info">
                        <h6 class="mb-0">Need help?</h6>
                        <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
                    </div>
                </div>
            </div>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
            <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Tables</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h6 class="mb-6 text-uppercase text-sm font-weight-bold">Imprimir FUA</h6>
                            <div class="form-group mb-0">
                                <button type="button" class="mb-6 btn btn-warning" id="btnNuevo" onclick="window.location.href='registrar.php';">
                                    Nuevo Paciente
                                </button>
                            </div>

                        </div>
                        <div class="card-body pt-2">

                            <div class="d-flex align-items-start gap-3 flex-wrap mb-4 mt-n6">

                                <div class="form-group mb-0">
                                    <label for="tipoFiltro" class="me-2 mt-2 mb-0 text-sm font-weight-bold bi bi-funnel-fill me-1">Filtrar por:</label>
                                    <select class="form-control form-control-sm w-auto text-sm" name="tipoFiltro" id="tipoFiltro" required>
                                        <option value="" selected disabled>Seleccione</option>
                                        <option value="Historia Clinica">Historia Clínica</option>
                                        <option value="DNI">DNI</option>
                                        <option value="Apellidos y Nombres">Apellidos y Nombres</option>
                                        <option value="Carné de extranjería">Carné de extranjería</option>
                                    </select>
                                </div>

                                <div class="form-group mt-1 mb-0">
                                    <label for="datoFiltro" class="me-2 mb-0 text-sm font-weight-bold">Dato:</label>
                                    <input type="text" class="form-control form-control-sm" name="datoFiltro" id="datoFiltro" required>
                                </div>


                                <div class="form-group mt-4 mb-0">
                                    <button type="button" class="btn btn-success" id="btnBuscar">Buscar</button>
                                </div>

                                <div id="accionesPaciente" class="d-flex align-items-start gap-3 flex-wrap hidden">
                                    <div class="form-group mt-4 mb-0">
                                        <button type="button" class="btn btn-success" id="btnImprimirFua">Imprimir FUA</button>
                                    </div>




                                    <div class="form-group mt-4 mb-0">
                                        <button type="button" class="btn btn-warning" id="btnEditar">Editar Paciente</button>
                                    </div>
                                </div>
                            </div>

                            <hr style="border: 2px solid #333; margin-bottom: 15px;">

                            <div class="row info-paciente hidden" id="infoPacienteContainer">
                                <div class="form-group">
                                    <label for="historia_clinica">Historia Clínica</label>
                                    <input type="text" class="form-control" id="historia_clinica" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="documento">DNI</label>
                                    <input type="text" class="form-control" id="documento" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="carne_doc">Carné de Extranjería</label>
                                    <input type="text" class="form-control" id="carne_doc" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="apellido_p">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="apellido_p" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="apellido_m">Apellido Materno</label>
                                    <input type="text" class="form-control" id="apellido_m" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="p_nombre">Primer Nombre</label>
                                    <input type="text" class="form-control" id="p_nombre" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="s_nombre">Otros Nombres</label>
                                    <input type="text" class="form-control" id="s_nombre" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="fecha_nac">Fecha de Nacimiento</label>
                                    <input type="text" class="form-control" id="fecha_nac" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="genero">Genero</label>
                                    <input type="text" class="form-control" id="genero" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="celular">Celular</label>
                                    <input type="text" class="form-control" id="celular" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="departamento">Departamento</label>
                                    <input type="text" class="form-control" id="departamento" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="provincia">Provincia</label>
                                    <input type="text" class="form-control" id="provincia" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="distrito">Distrito</label>
                                    <input type="text" class="form-control" id="distrito" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" class="form-control" id="direccion" readonly>
                                </div>
                                <input type="hidden" id="paciente_historia_clinica_oculto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">

                        </div>
                    </div>
                </div>
            </div>
    </main>

    <div class="modal fade" id="modalPacientes" tabindex="-1" role="dialog" aria-labelledby="modalPacientesLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPacientesLabel"><b>Selecciona un Paciente</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive-scroll">
                        <table class="table table-striped table-hover rounded-3 table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 15%;"><b>Historia Clínica</b></th>
                                    <th class="text-center" style="width: 15%;"><b>DNI</b></th>
                                    <th class="text-center"><b>Apellidos y Nombres</b></th>
                                    <th class="text-center" style="width: 10%;"><b>Acción</b></th>
                                </tr>
                            </thead>
                            <tbody id="listaPacientesModal">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        #modalPacientes .table-responsive-scroll {
            max-height: 700px !important;
            overflow-y: auto !important;
        }
        /* Agrega este CSS a tu archivo CSS principal o dentro de un <style> en el <head> */
        .table-responsive-scroll {
            max-height: 400px; /* Altura máxima antes de que aparezca el scroll (ajusta según tus necesidades) */
            overflow-y: auto; /* Permite el scroll vertical */
            border: 1px solid #dee2e6; /* Opcional: añade un borde para enmarcar la tabla con scroll */
            border-radius: 0.3rem; /* Opcional: para que coincida con el borde de la tabla */
        }

        /* Opcional: Asegúrate de que las celdas no tengan padding excesivo para compactar */
        #modalPacientes table td,
        #modalPacientes table th {
            padding: 0.5rem 0.75rem; /* Ajusta este valor para hacer las celdas más compactas */
            vertical-align: middle; /* Alinea el contenido verticalmente al centro */
            white-space: nowrap; /* Evita que el texto se rompa en varias líneas, si es un problema */
            overflow: hidden; /* Oculta el texto que exceda el ancho de la celda */
            text-overflow: ellipsis; /* Añade puntos suspensivos si el texto es muy largo */
        }

            /* Ajuste para el texto de la columna de nombres si es muy largo */
            #modalPacientes table td:nth-child(3) { /* Selecciona la 3ra columna (Apellidos y Nombres) */
                white-space: normal; /* Permite que el texto se ajuste si es necesario */
                word-wrap: break-word; /* Rompe palabras largas */
            }

        /* Ajuste para los encabezados de la tabla para que no se muevan con el scroll */
        #modalPacientes .table thead th {
            position: sticky;
            top: 0;
            background-color: #f8f9fa; /* Color de fondo del encabezado */
            z-index: 10; /* Asegura que el encabezado esté por encima del contenido */
            box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.1); /* Sutil sombra para que se vea "pegado" */
        }
    </style>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Argon Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this); toggleSidenavBlur(true);">White</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this); toggleSidenavBlur(false);">Dark</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <div class="d-flex my-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <div class="mt-2 mb-5 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                    </div>
                </div>
                <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
                <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/plugins/perfect-scrollbar.min.js"></script>
    <script src="js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script>
        // Función para mostrar la alerta flotante (ya la tienes, solo la incluyo para contexto)
        function mostrarAlertaFlotante(mensaje, tipo = 'roja') {
            const alerta = document.getElementById("alertaFlotante");
            if (!alerta) {
                console.error("El elemento #alertaFlotante no se encontró en el DOM.");
                alert(mensaje);
                return;
            }

            alerta.textContent = mensaje;
            alerta.classList.remove("alerta-roja", "alerta-verde", "slide-down", "slide-up");
            alerta.classList.add(`alerta-${tipo}`);
            alerta.style.display = "block";
            alerta.classList.add("slide-down");

            setTimeout(() => {
                alerta.classList.remove("slide-down");
                alerta.classList.add("slide-up");
                setTimeout(() => {
                    alerta.style.display = "none";
                    alerta.classList.remove("slide-up");
                }, 500);
            }, 3000);
        }



        document.addEventListener('DOMContentLoaded', function () {
            const tipoFiltro = document.getElementById('tipoFiltro');
            const datoFiltro = document.getElementById('datoFiltro');
            const btnBuscar = document.getElementById('btnBuscar');
            const accionesPacienteDiv = document.getElementById('accionesPaciente');
            const infoPacienteContainer = document.getElementById('infoPacienteContainer');
            const btnImprimirFua = document.getElementById('btnImprimirFua');
            const btnEditar = document.getElementById('btnEditar');
            const pacienteHistoriaClinicaField = document.getElementById('paciente_historia_clinica_oculto');

            // Modales
            const modalPacientes = new bootstrap.Modal(document.getElementById('modalPacientes'));
            const listaPacientesModal = document.getElementById('listaPacientesModal');

            // NUEVO: Instancia del modal de edición
            const modalEditarPaciente = new bootstrap.Modal(document.getElementById('modalEditarPaciente'));
            const formEditarPaciente = document.getElementById('formEditarPaciente');
            const btnGuardarCambios = document.getElementById('btnGuardarCambios');

            const mainContent = document.querySelector('main');
            const body = document.body;
            // ¡CAMBIO AQUÍ! Selecciona el sidebar por su ID correcto: 'sidenav-main'
            const sidebar = document.getElementById('sidenav-main');




            const myModalEl = document.getElementById('modalPacientes');
            myModalEl.addEventListener('show.bs.modal', function () {
                if (mainContent) {
                    mainContent.style.transition = 'filter 0.3s ease-out';
                    mainContent.style.filter = 'blur(5px)';
                }
                if (sidebar) {
                    sidebar.classList.add('blur-effect');
                }
                body.classList.add('modal-open-blur');
            });

            myModalEl.addEventListener('hidden.bs.modal', function () {
                if (mainContent) {
                    mainContent.style.filter = 'none';
                }
                if (sidebar) {
                    sidebar.classList.remove('blur-effect');
                }
                body.classList.remove('modal-open-blur');
            });
            // Escuchar eventos del modal de IMPRIMIR FUA para el desenfoque
            const imprimirFuaModalEl = document.getElementById('modalImprimirFua'); // NUEVO: Selecciona el modal de Imprimir FUA
            imprimirFuaModalEl.addEventListener('show.bs.modal', function () {
                if (mainContent) {
                    mainContent.style.transition = 'filter 0.3s ease-out';
                    mainContent.style.filter = 'blur(5px)';
                }
                if (sidebar) {
                    sidebar.classList.add('blur-effect');
                }
                body.classList.add('modal-open-blur');
            });

            imprimirFuaModalEl.addEventListener('hidden.bs.modal', function () {
                if (mainContent) {
                    mainContent.style.filter = 'none';
                }
                if (sidebar) {
                    sidebar.classList.remove('blur-effect');
                }
                body.classList.remove('modal-open-blur');
            });
            // Escuchar eventos del modal de edición para el desenfoque
            const editModalEl = document.getElementById('modalEditarPaciente');
            editModalEl.addEventListener('show.bs.modal', function () {
                if (mainContent) {
                    mainContent.style.transition = 'filter 0.3s ease-out';
                    mainContent.style.filter = 'blur(5px)';
                }
                if (sidebar) {
                    sidebar.classList.add('blur-effect');
                }
                body.classList.add('modal-open-blur');
            });

            editModalEl.addEventListener('hidden.bs.modal', function () {
                if (mainContent) {
                    mainContent.style.filter = 'none';
                }
                if (sidebar) {
                    sidebar.classList.remove('blur-effect');
                }
                body.classList.remove('modal-open-blur');
            });


            function resetPacienteInfo() {
                const fields = infoPacienteContainer.querySelectorAll('input[readonly]');
                fields.forEach(field => field.value = '');
                pacienteHistoriaClinicaField.value = '';
                accionesPacienteDiv.classList.add('hidden');
                infoPacienteContainer.classList.add('hidden');
            }

            function autocompletePacienteForm(paciente) {
                document.getElementById('historia_clinica').value = paciente.historia_clinica || '';
                document.getElementById('documento').value = paciente.documento || '';
                document.getElementById('carne_doc').value = paciente.carne_doc || '';
                document.getElementById('apellido_p').value = paciente.apellido_p || '';
                document.getElementById('apellido_m').value = paciente.apellido_m || '';
                document.getElementById('p_nombre').value = paciente.p_nombre || '';
                document.getElementById('s_nombre').value = paciente.s_nombre || '';
                document.getElementById('fecha_nac').value = paciente.fecha_nac || '';
                document.getElementById('genero').value = paciente.genero || '';
                document.getElementById('celular').value = paciente.celular || '';
                document.getElementById('departamento').value = paciente.departamento || '';
                document.getElementById('provincia').value = paciente.provincia || '';
                document.getElementById('distrito').value = paciente.distrito || '';
                document.getElementById('direccion').value = paciente.direccion || '';
                pacienteHistoriaClinicaField.value = paciente.historia_clinica;

                accionesPacienteDiv.classList.remove('hidden');
                infoPacienteContainer.classList.remove('hidden');
            }

            resetPacienteInfo();

            btnBuscar.addEventListener('click', async function () {
                const filtro = tipoFiltro.value;
                const dato = datoFiltro.value.trim();

                if (!filtro || !dato) {
                    mostrarAlertaFlotante('Por favor, selecciona un tipo de filtro y escribe el dato a buscar.', 'roja');
                    resetPacienteInfo();
                    return;
                }

                resetPacienteInfo();
                listaPacientesModal.innerHTML = '';

                try {
                    const response = await fetch('buscar_paciente.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            filtro: filtro,
                            dato: dato
                        }),
                    });

                    if (!response.ok) {
                        const errorText = await response.text();
                        console.error(`HTTP error! status: ${response.status}, message: ${errorText}`);
                        mostrarAlertaFlotante(`Error del servidor: ${response.status} ${response.statusText}.`, 'roja'); // Alerta de error más específica
                        return; // Detener la ejecución si hay un error HTTP
                    }

                    const result = await response.json();

                    if (result.success && result.data.length > 0) {
                        if (result.data.length === 1 && filtro !== 'Apellidos y Nombres') {
                            autocompletePacienteForm(result.data[0]);
                            mostrarAlertaFlotante('Paciente encontrado exitosamente.', 'verde');
                        } else if (filtro === 'Apellidos y Nombres' && result.data.length >= 1) {
                            result.data.forEach(paciente => {
                                const row = document.createElement('tr');
                                const nombreCompleto = `${paciente.apellido_p || ''} ${paciente.apellido_m || ''} ${paciente.p_nombre || ''} ${paciente.s_nombre || ''}`.trim();
                                row.innerHTML = `
                                                                            <td class="text-center">${paciente.historia_clinica || ''}</td>
                                                                            <td class="text-center">${paciente.documento || ''}</td>
                                                                            <td>${nombreCompleto}</td>
                                                                            <td class="text-center"><button type="button" class="btn btn-primary btn-sm select-paciente" data-historia-clinica="${paciente.historia_clinica}">Seleccionar</button></td>
                                                                        `;
                                listaPacientesModal.appendChild(row);
                            });
                            if (filtro === 'Apellidos y Nombres' && result.data.length > 0) {
                                modalPacientes.show();
                            }
                        } else {
                            mostrarAlertaFlotante(result.message || 'No se encontraron datos para el filtro y dato proporcionados.', 'roja');
                            resetPacienteInfo();
                        }
                    } else {
                        mostrarAlertaFlotante(result.message || 'No se encontraron datos para el filtro y dato proporcionados.', 'roja');
                        resetPacienteInfo();
                    }
                } catch (error) {
                    console.error('Error en la búsqueda:', error);
                    mostrarAlertaFlotante('Ocurrió un error al buscar el paciente. Inténtalo de nuevo.', 'roja');
                    resetPacienteInfo();
                }
            });

            listaPacientesModal.addEventListener('click', async function (event) {
                if (event.target.classList.contains('select-paciente')) {
                    const historiaClinica = event.target.dataset.historiaClinica;

                    try {
                        const response = await fetch('buscar_paciente.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                filtro: 'Historia Clinica',
                                dato: historiaClinica
                            }),
                        });

                        if (!response.ok) {
                            const errorText = await response.text();
                            console.error(`HTTP error! status: ${response.status}, message: ${errorText}`);
                            mostrarAlertaFlotante(`Error del servidor: ${response.status} ${response.statusText}.`, 'roja'); // Alerta de error más específica
                            return; // Detener la ejecución si hay un error HTTP
                        }

                        const result = await response.json();

                        if (result.success && result.data.length === 1) {
                            autocompletePacienteForm(result.data[0]);

                            const modalDialog = document.querySelector('#modalPacientes .modal-dialog');
                            modalDialog.classList.add('modal-hide-up');

                            setTimeout(() => {
                                modalPacientes.hide();
                                modalDialog.classList.remove('modal-hide-up');
                            }, 500);

                            mostrarAlertaFlotante('Paciente seleccionado y autocompletado.', 'verde');

                        } else {
                            mostrarAlertaFlotante('Error al obtener los datos del paciente seleccionado.', 'roja');
                            resetPacienteInfo();
                        }
                    } catch (error) {
                        console.error('Error al seleccionar paciente del modal:', error);
                        mostrarAlertaFlotante('Ocurrió un error al seleccionar el paciente.', 'roja');
                        resetPacienteInfo();
                    }
                }
            });


            // Instancia del nuevo modal de impresión FUA
            const modalImprimirFua = new bootstrap.Modal(document.getElementById('modalImprimirFua'));
            // (Mantén este) Event listener para el botón "Confirmar Impresión" dentro del PRIMER modal de FUA
            // Cambia 'btnConfirmarImprimirFua' a 'btnConfirmarImpresionFUA' si ese es el ID de tu botón
            const btnConfirmarImpresionFUA = document.getElementById('btnConfirmarImpresionFUA'); // <--- Asegúrate que este ID coincida con tu HTML
            if (btnConfirmarImpresionFUA) {
                btnConfirmarImpresionFUA.addEventListener('click', function (event) { // Añade 'event' como parámetro
                    event.preventDefault(); // <-- ¡Esta es la línea clave! Detiene el envío del formulario

                    // Validaciones existentes
                    const historiaClinica = document.getElementById('print_fua_historia_clinica').value;
                    const codigoServicio = codigoServicioInput.value; // Asegúrate de que codigoServicioInput esté definido
                    const descripcionServicio = descripcionServicioSelect.options[descripcionServicioSelect.selectedIndex].text; // Asegúrate que descripcionServicioSelect esté definido
                    const turno = turnoActualDisplay.textContent; // Asegúrate que turnoActualDisplay esté definido

                    if (!historiaClinica) {
                        mostrarAlertaFlotante('No hay una Historia Clínica seleccionada para imprimir la FUA.', 'roja');
                        return; // Detiene la ejecución si hay un error
                    }

                    if (!codigoServicio) {
                        mostrarAlertaFlotante('Por favor, selecciona un servicio para la FUA.', 'roja');
                        return; // Detiene la ejecución si hay un error
                    }

                    // Cierra el modal
                    const modalImprimirFua = document.getElementById('modalImprimirFua');
                    const bootstrapModal = bootstrap.Modal.getInstance(modalImprimirFua); // Obtener la instancia del modal
                    if (bootstrapModal) {
                        bootstrapModal.hide(); // Ocultar el modal
                    } else {
                        // Si por alguna razón la instancia no existe, intentar ocultar manualmente o con jQuery si está cargado
                        console.warn('Bootstrap Modal instance not found. Attempting manual hide.');
                        modalImprimirFua.classList.remove('show');
                        modalImprimirFua.style.display = 'none';
                        modalImprimirFua.setAttribute('aria-hidden', 'true');
                        document.body.classList.remove('modal-open');
                        const backdrop = document.querySelector('.modal-backdrop');
                        if (backdrop) backdrop.remove(); // Eliminar el backdrop
                    }

                    // Espera un momento para que el modal se cierre visualmente (opcional, pero recomendado)
                    setTimeout(() => {
                        window.print(); // Activa la impresión
                    }, 300); // 300ms es un buen tiempo para que la animación de cierre termine
                });
            }



            // Elementos para los nuevos campos de FUA
            const codigoServicioInput = document.getElementById('codigoServicio');
            const descripcionServicioSelect = document.getElementById('descripcionServicio');
            const turnoActualDisplay = document.getElementById('turnoActualDisplay');
            const edadPacienteDisplay = document.getElementById('edadPacienteDisplay');
            const tablaServiciosDisponiblesBody = document.querySelector('#tablaServiciosDisponibles tbody');

            // Función para cargar los servicios en el select
            async function cargarServicios() {
                try {
                    const response = await fetch('cargar_servicios.php');
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    const servicios = await response.json();
                    descripcionServicioSelect.innerHTML = '<option value="">Seleccione un servicio</option>';
                    servicios.forEach(servicio => {
                        const option = document.createElement('option');
                        option.value = servicio.codigo; // El valor será el código del servicio
                        option.textContent = servicio.descripcion;
                        descripcionServicioSelect.appendChild(option);
                    });
                } catch (error) {
                    console.error('Error al cargar servicios:', error);
                    mostrarAlertaFlotante('Error al cargar la lista de servicios.', 'roja');
                }
            }

            // Llamar a cargarServicios al cargar la página (para el primer modal)
            cargarServicios();

            // Autocompletado: de Código a Descripción (este maneja la entrada manual)
            codigoServicioInput.addEventListener('change', async function () {
                const codigo = this.value.trim();
                if (codigo) {
                    try {
                        const response = await fetch('buscar_servicio.php', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify({ tipo: 'codigo', valor: codigo })
                        });
                        if (!response.ok) {
                            const errorText = await response.text();
                            throw new Error(`HTTP error! status: ${response.status}, message: ${errorText}`);
                        }
                        const result = await response.json();
                        if (result.success && result.data) {
                            // Si se encuentra el servicio, actualiza el select
                            descripcionServicioSelect.value = result.data.codigo_servicio;
                        } else {
                            // Si no se encuentra, limpia el select y muestra alerta
                            descripcionServicioSelect.value = '';
                            mostrarAlertaFlotante('Código de servicio no encontrado.', 'roja');
                        }
                    } catch (error) {
                        console.error('Error al buscar servicio por código:', error);
                        mostrarAlertaFlotante('Error al buscar servicio por código. Inténtalo de nuevo.', 'roja');
                    }
                } else {
                    descripcionServicioSelect.value = ''; // Limpiar el select si el código está vacío
                }
            });


            // Autocompletado: de Descripción a Código
            descripcionServicioSelect.addEventListener('change', function () {
                const codigoSeleccionado = this.value;
                codigoServicioInput.value = codigoSeleccionado; // Asigna el código seleccionado al input
            });

            // Función para calcular el turno
            function obtenerTurnoActual() {
                const ahora = new Date();
                const hora = ahora.getHours();
                if (hora >= 6 && hora < 12) {
                    return "MAÑANA";
                } else if (hora >= 12 && hora < 19) {
                    return "TARDE";
                } else if (hora >= 19 && hora < 24) {
                    return "NOCHE";
                } else {
                    return "MADRUGADA";
                }
            }

            // Función para calcular la edad
            function calcularEdad(fechaNacimiento) {
                if (!fechaNacimiento) return 'N/A';
                const fechaNac = new Date(fechaNacimiento + 'T00:00:00'); // Añadir T00:00:00 para evitar problemas de zona horaria
                const hoy = new Date();
                let edad = hoy.getFullYear() - fechaNac.getFullYear();
                const mes = hoy.getMonth() - fechaNac.getMonth();
                if (mes < 0 || (mes === 0 && hoy.getDate() < fechaNac.getDate())) {
                    edad--;
                }
                return edad;
            }

            // Listener para el botón IMPRIMIR FUA
            btnImprimirFua.addEventListener('click', async function () {
                const historiaClinica = pacienteHistoriaClinicaField.value;
                if (!historiaClinica) {
                    mostrarAlertaFlotante('Primero busca y selecciona un paciente para imprimir la FUA.', 'roja');
                    return;
                }

                try {
                    const response = await fetch(`buscar_paciente.php`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            filtro: 'Historia Clinica',
                            dato: historiaClinica
                        }),
                    });

                    if (!response.ok) {
                        const errorText = await response.text();
                        console.error(`HTTP error! status: ${response.status}, message: ${errorText}`);
                        throw new Error(`Error del servidor al cargar datos para impresión: ${response.status} ${response.statusText}.`);
                    }

                    const result = await response.json();

                    if (result.success && result.data && result.data.length === 1) {
                        const paciente = result.data[0];
                        // Rellenar los campos del PRIMER modal (modalImprimirFua)
                        document.getElementById('print_fua_dni').value = paciente.documento || '';
                        document.getElementById('print_fua_historia_clinica').value = paciente.historia_clinica || '';
                        document.getElementById('print_fua_apellido_p').value = paciente.apellido_p || '';
                        document.getElementById('print_fua_apellido_m').value = paciente.apellido_m || '';
                        document.getElementById('print_fua_p_nombre').value = paciente.p_nombre || '';
                        document.getElementById('print_fua_s_nombre').value = paciente.s_nombre || '';
                        document.getElementById('print_fua_fecha_nac').value = paciente.fecha_nac || '';
                        document.getElementById('print_fua_genero').value = paciente.genero || '';

                        // **NUEVO: Asignar Turno Actual**
                        turnoActualDisplay.value = obtenerTurnoActual();

                        // **NUEVO: Calcular y Mostrar Edad**
                        const edad = calcularEdad(paciente.fecha_nac);
                        edadPacienteDisplay.textContent = `${edad} años`;

                        // **NUEVO: Cargar Servicios Disponibles en la tabla del segundo modal**
                        // NOTA: Asumo que tienes una API o un método para obtener servicios por paciente si es necesario.
                        // Si no, puedes usar `cargar_servicios.php` y luego filtrar o simplemente listarlos todos.
                        // Por ahora, listaremos todos los servicios en la tabla del segundo modal para demostrar.
                        try {
                            const serviciosResponse = await fetch('cargar_servicios.php'); // Reutilizamos cargar_servicios.php
                            if (!serviciosResponse.ok) throw new Error(`HTTP error! status: ${serviciosResponse.status}`);
                            const serviciosDisponibles = await serviciosResponse.json();
                            tablaServiciosDisponiblesBody.innerHTML = ''; // Limpiar tabla antes de añadir
                            serviciosDisponibles.forEach(servicio => {
                                const row = document.createElement('tr');
                                row.innerHTML = `
                                            <td>${servicio.codigo || ''}</td>
                                            <td>${servicio.descripcion || ''}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-primary select-service-fua"
                                                    data-codigo="${servicio.codigo}"
                                                    data-descripcion="${servicio.descripcion}">
                                                    IMPRIMIR
                                                </button>
                                            </td>
                                        `;
                                tablaServiciosDisponiblesBody.appendChild(row);
                            });
                        } catch (serviciosError) {
                            console.error('Error al cargar servicios disponibles para la tabla:', serviciosError);
                            mostrarAlertaFlotante('Error al cargar la lista de servicios disponibles.', 'roja');
                        }

                        // Mostrar AMBOS modales
                        modalImprimirFua.show();

                    } else {
                        mostrarAlertaFlotante(result.message || 'No se pudieron cargar los datos del paciente para imprimir la FUA.', 'roja');
                    }
                } catch (error) {
                    console.error('Error al intentar abrir los modales de impresión FUA:', error);
                    mostrarAlertaFlotante('Ocurrió un error al cargar los datos para la FUA. Inténtalo de nuevo.', 'roja');
                }
            });

            // Event listener para seleccionar servicio de la tabla del segundo modal
            tablaServiciosDisponiblesBody.addEventListener('click', function (event) {
                if (event.target.classList.contains('select-service-fua')) {
                    const codigo = event.target.dataset.codigo;
                    const descripcion = event.target.dataset.descripcion;

                    codigoServicioInput.value = codigo;
                    // Asegurarse de que la opción seleccionada en el select es la correcta
                    // Se establece el valor del select al código, ya que en cargarServicios.php
                    // se configuró option.value = servicio.codigo_servicio
                    descripcionServicioSelect.value = codigo;
                    mostrarAlertaFlotante(`Servicio seleccionado: ${descripcion}`, 'verde');

                    // Cerrar el segundo modal después de seleccionar

                }
            });




            // Event listener para el botón "Cerrar" en el encabezado del PRIMER modal
            document.querySelector('#modalImprimirFua .btn-close').addEventListener('click', function () {
                modalImprimirFua.hide();

            });

            // Event listener para el botón "Cerrar" en el pie de página del PRIMER modal
            document.querySelector('#modalImprimirFua .modal-footer .btn-secondary[data-bs-dismiss="modal"]').addEventListener('click', function () {
                modalImprimirFua.hide();

            });

            // Event listener para el botón "Cerrar" en el encabezado del SEGUNDO modal
            document.querySelector('#modalDatosAdicionalesFua .btn-close').addEventListener('click', function () {

            });

            // Event listener para el botón "Cerrar" en el pie de página del SEGUNDO modal
            document.querySelector('#modalDatosAdicionalesFua .modal-footer .btn-secondary').addEventListener('click', function () {

            });





            // MODIFICACIÓN PRINCIPAL: Event listener para el botón Editar Paciente (ahora abre modal)
            btnEditar.addEventListener('click', async function () {
                const historiaClinica = pacienteHistoriaClinicaField.value;
                if (!historiaClinica) {
                    mostrarAlertaFlotante('Primero busca y selecciona un paciente para editarlo.', 'roja');
                    return;
                }

                try {
                    // Realizar una petición para obtener los datos del paciente por su historia clínica
                    // Usamos GET para obtener datos, si tu editar_paciente.php lo soporta
                    const response = await fetch(`editar_paciente.php?historia_clinica=${encodeURIComponent(historiaClinica)}`, {
                        method: 'GET', // O 'POST' si tu script PHP espera POST para obtener datos
                        headers: {
                            'Content-Type': 'application/json', // Aunque sea GET, el server puede responder JSON
                        },
                    });

                    if (!response.ok) {
                        const errorText = await response.text();
                        console.error(`HTTP error! status: ${response.status}, message: ${errorText}`);
                        throw new Error(`Error del servidor al cargar datos: ${response.status} ${response.statusText}.`);
                    }

                    const result = await response.json();

                    if (result.success && result.data) {
                        // Rellenar el formulario del modal con los datos del paciente
                        const paciente = result.data;
                        document.getElementById('edit_historia_clinica_modal').value = paciente.historia_clinica || '';
                        document.getElementById('edit_historia_clinica').value = paciente.historia_clinica || ''; // Campo visible
                        document.getElementById('edit_documento').value = paciente.documento || '';
                        document.getElementById('edit_carne_doc').value = paciente.carne_doc || '';
                        document.getElementById('edit_apellido_p').value = paciente.apellido_p || '';
                        document.getElementById('edit_apellido_m').value = paciente.apellido_m || '';
                        document.getElementById('edit_p_nombre').value = paciente.p_nombre || '';
                        document.getElementById('edit_s_nombre').value = paciente.s_nombre || '';
                        document.getElementById('edit_fecha_nac').value = paciente.fecha_nac || '';
                        document.getElementById('edit_genero').value = paciente.genero || '';
                        document.getElementById('edit_celular').value = paciente.celular || '';
                        document.getElementById('edit_departamento').value = paciente.departamento || '';
                        document.getElementById('edit_provincia').value = paciente.provincia || '';
                        document.getElementById('edit_distrito').value = paciente.distrito || '';
                        document.getElementById('edit_direccion').value = paciente.direccion || '';

                        // Mostrar el modal
                        modalEditarPaciente.show();
                    } else {
                        mostrarAlertaFlotante(result.message || 'No se pudieron cargar los datos del paciente para edición.', 'roja');
                    }
                } catch (error) {
                    console.error('Error al intentar abrir el modal de edición:', error);
                    mostrarAlertaFlotante('Ocurrió un error al cargar los datos del paciente para edición. Inténtalo de nuevo.', 'roja');
                }
            });

            // NUEVO: Event listener para el botón "Guardar Cambios" dentro del modal
            btnGuardarCambios.addEventListener('click', async function () {
                // Recolectar datos del formulario del modal
                const formData = new FormData(formEditarPaciente);
                const dataToSave = {};
                formData.forEach((value, key) => {
                    dataToSave[key] = value;
                });
                // Asegúrate de obtener los textos de los selects si los necesitas para la base de datos
                dataToSave.departamento = document.getElementById('edit_departamento').selectedOptions[0].text;
                dataToSave.provincia = document.getElementById('edit_provincia').selectedOptions[0].text;
                dataToSave.distrito = document.getElementById('edit_distrito').selectedOptions[0].text;


                // Validación básica (puedes añadir más si es necesario)
                if (!dataToSave.historia_clinica || !dataToSave.apellido_p || !dataToSave.apellido_m || !dataToSave.p_nombre) {
                    mostrarAlertaFlotante('Los campos obligatorios (Historia Clínica, Apellidos, Primer Nombre) no pueden estar vacíos.', 'roja');
                    return;
                }

                try {
                    const response = await fetch('editar_paciente.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(dataToSave),
                    });

                    if (!response.ok) {
                        const errorText = await response.text();
                        console.error(`HTTP error! status: ${response.status}, message: ${errorText}`);
                        throw new Error(`Error del servidor al guardar: ${response.status} ${response.statusText}.`);
                    }

                    const result = await response.json();

                    if (result.success) {
                        mostrarAlertaFlotante(result.message || 'Paciente actualizado correctamente.', 'verde');
                        modalEditarPaciente.hide(); // Cerrar el modal al guardar con éxito

                        // Opcional: Volver a cargar la información en la sección principal
                        // Esto es útil si quieres que los cambios se reflejen sin recargar la página.
                        // Podrías llamar a autocompletePacienteForm con los datos actualizados,
                        // o hacer una nueva búsqueda si los datos se cargan desde otra fuente.
                        // Por simplicidad, aquí puedes hacer una nueva búsqueda con la historia clínica actual:
                        const historiaClinicaActual = pacienteHistoriaClinicaField.value;
                        if (historiaClinicaActual) {
                            // Realizar una nueva búsqueda para actualizar los campos principales
                            const responseAfterSave = await fetch('buscar_paciente.php', {
                                method: 'POST',
                                headers: { 'Content-Type': 'application/json' },
                                body: JSON.stringify({ filtro: 'Historia Clinica', dato: historiaClinicaActual }),
                            });
                            const resultAfterSave = await responseAfterSave.json();
                            if (resultAfterSave.success && resultAfterSave.data.length === 1) {
                                autocompletePacienteForm(resultAfterSave.data[0]);
                            }
                        }

                    } else {
                        mostrarAlertaFlotante(result.message || 'Error al actualizar el paciente.', 'roja');
                    }
                } catch (error) {
                    console.error('Error al guardar los cambios del paciente:', error);
                    mostrarAlertaFlotante('Ocurrió un error al guardar los cambios. Inténtalo de nuevo.', 'roja');
                }
            });

        });

    </script>

    <div class="modal fade" id="modalEditarPaciente" tabindex="-1" role="dialog" aria-labelledby="modalEditarPacienteLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarPacienteLabel">Editar Datos del Paciente</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formEditarPaciente">
                        <input type="hidden" id="edit_historia_clinica_modal" name="historia_clinica_original"> <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="edit_documento" class="form-label">DNI:</label>
                                    <input type="text" class="form-control" id="edit_documento" name="documento">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="edit_carne_doc" class="form-label">Carné de Extranjeria:</label>
                                    <input type="text" class="form-control" id="edit_carne_doc" name="carne_doc">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="edit_historia_clinica" class="form-label">Historia Clínica:</label>
                                    <input type="text" class="form-control" id="edit_historia_clinica" name="historia_clinica">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_apellido_p" class="form-label">Apellido Paterno:</label>
                                    <input type="text" class="form-control" id="edit_apellido_p" name="apellido_p" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_apellido_m" class="form-label">Apellido Materno:</label>
                                    <input type="text" class="form-control" id="edit_apellido_m" name="apellido_m" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_p_nombre" class="form-label">Primer Nombre:</label>
                                    <input type="text" class="form-control" id="edit_p_nombre" name="p_nombre" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="edit_s_nombre" class="form-label">Segundo Nombre:</label>
                                    <input type="text" class="form-control" id="edit_s_nombre" name="s_nombre">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="edit_fecha_nac" class="form-label">Fecha de Nacimiento:</label>
                                    <input type="date" class="form-control" id="edit_fecha_nac" name="fecha_nac" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="edit_genero" class="form-label">Género:</label>
                                    <select class="form-control" id="edit_genero" name="genero" required>
                                        <option value="">Seleccione...</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="edit_celular" class="form-label">Celular:</label>
                                    <input type="text" class="form-control" id="edit_celular" name="celular">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="edit_departamento" class="form-label">Departamento:</label>
                                    <select class="form-control" id="edit_departamento" name="departamento"></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="edit_provincia" class="form-label">Provincia:</label>
                                    <select class="form-control" id="edit_provincia" name="provincia"></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="edit_distrito" class="form-label">Distrito:</label>
                                    <select class="form-control" id="edit_distrito" name="distrito"></select>
                                </div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="edit_direccion" class="form-label">Dirección:</label>
                            <input type="text" class="form-control" id="edit_direccion" name="direccion">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="btnGuardarCambios">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="modalImprimirFua" tabindex="-1" role="dialog" aria-labelledby="modalImprimirFuaLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="modalImprimirFuaLabel"><b>Formato Único de Atención (FUA)</b></h5>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btnConfirmarImpresionFUA">Confirmar Impresión</button>
                    </div>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h6>Datos del Paciente</h6>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="print_fua_dni" class="form-label">DNI</label>
                                    <input type="text" class="form-control form-control-sm" id="print_fua_dni" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="print_fua_historia_clinica" class="form-label">Historia Clínica</label>
                                    <input type="text" class="form-control form-control-sm" id="print_fua_historia_clinica" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="print_fua_apellido_p" class="form-label">Apellido Paterno</label>
                                    <input type="text" class="form-control form-control-sm" id="print_fua_apellido_p" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="print_fua_apellido_m" class="form-label">Apellido Materno</label>
                                    <input type="text" class="form-control form-control-sm" id="print_fua_apellido_m" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="print_fua_p_nombre" class="form-label">Primer Nombre</label>
                                    <input type="text" class="form-control form-control-sm" id="print_fua_p_nombre" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="print_fua_s_nombre" class="form-label">Segundo Nombre</label>
                                    <input type="text" class="form-control form-control-sm" id="print_fua_s_nombre" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="print_fua_fecha_nac" class="form-label">Fecha de Nacimiento</label>
                                    <input type="text" class="form-control form-control-sm" id="print_fua_fecha_nac" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="print_fua_genero" class="form-label">Género</label>
                                    <input type="text" class="form-control form-control-sm" id="print_fua_genero" readonly>
                                </div>
                            </div>
                            <hr>
                            <h6>Servicio y Turno</h6>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="codigoServicio">Código de Servicio:</label>
                                    <input type="text" class="form-control form-control-sm" id="codigoServicio" name="codigoServicio" placeholder="Ingrese código">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="descripcionServicio">Descripción de Servicio:</label>
                                    <select class="form-control form-control-sm" id="descripcionServicio" name="descripcionServicio">
                                        <option value="">Seleccione un servicio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="turnoActualDisplay">Turno Actual:</label>
                                    <input type="text" class="form-control form-control-sm" id="turnoActualDisplay" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5" style="border-left: 10px solid #808080; padding-left: 20px;">


                            <h6 class="mt-2 mb-2">Lista de Servicios Disponibles:</h6>
                            <div class="table-responsive" style="max-height: 350px; overflow-y: auto;">
                                <table class="table table-sm table-hover align-items-center mb-0" id="tablaServiciosDisponibles">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Código</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripción</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablaServiciosDisponiblesBody">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="modalDatosAdicionalesFua" tabindex="-1" role="dialog" aria-labelledby="modalDatosAdicionalesFuaLabel" aria-hidden="true" data-bs-backdrop="false" data-bs-keyboard="false">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDatosAdicionalesFuaLabel"><b>Servicios Disponibles para el Paciente</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <p>Edad del Paciente: <strong id="edadPacienteDisplay" class="form-control-static"></strong></p>
                        </div>
                    </div>

                    <hr> <h6 class="mt-2 mb-3">Lista de Servicios:</h6>
                    <div class="table-responsive" style="max-height: calc(100vh - 350px); overflow-y: auto;">
                        <table class="table align-items-center mb-0" id="tablaServiciosDisponibles">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Código</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripción</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>





    <div id="alertaFlotante"></div> <div id="pagina-entera">
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            cargarDepartamentos();

            document.getElementById("edit_departamento").addEventListener("change", function () {
                const idDepa = this.value;
                cargarProvincias(idDepa);
                document.getElementById("edit_distrito").innerHTML = '<option value="">Seleccione</option>';
            });

            document.getElementById("edit_provincia").addEventListener("change", function () {
                const idProv = this.value;
                cargarDistritos(idProv);
            });

            async function cargarDepartamentos() {
                try {
                    const response = await fetch("cargar_departamentos.php");
                    const data = await response.json();
                    const select = document.getElementById("edit_departamento");
                    select.innerHTML = '<option value="">Seleccione</option>';
                    data.forEach(dep => {
                        select.innerHTML += `<option value="${dep.idDepa}">${dep.Departamento}</option>`;
                    });
                } catch (error) {
                    console.error('Error cargando departamentos:', error);
                }
            }

            async function cargarProvincias(idDepa) {
                try {
                    const response = await fetch("cargar_provincias.php?idDepa=" + idDepa);
                    const data = await response.json();
                    const select = document.getElementById("edit_provincia");
                    select.innerHTML = '<option value="">Seleccione</option>';
                    data.forEach(prov => {
                        select.innerHTML += `<option value="${prov.idProv}">${prov.Provincia}</option>`;
                    });
                } catch (error) {
                    console.error('Error cargando provincias:', error);
                }
            }

            async function cargarDistritos(idProv) {
                try {
                    const response = await fetch("cargar_distritos.php?idProv=" + idProv);
                    const data = await response.json();
                    const select = document.getElementById("edit_distrito");
                    select.innerHTML = '<option value="">Seleccione</option>';
                    data.forEach(dist => {
                        select.innerHTML += `<option value="${dist.idDist}">${dist.Distrito}</option>`;
                    });
                } catch (error) {
                    console.error('Error cargando distritos:', error);
                }
            }

            // Si vas a abrir el modal y precargar valores:
            // Asegúrate de que esta función se llama con los IDs correctos para el paciente
            window.abrirModalEdicion = async function (paciente) {
                // Rellena los campos de texto directamente
                document.getElementById('edit_historia_clinica_modal').value = paciente.historia_clinica || '';
                document.getElementById('edit_historia_clinica').value = paciente.historia_clinica || '';
                document.getElementById('edit_documento').value = paciente.documento || '';
                document.getElementById('edit_carne_doc').value = paciente.carne_doc || '';
                document.getElementById('edit_apellido_p').value = paciente.apellido_p || '';
                document.getElementById('edit_apellido_m').value = paciente.apellido_m || '';
                document.getElementById('edit_p_nombre').value = paciente.p_nombre || '';
                document.getElementById('edit_s_nombre').value = paciente.s_nombre || '';
                document.getElementById('edit_fecha_nac').value = paciente.fecha_nac || '';
                document.getElementById('edit_genero').value = paciente.genero || '';
                document.getElementById('edit_celular').value = paciente.celular || '';
                document.getElementById('edit_direccion').value = paciente.direccion || '';



                // *** NUEVO CÓDIGO: Rellenar los elementos para la impresión ***
                document.getElementById('printDNI1').textContent = paciente.dni || '';
                document.getElementById('printDNI2').textContent = paciente.dni || ''; // Si necesitas el DNI en dos lugares
                document.getElementById('printApellidoPaterno').textContent = paciente.p_apellido || '';
                document.getElementById('printApellidoMaterno').textContent = paciente.m_apellido || '';
                document.getElementById('printPrimerNombre').textContent = paciente.p_nombre || '';
                document.getElementById('printSegundoNombre').textContent = paciente.s_nombre || '';
                document.getElementById('printFechaNacimiento').textContent = paciente.fecha_nac || '';
                document.getElementById('printHistoriaClinica').textContent = paciente.historia_clinica || '';
                // ***************************************************************

                // Carga y selecciona Departamento, Provincia, Distrito
                await cargarDepartamentos();
                if (paciente.idDepa) {
                    document.getElementById("edit_departamento").value = paciente.idDepa;
                    await cargarProvincias(paciente.idDepa); // Usa idDepa para cargar provincias
                    if (paciente.idProv) {
                        document.getElementById("edit_provincia").value = paciente.idProv;
                        await cargarDistritos(paciente.idProv); // Usa idProv para cargar distritos
                        if (paciente.idDist) {
                            document.getElementById("edit_distrito").value = paciente.idDist;
                        }
                    }
                }
            };
        });
    </script>


    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="js/argon-dashboard.min.js?v=2.1.0"></script>

</body>

</html>