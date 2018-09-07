<?php 

if(!empty($_POST['submit'])){
	$dat = $_POST['dat'];
	$name = $_POST['name'];
	$toname = $_POST['toname'];
	$dept = $_POST['dept'];
	$datefrom = $_POST['datefrom'];
	$dateto = $_POST['dateto'];
	$reason1 = $_POST['reason1'];
	$reason2 = $_POST['reason2'];

	require("fpdf/fpdf.php");
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont("Arial","I",12);
	$pdf->cell(0,10,"Leave of Absence Request Letter",0,1,'C');
	$pdf->cell(0,10,"",0,1);
	$pdf->SetFont("Arial","",12);
	$pdf->cell(0,10,"Date : {$dat}",0,1);
	$pdf->cell(0,10,"To : {$toname}",0,1);
	$pdf->cell(0,10,"Sub : pray for leave of absence",0,1);
	$pdf->cell(0,10,"{$dept}",0,1);
	$pdf->cell(0,10,"Jessore University of Science & Technology.",0,4);
	$pdf->cell(0,7,"",0,1);
	$pdf->cell(0,10,"Dear member of the board:",0,1);
	$pdf->cell(0,10,"Sir, i beg most respectfully and humbly to law before you the following fact for your favourite of your kind",0,1);
	$pdf->cell(0,10,"sympathetic consideration and take necessary action that i am {$name}, request a leave of",0,1);
	$pdf->cell(0,10,"absence from my position at beginning {$datefrom} through {$dateto}.",0,1);
	$pdf->cell(0,10,"",0,1);
	$pdf->cell(0,10,"So, i therefor pray and hope that you enough to grand me leave of absence.",0,1);
	$pdf->cell(0,10,"Your most obedient pupil",0,1);
	$pdf->cell(0,10,"{$name}",0,1);
	$pdf->cell(0,10,"{$dept}",0,1);
	$pdf->Image('logo.gif',20,180,0,0,'gif');
	$pdf->cell(0,20,"",0,1);
	$pdf->cell(0,10,"The reason i am requesting a leave of absence is:",0,1);
	$pdf->cell(0,10,"	{$reason1}",0,1);
	$pdf->cell(0,10,"	{$reason2}",0,1);
	$pdf->output();

}
?>