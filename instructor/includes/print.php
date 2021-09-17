<?php
require 'fpdf.php';
$db = new PDO('mysql:host=localhost;dbname=u854794003_desproj','root','');

class myPDF extends FPDF {
	function header(){
		$this->Image('../../images/uphsd icon.png',10,6, -300);
		$this->SetFont('Arial','B',12);
		$this->Cell(200,5,'University of Perpetual Help System Dalta',0,0,'C');
		$this->Ln(7);
		$this->SetFont('Arial', 'B', 14);
		$this->Cell(200,8,'Guidance Office',0,0,'C');
		$this->Ln(5);
		$this->SetFont('Arial', 'B', 14);
		$this->Cell(200,13,'Student Records',0,0,'C');
		$this->Ln(14);
	}
	function footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','',8);
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
	function headerTable(){
		$this->SetFont('Times','B',10);
		$this->Cell(45,10,'Lastamee',1,0,'C');
		$this->Cell(45,10,'Firstname',1,0,'C');
		$this->Cell(25,10,'ID Number',1,0,'C');
		$this->Cell(45,10,'Course',1,0,'C');
		$this->Cell(30,10,'Year level',1,0,'C');
		$this->Ln();
	}
	function viewTable($db){
		$this->SetFont('Times','B',10);
		$stmt = $db->query('select * from records');
		while($data = $stmt->fetch(PDO::FETCH_OBJ)){
		$this->Cell(45,10,$data->lastname,1,0,'L');
		$this->Cell(45,10,$data->firstname,1,0,'L');
		$this->Cell(25,10,$data->idnum,1,0,'L');
		$this->Cell(45,10,$data->course,1,0,'L');
		$this->Cell(30,10,$data->yearlevel,1,0,'L');
		$this->Ln();
		}
	}
	
}

$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('P', 'A4', 0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();

?>