<?php
$tituloPagina = "Docentes";
require '../vistas/include/header.php';
?>

<div class="page-header text-center"><h3>Docentes</h3></div>
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
                Oficina
            </th>
            <th>
                Teléfono Oficina
            </th>
            <th>
                Categoria
            </th>
            <th>
                Valor Hora
            </th>                                
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php while ($docente = mysql_fetch_assoc($datos)) {
            ?>
            <tr>
                <td>
                    <?php echo $docente["per_nombre_completo"]; ?>
                </td>
                <td>
                    <?php echo $docente["per_fecha_nacimiento"]; ?>
                </td>
                <td>
                    <?php echo $docente["per_email"]; ?>
                </td>
                <td>
                    <?php echo $docente["doc_oficina"]; ?>
                </td>
                <td>
                    <?php echo $docente["doc_telefono_oficina"]; ?>
                </td>
                <td>
                    <?php echo $docente["doc_categoria"]; ?>
                </td>
                <td>
                    <?php echo $docente["doc_valor_hora"]; ?>
                </td>
                <td>
                    <a href="docentes.php?action=modificar&id=<?php echo $docente["per_consecutivoP"]; ?>" class="openModal"> <i class="fa fa-edit"></i> Editar</a>
                    <a href="docentes.php?action=eliminar&id=<?php echo $docente["per_consecutivoP"]; ?>"><i class="fa fa-times-circle"></i> Eliminar</a>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>
<div class="text-right">                     
    <a href="docentes.php?action=ingresar" class="openModal btn btn-primary"> Crear </a>
</div>

<?php
require '../vistas/include/footer.php';
?>