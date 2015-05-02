<?php
$tituloPagina = "Estudiantes";
require '../vistas/include/header.php';
?>

<div class="page-header text-center"><h3>Estudiantes</h3></div>
<table class="table table-responsive table-striped table-hover" >
    <thead>
        <tr>
            <th>
                Nombre Completo  
            </th>
            <th>
                Fecha Nacimiento
            </th>
            <th>
                Email
            </th>
            <th>
                Apodo
            </th>
            <th>
                Carrera
            </th>
            <th>
                Periodo
            </th>
            <th>
                Fecha de Matrícula
            </th>                                
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php while ($estudiante = mysql_fetch_assoc($datos)) {
            ?>
            <tr>
                <td>
                    <?php echo $estudiante["per_nombre_completo"]; ?>
                </td>
                <td>
                    <?php echo $estudiante["per_fecha_nacimiento"]; ?>
                </td>
                <td>
                    <?php echo $estudiante["per_email"]; ?>
                </td>
                <td>
                    <?php echo $estudiante["est_apodo"]; ?>
                </td>
                <td>
                    <?php echo $estudiante["car_nombre"]; ?>
                </td>
                <td>
                    <?php echo $estudiante["peri_nombre"]; ?>
                </td>
                <td>
                    <?php echo $estudiante["est_fecha_matricula"]; ?>
                </td>
                <td>
                    <a href="estudiantes.php?action=modificar&id=<?php echo $estudiante["per_consecutivoP"]; ?>" class="openModal"> <i class="fa fa-edit"></i> Editar</a>
                    <a href="estudiantes.php?action=matricular&id=<?php echo $estudiante["per_consecutivoP"]; ?>" class="openModal"> <i class="fa fa-file-text-o"></i> Materias</a>
                    <a href="estudiantes.php?action=eliminar&id=<?php echo $estudiante["per_consecutivoP"]; ?>"><i class="fa fa-times-circle"></i> Eliminar</a>
                    <a href="estudiantes.php?action=evaluar&id=<?php echo $estudiante["per_consecutivoP"]; ?>" class="openModal"><i class="fa fa-check"></i> Evaluar</a>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>
<div class="text-right">                     
    <a href="estudiantes.php?action=ingresar" class="openModal btn btn-primary"> Crear </a>
</div>

<?php
require '../vistas/include/footer.php';
?>