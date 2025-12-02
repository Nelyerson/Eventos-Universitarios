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
      
      
      $this->Image('logo.png', 1, 190, 20); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(95); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color

      /* UBICACION */
      $this->Cell(180);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(96, 10,  (" Usuario:  " . $row1['username']), 0, 0, '', 0);
      $this->Ln(5);
      $this->Ln(5);
      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(122,106,216);
      $this->Cell(100); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, ("HISTORAL DE PAGOS "), 0, 1, 'C', 0);
      $this->Ln(7);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(122,106,216); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(80, 10, ('Referencia'), 1, 0, 'C', 1);
      $this->Cell(40, 10, ('Fecha de Pago'), 1, 0, 'C', 1);
      $this->Cell(40, 10, ('Fecha de Revision'), 1, 0, 'C', 1);
      $this->Cell(80, 10, ('Nombre'), 1, 0, 'C', 1);
      $this->Cell(40, 10, ('Status'), 1, 1, 'C', 1);
     
      
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, ('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(540, 10, ($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
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
$username = $_SESSION['usuario'];
$query = "SELECT * FROM usuarios WHERE username= '$username'";
$resultado=$conexion->query($query);
$row1 = $resultado->fetch_assoc();
$ide = $row1['id'];


if ($privilegio == 0) {
   // Si el privilegio es 0, agregar el filtro por ide
   $query = "SELECT * FROM Pagos WHERE ide = $ide ORDER BY id DESC";
} elseif ($privilegio == 1) {
   // Si el privilegio es 1, no filtrar por ide
   $query = "SELECT * FROM pagos WHERE  ORDER BY id DESC";
}
$resultado=$conexion->query($query);

while ($row = $resultado->fetch_assoc()) {
  
    $pdf->Cell(80, 10, ($row['referencia']), 1, 0, 'C', 0);
    $pdf->Cell(40, 10, (date("d-m-Y", strtotime($row['fecha']))), 1, 0, 'C', 0);
    $pdf->Cell(40, 10, (date("d-m-Y", strtotime($row['fechar']))), 1, 0, 'C', 0);
    $pdf->Cell(80, 10, ($row['nombre']), 1, 0, 'C', 0);
    $pdf->Cell(40, 10, ($row['status1']), 1, 1, 'C', 0);
   
}



$pdf->Output('Prueba2.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
