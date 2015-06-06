<?php
$data['tituloPagina'] = "Estudiantes";
View::load("include/header",$data);
?>

<div class="page-header text-center"><h3>Estudiantes</h3></div>
<table class="table table-responsive table-striped table-hover" >
    <thead>
        <tr>
            <th>
                Nombre Completo  
            </th>
            <th>
                F. Nacimiento
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
                F. Matrícula
            </th>                                
            <th></th>
        </tr>
    </thead>
    <tbody>
         <?php foreach ($datos as $estudiante) {
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
                    <a href="<?php echo Url::getUrl("estudiantes", "modificar", ['id'=>$estudiante["est_per_consecutivoP"]]); ?>" class="openModal"> <i class="fa fa-edit"></i>Editar </a>                             
                    <a href="<?php echo Url::getUrl("estudiantes", "eliminar", ['id'=>$estudiante["est_per_consecutivoP"]]); ?>"><i class="fa fa-times-circle"></i>Eliminar </a>
                    <a href="<?php echo Url::getUrl("estudiantes", "matricular", ['id'=>$estudiante["est_per_consecutivoP"]]); ?>" class="openModal"> <i class="fa fa-edit"></i>Materias </a>                             
                    <a href="<?php echo Url::getUrl("estudiantes", "evaluar", ['id'=>$estudiante["est_per_consecutivoP"]]); ?>" class="openModal"><i class="fa fa-check"></i>Evaluar </a>  
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>
<div class="text-right">                     
    <a href="<?php echo Url::getUrl("estudiantes", "ingresar"); ?>" class="openModal btn btn-primary"> Crear </a>
</div>

<?php
View::load("include/footer")
?>