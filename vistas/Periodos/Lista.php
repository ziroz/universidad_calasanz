<?php
$tituloPagina = "Periodos";
require '../vistas/include/header.php';
?>

<div class="page-header text-center"><h3>Periodos</h3></div>
<table class="table table-responsive table-striped table-hover" >
    <thead>
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Fecha Inicio
            </th>
            <th>
                Fecha Fin
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <?php while ($periodo = mysql_fetch_assoc($datos)) {
            ?>
            <tr>
 
                <td>
                    <?php
                    echo $periodo['peri_nombre']
                    ?>
                </td>
                <td>
                    <?php
                    echo $periodo['peri_fecha_inicio']
                    ?>
                </td>
                <td>
                    <?php
                    echo $periodo['peri_fecha_fin']
                    ?>
                </td>               
                <td>
                    <a href="periodos.php?action=modificar&id=<?php echo $periodo["peri_consecutivoP"] ?>" class="openModal"> <i class="fa fa-edit"></i>Editar</a>                             
                    <a href="periodos.php?action=eliminar&id=<?php echo $periodo["peri_consecutivoP"] ?>"><i class="fa fa-times-circle"></i>Eliminar </a>
                </td>

            </tr>        
<?php } ?>
    </tbody>
</table>
<div class="text-right">                     
    <a href="periodos.php?action=ingresar" class="openModal btn btn-primary"> Crear </a>
</div>

<?php
require '../vistas/include/footer.php';
?>