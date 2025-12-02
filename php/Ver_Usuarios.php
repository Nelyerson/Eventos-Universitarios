<?php

require('./fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      //include '../../recursos/Recurso_conexion_bd.php';//llamamos a la conexion BD
      
      require 'conexion.php';
      session_start();
      
      $username = $_SESSION['usuario'];
      $privilegio = $_SESSION['privilegio'];
      $query = "SELECT * FROM usuarios WHERE username= '$username'";
      $resultado=$conexion->query($query);
      $row1 = $resultado->fetch_assoc();
      $ide = $row1['id'];

      
      $this->Image('logo.png', 270, 5, 20); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(95); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode('EVENTOS'), 1, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color

      /* UBICACION */
      $this->Cell(180);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10, utf8_decode (" Usuario:  " . $row1['username']), 0, 0, '', 0);
      $this->Ln(5);
      $this->Ln(5);
      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(122,106,216);
      $this->Cell(100); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("LISTA DE USUARIOS"), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(122,106,216); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(95, 10, utf8_decode('Usuario'), 1, 0, 'C', 1);
      $this->Cell(95, 10, utf8_decode('Email'), 1, 0, 'C', 1);
      $this->Cell(85, 10, utf8_decode('Privilegio'), 1, 1, 'C', 1);
     
      
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(540, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

//include '../../recursos/Recurso_conexion_bd.php';
//require '../../funciones/CortarCadena.php';
/* CONSULTA INFORMACION DEL HOSPEDAJE */
//$consulta_info = $conexion->query(" select *from hotel ");
//$dato_info = $consulta_info->fetch_object();

$pdf = new PDF();
$pdf->AddPage("landscape"); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

/*$consulta_reporte_alquiler = $conexion->query("  ");*/

/*while ($datos_reporte = $consulta_reporte_alquiler->fetch_object()) {      
   }*/
$i = $i + 1;
/* TABLA */

require 'conexion.php';
$privilegio = $_SESSION['privilegio'];
    


$query = "SELECT * FROM usuarios WHERE disp = 0 ";
$resultado=$conexion->query($query);
while ($row = $resultado->fetch_assoc()) {
  
    $pdf->Cell(95, 10, utf8_decode($row['username']), 1, 0, 'C', 0);
    $pdf->Cell(95, 10, utf8_decode($row['email']), 1, 0, 'C', 0);
    // ... código anterior ...
    
    // Dentro del bucle donde se genera el PDF
    if ($row['privilegio'] == 0) {
        $pdf->Cell(85, 10, utf8_decode('Usuario'), 1, 1, 'C', 0);
    } else if ($row['privilegio'] == 1) {
        $pdf->Cell(85, 10, utf8_decode('Super Usuario') , 1, 1, 'C', 0);
    } else {
        $pdf->Cell(85, 10, utf8_decode('Privilegio no válido') , 1, 1, 'C', 0);
    }
    
    // ... resto del código ...
    
}



$pdf->Output('Prueba2.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
