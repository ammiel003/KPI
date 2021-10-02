<!DOCTYPE html>
<?php include 'db/db_ac.php'; ?>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>KPI</title>
        <link href="css/stylee.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
         <style>
        h1 {
             font-family: "Lucida Handwriting", "Brush Script MT", cursive;

            }
        </style>
</head>
<body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
        <h1 class="navbar-brand ps-3" href="index.php">K RESIDENCES</h1>
            <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <!-- Navbar Search-->

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;

}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family: emoji;

}

.topnav a:hover {
  background-color: #ddd;
  color: black;

}

</style>
            

        <div class="topnav">
                <a href="layout-static.php">Movein import</a>
                <a href="Importdetailsmoveout.php">Moveout import</a>
                <a href="Importdetailsdcr.php">DCR import</a>
                <a href="Importdetailsac.php">AC import</a>
        </div>


        <form class="d-none d-md-inline-block form-inline ms-auto me-10 me-md-3 my-2 my-md-0">
        </div>

        </form>
            <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
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
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" id="mpg"></i></div>
                            MAIN PAGE
                            </a>
                          

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns" id="dataaa"></i></div>
                            DATA
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.php">IMPORT EXCEL DATA</a>
                                   
                            </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
     
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                            </nav>
                            </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        ADVANCE DETAILS
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
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
                            <br>
                            <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">INDEX</a></li>
                            <li class="breadcrumb-item active">MAJOR DATA</li>
                            </ol>

  
        <div id="wrap">
        <div class="span3 hidden-phone"></div>
        <div class="span6" id="form-login">
        <form class="form-horizontal well" action="backendac.php" method="post" name="upload_excel" enctype="multipart/form-data">
        <fieldset>
                      
        <div class="control-group">
            <div class="control-label">
            </div>
            <div class="controls">
            <input type="file" name="file" id="file" class="input-large">
            </div>
            </div>
            <div class="control-group">
            <div class="controls">
            <button type="submit" id="submit" name="Importac" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
            </div>
            </div>
        </fieldset>
        </form>
        </div>
        <div class="span3 hidden-phone"></div>
        </div>



                <div class="card mb-4">
                <div class="card-body">
                <div class="card mb-4">
                <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Overall Data Table

                     
                <div class="card-body">
                <table id="datatablesSimple">
                <thead>

                                <tr>
                       
                                <th>Task ID</th>
                                <th>Created At</th>
                                <th>Completed At</th>
                                <th>Last Modified</th>
                                <th>Name</th>
                                <th>Section/Column</th>
                                <th>Assignee</th>
                                <th>Assignee Email</th>
                                <th>Start Date</th>
                                <th>Due Date</th>
                                <th>Tags</th>
                                <th>Notes</th>
                                <th>Projects</th>
                                <th>Parent Task</th>
                                <th>Payee's Name</th>
                                <th>Bedspace Number</th>
                                <th>Contract Period Start</th>
                                <th>Contract End</th>
                                <th>Move Out Date</th>

                                <th>Final Recon: All Rentals</th>
                                <th>Final Recon: All Utilities</th>
                                <th>Payment Voucher - Signatures</th>
                                <th>Tenant/Payee's Name Accurate</th>
                                <th>Bedspace Number - Accurate</th>
                                <th>Check Maturity Date - Accurate</th>
                                <th>Refund Amount - Accurate</th>
                                <th>Compliant</th>
                                <th>Non-Compliant</th>
                                <th>Grade</th>

                                </tr>
                                </thead>

        <?php
        $SQLSELECT = "SELECT * FROM subjectac ";
        $result_set =  mysqli_query($conn, $SQLSELECT);
        while($row = mysqli_fetch_array($result_set))
        {
        ?>
                                <tr>
              
                                <td><?php echo $row['TASK_ID']; ?></td>
                                <td><?php echo $row['CREATED_AT']; ?></td>
                                <td><?php echo $row['COMPLETE_AT']; ?></td>
                                <td><?php echo $row['LAST_MODI']; ?></td>
                                <td><?php echo $row['NAME']; ?></td>
                                <td><?php echo $row['SEC_COL']; ?></td>
                                <td><?php echo $row['ASSIGNEE']; ?></td>
                                <td><?php echo $row['ASSIGNEE_E']; ?></td>
                                <td><?php echo $row['START_DATE']; ?></td>  
                                <td><?php echo $row['DUE_DATE']; ?></td>    
                                <td><?php echo $row['TAGS']; ?></td>
                                <td><?php echo $row['NOTES']; ?></td>
                                <td><?php echo $row['PROJECTS']; ?></td>
                                <td><?php echo $row['PARENT_TASK']; ?></td>
                                <td><?php echo $row['PAYEES_NAME']; ?></td>
                                <td><?php echo $row['BED_NUMBER']; ?></td>
                                <td><?php echo $row['CPS']; ?></td>
                                <td><?php echo $row['CE']; ?></td>
                                <td><?php echo $row['MOVEOUT_DATE']; ?></td>


                                <td><?php echo $row['FRAR']; ?></td>
                                <td><?php echo $row['FRAU']; ?></td>
                                <td><?php echo $row['PVS']; ?></td>
                                <td><?php echo $row['TPNA']; ?></td>
                                <td><?php echo $row['BNA']; ?></td>
                                <td><?php echo $row['CMDA']; ?></td>
                                <td><?php echo $row['RFA']; ?></td>
                                <td><?php echo $row['COMPLIANT']; ?></td>
                                <td><?php echo $row['NON_COMPLIANT']; ?></td>
                                <td><?php echo $row['GRADE']."%"; ?></td>  
                                </tr>   

                                <?php
                                }
                                ?>                      
                             
                              
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
        </div>
        </div>
        </div>
        </main>  
        </div>
        </div>
        <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="js/simple-datatables.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
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

