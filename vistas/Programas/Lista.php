<?php
$tituloPagina = "Carreras";
require '../vistas/include/header.php';
?>

<div class="page-header text-center"><h3>Carreras</h3></div>
<table class="table table-responsive table-striped table-hover" >
    <thead>
        <tr>
            <th>
                Código  
            </th>
            <th>
                Nombre
            </th>
            <th>Valor Semestre</th>
            <th>N° semestres</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <?php while ($carrera = mysql_fetch_assoc($datos)) {
            ?>
            <tr>

                <td>
                    <?php
                    echo $carrera['car_codigoP']
                    ?>
                </td>
                <td>
                    <?php
                    echo $carrera['car_nombre']
                    ?>
                </td>
                <td>
                    <?php
                    echo $carrera['car_valor_semestre'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $carrera['car_numero_semestres'];
                    ?>
                </td>
                <td>
                    <a href="programas.php?action=modificar&id=<?php echo $carrera["car_codigoP"] ?>" class="openModal"> <i class="fa fa-edit"></i>Editar </a>                             
                    <a href="programas.php?action=eliminar&id=<?php echo $carrera["car_codigoP"] ?>"><i class="fa fa-times-circle"></i>Eliminar </a>
                    <a href="programas.php?action=crearpensum&id=<?php echo $carrera["car_codigoP"] ?>" class="openModal"> <i class="fa fa-file-text-o"></i>Agregar Materia</a>                             
                    <a href="programas.php?action=pensum&id=<?php echo $carrera["car_codigoP"] ?>" class="openModal"><i class="fa fa-tasks"></i>Pensum </a>
                </td>

            </tr>        
<?php } ?>
    </tbody>
</table>
<div class="text-right">                     
    <a href="programas.php?action=ingresar" class="openModal btn btn-primary"> Crear </a>
</div>

<?php
require '../vistas/include/footer.php';
?>