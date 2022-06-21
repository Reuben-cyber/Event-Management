<?php

session_save_path('../tmp');
session_start();

require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
	function Header()
	{
    		//Title
    		$this->SetFont('Arial','',18);
    		$this->Cell(0,6,'Summary Of Events',0,1,'C');
    		$this->Ln(10);
    		//Ensure table header is output
    		parent::Header();
	}
	function Footer()
	{
		//Page Numbers
		$this->SetY(-20);
    		// Arial italic 8
    		$this->SetFont('Arial','I',8);
    		// Page number
    		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

//Connect to database
//mysql_connect("localhost","eduadmin","abc123");
//mysql_select_db("edusponsorship");
include("conn.php");

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L');
$pdf->AddCol('name',22,'Name');
$pdf->AddCol('cnt_name',55,'Count of Events');
$pdf->AddCol('budget_sofar',40,'Budget Used So Far');
$pdf->AddCol('max_footfall',30,'Maximum Turnout');
$prop=array('HeaderColor'=>array(232,232,232),
            'color1'=>array(255,255,255),
            'color2'=>array(255,255,255),
            'padding'=>2);

$query1 = "SELECT name, COUNT(name) AS cnt_name, SUM(budget) AS budget_sofar, MAX(footfall) AS max_footfall FROM all_events GROUP BY name ORDER BY name";

$pdf->Table($query1,$prop,$con);
$pdf->Output();
?>