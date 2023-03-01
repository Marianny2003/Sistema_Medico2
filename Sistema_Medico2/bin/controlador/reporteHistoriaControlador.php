<?php 
use  vendor\reportes\ as historiaReporte;

$pdf = new historiaReporte();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetX(13);
$pdf->SetFont('Times','B',12);
    $pdf->SetFillColor(00,00,95);
    $pdf->SetTextColor(1000);
    $pdf->Cell(18, 10, '', 0,0,'C',1);
    $pdf->Cell(22, 10, '', 0,0,'C',1);
    $pdf->Cell(22, 10, '', 0,0,'C',1);
    $pdf->Cell(30, 10, '', 0,0,'C',1);
    $pdf->Cell(30, 10, '', 0,0,'C',1);
    $pdf->Cell(30, 10, '', 0,0,'C',1);
    $pdf->Cell(30, 10, '', 0,1,'C',1);

    use modelo\historiaMedicaModelo as historiaMedica;
   
        $objModel = new historiaMedica; 
       
   $mostrarPaciente = $objModel->consultaPaciente();
   $mostrarPatologia = $objModel->consultaPatologia();
   $mostrarPatologiaFam = $objModel->consultaPatologiaFam();
   $mostrarPsicobiologico = $objModel->consultaPsicobiologico();
   $mostrarGineco = $objModel->consultaGinecoObstreticos();
   $mostrarConsulta = $objModel->consultaMedica();
   $mostrarFuncional = $objModel->examenFuncional();
   $mostrarFisica = $objModel->examenFisico();
   $mostrarExamen = $objModel->tipoExamen();
   $mostrarExamenesPrevios= $objModel->ExamenesPrevios();
   $mostrarDiagnostico = $objModel->consultaDiagnostico();
   $mostrarTratamiento = $objModel->consultaTratamiento();

       $pdf->SetWidths(array(18,22,22,30,30,30,30));

foreach (  $mostrarPaciente as $reg) {
	$=$->;
  $= $->;
	$= $->;
	$="C".$->."-"."F".$reg-> ;
	$=$->;
  $=$->." $";
  $=$->status;

  $pdf->SetX(13);
	$pdf->SetFont('Times','',10);
	$pdf->Row(array($,utf8_decode($),utf8_decode($),$,$,$,$));
}
    $pdf->Output();


 ?>