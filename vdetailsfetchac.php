<?php
//fetch.php
$connect = new PDO("mysql:host=localhost;dbname=kresstudentdb", "root", "");
$column = array("SUBJ_ID", "TASK_ID", "CREATED_AT", "COMPLETE_AT", "LAST_MODI", "NAME", "SEC_COL", "ASSIGNEE", "ASSIGNEE_E", "START_DATE", "DUE_DATE", "TAGS", "NOTES", "PROJECTS", "PARENT_TASK", "AUDITED_BY", "ARSR", "CSSR", "PRSR", "ARPC", "CSPC", "PRPC", "ARS", "ARTNA", "ARBNA", "ACA","CSS", "CSTNA","CSBNA","CSACC","PRS","PRTNA","PRBNA","PRACA","COMPLIANT","NON_COMPLIANT","GRADE");

$query = "SELECT * FROM subjectac ";

if(isset($_POST["search"]["value"]))

{
	$query .= '
	WHERE SUBJ_ID LIKE "%'.$_POST["search"]["value"].'%"  
	OR CREATED_AT LIKE "%'.$_POST["search"]["value"].'%" 

	';
}

if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY SUBJ_ID DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
	$query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$result = $connect->query($query . $query1);

$data = array();



$total_order = 0;
$row_count = 0; 
$gwa = 0;
$total_counts = 0;

foreach($result as $row)
{
	$sub_array = array();
	$sub_array[] = $row['SUBJ_ID'];
	$sub_array[] = $row['TASK_ID'];
	$sub_array[] = $row['CREATED_AT'];
	$sub_array[] = $row['COMPLETE_AT'];
	$sub_array[] = $row['LAST_MODI'];
	$sub_array[] = $row['NAME'];
	$sub_array[] = $row['SEC_COL'];
	$sub_array[] = $row['ASSIGNEE'];
	$sub_array[] = $row['ASSIGNEE_E'];
	$sub_array[] = $row['START_DATE'];
	$sub_array[] = $row['DUE_DATE'];
	$sub_array[] = $row['TAGS'];
	$sub_array[] = $row['NOTES'];
	$sub_array[] = $row['PROJECTS'];
	$sub_array[] = $row['PARENT_TASK'];
	$sub_array[] = $row['PAYEES_NAME'];
	$sub_array[] = $row['BED_NUMBER'];
	$sub_array[] = $row['CPS'];
	$sub_array[] = $row['CE'];
	$sub_array[] = $row['MOVEOUT_DATE'];
	$sub_array[] = $row['FRAR'];	
	$sub_array[] = $row['FRAU'];
	$sub_array[] = $row['PVS'];
	$sub_array[] = $row['TPNA'];
	$sub_array[] = $row['BNA'];
	$sub_array[] = $row['CMDA'];
	$sub_array[] = $row['RFA'];
	$sub_array[] = $row['COMPLIANT'];
	$sub_array[] = $row['NON_COMPLIANT'];
	$sub_array[] = $row['GRADE']."%";

	$total_counts ++;
    $total_counts = $total_counts;
    
    $total_order = $total_order + ($row["GRADE"]);

    $row_count ++;
    if ($row_count != count($sub_array)-1){
        $gwa = ($total_order / ($row_count));
    }
 	$data[] = $sub_array;
}

function count_all_data($connect)
{
	$query = "SELECT * FROM subjectac";

	$statement = $connect->prepare($query);

	$statement->execute();

	return $statement->rowCount();
}

$output = array(
	"draw"		=>	intval($_POST["draw"]),
	"recordsTotal"	=>	count_all_data($connect),
	"recordsFiltered"	=>	$number_filter_row,
	"data"	=>	$data,
	"total"    => number_format($total_order, 2),
	"gwa"       => number_format($gwa, 2)."%",
 	"totalcounts" => number_format($total_counts, 0)
);

echo json_encode($output);

?>