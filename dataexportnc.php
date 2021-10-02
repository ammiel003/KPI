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
$spreadsheet->getActiveSheet()->mergeCells("A1:Z1");

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
$spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(12);
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
	->setCellValue('Q2',"Document Count (5)")
	->setCellValue('R2',"Contract Signed - All pages")
	->setCellValue('S2',"House Rules Signed - All Pages")
	->setCellValue('T2',"Authorized (Not on rejected list)")
	->setCellValue('U2',"Tenant Name - Accurate")
	->setCellValue('V2',"Bedspace Number - Accurate")
	->setCellValue('W2',"Guardian's Info")
	->setCellValue('X2',"Compliant")
	->setCellValue('Y2',"Non-Compliant")
	->setCellValue('Z2',"Grade");



//set font style and background color
$spreadsheet->getActiveSheet()->getStyle('A2:Z2')->applyFromArray($tableHead);


//populate the data
$query = mysqli_query($con, "SELECT * from subject");
$row = 3;
while($data = mysqli_fetch_object($query)){
	$spreadsheet->getActiveSheet()
				->setCellValue('A'.$row , $data->SUBJ_ID)
				->setCellValue('B'.$row , $data->TASK_ID)
				->setCellValue('C'.$row , $data->CREATED_AT)
				->setCellValue('D'.$row , $data->COMPLETED_AT)
				->setCellValue('E'.$row , $data->LAST_MODI)
				->setCellValue('F'.$row , $data->NAME)
				->setCellValue('G'.$row , $data->SC)
				->setCellValue('H'.$row , $data->ASSIGNE)
				->setCellValue('I'.$row , $data->AssigneeEmail)
				->setCellValue('J'.$row , $data->START_DATE)
				->setCellValue('K'.$row , $data->DUE_DATE)
				->setCellValue('L'.$row , $data->TAGS)
				->setCellValue('M'.$row , $data->NOTES)
				->setCellValue('N'.$row , $data->PROJECTS)
				->setCellValue('O'.$row , $data->PARENT_TASK)
				->setCellValue('P'.$row , $data->AUDITED_BY)
				->setCellValue('Q'.$row , $data->DOCU_COUNT)
				->setCellValue('R'.$row , $data->CSAP)
				->setCellValue('S'.$row , $data->HRSAP)
				->setCellValue('T'.$row , $data->AUTHORIZED)
				->setCellValue('U'.$row , $data->TNA)
				->setCellValue('V'.$row , $data->BED_NUMBER)
				->setCellValue('W'.$row , $data->GIA)
				->setCellValue('X'.$row , $data->COMPLIANT)
				->setCellValue('Y'.$row , $data->NON_COMPLIANT)
				->setCellValue('Z'.$row , $data->GRADE);


	//set row style
	if( $row % 3 == 0 ){
		//even row
		$spreadsheet->getActiveSheet()->getStyle('A'.$row.':Z'.$row)->applyFromArray($evenRow);
	}else{
		//odd row
		$spreadsheet->getActiveSheet()->getStyle('A'.$row.':Z'.$row)->applyFromArray($oddRow);
	}
	//increment row
	$row++;

}


//autofilter
//define first row and last row
$firstRow=2;
$lastRow=$row-1;
//set the autofilter
$spreadsheet->getActiveSheet()->setAutoFilter("A".$firstRow.":Z".$lastRow);


//set the header first, so the result will be treated as an xlsx file.
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//make it an attachment so we can define filename
header('Content-Disposition: attachment;filename="KRES MOVE IN EXPORT DATA.xlsx"');
//create IOFactory object
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
//save into php output
$writer->save('php://output');
