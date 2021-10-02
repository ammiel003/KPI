<html>
    <head>
        <title>KPI</title>
        <!-- JS, Popper.js, and jQuery -->
     
        <script  src="js/jquery-3.5.1.js" crossorigin="anonymous"></script>
        <!-- CSS only -->



        <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/popper.min.stack.js" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap4.min.js"></script>  
        <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css" />
        <link rel="stylesheet" href="css/bootstrap-select.min.css">
        <script src="js/bootstrap-select.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" crossorigin="anonymous"></script>
        <!--FOR DATEPICKER-->

        <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
        <script src="js/bootstrap-datepickerr.js"></script>

        <style>

        h1 {
             font-family: "Lucida Handwriting", "Brush Script MT", cursive;

        }
        </style>

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
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        MAIN PAGE
                        </a>
                

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
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

            </div>
            </div>
            </div>
            </div>

            
                      
        <main>
        <div class="container">
            <br />
            <br />
            <div class="card">
                <div class="card-header">
                    <div class="row">  
                        <div class="col-lg-9">Data Table</div>
                        <div class="col-lg-3">
                            <select name="column_name" id="column_name" class="form-control selectpicker" multiple>
                                <option value="0">SUBJ ID</option>
                                <option value="1">TASK ID</option>
                                <option value="2">CREATED AT</option>
                                <option value="3">COMPLETED AT</option>
                                <option value="4">LAST MODIFIED</option>
                                <option value="5">NAME</option>
                                <option value="6">Section Column</option>
                                <option value="7">Assignee</option>
                                <option value="8">Assignee Email</option>
                                <option value="9">START DATE</option>
                                <option value="10">DUE_DATE</option>
                                <option value="11">TAGS</option>
                                <option value="12">NOTES</option>
                                <option value="13">PROJECTS</option>
                                <option value="14">PARENT TASK</option>
                                <option value="15">PAYEES NAME</option>
                                <option value="16">BED NUMBER</option>
                                <option value="17">CPS</option>
                                <option value="18">CE</option>
                                <option value="19">MOVEOUT DATE</option>
                                <option value="20">FRAR</option>
                                <option value="21">FRAU</option>
                                <option value="22">PVS</option>
                                <option value="23">TPNA</option>
                                <option value="24">BNA</option>
                                <option value="25">CMDA</option>
                                <option value="26">RFA</option>
                                </select>

                 
                      
                <form method="post" action="dataexportac.php" align="center">  
                <input type="submit" name="export" value="XLSX Export" class="btn btn-success" />  
                </form> 


                </div>
                </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="sample_data" class="table table-bordered table-striped">
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
                                <tfoot>
                                <tr>
                                    <th colspan = "2">AVERAGE:</th>
                                    <th id = "gwa"></th>
                                    </tr>
                                </tfoot>
                                <tbody></tbody>
                                <tfoot>
                                <tr>
                                    <th colspan = "2">TOTAL GRADES:</th>
                                    <th id = "total_order"></th>
                                    </tr>
                                </tfoot>
                                <tbody></tbody>
                                <tfoot>
                                <tr>
                                    <th colspan = "2">RECORD COUNTS:</th>
                                    <th id = "total_counts"></th>
                                    </tr>
                                </tfoot>
                             
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
    </main>

<style>

.input-daterange input:first-child {
  -webkit-border-radius: 3px 0 0 3px;
  -moz-border-radius: 3px 0 0 3px;
  border-radius: 3px 0 0 3px;
  position: inherit;
  top: -35px;
  left: 3px;
  width: 229px;
  float: left;
  min-height: 1px;
  max-height: 100px;
  outline-offset: : -10px;


}
.input-daterange input:last-child {
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
  position: inherit;
  top: -35px;
  left: -1px;
  width: 229px;

}

.input-daterange .add-on {
  display: inline-block;
  width: auto;
  min-width: 16px;
  height: 18px;
  padding: 4px 5px;
  font-weight: normal;
  line-height: 18px;
  text-align: center;
  text-shadow: 0 1px 0 #fff;
  vertical-align: middle;
  background-color: #eee;
  border: 1px solid #ccc;
  margin-left: -5px;
  margin-right: -5px;

}

.btn-info {
    color: black;
    background-color: #0dcaf0;
    border-color: #0dcaf0;
    position: absolute;
    top: -58px;
    left: 481px;
</style>
    
    <div class="input-daterange">
    <div class="col-md-10">
    <input type="text" name="start_date" id="start_date" class="form-control" placeholder="START DATE" />
    </div>
    <div class="col-md-10">
    <input type="text" name="end_date" id="end_date" class="form-control" placeholder ="END DATE"/>
    <br/>
    </div>      
    </div>
    <div class="col-md-10">
    <input type="button" name="search" id="search" value="Search" class="btn btn-info" />
    </div>
    </div>


    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="js/datatables-simple-demo.js"></script>



</html>





<!---DATEPICKER SCRIPT-->
<script>
$(document).ready(function(){
  

 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });

 fetch_data('no');

 function fetch_data(is_date_search, start_date='', end_date='')
 {
  var dataTable = $('#sample_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "order" : [],
   "ajax" : {
    url:"vdetailsdatefilterac.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_date:start_date, end_date:end_date
    }
   },
    drawCallback:function(settings)
    {
     $('#total_order').html(settings.json.total);
     $('#gwa').html(settings.json.gwa);
     $('#total_counts').html(settings.json.totalcounts);
    }


  });
 }

 $('#search').click(function(){
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  if(start_date != '' && end_date !='')
  {
   $('#sample_data').DataTable().destroy();
   fetch_data('yes', start_date, end_date);
  }
  else
  {
   alert("Both Date is Required");
  }

 }); 
 
});
</script>
<script src="vdetailsdatefilterac.php"></script>


<!-- FILTER COLUMN SCRIPT -->
<script type="text/javascript" language="javascript">
$(document).ready(function(){
    
    var dataTable = $('#sample_data').DataTable({
        "processing" : true,
        "serverSide" : true,
        "cache": false,
        "destroy": true,
        "order" : [],
        "ajax" : {
            url:"vdetailsfetchac.php",
            type:"POST"


        },

   drawCallback:function(settings)
    {
     $('#total_order').html(settings.json.total);
     $('#gwa').html(settings.json.gwa);
     $('#total_counts').html(settings.json.totalcounts);
    }
    });
    
    $('#column_name').selectpicker();

    $('#column_name').change(function(){

        var all_column = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22","23", "24", "25", "26"];

        var remove_column = $('#column_name').val();

        var remaining_column = all_column.filter(function(obj) { return remove_column.indexOf(obj) == -1; });

        dataTable.columns(remove_column).visible(false);

        dataTable.columns(remaining_column).visible(true);

    });



}); 

</script>



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
