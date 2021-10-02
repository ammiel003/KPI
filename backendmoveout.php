<?php
include 'db/db_mo.php';
if(isset($_POST["Importmo"])){
	
$filename=$_FILES["file"]["tmp_name"];
 
 
if($_FILES["file"]["size"] > 0){
 
$row_counter = 0;

$file = fopen($filename, "r");
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
{
	$row_counter ++;
	if ($row_counter == 1) {
		continue;
	}

	//If there is empty in excel it will skip the row
	if ($emapData[0] != null) {
		$check = check_exist($emapData[0]);
		if ($check == true){
		continue;

		}
	}

		else {
		continue;
		}


	         	$compliant_count = 0;
	         	$Noncompliant_count = 0;
	         	$average = 0;

	     if($emapData[18] == "Compliant"){
	     	$compliant_count ++;
	     }else{
	     	$Noncompliant_count ++;
	     }
	     if($emapData[19] == "Compliant"){
	     	$compliant_count ++;
	     }else{
	     	$Noncompliant_count ++;
	     }
	     if($emapData[20] == "Compliant"){
	     	$compliant_count ++;
	     }else{
	     	$Noncompliant_count ++;
	     }
	     if($emapData[21] == "Compliant"){
	     	$compliant_count ++;
	     }else{
	     	$Noncompliant_count ++;
	     }
	     if($emapData[22] == "Compliant"){
	     	$compliant_count ++;
	     }else{
	     	$Noncompliant_count ++;
	     }

	     $average = number_format((float)$compliant_count / 5 * 100, 2);
 
	          //It will insert a row to our subject table from our csv file`
	    $sql = "INSERT into subjectmoveout (`TASK_ID`,`CREATED_AT`,`COMPLETE_AT`,`LAST_MODI`,`NAME`,`SECTION_COL`,`ASSIGNEE`,`ASSIGNEE_E`,`START_DATE`,`DUE_DATE`,`TAGS`,`NOTE`,`PROJECTS`,`PARENT_TASK`,`AUDITED_BY`,`BED_NUMBER`,`CT_END`,`MO_END`,`DOC_COUNT`,`GATEPASS`,`RC_MO`,`SOA_SIGN`,`REN_NOTI`,`COMPLIANT`,`NON_COMPLIANT`,`GRADE`)

	    values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','$emapData[19]','$emapData[20]','$emapData[21]','$emapData[22]','$compliant_count','$Noncompliant_count','$average')";

	         //we are using mysql_query function. it returns a resource on true else False on error
	    $result = mysqli_query( $conn, $sql );
		if(! $result )
		{
		echo "<script type=\"text/javascript\">
		alert(\"Invalid File:Please Upload CSV File.\");
		window.location = \"\"
		</script>";
 
			}
	    }
	    fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	    echo "<script type=\"text/javascript\">
		alert(\"CSV File has been successfully Imported.\");
		window.location = \"Importdetailsmoveout.php\"
		</script>";
 
 
 
		//close of connection
		mysqli_close($conn); 
 
 
 
		}
	}

	function check_exist($value){
		include 'db/db_mo.php';
	$sql = "SELECT * FROM subjectmoveout WHERE TASK_ID = $value"; 

		 $result = mysqli_query( $conn, $sql );
		if($result->num_rows > 0) {
			return true;
		}
	} 
	 			 
?>		 		