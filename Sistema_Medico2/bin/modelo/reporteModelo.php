<?php

namespace modelo;

use \FPDF;

class reporteModelo extends FPDF
{
// Cabecera de página
public function Header()
{
    // Logo izquierda
    $this->Image('assets/img/logo.png',10,8,33);

    // Logo derecha
    $this->Image('assets/img/medicina.png',167,8,33);
    // Arial bold 15
    $this->SetFont('Helvetica','B',16);
    // Movernos a la derecha
    $this->Cell(40);
    // Título
    $this->Cell(50,10,'Dra. Maria Betariz Mendoza Rodriguez','C');
    // Salto de línea
    $this->Ln(6);
     // Arial bold 15
    $this->SetFont('Helvetica','B',12);
    // Movernos a la derecha
    $this->Cell(60);
    //Subtitulos
    $this->Cell(5,10,'Especialista en Medicina Interna','C');
    // Salto de línea
    $this->Ln(6);
    // Movernos a la derecha
    $this->Cell(50);
    //Subtitulos
    $this->Cell(5,10,'MPPS 106661 - CML 8080 - RIF V187362136','C');
    // Salto de línea
    $this->Ln(6);
    // Movernos a la derecha
    $this->Cell(35);
    //Subtitulos
    $this->Cell(5,10,'Telefono: 0414-528.16.86 / Correo: mabe18ucla@gmail.com','C');

    $this->SetFont('Helvetica','B', 12);
    $this->SetXY(145,60);
    $this->Cell(15, 8, 'FECHA:', 0, 'L');
    $this->Line(163, 65.5, 185, 65.5);
 
   // Salto de línea
    $this->Ln(8);
}

// Pie de página
public function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/Dr. Maria Beatriz Mendoza Rodriguez',0,0,'C');
}

// Tabla coloreada
function FancyTable($data)
{
    // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(37,150,190);
    $this->SetTextColor(255);
    $this->SetDrawColor(7,109,120);
    $this->SetLineWidth(.2);
    $this->SetFont('','B');
    // Cabecera
    $this->Cell(30,6,'Cedula: ','LR',0,'L',true);
    $this->Cell(40,6, 'Nombre' ,'LR',0,'L',true);
    $this->Cell(40,6,utf8_decode('S° Nombre'),'LR',0,'L',true);
    $this->Cell(40,6, 'Apellido' ,'LR',0,'L',true);
    $this->Cell(40,6,utf8_decode('S° Apellido'),'LR',1,'L',true);

   
    // Restauración de colores y fuentes
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
   $this->Cell(30,6,$data[0]['cedulaPaciente'],'LR',0,'L', );
    $this->Cell(40,6,utf8_decode($data[0]['nombrePaciente']),'LR',0,'L');
    $this->Cell(40,6,utf8_decode($data[0]['segundoNombre']),'LR',0,'L');
    $this->Cell(40,6,utf8_decode($data[0]['apellidoPaciente']),'LR',0,'L');
    $this->Cell(40,6,utf8_decode($data[0]['segundoApellido']),'LR',1,'L');
 // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(37,150,190);
    $this->SetTextColor(255);
    $this->SetDrawColor(7,109,120);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    $this->Cell(30,6,'Edad: ','LR',0,'L',true);
    $this->Cell(40,6, 'sexo:' ,'LR',0,'L',true);
    $this->Cell(40,6,'Fecha N:.','LR',0,'L',true);
    $this->Cell(40,6, 'Lugar:' ,'LR',0,'L',true);
    $this->Cell(40,6, utf8_decode('Dirección:') ,'LR',1,'L',true);
 // Datos
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    $this->Cell(30,6,$data[0]['edadPaciente'],'LR',0,'L', );
    $this->Cell(40,6,utf8_decode($data[0]['sexoPaciente']),'LR',0,'L');
    $this->Cell(40,6,$data[0]['fechaNacimientoPaciente'],'LR',0,'L');
    $this->Cell(40,6,$data[0]['lugarNacimientoPaciente'],'LR',0,'L');
    $this->Cell(40,6,utf8_decode($data[0]['direccionPaciente']),'LR',1,'L');  

   // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(37,150,190);
    $this->SetTextColor(255);
    $this->SetDrawColor(7,109,120);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    $this->Cell(30,6,'Estado: ','LR',0,'L',true);
    $this->Cell(70,6, 'Correo' ,'LR',0,'L',true);
    $this->Cell(40,6,utf8_decode('Teléfono'),'LR',0,'L',true);
    $this->Cell(50,6, 'Emergencia' ,'LR',1,'L',true);
    
 // Datos
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    $this->Cell(30,6,$data[0]['estado'],'LRB',0,'L', );
    $this->Cell(70,6,$data[0]['correoPaciente'],'LRB',0,'L');
    $this->Cell(40,6,$data[0]['telefonoPaciente'],'LRB',0,'L');
    $this->Cell(50,6,$data[0]['contactoEmergencia'],'LRB',0,'L');
            
        
        
}

// Tabla coloreada
function FancyTable1(  $data)
{
    // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(37,150,190);
    $this->SetTextColor(255);
    $this->SetDrawColor(7,109,120);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Cabecera
    $this->Cell(30,6,'Cedula: ','LR',0,'L',true);
    $this->Cell(40,6, 'Nombre' ,'LR',0,'L',true);
    $this->Cell(40,6, 'Apellido' ,'LR',0,'L',true);
    $this->Cell(40,6,'Correo','LR',1,'L',true);

   
    // Restauración de colores y fuentes
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
   $this->Cell(30,6,$data[0]['cedulaPaciente'],'LR',0,'L', );
    $this->Cell(40,6,utf8_decode($data[0]['nombrePaciente']),'LR',0,'L');
    $this->Cell(40,6,utf8_decode($data[0]['apellidoPaciente']),'LR',0,'L');
    $this->Cell(40,6,utf8_decode($data[0]['correoPaciente']),'LR',1,'L');

 // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(37,150,190);
    $this->SetTextColor(255);
    $this->SetDrawColor(7,109,120);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
     $this->Cell(40,6, 'Telefono:' ,'LR',0,'L',true);
    $this->Cell(30,6,'Fecha de la Cita: ','LR',0,'L',true);
    $this->Cell(40,6, 'Hora de la Cita:' ,'LR',0,'L',true);
    $this->Cell(40,6,'Motivo de la Cita:.','LR',0,'L',true);

 // Datos
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    $this->Cell(30,6,$data[0]['telefonoPaciente'],'LR',0,'L', );
    $this->Cell(40,6,utf8_decode($data[0]['fechaCita']),'LR',0,'L');
    $this->Cell(40,6,$data[0]['horaCita'],'LR',0,'L');
    $this->Cell(40,6,$data[0]['motivoCita'],'LR',0,'L');

        
}

} 


?>