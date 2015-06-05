
<table class="table table-responsive table-striped table-hover" >
    <thead>
        <tr>
            <th>
                Código  
            </th>
            <th>
                Materia
            </th>
            <th>Carrera</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datos as $materia) { ?>
            <tr>

                <td>
                    <?php
                    echo $materia['carmat_mat_codigo']
                    ?>
                </td>
                <td>
                    <?php
                    echo $materia['carmat_car_codigo']
                    ?>
                </td>
                <td>
                    <?php
                    echo $materia['carmat_ciclo'];
                    ?>
                </td>
                <td>
                    <a href="<?php echo Url::getUrl("programasMaterias", "eliminar", ['id' => $materia["carmat_consecutivoP"]]); ?>" class="deleteMateria"><i class="fa fa-times-circle"></i>Eliminar </a>
                </td>

            </tr>        
        <?php } ?>
    </tbody>
</table>