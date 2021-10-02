<?php
include 'db/db_ac.php';
if(isset($_POST["Importac"])){
$filename=$_FILES["file"]["tmp_name"];
 

$row_counter = 0; 
if($_FILES["file"]["size"] > 0)
{
 
$file = fopen($filename, "r");
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
{
 

	$row_counter++;
	if ($row_counter == 1) {
		continue;
	}
	if  ($emapData[0] != null) {
	$check = check_exist($emapData[1]);
	if ($check == true){
		continue;

		}
	}	
 	

	        $compliant_count = 0;
	        $Noncompliant_count = 0;
	        $average = 0;

	    if ($emapData[19] == "Compliant"){
	    	$compliant_count ++;
	    }else{
	    	$Noncompliant_count ++;
	    }
	    if ($emapData[20] == "Compliant"){
	    	$compliant_count ++;
	    }else{
	    	$Noncompliant_count ++;
	    }
	    if ($emapData[21] == "Compliant"){
	    	$compliant_count ++;
	    }else{
	    	$Noncompliant_count ++;
	    }
	    if($emapData[22] == "Compliant"){
	    	$compliant_count ++;
	    }else{
	    	$Noncompliant_count ++;
	    }
	    if($emapData[23] == "Compliant"){
	    	$compliant_count ++;
	    }else{
	    	$Noncompliant_count ++;
	    }
	    if($emapData[24] == "Compliant"){
	    	$compliant_count ++;
	    }else{
	    	$Noncompliant_count ++;
	    }
	    if($emapData[25] == "Compliant"){
	    	$compliant_count ++;
	    }else{
	    	$Noncompliant_count ++;
	    }

	    $average = number_format((float)$compliant_count / 7 * 100, 2);

	          //It wiil insert a row to our subject table from our csv file`
	    $sql = "INSERT into subjectac (`TASK_ID`,`CREATED_AT`,`COMPLETE_AT`,`LAST_MODI`,`NAME`,`SEC_COL`,`ASSIGNEE`,`ASSIGNEE_E`,`START_DATE`,`DUE_DATE`,`TAGS`,`NOTES`,`PROJECTS`,`PARENT_TASK`,`PAYEES_NAME`,`BED_NUMBER`,`CPS`,`CE`,`MOVEOUT_DATE`,`FRAR`,`FRAU`,`PVS`,`TPNA`,`BNA`,`CMDA`,`RFA`,`COMPLIANT`,`NON_COMPLIANT`,`GRADE`)

	    values ('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','$emapData[19]','$emapData[20]','$emapData[21]','$emapData[22]','$emapData[23]','$emapData[24]','$emapData[25]','$compliant_count','$Noncompliant_count','$average')";


	         //we are using mysql_query function. it returns a resource on true else False on error
	    $result = mysqli_query( $conn, $sql );
		if(! $result )
		{
		echo 
		"<script type=\"text/javascript\">
		alert(\"Invalid File:Please Upload CSV File.\");
		window.location = \"Importdetailsac.php\"
		</script>";
 
		}
 
	    }
	    fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	    echo "<script type=\"text/javascript\">
		alert(\"CSV File has been successfully Imported.\");
		window.location = \"Importdetailsac.php\"
		</script>";
 
 
 
			 //close of connection
		mysqli_close($conn); 
 
 
 
		 }
	}	 

	function check_exist($value){
		include 'db/db_ac.php';
	$sql = "SELECT * FROM subjectac WHERE TASK_ID = $value"; 

		 $result = mysqli_query( $conn, $sql );
		if($result->num_rows > 0) {
			return true;
		}

	}
?>		 		