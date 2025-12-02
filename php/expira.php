<div class="table-responsive ">
<table class="table table-bordered table_id ">
		<thead>
			<tr>
		
			</tr>
			<tr>
            <th>Foto</th>
                <th>Nombre</th>
                <th>Evento</th>
                <th>Fecha Inicial</th>
				<th>Fecha de culminacion</th>
				<th>lugar</th>
                <th>Cupos Disponibles</th>
                <th>Opciones</th>

                



			</tr>	

</thead>

<tbody>
</div>
<?php
require 'conexion.php';
date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d");



$query = "SELECT * FROM eventos WHERE '$fechaHoraActual' >  fechac ORDER BY id DESC";
$resultado=$conexion->query($query);
while ($row = $resultado->fetch_assoc()) {

?>
<tr>
<td><img height="150px" src="<?php echo $row['foto']; ?>"/></td>

<td><?php echo $row ['nombre'];?></td>
<td><?php echo $row ['tipo'];?></td>
<td><?php echo $row ['fechai'];?></td>
<td><?php echo $row ['fechac'];?></td>
<td><?php echo $row ['espacio'];?></td>
<td><?php echo $row ['Cupos'];?></td>




<th><a href="asistencia.php?id=<?php echo $row['id'];?>" ><i class="fa-solid fa-list"></i></a></th>
<th><a href="SuperEditarevento.php?id=<?php echo $row ['id'];?>" ><i class="fa-solid fa-pen-to-square"></i></th>
<th><a href="EliminaEvento.php?id=<?php echo $row ['id'];?>"><i class="fa-solid fa-trash"></i></th>





</tr>

<?php

   
$query = "UPDATE eventos SET vencido = '1' WHERE fechac > '$fechaHoraActual'";
$resultado2=$conexion->query($query);

}
?>

	</tbody>		
</table>
</div>




