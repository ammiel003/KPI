<?php
//call the autoload
require 'vendor/autoload.php';
//load phpspreadsheet class using namespaces
use PhpOffice\PhpSpreadsheet\Spreadsheet;
//call iofactory instead of xlsx writer
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;

//database connection
$con = mysqli_connect("localhost", "root","","kresstudentdb");
if (!$con){

	echo mysqli_error($con);
	exit;
}


//styling arrays
//table head style
$tableHead = [
	'font'=>[
		'color'=>[
			'rgb'=>'FFFFFF'
		],
		'bold'=>true,
		'size'=>11
	],
	'fill'=>[
		'fillType' => Fill::FILL_SOLID,
		'startColor' => [
			'rgb' => '538ED5'
		]
	],
];
//even row
$evenRow = [
	'fill'=>[
		'fillType' => Fill::FILL_SOLID,
		'startColor' => [

		]
	]
];
//odd row
$oddRow = [
	'fill'=>[
		'fillType' => Fill::FILL_SOLID,
		'startColor' => [
		
		]
	]
];

//styling arrays end

//make a new spreadsheet object
$spreadsheet = new Spreadsheet();
//get current active sheet (first sheet)
$sheet = $spreadsheet->getActiveSheet();

//set default font
$spreadsheet->getDefaultStyle()
	->getFont()
	->setName('Arial')
	->setSize(10);

//heading
$spreadsheet->getActiveSheet()
	->setCellValue('A1',"K RESIDENCES");

//merge heading
$spreadsheet->getActiveSheet()->mergeCells("A1:AD1");

// set font style
$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);

// set cell alignment
$spreadsheet->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

//setting column width
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(12);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(11);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(19);
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(23.14);
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(15.86);
$spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(14.57);
$spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension('N')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('O')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('P')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('R')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('S')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('T')->setWidth(21);
$spreadsheet->getActiveSheet()->getColumnDimension('U')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('V')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('W')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('X')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('Y')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('Z')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('AA')->setWidth(13);
$spreadsheet->getActiveSheet()->getColumnDimension('AB')->setWidth(16);
$spreadsheet->getActiveSheet()->getColumnDimension('AC')->setWidth(22);
$spreadsheet->getActiveSheet()->getColumnDimension('AD')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('AE')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('AF')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('AG')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('AH')->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension('AI')->setWidth(11);
$spreadsheet->getActiveSheet()->getColumnDimension('AJ')->setWidth(11);
$spreadsheet->getActiveSheet()->getColumnDimension('AK')->setWidth(11);


//header text
$spreadsheet->getActiveSheet()
	->setCellValue('A2',"ID")
	->setCellValue('B2',"TASK ID")
	->setCellValue('C2',"CREATED AT")
	->setCellValue('D2',"COMPLETED AT")
	->setCellValue('E2',"LAST MODIFIED")
	->setCellValue('F2',"NAME")
	->setCellValue('G2',"SECTION/COLUMN")
	->setCellValue('H2',"ASSIGNEE")
	->setCellValue('I2',"ASSIGNEE EMAIL")
	->setCellValue('J2',"START DATE")
	->setCellValue('K2',"DUE DATE")
	->setCellValue('L2',"TAGS")
	->setCellValue('M2',"NOTES")
	->setCellValue('N2',"PROJECTS")
	->setCellValue('O2',"PARENT TASK")
	->setCellValue('P2',"AUDITED BY")
	->setCellValue('Q2',"AR Reference No. Series Range")
	->setCellValue('R2',"CS Reference No. Series Range")
	->setCellValue('S2',"PR Reference No. Series Range")
	->setCellValue('T2',"Complete: AR Physical Count")
	->setCellValue('U2',"Complete: CS Physical Count")
	->setCellValue('V2',"Complete: PR Physical Count")
	->setCellValue('W2',"AR - Signed")
	->setCellValue('X2',"AR - Tenant Accurate")
	->setCellValue('Y2',"AR - Bedspace Number Accurate")
	->setCellValue('Z2',"AR - Amount Collected Accurate")
	->setCellValue('AA2',"CS - Sgined")
	->setCellValue('AB2',"CS - Tenant Name Accurate")
	->setCellValue('AC2',"CS - Bedspace No. Accurate")
	->setCellValue('AD2',"CS - Amount Collected Accurate")
	->setCellValue('AE2',"PR - Signed")
	->setCellValue('AF2',"PR - Tenant Name Accurate")
	->setCellValue('AG2',"PR - Bedspace No. Accurate")
	->setCellValue('AH2',"PR - Amount Collected Accurate")
	->setCellValue('AI2',"Compliant")
	->setCellValue('AJ2',"Non-Compliant")
	->setCellValue('AK2',"Grade");



//set font style and background color
$spreadsheet->getActiveSheet()->getStyle('A2:AK2')->applyFromArray($tableHead);


//populate the data
$query = mysqli_query($con, "SELECT * from subjectdcr");
$row = 3;
while($data = mysqli_fetch_object($query)){
	$spreadsheet->getActiveSheet()
				->setCellValue('A'.$row , $data->SUBJ_ID)
				->setCellValue('B'.$row , $data->TASK_ID)
				->setCellValue('C'.$row , $data->CREATED_AT)
				->setCellValue('D'.$row , $data->COMPLETE_AT)
				->setCellValue('E'.$row , $data->LAST_MODI)
				->setCellValue('F'.$row , $data->NAME)
				->setCellValue('G'.$row , $data->SEC_COL)
				->setCellValue('H'.$row , $data->ASSIGNEE)
				->setCellValue('I'.$row , $data->ASSIGNEE_E)
				->setCellValue('J'.$row , $data->START_DATE)
				->setCellValue('K'.$row , $data->DUE_DATE)
				->setCellValue('L'.$row , $data->TAGS)
				->setCellValue('M'.$row , $data->NOTES)
				->setCellValue('N'.$row , $data->PROJECTS)
				->setCellValue('O'.$row , $data->PARENT_TASK)
				->setCellValue('P'.$row , $data->AUDITED_BY)
				->setCellValue('Q'.$row , $data->ARSR)
				->setCellValue('R'.$row , $data->CSSR)
				->setCellValue('S'.$row , $data->PRSR)
				->setCellValue('T'.$row , $data->ARPC)
				->setCellValue('U'.$row , $data->CSPC)
				->setCellValue('V'.$row , $data->PRPC)
				->setCellValue('W'.$row , $data->ARS)
				->setCellValue('X'.$row , $data->ARTNA)
				->setCellValue('Y'.$row , $data->ARBNA)
				->setCellValue('Z'.$row , $data->ACA)
				->setCellValue('AA'.$row , $data->CSS)
				->setCellValue('AB'.$row , $data->CSTNA)
				->setCellValue('AC'.$row , $data->CSBNA)
				->setCellValue('AD'.$row , $data->CSACC)
				->setCellValue('AE'.$row , $data->PRS)
				->setCellValue('AF'.$row , $data->PRTNA)
				->setCellValue('AG'.$row , $data->PRBNA)
				->setCellValue('AH'.$row , $data->PRACA)
				->setCellValue('AI'.$row , $data->COMPLIANT)
				->setCellValue('AJ'.$row , $data->NON_COMPLIANT)
				->setCellValue('AK'.$row , $data->GRADE);


	//set row style
	if( $row % 3 == 0 ){
		//even row
		$spreadsheet->getActiveSheet()->getStyle('A'.$row.':AK'.$row)->applyFromArray($evenRow);
	}else{
		//odd row
		$spreadsheet->getActiveSheet()->getStyle('A'.$row.':AK'.$row)->applyFromArray($oddRow);
	}
	//increment row
	$row++;

}


//autofilter
//define first row and last row
$firstRow=2;
$lastRow=$row-1;
//set the autofilter
$spreadsheet->getActiveSheet()->setAutoFilter("A".$firstRow.":AK".$lastRow);


//set the header first, so the result will be treated as an xlsx file.
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//make it an attachment so we can define filename
header('Content-Disposition: attachment;filename="KRES DCR EXPORT DATA.xlsx"');
//create IOFactory object
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
//save into php output
$writer->save('php://output');
