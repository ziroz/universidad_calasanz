<?php
$data['tituloPagina'] = "Materias";
View::load("include/header");
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
        <?php foreach ($datos as $materia) {
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
                    <a href="<?php echo Url::getUrl("materias", "modificar",["id"=>$materia["mat_codigoP"]]); ?>" class="openModal"> <i class="fa fa-edit"></i>Editar </a>                             
                    <a href="<?php echo Url::getUrl("materias", "eliminar",["id"=>$materia["mat_codigoP"]]); ?>"><i class="fa fa-times-circle"></i>Eliminar </a>
                </td>

            </tr>        
        <?php } ?>
    </tbody>
</table>
<div class="text-right">                     
    <a href="<?php echo Url::getUrl("materias", "ingresar"); ?>" class="openModal btn btn-primary"> Crear </a>
</div>

<?php
View::load("include/footer")
?>