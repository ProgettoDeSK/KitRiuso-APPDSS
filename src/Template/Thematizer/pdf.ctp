<?php
    $fpdf->AddPage();
	$fpdf->SetAutoPageBreak(false);
    $fpdf->SetFont('Arial','B',16);
	$fpdf->SetLeftMargin(4);
	$fpdf->Cell(320,280,'ciao',1,0);
	$fpdf->Image('./resources/images/logo.png',350,15,40,30);
	$fpdf->Cell(80,40,'',1,2);
	$fpdf->Cell(80,50,$legend,1,2);
	$fpdf->Cell(80,130,'Legenda2',1,2);
	$fpdf->Cell(80,60,'Legenda3',1,2);
    $fpdf->Output('ciao.pdf','F');
?>