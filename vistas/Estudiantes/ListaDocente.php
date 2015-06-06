
<table class="table table-responsive table-striped table-hover" >
    <thead>
        <tr>
            <th>
                Nombre Completo  
            </th>
            <th>
                Identificación
            </th>
            <th>
                Carrera
            </th>
            <th>
                Nota Final
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody>
         <?php foreach ($datos as $key => $estudiante) {
            ?>
            <tr>
                <td>
                    <?php echo $estudiante["per_nombre_completo"]; ?>
                </td>
                <td>
                    <?php echo $estudiante["per_identificacion"]; ?>
                </td>
                <td>
                    <?php echo $estudiante["car_nombre"]; ?>
                </td>
                <td id="final_<?php echo $estudiante["matmat_consecutivoP"]; ?>">
                    <?php echo $estudiante["nota_final"]; ?>
                </td>
                <td>
                    <a href="<?php echo Url::getUrl("estudiantes", "evaluar", ['id'=>$estudiante["matmat_per_consecutivo"], 'materia'=>$estudiante['matmat_mat_codigo']]); ?>" class="openModal"><i class="fa fa-check"></i>Evaluar </a>  
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>