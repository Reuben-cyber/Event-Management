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
    		$this->Cell(0,6,'List of Events Organised By Year - '.$_SESSION['year'],0,1,'C');
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
$pdf->AddCol('comments',55,'Comments');
$pdf->AddCol('heads',30,'Heads');
$pdf->AddCol('sdate',30,'Sdate');
$pdf->AddCol('edate',30,'Edate');
$prop=array('HeaderColor'=>array(232,232,232),
            'color1'=>array(255,255,255),
            'color2'=>array(255,255,255),
            'padding'=>2);

$query1 = "SELECT name,comments,heads, sdate, edate,imagename,Venue FROM all_events WHERE YEAR(sdate)='$_SESSION[year]'";

$pdf->Table($query1,$prop,$con);
$pdf->Output();
?>