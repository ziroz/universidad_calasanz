<?php
$tituloPagina = "Materias";
require '../vistas/include/header.php';
?>

<div class="page-header text-center"><h3>Materias</h3></div>
<table class="table table-responsive table-striped table-hover" >
    <thead>
        <tr>
            <th>
                Codigo  
            </th>
            <th>
                Nombre
            </th>
            <th>
                Descripcion
            </th>
            <th>
                Cupo Maximo
            </th>
            <th>
                N° Horas Semanales
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <?php while ($materia = mysql_fetch_assoc($datos)) {
            ?>
            <tr>
 
                <td>
                    <?php
                    echo $materia['mat_codigoP']
                    ?>
                </td>
                <td>
                    <?php
                    echo $materia['mat_nombre']
                    ?>
                </td>
                <td>
                    <?php
                    echo $materia['mat_descripcion']
                    ?>
                </td>
                <td>
                    <?php
                    echo $materia['mat_cupos_maximo'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $materia['mat_horas_semanales'];
                    ?>
                </td>
                <td>
                    <a href="materias.php?action=modificar&id=<?php echo $materia["mat_codigoP"] ?>" class="openModal"> <i class="fa fa-edit"></i>Editar</a>                             
                    <a href="materias.php?action=eliminar&id=<?php echo $materia["mat_codigoP"] ?>"><i class="fa fa-times-circle"></i>Eliminar </a>
                </td>

            </tr>        
<?php } ?>
    </tbody>
</table>
<div class="text-right">                     
    <a href="materias.php?action=ingresar" class="openModal btn btn-primary"> Crear </a>
</div>

<?php
require '../vistas/include/footer.php';
?>