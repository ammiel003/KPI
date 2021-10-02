<!DOCTYPE html>
<?php include 'db/db.php'; ?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>KPI</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
        </script>
        <style>

        h1 {
             font-family: "Lucida Handwriting", "Brush Script MT", cursive;

        }
    </style>

    <link rel="icon" type="image/png" href="../img/ico.ico">


    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <h1 class="navbar-brand ps-3" href="index.php">K RESIDENCES</h1>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#" onClick = "checkbox()">Logout</a></li>
                </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                       
                            <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            MAIN PAGE
                            </a>
                  

                            <a class="nav-link collapsed" href="layout-static.php" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"href="#"></i></div>
                            DATA
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.php">IMPORT EXCEL DATA</a>
                              
                            </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"aria-expanded="false" aria-controls="collapsePages">

                         
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                         
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                       
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                  </nav>
                            </div>
                            </nav>
                            </div>
                      
                            </div>
                            </div>
              
              
            </div>
            <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"></li>
            </ol>
            <div class="row">
            <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
            <div class="card-body">Movein Scorecard</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="Viewdetailsnc.php">View Details</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
            <div class="card-body">Moveout Scorecard</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="Viewdetailsmoveout.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                <div class="card-body">DCR Collection Receipts Audit</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="Viewdetailsdcr.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
                </div>
                </div>
            <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
            <div class="card-body">Account Closing</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="Viewdetailsac.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
                </div>
                </div>
                </div>
                      
            <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Table
            </div>   
            </div>
            </div>
            </div>
            </main>   
            </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            </body>
</html>


<script type="text/javascript">
function checkbox() {

  var confirmmessage = "ARE YOU SURE?";
  var go = "login.php";
  var message = "OK";

  if (confirm(confirmmessage)) {

      window.location = go;

  } else {

       alert(message);

  }

}
</script>
